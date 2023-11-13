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

    $xml->addAttribute("type","private");
    // Se agrega un atributo llamado "type" con el valor "private" al elemento raíz <note>.
    $xml->body->addAttribute("date","2014-01-01");
    // Se agrega un atributo llamado "date" con el valor "2014-01-01" al elemento <body> dentro de <note>.

    echo $xml->asXML();
    // Imprime $xml como xml
?>