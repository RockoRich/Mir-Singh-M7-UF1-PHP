<?php
    $xml=<<<XML
    <?xml version="1.0" standalone="yes"?>
    <cars>
    <car id="1">Volvo</car>
    <car id="2">BMW</car>
    <car id="3">Saab</car>
    </cars>
    XML;

    $sxe=new SimpleXMLElement($xml);
    // Cadena de texto $xml que la convierte en objeto de PHP = $sxe con XML dentro.
    
    echo $sxe->getName() . "<br>";
    // Se utiliza el método getName() para obtener el nombre del elemento raíz del XML. 
    // En este caso, el resultado sería cars, y se imprime en la pantalla seguido de un salto de línea.

    foreach ($sxe->children() as $child) {
        echo $child->getName() . "<br>";
    }
    /*
    Se inicia un bucle foreach que itera a través de los elementos hijos directos de $sxe (que son los elementos <car>).
    En cada iteración, $child representa uno de los elementos <car>.
    Se utiliza $child->getName() para obtener el nombre del elemento y se imprime en la pantalla seguido de un salto de línea.
    */

    /*
    El resultado de este código sería:
        cars
        car
        car
        car

    Esto indica que el nombre del elemento raíz es cars y que hay tres elementos hijos llamados car.
    */
?>