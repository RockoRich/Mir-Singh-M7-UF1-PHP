function loadDoc() {

    var xhttp = new XMLHttpRequest();

    // Creamos un nuevo objeto XMLHttpRequest llamado xhttp, que se utiliza para hacer peticiones HTTP.

    xhttp.onreadystatechange = function() {

      // Cada vez que el estado de xhttp cambie se ejecuta el siguiente bucle 

      if (this.readyState == 4 && this.status == 200) {
        myFunction(this);
      }

    };

    xhttp.open("GET", "top10.xml", true);

    xhttp.send();

    // Esta línea prepara la petición que se va a enviar al servidor. 
    // Se está haciendo una solicitud GET para obtener el contenido del archivo llamado "top10.xml".

}

function myFunction(xml) {

    var i;

    var xmlDoc = xml.responseXML;

    var table="<tr><th>Nombre</th><th>Apellido</th><th>Altura</th><th>Peso</th><th>Equipo</th><th>Posicion</th><th>Dorsal</th></tr>";

    var x = xmlDoc.getElementsByTagName("jugador");

    for (i = 0; i < x.length; i++) { 

        table += "<tr><td>" +

        x[i].getElementsByTagName("nombre")[0].childNodes[0].nodeValue +
        "</td><td>" +

        x[i].getElementsByTagName("apellido")[0].childNodes[0].nodeValue +
        "</td><td>" +

        x[i].getElementsByTagName("altura")[0].childNodes[0].nodeValue +
        "</td><td>" +

        x[i].getElementsByTagName("peso")[0].childNodes[0].nodeValue +
        "</td><td>" +

        x[i].getElementsByTagName("equipo")[0].childNodes[0].nodeValue +
        "</td><td>" +

        x[i].getElementsByTagName("posicion")[0].childNodes[0].nodeValue +
        "</td><td>" +

        x[i].getElementsByTagName("dorsal")[0].childNodes[0].nodeValue +
        "</td></tr>";
    }

    document.getElementById("tabla").innerHTML = table;
}

