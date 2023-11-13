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
    // Aqui simplemente crea una cadena de texto $note, que la pasa a XML = $xml y luego la imprime.

    $result = $xml->xpath("/note/to");
    // Se utiliza el método xpath() para ejecutar una consulta XPath en el objeto SimpleXMLElement. 
    // La consulta XPath busca el elemento <to> que es hijo directo del elemento raíz <note>.

    print_r($result);
    // Se imprime el contenido de $result por pantalla.
?>