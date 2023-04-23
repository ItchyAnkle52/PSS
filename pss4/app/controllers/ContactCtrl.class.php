<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use app\forms\LoginForm;

class ContactCtrl {
    public function action_contact() {      
        App::getSmarty()->display("contact.tpl");
    }
}