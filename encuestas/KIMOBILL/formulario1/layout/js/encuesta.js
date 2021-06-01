function limpiar(){document.getElementById("restxtOption1").value = "";document.getElementById("restxtSelect2").value = "";document.getElementById("restxtOption3").value = "";}
function Guardar(){var parametros = {
        "Enviar": true,"txtOption1":traerDato("txtOption1"),"restxtOption1": document.getElementById("restxtOption1").value,"txtSelect2":$("#txtSelect2").val(),"restxtSelect2": document.getElementById("restxtSelect2").value,"txtOption3":traerDato("txtOption3"),"restxtOption3": document.getElementById("restxtOption3").value};console.log(parametros);
        $.ajax({
        data: parametros, url: "ajax/encuesta.php", type: "POST",
        success: function (response) {
        console.log(response);
            if (response == 1) {
                swal("CORRECTO...!", "El Registro Fue Creado sin Problemas.. ", "success").then((value) => {
                            window.location.href="http://www.kimobill.com";
                        });
            } else {
                swal("ERROR...!", "No se pudo Concluir el Proceso Intentelo Mas Tarde", "warning");                
            }
        }
    });}
function traerDato(name){
    var intradio=document.getElementsByName(name);    
            for(var i=0; i < intradio.length;i++) {
                if (intradio[i].checked) {
                    return intradio[i].value;
                }
            }
            }
            function vercheck(name){
            var checkbox= document.getElementById(name);
    //Si está marcada ejecuta la condición verdadera.
    if(checkbox.checked){
        return ($("input:checkbox[name="+name+"]:checked").val());
    }
    //Si se ha desmarcado se ejecuta el siguiente mensaje.
    else{
        return "";
    }
}
            

