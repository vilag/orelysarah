listar_invitados();
listar_tbl_invitados();
contar_personas();

function listar_tbl_invitados()
{

    $.post("ajax/index.php?op=listar_tbl_invitados",function(r){
    $("#rows_inv_tbl").html(r);
    });
}

function filtro(dato){
    $.post("ajax/index.php?op=listar_tbl_invitados_filtro&dato="+dato,function(r){
    $("#rows_inv_tbl").html(r);
    });
}

function listar_invitados()
{
    var quien_envia = $("#quien_envia").val();

    $.post("ajax/index.php?op=listar_grupo_send&quien_envia="+quien_envia+"&estatus="+0,function(r){
    $("#lista_invitados").html(r);
    });
}

function listar_invitados_env()
{
    var quien_envia = $("#quien_envia").val();

    $.post("ajax/index.php?op=listar_grupo_send&quien_envia="+quien_envia+"&estatus="+1,function(r){
    $("#lista_invitados").html(r);
    });
}

function listar_invitados_noenv()
{
    var quien_envia = $("#quien_envia").val();

    $.post("ajax/index.php?op=listar_grupo_send&quien_envia="+quien_envia+"&estatus="+2,function(r){
    $("#lista_invitados").html(r);
    });
}


function enviar_inv(idinvitados, nombre)
{
    var person = prompt("Número de whatsapp para: "+nombre, "");
    //alert(person);
    var number;
    if (person == null || person == "") {
    number = "No se capturó el numero.";
    } else {
        number = person;
        var text_mensaje = $("#text_mensaje"+idinvitados).val();
        $("#btn_enviar_inv"+idinvitados).attr("href","https://api.whatsapp.com/send?phone="+number+"&text="+text_mensaje);
    }

    $.post("ajax/index.php?op=marcar_enviado",{idinvitados:idinvitados},function(data, status)
	{
        data = JSON.parse(data);

    });
    
}

function buscar_persona()
{
    var input_buscar = $("#input_buscar").val();
    var quien_envia = $("#quien_envia").val();

    $.post("ajax/index.php?op=listar_grupo_send_buscar&quien_envia="+quien_envia+"&estatus="+0+"&buscar="+input_buscar,function(r){
    $("#lista_invitados").html(r);
    });
}

function update_nombre(idinvitados)
{
    var nombre = $("#input_nom"+idinvitados).val();

    $.post("ajax/index.php?op=update_nombre",{idinvitados:idinvitados,nombre:nombre},function(data, status)
	{
        data = JSON.parse(data);

    });

}

function marcar_entrega(idinvitados)
{
    //alert(idinvitados);
    $.post("ajax/index.php?op=marcar_entrega",{idinvitados:idinvitados},function(data, status)
	{
        data = JSON.parse(data);
        listar_tbl_invitados();

    });
}

function marcar_no_entrega(idinvitados)
{
    //alert(idinvitados);
    $.post("ajax/index.php?op=marcar_no_entrega",{idinvitados:idinvitados},function(data, status)
	{
        data = JSON.parse(data);
        listar_tbl_invitados();

    });
}

function update_tipo_imp(idinvitados)
{
    // alert(idinvitados);
    // alert(tipo_impresion);
    //return;
    var tipo_impresion = $("#input_tipo_imp"+idinvitados).val();
    $.post("ajax/index.php?op=update_tipo_imp",{idinvitados:idinvitados,tipo_impresion:tipo_impresion},function(data, status)
	{
        data = JSON.parse(data);
        listar_tbl_invitados();

    });
}

function contar_personas(){
    $.post("ajax/index.php?op=contar_personas",function(data, status)
	{
        data = JSON.parse(data);

        $("#cant_adultos").text(data.cant_adultos);
        $("#cant_ninos").text(data.cant_ninos);

        $("#cant_todos").text(data.cant_todos);
        $("#cant_sin_confirm").text(data.cant_sin_confirm);
        $("#cant_asisten").text(data.cant_asisten);
        $("#cant_no_asisten").text(data.cant_no_asisten);
        $("#cant_sin_confirm_n").text(data.cant_sin_confirm_n);
        $("#cant_asisten_n").text(data.cant_asisten_n);
        $("#cant_no_asisten_n").text(data.cant_no_asisten_n);

    });
}

function cambiar_confirm(idinvitados, confirmacion){

    if (confirmacion==0) {
        confirmacion=1;
    }else{
        if (confirmacion==1) {
            confirmacion=2;
        }else{
            if (confirmacion==2) {
                confirmacion=0;
            }
        }
    }

    $.post("ajax/index.php?op=cambiar_confirm",{idinvitados:idinvitados,confirmacion:confirmacion},function(data, status)
	{
        data = JSON.parse(data);
        listar_tbl_invitados();

    });

}