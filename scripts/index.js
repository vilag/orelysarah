function init(){
 //alert("entra");
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

init();