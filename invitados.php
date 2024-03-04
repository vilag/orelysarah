<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/logo/icono.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invitados</title>
    <script src="js/main.js"></script>
    <script src="js/jquery.min.js"></script>
    
</head>
<body>
    <div style="width: 95%; padding-left: 20px; margin-bottom: 30px;">
        <button style="padding: 10px 30px; background-color: #000; color: #fff; border: none; border-radius: 10px; margin: 5px;" onclick="listar_invitados();">Recargar</button>
        <button style="padding: 10px 30px; background-color: #000; color: #fff; border: none; border-radius: 10px; margin: 5px;" onclick="listar_invitados_env();">Enviados</button>
        <button style="padding: 10px 30px; background-color: #000; color: #fff; border: none; border-radius: 10px; margin: 5px;" onclick="listar_invitados_noenv();">Sin enviar</button>
    </div>
    <div style="width: 95%; padding-left: 20px;">
        <label for="">¿Quien envia el mensaje?</label>
        <select name="" id="quien_envia" onchange="listar_invitados();" style="width: 100%; height: 50px; margin-top: 10px;">
            <option value="1">Sarah</option>
            <option value="2">Orel</option>
        </select>
    </div>

    <div style="width: 95%;" id="lista_invitados">

    </div>
    

<script type="text/javascript" src="scripts/invitados.js?v=<?php echo(rand()); ?>"></script>

      <!-- /footer ends -->
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
</html>