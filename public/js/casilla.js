function validate(){
	let valid =true;
	if($("#ubicacion").val().trim()==""){
		alert("la ubicacion de la casilla no puede quedar en vacio");
		valid = false;

	}
	
	return (valid);
}