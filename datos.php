<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/logo/icono.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Sarah y Orel</title>
</head>
<body>
<style>
    .estilo_texto{
        font-size: 25px;
    }
</style>
<b id="idgrupo" style="display: none;"><?php echo $_GET['id']; ?></b>
    <div style="width: 88%; height: 380vh; padding: 20px; text-align: center; background-image: url(img/fondo_regalo2.png); background-repeat: no-repeat; background-size: cover;">
        <img src="img/logo/logo_boda_b3.png" style="width: 80%;" alt="">
        <div style="width: 100%; margin: 10px; color: #fff;">

            <p class="estilo_texto">Si estás aquí con el deseo de obsequiarnos algo para el día de nuestra boda, antes que nada, damos gracias a Dios porque eres parte de la respuesta a nuestras oraciones.</p>
            <p class="estilo_texto">Si Dios permite, unos días después de la boda, nos mudaremos a Dallas, Texas, Estados Unidos para seguir preparándonos para el servicio del Señor, es por ello que si tu deseo es darnos un regalo, te pedimos que sea a través de una ofrenda económica. Puesto que no tenemos oportunidad de llevarnos cosas más que lo esencial. </p>
            <p class="estilo_texto">Si no fuera posible que lo puedas hacer te decimos que te entendemos y te pedimos que no te preocupes, pero si es tu deseo hacerlo... </p>
            <p class="estilo_texto">*El día del evento proporcionaremos sobres para este fin o…</p>
            <p class="estilo_texto">*A continuación te dejamos nuestros datos para que puedas enviarnos esta ofrenda a través de un depósito o transferencia bancaria.</p>

            
            <hr>
            <p class="estilo_texto">Banco: BBVA</p>
            <p class="estilo_texto">Número de Cuenta: 1150398578</p>
            <p class="estilo_texto">Cuenta CLABE: 012320011503985787</p>
            <p class="estilo_texto">Titular: Orel Vilchis Martinez</p>
            <hr>
            <p class="estilo_texto">Cualquier duda que tengas por favor no dudes en contactarnos. </p>
            <p class="estilo_texto">Muchas gracias por ser parte de esta bendición. Pero lo más importante que te pedimos es que nos mantengas en tus oraciones para que el Señor nos siga sosteniendo en nuestro ministerio. </p>
            <p class="estilo_texto">¡Que Dios te bendiga grandemente!</p>
            <hr><br>
            
            <a onclick="abrir_website();" id="a_back" href="" ><button style="padding: 10px 50px; border-radius: 10px; background-color: #9B8550; color: #fff; border: none; font-size: 20px;">Regresar a pagina principal</button></a>

        </div>
    </div>
    <script>
        function abrir_website()
        {
            var clave = $("#idgrupo").text();
            $("#a_back").attr("href","https://wedding-sarah-orel-julio2024.site?id="+clave);
        }
        
    </script>
    <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- Main Js -->
      <script src="js/main.js"></script>
      <!-- RSVP form -->
      <script src="js/rsvp.js"></script>
      <!--Other Plugins -->
      <script src="js/plugins.js"></script>
      <!-- Prefix free CSS -->
      <script src="js/prefixfree.js"></script>
      <!-- maps-->
      <script src="js/map.js"></script>
      <!-- Bootstrap Select Tool (For Module #4) -->
      <script src="switcher/js/bootstrap-select.js"></script>
      <!-- UI jQuery (For Module #5 and #6) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.js" type="text/javascript"></script>
      <!-- All Scripts & Plugins -->
      <script src="switcher/js/dmss.js"></script>
</body>
</html>