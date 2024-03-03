var confirm_group = [];
function init(){
 //alert("entra");
 setTimeout(() => {
    listar_grupo();
    contar_lugares();
 }, 1000);
}

function buscar_persona(){
    var name_num_inv = $("#name_num_inv").val();
    //alert(name_num_inv);

    $.post("ajax/index.php?op=buscar_persona",{name_num_inv:name_num_inv},function(data, status)
	{
        data = JSON.parse(data);

       // alert(data);

    });
}

function listar_grupo()
{
    var idgrupo = $("#idgrupo").text();
   // alert(idpersona);
    $.post("ajax/index.php?op=listar_grupo&idgrupo="+idgrupo,function(r){
    $("#lista_inf_group").html(r);
    });
}

function contar_lugares()
{
    var idgrupo = $("#idgrupo").text();
    $.post("ajax/index.php?op=contar_lugares",{idgrupo:idgrupo},function(data, status)
	{
        data = JSON.parse(data);

        $("#cant_personas").text(data.cant_personas);

    });
}

function btn_enter(idinvitados)
{
    $("#btn_confirm"+idinvitados).removeClass('estilo_btn_confirm').addClass('estilo_btn_confirm_hover');
}
function btn_leave(idinvitados)
{
    $("#btn_confirm"+idinvitados).removeClass('estilo_btn_confirm_hover').addClass('estilo_btn_confirm');
}
function btn_enter2(idinvitados)
{
    $("#btn_noconfirm"+idinvitados).removeClass('estilo_btn_confirm').addClass('estilo_btn_confirm_hover');
}
function btn_leave2(idinvitados)
{
    $("#btn_noconfirm"+idinvitados).removeClass('estilo_btn_confirm_hover').addClass('estilo_btn_confirm');
}

function asistir(idinvitados)
{
   // alert(idinvitados);
    $("#input_confirm"+idinvitados).val("1");
    $("#btn_confirm"+idinvitados).removeClass('estilo_btn_confirm estilo_btn_confirm_hover').addClass('estilo_btn_confirm_select');
    $("#btn_noconfirm"+idinvitados).removeClass('estilo_btn_confirm_select estilo_btn_confirm_hover').addClass('estilo_btn_confirm');
    
    elementIndex = confirm_group.findIndex((obj => obj.idinvitados == idinvitados));
    console.log(elementIndex);

    if (elementIndex<0) {
        var confirm_persona = {
            idinvitados:idinvitados,
            confirmacion:1
        }
        confirm_group.push(confirm_persona);
    }else{
        confirm_group[elementIndex].confirmacion = 1;
    }
    
    console.log(confirm_group);
    
}
function noasistir(idinvitados)
{
    $("#input_confirm"+idinvitados).val("2");
    $("#btn_noconfirm"+idinvitados).removeClass('estilo_btn_confirm estilo_btn_confirm_hover').addClass('estilo_btn_confirm_select');
    $("#btn_confirm"+idinvitados).removeClass('estilo_btn_confirm_select estilo_btn_confirm_hover').addClass('estilo_btn_confirm');

    elementIndex = confirm_group.findIndex((obj => obj.idinvitados == idinvitados));
    console.log(elementIndex);

    if (elementIndex<0) {
        var confirm_persona = {
            idinvitados:idinvitados,
            confirmacion:0
        }
        confirm_group.push(confirm_persona);
    }else{
        confirm_group[elementIndex].confirmacion = 0;
    }

    console.log(confirm_group);
}

init();