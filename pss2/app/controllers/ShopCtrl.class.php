<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use app\forms\LoginForm;

class ShopCtrl {
    public function action_shop() {      
        App::getSmarty()->display("shop.tpl");
    }
}