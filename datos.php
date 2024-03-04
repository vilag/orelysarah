<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Sarah y Orel</title>
</head>
<body>
<b id="idgrupo" style="display: none;"><?php echo $_GET['id']; ?></b>
    <div style="width: 88%; height: 230vh; padding: 20px; text-align: center; background-image: url(img/fondo_regalo2.png); background-repeat: no-repeat; background-size: cover;">
        <img src="img/logo/logo_boda_b3.png" style="width: 80%;" alt="">
        <div style="width: 100%; margin: 10px; color: #fff;">
            <p>Damos muchas gracias a Dios por estar viviendo esta experiencia tan hermosa, desde el momento en que decidimos comprometernos solo hemos tenido algo en mente, dedicar nuestras vidas al servicios de nuestro Dios.</p>
            <p>Este llamado ha sido confirmado en nuestras vidas desde antes de decidir unir nuestras vidas y ahora que estamos a poco tiempo rogamos a nuestro Dios nos guie conforme a su voluntad agradable y perfecta.</p>
            <p>Si estas aquí con el deseo de obsequiarnos algo para el día de nuestra boda, antes que nada damos gracias a Dios por ti vida porque eres parte de la respuesta de Dios a nuestras oraciones.</p>
            <p>Si Dios permite, unos dias despues de la boda, nos mudaremos a Dallas Texas, Estados Unidos, para que con la dirección de Dios podamos seguir preparandonos para el servicio del Señor, es por ello que si tu deseo era darnos un regalo, te quisieramos pedir algo especial, ya que no podremos llevarnos muchas cosas nos encantaria que pudieras enviarnos la cantidad equivalente al regalo que el Señor haya puesto en tu corazon. Este recurso será utilizado para nuestro sustento así como para nuestros estudios.</p>
            <p>Si no fuera posible que nos pudieras ayudar de esta forma, con toda tranqulidad te decimos que te entendemos y te pedimos que no te preocupes, pero si tu deseo es el apoyarnos de esta forma a continuación te dejamos nuestros datos para que puedas enviarnos lo que el Señor ponga en tu corazón.</p>
            <p>Cualquier duda que tengas por favor no dudes en contactarnos.</p>
            <hr>
            <p>Banco: BBVA</p>
            <p>Número de Cuenta: 1150398578</p>
            <p>Cuenta CLABE: 012320011503985787</p>
            <p>Titular: Orel Vilchis Martinez</p>
            <hr>
            <p>Muchas gracias mi hermano y amigo por esta bendición, pero lo mas importante porfavor te pedimos que nos tengas en tus oraciones, para que el Señor nos use conforme a su voluntad y para su gloria.</p>
            <p>Que Dios te bendiga grandemente!!!</p>
            <hr><br>
            
            <a onclick="abrir_website();" id="a_back" href="" ><button style="padding: 10px 50px; border-radius: 10px; background-color: #9B8550; color: #fff; border: none;">Regresar a pagina principal</button></a>

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