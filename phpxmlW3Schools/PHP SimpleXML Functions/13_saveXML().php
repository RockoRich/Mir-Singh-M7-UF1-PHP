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

    // BASICAMENTE ES UN ALIAS DE asXML
    // saveXML() es solo una forma alternativa de usar asXML() para guardar o obtener el XML como una cadena en PHP. 
    // La elección entre uno u otro dependerá de tus preferencias o del estilo de programación que prefieras.
?>