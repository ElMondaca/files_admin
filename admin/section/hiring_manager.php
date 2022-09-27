<?php
require('../template/header.php');
?>

<div class="col-md-5">
 <form method="POST" enctype="multipart/form-data">
  <div class = "form-group">
  <label for="document">Nombre</label>
  <input type="text" class="form-control" name ="document" id="document" placeholder="Numero de Propuesta + Nombre de persona">
  </div>
  <div class="form-group">
  <label for="detail">Detalles</label>
  <textarea class="form-control" id="detail" name="detail" placeholder="Actividad a realizar para el Departamento"></textarea>
  </div><br/>
   <button type="button" class="btn btn-primary">Save</button> 
   <button type="button" class="btn btn-danger">Clear</button>
 </form>
 
 
</div>
<div class="col-md-7">
<div>Detalles de Contrataciones</div>
<div>01/2022 - Jorge Mondaca Fábrega - Paradocente Enfermería   <button type="button" class="btn btn-primary">Actualizar estado</button></div></right><br/>
<div>02/2022 - Lidice Zuleta Gonzalez - Directora Departamento Enfermería <button type="button" class="btn btn-primary">Actualizar estado</button></div><br/>
<div>03/2022 - Alexandra Willeke Escobar - Directora Escuela Enfermería <button type="button" class="btn btn-primary">Actualizar estado</button></div><br/>
<div>04/2022 - Andrea Castillo Lopez - Secretaria Escuela Enfermería  <button type="button" class="btn btn-primary">Actualizar estado</button></div><br/>

</div>

<?php
require('../template/footer.php');
?>