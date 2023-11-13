<?php
    $note=<<<XML
    <note>
        <to>Tove</to>
        <from>Jani</from>
        <heading>Reminder</heading>
        <body>Do not forget me this weekend!</body>
    </note>
    XML;
    // Lo mismo que antes, crea una cadena de texto $note que contiene un XML.

    $xml = new SimpleXMLElement($note);
    // Convierte a $note en un objeto PHP = $xml

    $xml->body->addChild("date","2014-01-01");
    // Se añade un nuevo elemento hijo llamado <date> con el valor "2014-01-01" dentro del elemento <body>.

    $footer = $xml->addChild("footer","Some footer text");
    // Se añade un nuevo elemento <footer> con el texto "Some footer text" como contenido. 
    // La variable $footer ahora contiene el nuevo elemento <footer>.

    echo $xml->asXML();
    // Imprime $xml como xml
?>