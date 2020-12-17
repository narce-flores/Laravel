function validate(){
    let valid = true;
    if ($("#imei").val().trim()==""){
        alert("Es necesario insertar un imei");
        valid = false;
    }
    return (valid);
}