<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('home'); #default action
//App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

Utils::addRoute('home', 'HomeCtrl');
Utils::addRoute('about', 'AboutCtrl');
Utils::addRoute('blog', 'BlogCtrl');
Utils::addRoute('contact', 'ContactCtrl');
Utils::addRoute('login', 'LoginCtrl');
Utils::addRoute('logout', 'LoginCtrl');
Utils::addRoute('loginShow', 'LoginCtrl');
Utils::addRoute('register', 'RegisterCtrl');
Utils::addRoute('registerShow', 'RegisterCtrl');
Utils::addRoute('services', 'ServicesCtrl');
Utils::addRoute('shop', 'ShopCtrl');
Utils::addRoute('cart', 'CartCtrl');
Utils::addRoute('thanks', 'ThanksCtrl');
Utils::addRoute('checkout', 'CheckoutCtrl');
//Utils::addRoute('action_name', 'controller_class_name');
