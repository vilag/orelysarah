<?php
$host = "srv366.hstgr.io";
$username = "u690371019_wedding";
$password = "BN66>ww2@B";
$database = "u690371019_wedding";
$mysqli = new mysqli($host, $username, $password, $database);
$query = "SELECT nombre, tipo FROM invitados limit 5";
$inv = [];
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["nombre"];
        $inv[] = $field1name;
    }
$result->free();
}
var_dump($inv);
$cant_personas = count($inv);
echo $cant_personas;
$cadena_invitados = "";
for ($i=0; $i < $cant_personas; $i++) { 
    echo $inv[$i].",<br>";
    $cadena_invitados = $cadena_invitados.$inv[$i].",";
}
echo $cadena_invitados;
$mysqli->close();
?>