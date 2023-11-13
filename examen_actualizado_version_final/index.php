<?php

    include 'functions.php';
    $action = isset($_GET['action']) ? $_GET['action']: '';

    if (empty($action)) {
        echo "Acción no especificada.";
    } else {
        switch ($action) {
            case 'add':
                $productID = isset($_GET['product_id']) ? intval($_GET['product_id']) : 0;
                if ($productID > 0) {
                    addToCart($productID);
                    echo "Producto agregado al carrito.";
                } else {
                    echo "ID de producto no válido.";
                }
                break;
            case 'remove':
                $productID = isset($_GET['product_id']) ? intval($_GET['product_id']) : 0;
                if ($productID > 0) {
                    removeFromCart($productID);
                    echo "Producto eliminado del carrito.";
                } else {
                    echo "ID de producto no válido.";
                }
                break;
            case 'update':
                $productID = isset($_GET['product_id']) ? intval($_GET['product_id']) : 0;
                $quantity = isset($_GET['quantity']) ? intval($_GET['quantity']) : 0;
                if ($productID > 0 && $quantity > 0){
                    updateCart($productID, $quantity);
                    echo "Carrito actualizado.";
                } else {
                    echo "ID de producto o cantidad no válidos.";
                }
                break;
            case 'view':
                displayCart();
                break;
            default:
                echo "Acción no válida.";
        }
    }


?>