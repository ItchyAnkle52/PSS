<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\ParamUtils;
use app\forms\RegisterForm;
use PDOException;

class RegisterCtrl {

    private $form;

    public function __construct(){
		
		$this->form = new RegisterForm();		
	}

    public function validate() {
        $this->form->f_name = ParamUtils::getFromRequest('f_name', true, 'Błędne wywołanie aplikacji');
        $this->form->l_name = ParamUtils::getFromRequest('l_name', true, 'Błędne wywołanie aplikacji');
        $this->form->password = ParamUtils::getFromRequest('password', true, 'Błędne wywołanie aplikacji');
        $this->form->r_password = ParamUtils::getFromRequest('r_password', true, 'Błędne wywołanie aplikacji');
        $this->form->email = ParamUtils::getFromRequest('email', true, 'Błędne wywołanie aplikacji');
        $this->form->address = ParamUtils::getFromRequest('address', true, 'Błędne wywołanie aplikacji');
        $this->form->phone = ParamUtils::getFromRequest('phone', true, 'Błędne wywołanie aplikacji');

        if (App::getMessages()->isError())
            return false;

        // 1. sprawdzenie czy wartości wymagane nie są puste
        if (empty(trim($this->form->f_name))) {
            Utils::addErrorMessage('provide name');
        }
        if (empty(trim($this->form->l_name))) {
            Utils::addErrorMessage('provide last name');
        }
        if (empty(trim($this->form->password))) {
            Utils::addErrorMessage('provide password');
        }
        if (empty(trim($this->form->r_password))) {
            Utils::addErrorMessage('repeat password');
        }
        if (empty(trim($this->form->email))) {
            Utils::addErrorMessage('provide e-mail address');
        }
        if (empty(trim($this->form->address))) {
            Utils::addErrorMessage('provide address');
        }
        if (empty(trim($this->form->phone))) {
            Utils::addErrorMessage('provide phone number');
        }

        if (App::getMessages()->isError())
            return false;

        //walidacja emaila
        if (!filter_var($this->form->email, FILTER_VALIDATE_EMAIL)) {
            Utils::addErrorMessage($this->form->email.' is not a valid email address');
        }

        //walidacja hasla
        if ($this->form->password != $this->form->r_password) {
            Utils::addErrorMessage('passwords do NOT match');
        }

        if (App::getMessages()->isError())
            return false;

        //walidacja zlozonosci hasla
        if (strlen($this->form->password) < 8) {
            Utils::addErrorMessage('password must be at least 8 characters long');
        }
        if (!preg_match('/[A-Z]/',$this->form->password)) {
            Utils::addErrorMessage('password must contain at least one uppercase letter');
        }
        if (!preg_match('/[a-z]/',$this->form->password)) {
            Utils::addErrorMessage('password must contain at least one lowercase letter');
        }
        if (!preg_match('/[0-9]/',$this->form->password)) {
            Utils::addErrorMessage('password must contain at least one number');
        }
        if (!preg_match('/[^A-Za-z0-9]/',$this->form->password)) {
            Utils::addErrorMessage('password must contain at least one special character');
        }

        if (App::getMessages()->isError())
            return false;

        return !App::getMessages()->isError();

    }

    public function action_register() {
		        
      
	// 1. Walidacja danych formularza (z pobraniem)
    if ($this->validate()) {
        // 2. Zapis danych w bazie
        try {          
            
            $exist = App::getDB()->has("user", [
                "email"=>$this->form->email
            ]);

            $e_password =  md5($this->form->password);

                if (!$exist) {
                    App::getDB()->insert("user", [
                        "first_name" => $this->form->f_name,
                        "last_name" => $this->form->l_name,
                        "password" => $e_password,
                        "email" => $this->form->email, 
                        "address" => $this->form->address,  
                        "phone" => $this->form->phone       
                    ]);

                    $user_id = App::getDB()->select("user", "id_user", [
                        "email" => $this->form->email
                    ]);

                    App::getDB()->insert("user_has_role", [
                        "Role_id_role" => 1,
                        "User_id_user" => $user_id,
                        "is_active" => 1,   
                        "date_added" => date("Y-m-d H:i:s")  
                    ]);
                    
                } else { //za dużo rekordów
                    // Gdy za dużo rekordów to pozostań na stronie
                    Utils::addErrorMessage('Email already in use.');
                    $this->generateView(); //pozostań na stronie edycji
                    exit(); //zakończ przetwarzanie, aby nie dodać wiadomości o pomyślnym zapisie danych
                }
               

            Utils::addInfoMessage('Pomyślnie zapisano rekord');
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
       // $this->generateView();
        // 3b. Po zapisie przejdź na stronę listy osób (w ramach tego samego żądania http)
        //App::getRouter()->forwardTo('home');
        $this->generateView();
        } else {
            // 3c. Gdy błąd walidacji to pozostań na stronie
            $this->generateView();
        }           
    }

    public function action_registerShow() {
        $this->generateView();
    }
            
    public function generateView() {
        App::getSmarty()->assign('form', $this->form); // dane formularza dla widoku
        App::getSmarty()->display('Register.tpl');
    }
    

}
