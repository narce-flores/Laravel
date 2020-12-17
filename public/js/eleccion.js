function validate(){
    let valid = true;
    if ($("#periodo").val().trim()==""){
        alert("Escriba un Perdio");
        valid = false;
    }

    if ($("#fecha").val().trim() ==""){
        alert("Seleccione la fecha");
        valid = false;
    }

    if ($("#fechaapertura").val().trim() ==""){
        alert("Seleccione una fecha de inicio");
        valid = false;
    }

    if ($("#horaapertura").val().trim() ==""){
        alert("Seleccione una hora de inicio");
        valid = false;
    }

    if ($("#fechacierre").val().trim() ==""){
        alert("Seleccione una fecha de cierre");
        valid = false;
    }

    if ($("#horacierre").val().trim() ==""){
        alert("Seleccione una hora de cierre");
        valid = false;
    }

    if ($("#observaciones").val().trim() ==""){
        alert("Anote las observaciones correspondientes");
        valid = false;
    }

    return (valid);
}