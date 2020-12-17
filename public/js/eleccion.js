function validate(){
    let valid = true;
    if ($("#periodo").val().trim()==""){
        alert("inserte un periodo");
        valid = false;
    }

    if ($("#fecha").val().trim() ==""){
        alert(" la fecha no puede quedar vacio");
        valid = false;
    }

    if ($("#fechaapertura").val().trim() ==""){
        alert("la fecha de inicio no puede quedar vacio");
        valid = false;
    }

    if ($("#horaapertura").val().trim() ==""){
        alert("la hora de apertura no puede quedar vacio");
        valid = false;
    }

    if ($("#fechacierre").val().trim() ==""){
        alert("inserte una fecha de cierre no puede quedar vacio");
        valid = false;
    }

    if ($("#horacierre").val().trim() ==""){
        alert("Seleccione una hora de cierre no puede quedar vacio");
        valid = false;
    }

    if ($("#observaciones").val().trim() ==""){
        alert("la casilla no puede quedar vacio");
        valid = false;
    }

    return (valid);
}