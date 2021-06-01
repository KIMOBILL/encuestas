<?php
session_start();
include 'data/seguridad.php';
include 'layout/header.php';
?>
<script src="layout/jquery/addobject.js" type="text/javascript"></script>
<script src="layout/jquery/main.js" type="text/javascript"></script>
<link rel="stylesheet" href="layout/css/main.css">
<?php
include 'layout/body.php';
include 'layout/menu.php';
?>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id='estructura'></div>
            </div>
            <div class="modal-footer">
                <div id="divButton"></div>                              
            </div>
        </div>
    </div>
</div>
<!--tabindex="-1"-->
<div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"  id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">OPCIONES</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <div class="offcanvas-body">

        <div>
            Seleccionar el Objeto a Insertar
        </div>
        <br>
        <div class="list-group">
            <label class="list-group-item list-group-item-action active">Diseño</label>
            <a href="#" class="list-group-item list-group-item-action fas fa-palette " onclick="Color();"> Color de Fondo </a>
            <a href="#" class="list-group-item list-group-item-action fas fa-palette " onclick="Letras();"> Color de Letras</a> 
        </div> 
        <div class="list-group">
            <label class="list-group-item list-group-item-action active">Formulario</label>
            <a href="#" class="list-group-item list-group-item-action fas fa-file-image " onclick="Imagen();"> Logo o Imagen</a>
            <a href="#" class="list-group-item list-group-item-action fas fa-heading " onclick="Titulo();"> Titulos</a>
            <a href="#" class="list-group-item list-group-item-action fas fa-heading " onclick="SubTitulo();"> Subtitulos</a>
            <a href="#" class="list-group-item list-group-item-action fas fa-tags " onclick="Description();"> Descripción</a>
            <a href="#" class="list-group-item list-group-item-action fas fa-at " onclick="Email();"> Dirección de correo electrónico</a> 
            <a href="#" class="list-group-item list-group-item-action fas fa-file-prescription " onclick="Coment();"> Caja de comentarios</a>                    
            <a href="#" class="list-group-item list-group-item-action fab fa-wpforms " onclick="FormContact();"> Formulario de contacto</a>                    
        </div> 
        <div class="list-group">
            <label class="list-group-item list-group-item-action active">Tipos de Preguntas</label>
            <a href="#" class="list-group-item list-group-item-action fas fa-tags " onclick="Pregunta();"> Simple</a>
            <a href="#" class="list-group-item list-group-item-action far fa-check-circle " onclick="PreOptionOne();"> Una Opción</a>
            <a href="#" class="list-group-item list-group-item-action far fa-check-circle " onclick="OptionRespuesta();"> Opción con Respuesta</a>  
            <a href="#" class="list-group-item list-group-item-action fas fa-check-double " onclick="PreOptionMulti();"> Selección Multiple</a>
            <a href="#" class="list-group-item list-group-item-action far fa-calendar-check " onclick="PreOptionSelect();"> Selectivas</a>                    
        </div> 
        <div class="list-group">
            <label class="list-group-item list-group-item-action active">Medidores de Indicadores</label>
            <a href="#" class="list-group-item list-group-item-action fas fa-chart-line " onclick="INS();">  INS</a>
            <a href="#" class="list-group-item list-group-item-action fas fa-chart-line " onclick="CES();">  CES</a>  
            <a href="#" class="list-group-item list-group-item-action fas fa-chart-line " onclick="NPS();">  NPS</a>                  
        </div>
        <div class="list-group">
            <label class="list-group-item list-group-item-action active">Calificación gráfica</label>
            <a href="#" class="list-group-item list-group-item-action far fa-star fa-star " onclick="Estrellas();"> Calificación de estrellas</a>
            <a href="#" class="list-group-item list-group-item-action far fa-smile-wink " onclick="Caritas();"> Valoración de Smiley</a>
            <a href="#" class="list-group-item list-group-item-action far fa-thumbs-up " onclick="Likes();"> Pulgares arriba / abajo</a>                    
        </div>  
    </div>
</div>


<div class="container text-center">
    <br>
    <h3><b><label>DISEÑO DEL FORMULARIO DE ENCUESTAS</label></b></h3>
    <br>
    <div id="DesignFrom">
        <div class="container rounded-3" id="objetos" style="backgroundColor:#ffffff;color:#000000">
        </div>
    </div>
    <div>
        <tr><tr><tr><tr>
    </div>           

    <div>
        <button class="btn btn-outline-info" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample" onclick="abrirOffCanvas();">
            AGREGAR COMPONENTE
        </button>
        <button class="btn btn-outline-success" type="button" onclick="SaveForm();">
            GUARDAR FORMULARIO
        </button>
    </div>
</div>    
<?php
include 'layout/footer.php';
?>
<script>
    inicializar();
</script>
</body>
</html>