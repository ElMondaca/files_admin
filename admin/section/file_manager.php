<?php
require('../template/header.php');
?>

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
<div>Oficio N°1/2023 - Notificación de cese de Contrato   <button type="button" class="btn btn-primary">Actualizar estado</button></div></right><br/>
<div>Oficio N°2/2023 - Solicita extensión de presupuesto para laboratorios <button type="button" class="btn btn-primary">Actualizar estado</button></div><br/>
<div>Oficio N°3/2023 - Anexo de contratación a Honorarios<button type="button" class="btn btn-primary">Actualizar estado</button></div><br/>
<div>Oficio N°4/2023 - Licitación rechazada <button type="button" class="btn btn-primary">Actualizar estado</button></div><br/>
</div>

<?php
require('../template/footer.php');
?>