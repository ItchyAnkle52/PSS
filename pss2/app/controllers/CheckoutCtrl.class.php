<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use app\forms\LoginForm;

class CheckoutCtrl {
    public function action_checkout() {      
        App::getSmarty()->display("checkout.tpl");
    }
}