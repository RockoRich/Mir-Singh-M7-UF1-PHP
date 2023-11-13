<?php 

    function loadCart(){
        $xml = simplexml_load_file("cart.xml");
        return $xml;
    }

    function saveCart($xml){
        $xml->asXML('cart.xml');
    }

    function displayCart() {
        $cart = simplexml_load_file("cart.xml");
        header('Content-Type: text/xml');
        echo $cart->asXML();    
    }


    function addToCart($productID) {
        $cart = loadCart();
        $products = simplexml_load_file('products.xml');
        foreach ($cart->product as $product) {
            if ((int)$product-> id == $productID){
                $product->quantity = (int)$product->quantity + 1;
                saveCart($cart);
                return;
            }
        }
        foreach ($products->product as $product){
            if ((int)$product->id == $productID){
                $newProduct = $cart->addChild('product');
                $newProduct->addChild('id', (int)$product->id);
                $newProduct->addChild('name', (string)$product->name);
                $newProduct->addChild('price', (float)$product->price);
                $newProduct->addChild('quantity', 1);
                saveCart($cart);
                return;

            }
        }
    }

    function updateCart($productID, $quantity) {
        $cart = loadCart();

        foreach ($cart->product as $product) {
            if ((int)$product-> id == $productID){
                $product->quantity = (int)$quantity;
                saveCart($cart);
                return;
           }
        }
    }

    function removeFromCart($productID) {
        $cart = loadCart();

        foreach ($cart->product as $product) {
            if ((int)$product-> id == $productID){
                unset($product[0]);
                saveCart($cart);
                return;
           }
        }
    }

    




?>


