<?php
    $xml = new SimpleXMLElement("<note>Hello <to>Tove</to><from>Jani</from>World!</note>");
    echo $xml;
    // Un objeto = $xml que devuelve el contenido de note. 
    // No incluye <to> ni <from>.
?>