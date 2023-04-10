<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\ParamUtils;
use app\forms\ProductsForm;
use PDOException;

class ProductCtrl {

    private $products;
    private $product_id;
    private $form;

    public function __construct(){
		
		$this->form = new ProductsForm();		
	}

    public function action_products() {
		        
        $this->products = App::getDB()->select("product", [
            "id_product",
            "product_name",
            "product_price",
            "id_product_type",
            "product_image_path",
        ]);   
        App::getSmarty()->assign('products', $this->products);        
        App::getSmarty()->display("products.tpl");      
    }

    public function action_delete_products(){
        $this->product_id = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
            
        App::getDB()->delete("product", [
            "id_product" => $this->product_id,
        ]);
                
        App::getRouter()->redirectTo('products');                   
    }

    public function validate() {
        $this->form->name = ParamUtils::getFromRequest('name', true, 'Błędne wywołanie aplikacji');
        $this->form->price = ParamUtils::getFromRequest('price', true, 'Błędne wywołanie aplikacji');
        $this->form->type = ParamUtils::getFromRequest('type', true, 'Błędne wywołanie aplikacji');
        $this->form->image = ParamUtils::getFromRequest('image', true, 'Błędne wywołanie aplikacji');

        if (App::getMessages()->isError())
            return false;

        // 1. sprawdzenie czy wartości wymagane nie są puste
        if (empty(trim($this->form->name))) {
            Utils::addErrorMessage('provide product name');
        }
        if (empty(trim($this->form->price))) {
            Utils::addErrorMessage('provide product price');
        }
        if (empty(trim($this->form->type))) {
            Utils::addErrorMessage('provide product type id');
        }
        if (empty(trim($this->form->image))) {
            Utils::addErrorMessage('provide a path to product image');
        }

        if (App::getMessages()->isError())
            return false;

        return !App::getMessages()->isError();

    }
    public function action_products_add() {
    // 1. Walidacja danych formularza (z pobraniem)
        if ($this->validate()) {
            // 2. Zapis danych w bazie
            try {          
                
                $exist = App::getDB()->has("product", [
                    "product_name"=>$this->form->name
                ]);

                    if (!$exist) {

                        App::getDB()->insert("product", [
                            "product_name" => $this->form->name,
                            "product_price" => $this->form->price,
                            "product_image_path" => $this->form->image,
                            "id_product_type" => $this->form->type, 
                        ]);
                        
                    } else { //za dużo rekordów
                        // Gdy za dużo rekordów to pozostań na stronie
                        Utils::addErrorMessage('Such product already exists');
                        $this->generateView(); //pozostań na stronie edycji
                        exit(); //zakończ przetwarzanie, aby nie dodać wiadomości o pomyślnym zapisie danych
                    }
                

                Utils::addInfoMessage('Pomyślnie zapisano rekord');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }

            App::getRouter()->redirectTo('products');

            } else {
                // 3c. Gdy błąd walidacji to pozostań na stronie
                $this->generateView();     
        }   
                
    }

    public function action_products_add_show() {
        $this->generateView();  
    }

    public function generateView() {
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display('products_add.tpl');
    }
}
