<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('home'); #default action
App::getRouter()->setLoginRoute('loginShow'); #action to forward if no permissions

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
Utils::addRoute('products', 'ProductCtrl', ['worker']);
Utils::addRoute('products_add_show', 'ProductCtrl', ['worker']);
Utils::addRoute('products_add', 'ProductCtrl', ['worker']);
Utils::addRoute('delete_products', 'ProductCtrl', ['worker']);
Utils::addRoute('shop_chairs', 'ShopCtrl');
Utils::addRoute('shop_fancy_chairs', 'ShopCtrl');
Utils::addRoute('shop_even_fancier_chairs', 'ShopCtrl');
Utils::addRoute('add_to_cart', 'ShopCtrl', ['user']);
Utils::addRoute('cart', 'CartCtrl', ['user']);
Utils::addRoute('delete_from_cart', 'CartCtrl', ['user']);
Utils::addRoute('thanks', 'ThanksCtrl');
Utils::addRoute('checkout', 'CartCtrl');
//Utils::addRoute('action_name', 'controller_class_name');
