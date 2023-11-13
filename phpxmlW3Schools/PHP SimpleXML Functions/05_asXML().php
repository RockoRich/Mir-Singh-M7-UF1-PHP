<?php
    $note=<<<XML
    <note>
        <to>Tove</to>
        <from>Jani</from>
        <heading>Reminder</heading>
        <body>Do not forget me this weekend!</body>
    </note>
    XML;

    $xml = new SimpleXMLElement($note);
    echo $xml->asXML();

    // Aqui simplemente crea una cadena de texto $note, que la pasa a XML = $xml y luego la imprime.
?>