<?php 

    function loadCart(){
        $xml = simplexml_load_file("cart.xml");
        return $xml;
    }

    function saveCart($xml){
        $xml->asXML('cart.xml');
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

    function displayCart() {
        $cart = simplexml_load_file('cart.xml');
        header('Content-Type: text/xml'); 
        echo "<cart>";
    
        $totalPrice = 0;
    
        foreach ($cart->product as $product) {
            echo "<product>";
            echo "<id>" . $product->id . "</id>";
            echo "<name>" . $product->name . "</name>";
            echo "<price>" . $product->price . "</price>";
            echo "<quantity>" . $product->quantity . "</quantity>";
            echo "</product>";

            $totalPrice += (float)$product->price * (int)$product->quantity; 
        }
    
        echo "<totalprice>" . $totalPrice . "</totalprice>";
        echo "</cart>";
    }


    // function displayCart(){
    //     $cart = simplexml_load_file("cart.xml");
    //     header('Content-type: text/xml');
    //     echo $cart->asXML();
    // }

    // function displayCart(){
    //     $cart = simplexml_load_file('cart.xml');
    //     header('Content-Type: text/xml'); 
    //     echo "<cart>";

    //     foreach ($cart->product as $products) {
    //         echo "<product>";
    //         echo "<id>" . $products->id . "</id>";
    //         echo "<name>" . $products->name . "</name>";
    //         echo "<price>" . $products->price . "</price>";
    //         echo "<quantity>" . $products->quantity . "</quantity>";
    //         echo "</product>";
    //     }
    //     echo "</cart>";
    // }

    // action=add&product_id=1

    // action=remove&product_id=1
    
    // action=view

    // action=update&product_id=1&quantity=2
?>


