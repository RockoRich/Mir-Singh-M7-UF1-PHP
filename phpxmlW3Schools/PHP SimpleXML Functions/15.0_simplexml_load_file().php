<?php
    $xml=simplexml_load_file("15.1_note.xml");
    // Se utiliza simplexml_load_file() para cargar el contenido del archivo "note.xml" y convertirlo en un objeto SimpleXMLElement.
    // El objeto resultante se asigna a la variable $xml.

    print_r($xml);
    // Se utiliza print_r() para imprimir en pantalla la estructura del objeto $xml. 
    // print_r() es útil para imprimir estructuras de datos complejas, como objetos o arrays.

?>