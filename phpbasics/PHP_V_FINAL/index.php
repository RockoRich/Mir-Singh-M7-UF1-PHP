<?php

function loadDoc() {

    $xmlContent = file_get_contents('top10.xml');

    $xml = new SimpleXMLElement($xmlContent);

    myFunction($xml);
}

function myFunction($xml) {
    $table = "<tr><th>Nombre</th><th>Apellido</th><th>Altura</th><th>Peso</th><th>Equipo</th><th>Posicion</th><th>Dorsal</th></tr>";

    foreach ($xml->jugador as $jugador) {
        $table .= "<tr><td>" . $jugador->nombre . "</td><td>" . 
        $jugador->apellido . "</td><td>" . $jugador->altura . "</td><td>" . 
        $jugador->peso . "</td><td>" . $jugador->equipo . "</td><td>" . 
        $jugador->posicion . "</td><td>" . $jugador->dorsal . "</td></tr>";
    }

    echo "
    <style>
        table,th,td {
            border : 1px solid black;
            border-collapse: collapse;
        }
        
        th {
            background-color:#ccd9ff;   
            padding: 10px;
            text-align: center;
        }
        
        td {
            background-color:#d6f5d6;
            padding: 10px;
            text-align: center;
        }
        
        div {
            display:grid;
            padding-top:5%;
            text-align:center;
            align-content:center;
            justify-content:center;
        }
    </style>

    <div>
        <table>" . $table . "</table>
    </div>";    

}   

// Llamar a la función loadDoc para iniciar el proceso
loadDoc();

?>
