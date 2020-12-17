function validate(){
	let valid =true;
	if($("#nombrecompleto").val().trim()==""){
		alert("el nombre del candidato no debe quedar vacio");
		valid = false;

	}

	if($("#foto").val().trim()==""){
		alert("la foto del candidato no debe quedar vacio");
		valid = false;

	}
	if($("#perfil").val().trim()==""){
		alert("el perfil del candidato no debe quedar vacio");
		valid = false;

	}
	
	return (valid);
}