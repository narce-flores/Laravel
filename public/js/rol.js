function validate(){
    let valid = true;
    if ($("#descripcion").val().trim()==""){
        alert("La descripción del funcionario no puede quedar vacía");
        valid = false;
    }
    return (valid);
}