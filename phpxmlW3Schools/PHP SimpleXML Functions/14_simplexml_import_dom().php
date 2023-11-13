<?php
    $dom=new domDocument;
    // Se crea un nuevo objeto domDocument, que representa un documento XML vacío.
    
    $dom->loadXML("<note><to>Tove</to><from>Jani</from></note>");
    // Se carga el XML proporcionado (en forma de cadena) en el objeto domDocument.

    $x=simplexml_import_dom($dom);
    // Se utiliza simplexml_import_dom() para convertir el objeto domDocument en un objeto SimpleXMLElement. 
    // Esto facilita la manipulación y navegación del XML.

    echo $x->from;
    // Se accede al elemento <from> del XML a través de la variable $x, que ahora es un objeto SimpleXMLElement.
    // El valor del elemento <from> ("Jani") se imprime en la pantalla.
?>