<?php
    $xml=<<<XML
    <cars>
        <car name="Volvo">
            <child/>
            <child/>
            <child/>
            <child/>
        </car>
        <car name="BMW">
            <child/>
            <child/>
        </car>
    </cars>
    XML;

    $elem=new SimpleXMLElement($xml);

    // Cadena de texto $xml que la convierte en objeto de PHP = $elem con XML dentro.

    foreach ($elem as $car) {
        printf("%s has %d children.<br>", $car['name'], $car->count());
    }

    /*
    Se inicia un bucle foreach que itera a través de los elementos hijos de $elem. En este caso, son los elementos <car>.

    En cada iteración, $car representa uno de los elementos <car>.

    printf("%s has %d children.<br>", $car['name'], $car->count());:
        Se utiliza printf para formatear y mostrar un mensaje en pantalla.
        %s se sustituye por el valor del atributo name del auto.
        %d se sustituye por la cantidad de elementos hijos del auto.
        $car['name'] accede al valor del atributo name del auto.
        $car->count() cuenta la cantidad de elementos hijos del auto.
    */
?>