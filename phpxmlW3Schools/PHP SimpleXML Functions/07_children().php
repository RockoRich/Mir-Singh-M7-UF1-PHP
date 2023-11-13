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

    // Cadena de texto $note que la convierte en objeto de PHP = $xml con XML dentro.

    foreach ($xml->children() as $child) {
        echo "Child node: " . $child . "<br>";
    }

    /*
        foreach ($xml->children() as $child):
            Esto inicia un bucle foreach que itera sobre los elementos hijos directos de $xml.
            $xml->children() devuelve una lista de los elementos hijos directos del elemento $xml.
            
        $child:
            En cada iteración del bucle, $child representa uno de los elementos hijos.
        
        echo "Child node: " . $child . "<br>";:
            Dentro del bucle, se imprime la cadena "Child node: " seguida del valor de $child 
            (que es el contenido del elemento) y luego se añade un salto de línea (<br>).

    */    



?>