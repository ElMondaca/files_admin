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
</div>
-->

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