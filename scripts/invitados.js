$.post("ajax/index.php?op=listar_grupo_send",function(r){
$("#lista_invitados").html(r);
});

function enviar_inv(idinvitados)
{
    var text_mensaje = $("#text_mensaje"+idinvitados).val();
    //alert(text_mensaje);
    $("#btn_enviar_inv"+idinvitados).attr("href","https://api.whatsapp.com/send?phone=3332550900&text="+text_mensaje);
}