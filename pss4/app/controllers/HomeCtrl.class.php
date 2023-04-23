<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use app\forms\LoginForm;

class HomeCtrl {
    public function action_home() {      
        App::getSmarty()->display("home.tpl");
    }
}