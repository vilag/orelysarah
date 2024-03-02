<?php
session_start(); 
require_once "../modelos/Index.php";

$index=new Index();


switch ($_GET["op"]){
	
    case 'buscar_persona':

        $name_num_inv = $_POST['name_num_inv'];
        $rspta=$index->buscar_persona($name_num_inv);
        echo json_encode($rspta);
         
    break;

    case 'listar_grupo':

        $idgrupo = $_GET['idgrupo'];

        $rspta = $index->listar_grupo($idgrupo);
            
        while ($reg = $rspta->fetch_object())
                {
                    echo '

                   
                        
                            
                            <div style="width: 100%; height: 115px; float: left; text-align: center; background-color: #F7F7F7; padding-left: 30px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; margin-top: 10px;">
                                <label style="font-size: 18px !important; color: rgba(0,0,0,1); cursor: pointer;">'.$reg->nombre.'</label>
                                <br>
                               
                                <b style="padding: 10px 30px; cursor: pointer; border: #2D5883 1px solid; border-radius: 10px;" onclick="asistir('.$reg->idinvitados.');">Asistiré</b>
                                <b style="padding: 10px 30px; cursor: pointer; border: #2D5883 1px solid; border-radius: 10px;" onclick="noasistir('.$reg->idinvitados.');">No Asistiré</b>
                                <input id="input_confirm'.$reg->idinvitados.'" type="number" value="0">
                            </div>
                          
                            
                    
                    ';	
                }
    break;

    case 'contar_lugares':

        $idgrupo = $_POST['idgrupo'];
        $rspta=$index->contar_lugares($idgrupo);
        echo json_encode($rspta);
         
    break;
	
}
?>