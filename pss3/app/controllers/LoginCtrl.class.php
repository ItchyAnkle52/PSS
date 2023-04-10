<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\LoginForm;


class LoginCtrl
{

    private $form;
    private $user_id;
    private $user_role;
    private $products;
    private $sum;
    private $total_price;

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new LoginForm();
    }
   
    public function validate() {
        $this->form->email = ParamUtils::getFromRequest('email');
        $this->form->password = ParamUtils::getFromRequest('password');

        // sprawdzenie, czy potrzebne wartości zostały przekazane
        if (empty($this->form->email)) {
            Utils::addErrorMessage('provide e-mail addrress');
        }
        if (empty($this->form->password)) {
            Utils::addErrorMessage('provide password');
        }

        //nie ma sensu walidować dalej, gdy brak wartości
        if (App::getMessages()->isError())
            return false;

        return !App::getMessages()->isError();
    }
    
    public function action_login() {
		        
        if ($this->validate()) {

            $this->form->password =  md5($this->form->password);

            $exists = App::getDB()->has("user", [
                "AND" => [
                    "email" => $this->form->email,
                    "password" => $this->form->password
                ]
            ]);
            
            if ($exists) {
                $user = App::getDB()->get("user",[
                    "id_user",
                    "first_name",
                    "last_name"
                ],[
                    "email" => $this->form->email
                ]);
                
                $roles = App::getDB()->select("user_has_role", [
                    "[>]role" => ["Role_id_role" => "id_role"]
                ], [
                    "user_has_role.Role_id_role",
                    "role.role_name"
                ],[
                    "user_has_role.User_id_user" => $user['id_user']
                ]);

                foreach ($roles as $r) {
                    if($r['role_name'] == "user"){ 
                        $_SESSION['role'] = "user";
                        RoleUtils::addRole("user");
                    }
                    if($r['role_name'] == "worker"){ 
                        $_SESSION['role'] = "worker";
                        RoleUtils::addRole("worker");
                    }
                    if($r['role_name'] == "admin"){ 
                        $_SESSION['role'] = "admin";
                        RoleUtils::addRole("admin");
                    }
                }

                $_SESSION['f_name'] = $user['first_name'];
                $_SESSION['l_name'] = $user ['last_name'];
                $_SESSION['id'] = $user['id_user'];
                $this->cart_total();

                Utils::addErrorMessage('Poprawnie zalogowano do systemu');
                App::getRouter()->redirectTo("home");
            } else {
                Utils::addErrorMessage('Incorrect password');
                $this->generateView();
            }
          

        } else {
            Utils::addErrorMessage('An error occured');
            //niezalogowany => pozostań na stronie logowania
            $this->generateView();
        }
       
    }

    public function cart_total(){
        $this->products = App::getDB()->select("user_has_product_in_cart", [
            "[>]product" => ["product_id_product" => "id_product"]
        ], [
            "product.product_price",
            "user_has_product_in_cart.quantity"
        ], [
            "user_has_product_in_cart.user_id_user" => $_SESSION["id"]
            ]
        );
        foreach ($this->products as $p) {
            $this->total_price = $p["quantity"]*$p["product_price"];
            $this->sum += $this->total_price;
        }    
        $_SESSION["sum"] = $this->sum;
        if($_SESSION["sum"] == NULL)
            $_SESSION["sum"] = 0;
    }


    public function action_loginShow() {
        $this->generateView();
    }

    public function action_logout() {
	    session_destroy();
        App::getRouter()->redirectTo('home');
        
    }
    
    public function generateView() {
        App::getSmarty()->assign('form', $this->form);  // dane formularza do widoku  
        App::getSmarty()->display('Login.tpl');
    }
    
}
