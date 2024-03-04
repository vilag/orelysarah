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
    var posicion = idgrupo.substring(idgrupo.length, idgrupo.length-1);
    var pos_final = 5+parseInt(posicion);
    var idgrupo_simple = idgrupo.substring(5, pos_final);
   
    $.post("ajax/index.php?op=listar_grupo&idgrupo="+idgrupo_simple,function(r){
    $("#lista_inf_group").html(r);
    });
}

function contar_lugares()
{
    var idgrupo = $("#idgrupo").text();
    var posicion = idgrupo.substring(idgrupo.length, idgrupo.length-1);
    var pos_final = 5+parseInt(posicion);
    var idgrupo_simple = idgrupo.substring(5, pos_final);

    $.post("ajax/index.php?op=contar_lugares",{idgrupo_simple:idgrupo_simple},function(data, status)
	{
        data = JSON.parse(data);

        $("#cant_personas").text(data.cant_personas);

    });
}

function btn_enter(idinvitados,confirmacion)
{
    if (confirmacion<0) {
        $("#btn_confirm"+idinvitados).removeClass('estilo_btn_confirm').addClass('estilo_btn_confirm_hover');
    }else{
        $("#btn_confirm"+idinvitados).addClass('estilo_btn_confirm_hover');
    }
    
}
function btn_leave(idinvitados,confirmacion)
{
    if (confirmacion<0) {
        $("#btn_confirm"+idinvitados).removeClass('estilo_btn_confirm_hover').addClass('estilo_btn_confirm');
    }else{
        $("#btn_confirm"+idinvitados).removeClass('estilo_btn_confirm_hover');
    }
    
}
function btn_enter2(idinvitados,confirmacion)
{
    if (confirmacion<0) {
        $("#btn_noconfirm"+idinvitados).removeClass('estilo_btn_confirm').addClass('estilo_btn_confirm_hover');
    }else{
        $("#btn_noconfirm"+idinvitados).addClass('estilo_btn_confirm_hover');
    }
    
}
function btn_leave2(idinvitados,confirmacion)
{
    if (confirmacion<0) {
        $("#btn_noconfirm"+idinvitados).removeClass('estilo_btn_confirm_hover').addClass('estilo_btn_confirm');
    }else{
        $("#btn_noconfirm"+idinvitados).removeClass('estilo_btn_confirm_hover');
    }
    
}

function asistir(idinvitados)
{
   // alert(idinvitados);
    $("#input_confirm"+idinvitados).val("1");
    $("#btn_confirm"+idinvitados).removeClass('estilo_btn_confirm');
    $("#btn_confirm"+idinvitados).removeClass('estilo_btn_confirm_hover');
    $("#btn_confirm"+idinvitados).addClass('estilo_btn_confirm_select');

    $("#btn_noconfirm"+idinvitados).removeClass('estilo_btn_confirm_select');
    $("#btn_noconfirm"+idinvitados).removeClass('estilo_btn_confirm_hover');
    $("#btn_noconfirm"+idinvitados).addClass('estilo_btn_confirm');
    
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
            confirmacion:2
        }
        confirm_group.push(confirm_persona);
    }else{
        confirm_group[elementIndex].confirmacion = 2;
    }

    console.log(confirm_group);
}

function guardar_confirmacion()
{
    $.ajax({
        type: "POST",
        url: "ajax/guardar_confirm.php",
        data: {'array': JSON.stringify(confirm_group)},//capturo array
        success: function(data){
            alert(data);
        }
    });
}

init();