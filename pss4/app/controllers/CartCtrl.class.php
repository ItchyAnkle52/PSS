<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;

class CartCtrl {

    private $products;
    private $total_price = 0;
    private $product_id;
    private $sum;

    public function action_cart() {

        $this->products_and_price();
        $this->generate_view();
        
    }

    public function action_delete_from_cart() {
        $this->product_id = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');

        App::getDB()->delete("user_has_product_in_cart", [
                "product_id_product" => $this->product_id,
        ]);
     
        App::getRouter()->redirectTo('cart');
        
    }

    public function products_and_price(){
        $this->products = App::getDB()->select("user_has_product_in_cart", [
            "[>]product" => ["product_id_product" => "id_product"]
        ], [
            "product.id_product",
            "product.product_name",
            "product.product_price",
            "product.product_image_path",
            "user_has_product_in_cart.user_id_user",
            "user_has_product_in_cart.quantity"
        ], [
            "user_has_product_in_cart.user_id_user" => $_SESSION["id"]
            ]
        );

        foreach ($this->products as $p) {
            $this->total_price =  $p["quantity"]*$p["product_price"];
            $this->sum += $this->total_price;
        }
       
        $_SESSION["sum"] = $this->sum;

        if($_SESSION["sum"] == NULL)
            $_SESSION["sum"] = 0;
    }

    public function action_checkout(){
        $this->products_and_price();

        App::getDB()->insert("order", [
            "User_id_user" => $_SESSION["id"],
            "total_price" => $_SESSION["sum"]
        ]);

        $id_order = App::getDB()->get("order",[
            "idOrder",
        ],[
            "User_id_user" => $_SESSION["id"],
        ]);

        try { 
            foreach ($this->products as $p) {         

            App::getDB()->insert("ordered_products", [
                "item_name" => $p["product_name"],
                "item_price" => $p["product_price"],
                "item_quantity" => $p["quantity"],
                "Order_idOrder" => $id_order["idOrder"], 
            ]);
        }
        App::getDB()->delete("user_has_product_in_cart", [
            "User_id_user" =>  $_SESSION['id'],                      
        ]);
        
        $_SESSION["sum"] = 0;
    
            Utils::addInfoMessage('Pomyślnie zapisano rekord');
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
        App::getRouter()->redirectTo('thanks');
    }


    public function generate_view() {
        App::getSmarty()->assign('products', $this->products);
        App::getSmarty()->assign('total_price', $this->total_price);        
        App::getSmarty()->display("cart.tpl");
    }
}