<?php
    $bookxml = <<<XML
    <bookstore>
        <book>
            <title>Everyday Italian</title>
            <author>Giada De Laurentiis</author>
        </book>
        <book>
            <title>Harry Potter</title>
            <author>J K. Rowling</author>
        </book>
        <book>
            <title>Learning XML</title>
            <author>Erik T. Ray</author>
        </book>
    </bookstore>
    XML;

    $xml = new SimpleXMLIterator($bookxml);
    // Cadena de texto $bookxml que la convierte en objeto de PHP = $xml con XML dentro.


    for( $xml->rewind(); $xml->valid(); $xml->next() ) {
        /*
            Se inicia un bucle for que recorre los elementos del objeto SimpleXMLIterator.
            $xml->rewind() rebobina el iterador al primer elemento.
            $xml->valid() verifica si el iterador está en una posición válida (es decir, si hay elementos para recorrer).
            $xml->next() avanza al siguiente elemento en el iterador.
        */

        if($xml->hasChildren()) {
            var_dump($xml->current());
            echo "<br>";
        }
        /*
            Dentro del bucle for, se verifica si el elemento actual tiene hijos usando hasChildren().
            Si tiene hijos, se imprime el contenido del elemento actual usando var_dump(), que muestra el tipo y contenido del elemento.
            También se imprime un salto de línea para separar las salidas.
        */
    }

    /*
        RESULTADO
            object(SimpleXMLIterator)#2 (2) { ["title"]=> string(16) "Everyday Italian" ["author"]=> string(19) "Giada De Laurentiis" }
            object(SimpleXMLIterator)#2 (2) { ["title"]=> string(12) "Harry Potter" ["author"]=> string(12) "J K. Rowling" }
            object(SimpleXMLIterator)#2 (2) { ["title"]=> string(12) "Learning XML" ["author"]=> string(11) "Erik T. Ray" }
    */
?>