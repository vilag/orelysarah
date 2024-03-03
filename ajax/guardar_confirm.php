<?php

$servername = 'srv366.hstgr.io';
$username = 'u690371019_wedding';
//$username = 'root';
$password = "BN66>ww2@B";
//$password = "";
$dbname = "u690371019_wedding";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//$mysqli=new mysqli('srv366.hstgr.io','u690371019_pgmanage20','6*?exu0eIlG+','u690371019_pgmanage20');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

   $confirm = json_decode($_POST['array']);

   require 'conexion.php';

    for ($i=0; $i < count($confirm); $i++) { 

        $idinvitados = $confirm[$i]->idinvitados;
        $confirmacion = $confirm[$i]->confirmacion;

        $mysqli->query("UPDATE invitados SET confirmacion='$confirmacion' WHERE idinvitados='$idinvitados'");
        //$result = mysqli_query($conn, $mysqli);
        $idactualizado = $mysqli->insert_id;
        
        // $mysqli->query("INSERT INTO pg_detalle_pedidos (idpg_pedidos,idproductos_clasif,cantidad,codigo,descripcion,precio,importe,observacion) VALUES('$id_pedido_insertado','$idproductos_clasif','$cantidad','$codigo_match','$descripcion','$precio','$total','$observ')");
	    // $idprod_insertado = $mysqli->insert_id;
    }


    print_r("Guardado");

    $mysqli->close();
?>