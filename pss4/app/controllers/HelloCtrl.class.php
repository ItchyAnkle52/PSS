<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\ParamUtils;
use app\forms\RegisterForm;
use PDOException;

class RegisterCtrl {
    private $data;

    // private $form;

    // public function __construct(){
		
	// 	$this->form = new RegisterForm();		
	// }


    public function action_register() {
        $this->data = App::getDB()->select("role",[
            "role_name"
        ]);
        $this->generateView();
    }

    public function action_registerShow() {
        App::getSmarty()->display('Register.tpl');
    }
            
    public function generateView() {
        App::getSmarty()->assign('value', $this->data); // dane formularza dla widoku
        App::getSmarty()->display('Hello.tpl');
    }
    

}
