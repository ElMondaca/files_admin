<?php
require('../template/header.php');
?>

<!-- Button trigger modal
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

Modal 
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> -->

<div class="col-md-5">
 <form method="POST" enctype="multipart/form-data">
  <div class = "form-group">
  <label for="document">Numero y Fecha del Documento</label>
  <input type="text" class="form-control" name ="document" id="document" placeholder="Ejemplo: OficioN°22/2022">
  </div>
  <div class="form-group">
  <label for="detail">Detalles</label>
  <textarea class="form-control" id="detail" name="detail" placeholder="Motivo del envío del Oficio"></textarea>
  </div><br/>
   <button type="button" class="btn btn-primary">Save</button> 
   <button type="button" class="btn btn-danger">Clear</button>
 </form>
 
 
</div>
<div class="col-md-7">
<div>Detalles de Documentos</div>
<div>Oficio N°1/2023 - Notificación de cese de Contrato   <button type="button" class="btn btn-primary" value="oficio1">Actualizar estado</button></div></right><br/>
<div>Oficio N°2/2023 - Solicita extensión de presupuesto para laboratorios <button type="button" class="btn btn-primary">Actualizar estado</button></div><br/>
<div>Oficio N°3/2023 - Anexo de contratación a Honorarios<button type="button" class="btn btn-primary">Actualizar estado</button></div><br/>
<div>Oficio N°4/2023 - Licitación rechazada <button type="button" class="btn btn-primary">Actualizar estado</button></div><br/>
</div>

<?php
require('../template/footer.php');
?>