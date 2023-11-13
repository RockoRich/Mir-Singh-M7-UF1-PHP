<?php

    $xml = file_get_contents("2.3.xml");
    header('Content-Type: application/xml');
    echo $xml;

?>