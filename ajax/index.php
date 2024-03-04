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

        $idgrupo = $_POST['idgrupo_simple'];
        $rspta=$index->contar_lugares($idgrupo);
        echo json_encode($rspta);
         
    break;

    case 'listar_grupo_send_':

        //$idgrupo = $_GET['idgrupo'];

        $rspta = $index->listar_grupo_send();
            
        while ($reg = $rspta->fetch_object())
                {

                    if ($reg->tipo_impresion=="Digital") {
                        $mensaje = "
                            Hola muy buenos días (tarde)!
                            Es un placer para Orel y para mi (para Sarah y para mi) poderles invitar a Nuestra Boda!! La cual se celebrará el 13 de julio 2024 en Guadalajara.
                            * Por favor encuentren la Invitación Digital en el siguiente link.
                            * Ayúdanos a confirma tu asistencia antes del 1ro de Junio en el botón que se encuentra en la invitación. 

                            Esperamos con todo nuestro corazón que nos acompañen en ese día tan especial 🤍
                        ";
                    }

                    if ($reg->tipo_impresion=="Printed") {
                        $mensaje = "

                            Hola muy buenos días (tarde)!
                            Es un placer para Orel y para mi (para Sarah y para mi) poder compartir con ustedes nuestro SAVE THE DATE - RESERVA LA FECHA para Nuestra Boda! 
                            
                            Aparta el sábado 13 de Julio 2024 🤍

                            * Por favor encuentren el SAVE THE DATE en el siguiente link.
                            * Ayúdanos a confirma tu asistencia antes del 1ro de Junio en el botón que se encuentra en el link. 

                            Espera tu Invitación Física más adelante ✨
                        
                        ";
                    }

                    echo '

                            <div style="width: 100%; text-align: left; background-color: #F7F7F7; border-radius: 10px; margin-top: 10px; padding: 10px 50px;">
                                <b>'.$reg->codigo_comp.'</b>
                                <p>
                                
                            
                    ';	

                    $idgrupo = $reg->codigo_comp;

                        $rspta2 = $index->listar_grupo($idgrupo);        
                        while ($reg2 = $rspta2->fetch_object())
                        {

                            echo '
                                <b style="margin-right: 5px;">'.$reg2->nombre.' /</b>
                            
                            ';

                        }


                    echo '
                                </p>
                                <div>
                                    <label>Tipo de impresión: '.$reg->tipo_impresion.'</label>
                                </div>
                                <div style="width: 100%;">
                                    
                                    <textarea name="" id="text_mensaje'.$reg->idinvitados.'" cols="30" rows="10">
                                        '.$mensaje.'
                                    </textarea>
                                </div>
                                <div>
                                    <a id="btn_enviar_inv'.$reg->idinvitados.'" href="#" onclick="enviar_inv('.$reg->idinvitados.');">
                                        <button>Enviar invitación</button>
                                    </a>
                                    
                                </div>
                            </div>
                    ';
                }
    break;

    case 'listar_grupo_send':

        $quien_envia = $_GET['quien_envia'];
        $estatus = $_GET['estatus'];

        $rspta = $index->listar_grupo_send($estatus);
            
        while ($reg = $rspta->fetch_object())
                {
                    date_default_timezone_set('America/Mexico_City');
                    $hora = date("G");
                    if ($hora>=0 AND $hora<=11) {
                        $tiempo = "días";
                    }
                    if ($hora>=12 AND $hora<=23) {
                        $tiempo = "tardes";
                    }

                    if ($quien_envia=="1") {
                        $novios = "Orel y para mi";
                    }
                    if ($quien_envia=="2") {
                        $novios = "Sarah y para mi";
                    }

                    $link = "https://wedding-sarah-orel-julio2024.site/invitacion_digital.php?id=".$reg->clave.$reg->posicion;

                    if ($reg->tipo_impresion=="Digital") {
                        $mensaje = "
                            Hola muy buenos $tiempo!
                            Es un placer para $novios poderles invitar a Nuestra Boda!! La cual se celebrará el 13 de julio 2024 en Guadalajara.
                            * Por favor encuentren la Invitación Digital en el siguiente link.
                            * Ayúdanos a confirma tu asistencia antes del 1ro de Junio en el botón que se encuentra en la invitación. 

                            Esperamos con todo nuestro corazón que nos acompañen en ese día tan especial 🤍

                            $link
                            
                        ";
                    }

                    if ($reg->tipo_impresion=="Printed") {
                        $mensaje = "

                            Hola muy buenos $tiempo!
                            Es un placer para $novios poder compartir con ustedes nuestro SAVE THE DATE - RESERVA LA FECHA para Nuestra Boda! 
                            
                            Aparta el sábado 13 de Julio 2024 🤍

                            * Por favor encuentren el SAVE THE DATE en el siguiente link.
                            * Ayúdanos a confirma tu asistencia antes del 1ro de Junio en el botón que se encuentra en el link. 

                            Espera tu Invitación Física más adelante ✨

                            $link
                           
                        
                        ";
                    }

                    if ($reg->inv_enviada==1) {
                        $stat = "Invitación enviada";
                        $color_text = "green";
                    }
                    if ($reg->inv_enviada==0) {
                        $stat = "Invitación sin enviar";
                        $color_text = "red";
                    }

                    echo '
                        <div style="100%; margin: 10px; background-color: #E7EEF3; color: #000; padding: 20px 20px; line-height: 25px; border-radius: 10px;">
                            Codigo invitación: <b>'.$reg->codigo_comp.'</b><br>
                            Nombre: <b>'.$reg->nombre.'</b><br>
                            Tipo de impresión: <b>'.$reg->codigo_compg.'</b><br>
                            Estatus: <b style="color: '.$color_text.';">'.$stat.'</b><br>
                            <div style="width: 100%; margin-top: 10px;">
                                <textarea name="" id="text_mensaje'.$reg->idinvitados.'"  rows="10" style="width: 100%;">
                                    '.$mensaje.'
                                </textarea>
                            </div>
                            <div style="width: 100%; margin-top: 10px;">
                                <a id="btn_enviar_inv'.$reg->idinvitados.'" href="#" target="_blank" onclick="enviar_inv('.$reg->idinvitados.',\''.$reg->nombre.'\');">
                                    <button style="padding: 10px 30px; background-color: #2672A7; color: #fff; border: none; border-radius: 10px;">Enviar invitación</button>
                                </a>
                            </div>
                        </div>
                        
                    ';
                }
    break;

    case 'marcar_enviado':

        $idinvitados = $_POST['idinvitados'];
        $rspta=$index->marcar_enviado($idinvitados);
        echo json_encode($rspta);
         
    break;
	
}
?>