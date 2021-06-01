<?php
session_start();
include 'data/seguridad.php';
include 'layout/header.php';
?>
<script src="layout/jquery/encuestas.js"></script>
<?php
include 'layout/body.php';
include 'layout/menu.php';
?>
<div class="container">
    <div class="text-center"><br><br><h3><label>ENCUESTAS CREADAS</label></h3><br><br></div>
    <div class="row">
        <div id="DataEncuestas">


        </div>
    </div>
</div>

<div class="modal fade" id="ModalData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">INFORMACIÓN INGRESADA</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="divData"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<?php
include 'layout/footer.php';
?>
<script>
    Buscar();
</script>
</body>
</html>