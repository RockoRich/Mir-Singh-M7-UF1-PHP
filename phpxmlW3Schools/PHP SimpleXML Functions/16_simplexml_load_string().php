<?php
    $note=<<<XML
    <note>
        <to>Tove</to>
        <from>Jani</from>
        <heading>Reminder</heading>
        <body>Do not forget me this weekend!</body>
    </note>
    XML;

    $xml=simplexml_load_string($note);
    // Aqui simplemente crea una cadena de texto $note, que la pasa a XML = $xml y luego la imprime.

    print_r($xml);
    // Se utiliza print_r() para imprimir en pantalla la estructura del objeto $xml. 
    // print_r() es útil para imprimir estructuras de datos complejas, como objetos o arrays.
?>