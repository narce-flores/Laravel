function validate(){
    let valid = true;
    if ($("#evidencia").val().trim()==""){
        alert("Seleccione un PDF con la evidencia no puede quedar vacio");
        valid = false;
    }
    $(".voto").each(function(index,element){
    	if ($(this).val().trim()=="") {
    		alert("Coloque los Votos correspondientes no puede quedar vacio");
    		valid = false;
    	}
    });

    return (valid);
}