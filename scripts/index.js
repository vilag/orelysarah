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

function asistir(idinvitados)
{
   // alert(idinvitados);
    $("#input_confirm"+idinvitados).val("1");
}
function noasistir(idinvitados)
{
    $("#input_confirm"+idinvitados).val("2");
}

init();