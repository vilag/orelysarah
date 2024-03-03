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

                   
                        
                            
                            <div style="width: 100%; height: 115px; float: left; text-align: center; background-color: #F7F7F7; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; margin-top: 10px;">
                                <label style="font-size: 18px !important; color: rgba(0,0,0,1); cursor: pointer;">'.$reg->nombre.'</label>
                                <br>
                               
                                <b onmouseenter="btn_enter('.$reg->idinvitados.')" onmouseleave="btn_leave('.$reg->idinvitados.')" id="btn_confirm'.$reg->idinvitados.'" class="estilo_btn_confirm" onclick="asistir('.$reg->idinvitados.');">Asistiré</b>
                                <b onmouseenter="btn_enter2('.$reg->idinvitados.')" onmouseleave="btn_leave2('.$reg->idinvitados.')" id="btn_noconfirm'.$reg->idinvitados.'" class="estilo_btn_confirm" onclick="noasistir('.$reg->idinvitados.');">No Asistiré</b>
                                <input id="input_confirm'.$reg->idinvitados.'" type="hidden" value="0">
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