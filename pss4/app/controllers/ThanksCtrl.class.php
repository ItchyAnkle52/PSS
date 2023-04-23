<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use app\forms\LoginForm;

class ThanksCtrl {
    public function action_thanks() {      
        App::getSmarty()->display("thanks.tpl");
    }
}