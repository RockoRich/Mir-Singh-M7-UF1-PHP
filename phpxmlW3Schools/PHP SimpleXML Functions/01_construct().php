<?php
    // $note es una cadena de texto grande que contiene un XML.
    $note=<<<XML
    <note>
        <to>Tove</to>
        <from>Jani</from>
        <heading>Reminder</heading>
        <body>Do not forget me this weekend!</body>
    </note>
   
    XML;

    // Aqui crea el objeto $xml que recoje el contenido de $note, lo cual lo convierte en un objeto PHP.
    // Y en el echo lo imprime por pantalla.
    $xml=new SimpleXMLElement($note);
    echo $xml->asXML();
?>

