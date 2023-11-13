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
        /*  Se inicia un bucle for que recorre los elementos del objeto SimpleXMLIterator.
            $xml->rewind() rebobina el iterador al primer elemento.
            $xml->valid() verifica si el iterador está en una posición válida (es decir, si hay elementos para recorrer).
            $xml->next() avanza al siguiente elemento en el iterador.
        */
    
        foreach($xml->getChildren() as $name => $data) {
            echo "The $name is '$data'";
            echo "<br>";
        }
        // Dentro del bucle for, se inicia otro bucle foreach que itera a través de los hijos del elemento actual del iterador.
        // Se imprime el nombre y el contenido de cada elemento hijo.
    }

    /*  RESULTADO
            The title is 'Everyday Italian'
            The author is 'Giada De Laurentiis'
            The title is 'Harry Potter'
            The author is 'J K. Rowling'
            The title is 'Learning XML'
            The author is 'Erik T. Ray'
    */
?>