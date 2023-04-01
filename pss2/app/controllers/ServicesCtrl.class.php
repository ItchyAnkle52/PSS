<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use app\forms\LoginForm;

class ServicesCtrl {
    public function action_services() {      
        App::getSmarty()->display("services.tpl");
    }
}