<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\LoginForm;


class LoginCtrl {

    private $form;

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new LoginForm();
       
    }
   
    public function validate() {
        $this->form->email = ParamUtils::getFromRequest('email');
        $this->form->password = ParamUtils::getFromRequest('password');

        // sprawdzenie, czy potrzebne wartości zostały przekazane
        if (empty($this->form->email)) {
            Utils::addErrorMessage('Nie podano loginu');
        }
        if (empty($this->form->password)) {
            Utils::addErrorMessage('Nie podano hasła');
        }

        //nie ma sensu walidować dalej, gdy brak wartości
        if (App::getMessages()->isError())
            return false;

        return !App::getMessages()->isError();
    }
    
    public function action_login() {
		        
        if ($this->validate()) {

            $this->form->password =  md5($this->form->password);

            $isAccount = App::getDB()->has("user", [
                "AND" => [
                    "email" => $this->form->email,
                    "password" => $this->form->password
                ]
            ]);
            
            
            
            if ($isAccount) {
                Utils::addErrorMessage('Poprawnie zalogowano do systemu');
                RoleUtils::addRole('user');
                App::getRouter()->redirectTo("home");
            } else {
                Utils::addInfoMessage('Hasło niepoprawne');
                $this->generateView();
            }
          

        } else {
            Utils::addErrorMessage('NiePoprawnie zalogowano do systemu');
            //niezalogowany => pozostań na stronie logowania
            $this->generateView();
        }
       
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
