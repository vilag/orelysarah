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

                    if ($reg->confirmacion==1) {
                        $estilo_confirm = "
                            padding: 10px 30px; 
                            cursor: pointer; 
                            border: #2D5883 1px solid; 
                            border-radius: 10px;
                            margin: 5px;
                            background-color: #639CC3;
                            color: #fff;
                        ";
                        $estilo_confirm2 = "
                            padding: 10px 30px; 
                            cursor: pointer; 
                            border: #2D5883 1px solid; 
                            border-radius: 10px;
                            margin: 5px;
                        ";
                    }

                    if ($reg->confirmacion==2) {
                        $estilo_confirm = "
                            padding: 10px 30px; 
                            cursor: pointer; 
                            border: #2D5883 1px solid; 
                            border-radius: 10px;
                            margin: 5px;
                        ";
                        $estilo_confirm2 = "
                            padding: 10px 30px; 
                            cursor: pointer; 
                            border: #2D5883 1px solid; 
                            border-radius: 10px;
                            margin: 5px;
                            background-color: #639CC3;
                            color: #fff;
                        ";
                    }

                    if ($reg->confirmacion==0) {
                        $estilo_confirm = "
                        padding: 10px 30px; 
                        cursor: pointer; 
                        border: #2D5883 1px solid; 
                        border-radius: 10px;
                        margin: 5px;
                        background-color: rgba(0,0,0,0);
                        color: #000;
                        ";
                        $estilo_confirm2 = "
                        padding: 10px 30px; 
                        cursor: pointer; 
                        border: #2D5883 1px solid; 
                        border-radius: 10px;
                        margin: 5px;
                        background-color: rgba(0,0,0,0);
                        color: #000;
                        ";
                    }

                    echo '

                   
                        
                            
                            <div style="width: 100%; height: 115px; float: left; text-align: center; background-color: #F7F7F7; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; margin-top: 10px;">
                                <label style="font-size: 18px !important; color: rgba(0,0,0,1); cursor: pointer;">'.$reg->nombre.'</label>
                                <br>
                               
                                <b style="'.$estilo_confirm.'" onmouseenter="btn_enter('.$reg->idinvitados.',\''.$reg->confirmacion.'\')" onmouseleave="btn_leave('.$reg->idinvitados.',\''.$reg->confirmacion.'\')" id="btn_confirm'.$reg->idinvitados.'" onclick="asistir('.$reg->idinvitados.');">Asistiré</b>
                                <b style="'.$estilo_confirm2.'" onmouseenter="btn_enter2('.$reg->idinvitados.',\''.$reg->confirmacion.'\')" onmouseleave="btn_leave2('.$reg->idinvitados.',\''.$reg->confirmacion.'\')" id="btn_noconfirm'.$reg->idinvitados.'" onclick="noasistir('.$reg->idinvitados.');">No Asistiré</b>
                                
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