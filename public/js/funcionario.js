function validate(){
	let valid =true;
	if($("#nombrecompleto").val().trim()==""){
		alert("el nombre completo del funcionario no puede quedar en vacio");
		valid = false;

	}
	if($("#sexo").val().trim()==""){
		alert("el sexo del funcionario no puede quedar en vacio");
		valid = false;

	}
	
	return (valid);
}