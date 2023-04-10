<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use app\forms\LoginForm;

class BlogCtrl {
    public function action_blog() {      
        App::getSmarty()->display("blog.tpl");
    }
}