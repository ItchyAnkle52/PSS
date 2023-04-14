<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\Validator;
use core\ParamUtils;
use app\forms\SearchForm;
use PDOException;

class ShopCtrl {

    private $products;
    private $product_id;
    private $page;
    private $sum;

    private $limit;

    public function action_shop() {
        $this->form = new SearchForm();
        $this->getChairs(0);
        $this->generateView();
    }
    public function __construct(){
        $this->form = new SearchForm();
    }
    public function validate() {
        $this->form->item_name = ParamUtils::getFromRequest('item_name', true, 'Błędne wywołanie aplikacji');
        if (App::getMessages()->isError())
            return false;
    }

    public function action_shop_filtered_chairs(){
        $this->validate();

        $this->form->login = ParamUtils::getFromRequest('item_name');

        $search_params = [];
        if ( isset($this->form->item_name) && strlen($this->form->item_name > 0)) {
            $search_params['product_name[~]'] = $this->form->item_name.'%';
        }

        $num_params = sizeof($search_params);
        if ($num_params > 1) {
            $where = [ "AND" => &$search_params ];
        } else {
            $where = &$search_params;
        }

        $this->page = ParamUtils::getFromCleanURL(1, true);


        $how_many = App::getDB()->select("product", [
            "[>]product_type" => ["id_product_type" => "id_product_type"]
        ], [
            "product.id_product",
            "product.product_name",
            "product.product_price",
            "product.product_image_path",
            "product_type.id_product_type",
            "product_type.type_name"
        ],  $where
        );

        $this->sum = 0;
        $this->sum = count($how_many);

        $this->limit = 4;
        $offset = $this->limit*($this->page);

        $where ["LIMIT"] = [$offset, $this->limit];

        $this->products = App::getDB()->select("product", [
            "[>]product_type" => ["id_product_type" => "id_product_type"]
        ], [
            "product.id_product",
            "product.product_name",
            "product.product_price",
            "product.product_image_path",
            "product_type.id_product_type",
            "product_type.type_name"
        ],  $where
        );

        $this->generateView();
    }

    public function action_shop_chairs(){
        $this->getChairs(1);
        $this->generateView();
    }
    public function action_shop_fancy_chairs(){
        $this->getChairs(2);
        $this->generateView();
    }
    public function action_shop_even_fancier_chairs(){
        $this->getChairs(3);
        $this->generateView();
    }

    public function getChairs($chair_type) {
        if($chair_type != 0){
            $this->products = App::getDB()->select("product", [
                "[>]product_type" => ["id_product_type" => "id_product_type"]
            ], [
                "product.id_product",
                "product.product_name",
                "product.product_price",
                "product.product_image_path",
                "product_type.id_product_type",
                "product_type.type_name"
            ], [
                    "product_type.id_product_type" => $chair_type
                ]
            );
        } else{
            $this->products = App::getDB()->select("product", [
                "[>]product_type" => ["id_product_type" => "id_product_type"]
            ], [
                "product.id_product",
                "product.product_name",
                "product.product_price",
                "product.product_image_path",
                "product_type.id_product_type",
                "product_type.type_name"
            ]);
        }
    }

    public function action_add_to_cart() {
        $check = false;   
        $this->product_id = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        $this->products = App::getDB()->select("user_has_product_in_cart", [
            "Product_id_product"
        ],[
            "User_id_user" => $_SESSION['id']
        ]);

        foreach($this->products as $p){
            if($p['Product_id_product'] == $this->product_id){
                $check = true;
            }
        }

        try {
            if($check == false){
                App::getDB()->insert("user_has_product_in_cart", [
                    "Product_id_product" => $this->product_id,
                    "User_id_user" =>  $_SESSION['id'],
                    "quantity" =>  1 
                ]);
            } else {
                App::getDB()->update("user_has_product_in_cart", [
                    "quantity[+]" =>  1 
                ],[
                    "Product_id_product" => $this->product_id,
                    "User_id_user" =>  $_SESSION['id'],
                ]);
            }

            $prod = App::getDB()->get("product", [
                "product_price"
            ],[
                "id_product" => $this->product_id,
            ]);

            $_SESSION['sum'] += $prod['product_price'];
            
            if($_SESSION["sum"] == NULL)
                $_SESSION["sum"] = 0;

        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
      App::getRouter()->redirectTo('shop');    
    }

    public function generateView() {
        App::getSmarty()->assign('products', $this->products);
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->assign('page', $this->page);
        App::getSmarty()->assign('sum', $this->sum);
        App::getSmarty()->assign('limit', $this->limit);
        App::getSmarty()->display("shop.tpl");
    }

}