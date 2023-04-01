<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use app\forms\LoginForm;

class CartCtrl {
    public function action_cart() {      
        App::getSmarty()->display("cart.tpl");
    }
}