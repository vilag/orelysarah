<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo/icono.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Satisfy&display=swap" rel="stylesheet">
    <title>Wedding Orel & Sarah</title>
</head>
<body style="display: flex; justify-content: center;">
    <b id="idgrupo" style="display: none;"><?php echo $_GET['id']; ?></b>
    <img src="img/invitacion_digital3.jpg" alt="" class="tam_inv flip-in-ver-left">
    <div id="btn_confirm" class="posicion_boton slide-in-blurred-left">
        <a id="btn_confirm_send" style=" font-family: 'Montserrat', sans-serif; padding: 7px 12px;  border: #ccc 1px solid; text-decoration: none; background-color: #9B8550; color: beige; border-radius: 10px; font-size: 15px; " href="" onclick="abrir_website();">Confirmar Asistencia</a>
    </div>
    <script>
        function abrir_website()
        {
            var clave = $("#idgrupo").text();
            $("#btn_confirm_send").attr("href","https://wedding-sarah-orel-julio2024.site?id="+clave);
        }
        
    </script>
    <!-- <div style="width: 100%;">
        
    </div> -->
    
    
    <!--  -->
    <!-- Core JavaScript Files -->
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
<style>
    @media only screen and (min-width: 1400px) {
        .tam_inv {
            width: 40%;
        }
        .posicion_boton{
            width: 100%; 
            position: absolute; 
            margin-top: 45%; 
            text-align: center;
        }
    }
    @media only screen and (min-width: 1280px) and (max-width: 1400px) {
        .tam_inv {
            width: 40%;
        }
        .posicion_boton{
            width: 100%; 
            position: absolute; 
            margin-top: 45%; 
            text-align: center;
        }
    }
    @media only screen and (min-width: 1000px) and (max-width: 1280px) {
        .tam_inv {
            width: 50%;
        }
        .posicion_boton{
            width: 100%; 
            position: absolute; 
            margin-top: 55%; 
            text-align: center;
        }
    }
    @media only screen and (min-width: 800px) and (max-width: 1000px) {
        .tam_inv {
            width: 60%;
        }
        .posicion_boton{
            width: 100%; 
            position: absolute; 
            margin-top: 68%; 
            text-align: center;
        }
    }
    @media only screen and (min-width: 700px) and (max-width: 800px) {
        .tam_inv {
            width: 70%;
        }
        .posicion_boton{
            width: 100%; 
            position: absolute; 
            margin-top: 78%; 
            text-align: center;
        }
    }
    @media only screen and (min-width: 600px) and (max-width: 700px) {
        .tam_inv {
            width: 80%;
        }
        .posicion_boton{
            width: 100%; 
            position: absolute; 
            margin-top: 88%; 
            text-align: center;
        }
    }
    @media only screen and (min-width: 500px) and (max-width: 600px) {
        .tam_inv {
            width: 90%;
        }
        .posicion_boton{
            width: 100%; 
            position: absolute; 
            margin-top: 100%; 
            text-align: center;
        }
    }
    @media only screen and (min-width: 400px) and (max-width: 500px) {
        .tam_inv {
            width: 100%;
        }
        .posicion_boton{
            width: 100%; 
            position: absolute; 
            margin-top: 110%; 
            text-align: center;
        }
    }
    @media only screen and (max-width: 400px) {
        .tam_inv {
            padding-top: 25%;
            width: 100%;
        }
        .posicion_boton{
            width: 100%; 
            position: absolute; 
            margin-top: 130% !important; 
            text-align: center;
        }
    }

    .flip-in-ver-left {
	-webkit-animation: flip-in-ver-left 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
	        animation: flip-in-ver-left 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
}

/* ----------------------------------------------
 * Generated by Animista on 2024-3-1 11:52:12
 * Licensed under FreeBSD License.
 * See http://animista.net/license for more info. 
 * w: http://animista.net, t: @cssanimista
 * ---------------------------------------------- */

/**
 * ----------------------------------------
 * animation flip-in-ver-left
 * ----------------------------------------
 */
 @-webkit-keyframes flip-in-ver-left {
  0% {
    -webkit-transform: rotateY(80deg);
            transform: rotateY(80deg);
    opacity: 0;
  }
  100% {
    -webkit-transform: rotateY(0);
            transform: rotateY(0);
    opacity: 1;
  }
}
@keyframes flip-in-ver-left {
  0% {
    -webkit-transform: rotateY(80deg);
            transform: rotateY(80deg);
    opacity: 0;
  }
  100% {
    -webkit-transform: rotateY(0);
            transform: rotateY(0);
    opacity: 1;
  }
}


.slide-in-blurred-left {
	-webkit-animation: slide-in-blurred-left 0.6s cubic-bezier(0.230, 1.000, 0.320, 1.000) both;
	        animation: slide-in-blurred-left 0.6s cubic-bezier(0.230, 1.000, 0.320, 1.000) both;
}


 @-webkit-keyframes slide-in-blurred-left {
  0% {
    -webkit-transform: translateX(-1000px) scaleX(2.5) scaleY(0.2);
            transform: translateX(-1000px) scaleX(2.5) scaleY(0.2);
    -webkit-transform-origin: 100% 50%;
            transform-origin: 100% 50%;
    -webkit-filter: blur(40px);
            filter: blur(40px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateX(0) scaleY(1) scaleX(1);
            transform: translateX(0) scaleY(1) scaleX(1);
    -webkit-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
    -webkit-filter: blur(0);
            filter: blur(0);
    opacity: 1;
  }
}
@keyframes slide-in-blurred-left {
  0% {
    -webkit-transform: translateX(-1000px) scaleX(2.5) scaleY(0.2);
            transform: translateX(-1000px) scaleX(2.5) scaleY(0.2);
    -webkit-transform-origin: 100% 50%;
            transform-origin: 100% 50%;
    -webkit-filter: blur(40px);
            filter: blur(40px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateX(0) scaleY(1) scaleX(1);
            transform: translateX(0) scaleY(1) scaleX(1);
    -webkit-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
    -webkit-filter: blur(0);
            filter: blur(0);
    opacity: 1;
  }
}


</style>
</html>