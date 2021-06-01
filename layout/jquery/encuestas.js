function Buscar() {
    var parametros = {"Buscar": true};
    $.ajax({
        data: parametros, url: "ajax/Encuestas.php", type: "POST",
        success: function (response) {
            $("#DataEncuestas").html(response);
        }
    });
}


function Informacion(base, tabla) {
    var parametros = {"Informacion": true, "Base": base, "Tabla": tabla};
    $.ajax({
        data: parametros, url: "ajax/Encuestas.php", type: "POST",
        success: function (response) {

            $("#divData").html(response);
            $('#ModalData').modal('show');
        }
    });
}

function Estadisticas(base, tabla) {
    var parametros = {"Informacion": true, "Base": base, "Tabla": tabla};
    $.ajax({
        data: parametros, url: "ajax/Encuestas.php", type: "POST",
        success: function (response) {

            $("#divData").html(response);
            $('#ModalData').modal('show');
        }
    });
}

function Eliminar(codigo) {
    var parametros = {"Eliminar": true, "Codigo": codigo};
    swal({
        title: "Esta Seguro que desea eliminar la Encuesta?",
        text: "Al momento de eliminar este registro se eliminara la base de datos y la pagina web..",
        icon: "warning",
        buttons: true,
        dangerMode: true
    })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        data: parametros, url: "ajax/Encuestas.php", type: "POST",
                        success: function (response) {
                            if (response === 1 || response === "1") {
                                swal("EN HORA BUENA...!", "LA ENCUESTA FUE ELIMINADA DE LA BASE DE DATOS", "success")
                                        .then((value) => {
                                            Buscar();
                                        });
                            } else {
                                swal("ERROR...!", "No se pudo Concluir el Proceso Intentelo Mas Tarde...", "warning");
                            }
                        }
                    });
                }
            });
}


function Ver(url) {
    window.open(url, "Encuestas", "width=800, height=600");
}
