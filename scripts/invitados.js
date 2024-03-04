listar_invitados();

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