<?php

    $myvar=$_GET["user"];
    $title="Hola otra vez";

    $string = <<<XML
    <?xml version="1.0" encoding="UTF-8"?>
    <CATALOG>
        <CD>
            <TITLE>$title</TITLE>
            <ARTIST>The Communards</ARTIST>
            <COUNTRY>UK</COUNTRY>
            <COMPANY>London</COMPANY>
            <PRICE>7.80</PRICE>
            <YEAR>1987</YEAR>
        </CD>
        <CD>
            <TITLE>Unchain my heart</TITLE>
            <ARTIST>$myvar</ARTIST>
            <COUNTRY>USA</COUNTRY>
            <COMPANY>EMI</COMPANY>
            <PRICE>8.20</PRICE>
            <YEAR>1987</YEAR>
        </CD>
    </CATALOG>
    XML;

    header('Content-Type: text/xml');
    echo($string);

?>
