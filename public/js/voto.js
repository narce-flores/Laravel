function validate(){
    let valid = true;
    if ($("#evidencia").val().trim()==""){
        alert("el pdf con la evidencia no puede quedar vacio");
        valid = false;
    }
    $(".voto").each(function(index,element){
    	if ($(this).val().trim()=="") {
    		alert("los Votos correspondientes no puede quedar vacio");
    		valid = false;
    	}
    });

    return (valid);
}