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
    <style>
        .estilo_tabla, tr, th, tbody, td {
            border: #ccc 1px solid;
        }
    </style>
    <div style="width: 100%;">
        <button onclick="ver_vista1();">Lista</button>
        <button onclick="ver_vista2();">Lista 2</button>
    </div>
    <div style="width: 100%; float: left; padding: 20px;">
        Adultos:&nbsp;<b style="font-size: 20px;" id="cant_adultos"></b>&nbsp;&nbsp;Niños:&nbsp;<b style="font-size: 20px;" id="cant_ninos"></b>
    </div>
    
    <div style="width: 100%; padding: 20px;">
        <button style="background-color: black; color: #fff; padding: 10px; border-radius: 10px; border: none; box-shadow: 5px 5px 10px rgba(0,0,0,0.2);" onclick="filtro(1);">Todos&nbsp;<b id="cant_todos"></b></button>
        <button style="background-color: gray; color: #fff; padding: 10px; border-radius: 10px; border: none; box-shadow: 5px 5px 10px rgba(0,0,0,0.2);" onclick="filtro(2);">Sin confirmar&nbsp;<b id="cant_sin_confirm"></b>&nbsp;(Adultos)</button>
        <button style="background-color: green; color: #fff; padding: 10px; border-radius: 10px; border: none; box-shadow: 5px 5px 10px rgba(0,0,0,0.2);" onclick="filtro(3);">Asistirán&nbsp;<b id="cant_asisten"></b>&nbsp;(Adultos)</button>
        <button style="background-color: red; color: #fff; padding: 10px; border-radius: 10px; border: none; box-shadow: 5px 5px 10px rgba(0,0,0,0.2);" onclick="filtro(4);">No Asistirán&nbsp;<b id="cant_no_asisten"></b>&nbsp;(Adultos)</button>
        
    </div>
    <div style="width: 100%; padding: 10px 20px 20px 20px;">
        <button style="background-color: gray; color: #fff; padding: 10px; border-radius: 10px; border: none; box-shadow: 5px 5px 10px rgba(0,0,0,0.2);" onclick="filtro(5);">Sin confirmar&nbsp;<b id="cant_sin_confirm_n"></b>&nbsp;(Niños)</button>
        <button style="background-color: green; color: #fff; padding: 10px; border-radius: 10px; border: none; box-shadow: 5px 5px 10px rgba(0,0,0,0.2);" onclick="filtro(6);">Asistirán&nbsp;<b id="cant_asisten_n"></b>&nbsp;(Niños)</button>
        <button style="background-color: red; color: #fff; padding: 10px; border-radius: 10px; border: none; box-shadow: 5px 5px 10px rgba(0,0,0,0.2);" onclick="filtro(7);">No Asistirán&nbsp;<b id="cant_no_asisten_n"></b>&nbsp;(Niños)</button>
    </div>
    <div style="width: 100%;" id="tbl_lista1">
        <table class="estilo_tabla">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Parentesco</th>
                    <th>Tipo</th>
                    <th>Tipo Inv.</th>
                    <th>Codigo</th>
                    <th>Envio Digital</th>
                    <th>Entrega Fisica</th>
                    <th>Confirmación</th>
                </tr>
            </thead>
            <tbody id="rows_inv_tbl">
                
            </tbody>
        </table>
    </div>
    
    <div style="width: 100%; display: none;" id="tbl_lista2">
        <div style="width: 95%; padding-left: 20px; margin-bottom: 30px;">
            <button style="padding: 10px 30px; background-color: #000; color: #fff; border: none; border-radius: 10px; margin: 5px;" onclick="listar_invitados();">Recargar</button>
            <button style="padding: 10px 30px; background-color: #000; color: #fff; border: none; border-radius: 10px; margin: 5px;" onclick="listar_invitados_env();">Enviados</button>
            <button style="padding: 10px 30px; background-color: #000; color: #fff; border: none; border-radius: 10px; margin: 5px;" onclick="listar_invitados_noenv();">Sin enviar</button>
        </div>
        <div style="width: 95%; padding-left: 20px; margin-bottom: 30px;">
            <input type="text" id="input_buscar" style="height: 30px;"><button style="height: 30px;" onclick="buscar_persona();">Buscar</button><button style="height: 30px;" onclick="listar_invitados();">Limpiar</button>
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