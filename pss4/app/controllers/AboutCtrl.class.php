<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use app\forms\LoginForm;

class AboutCtrl {
    public function action_about() {      
        App::getSmarty()->display("about.tpl");
    }
}