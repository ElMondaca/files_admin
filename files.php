<?php
 require("template/header.php");
?>


<div class="col-md-3">
 <div class="card">
  <img class="card-img-top" src="holder.js/100x180/" alt="">
  <div class="card-body">
   <h4 class="card-title">Oficio N°1/2023</h4>
   <p class="card-text">Notificación de cese de Contrato</p>
   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Ver Detalles</button>
  </div>
 </div>
</div>

<div class="col-md-3">
 <div class="card">
  <img class="card-img-top" src="holder.js/100x180/" alt="">
  <div class="card-body">
   <h4 class="card-title">Oficio N°2/2023</h4>
   <p class="card-text">Solicita extensión de presupuesto para laboratorios</p>
   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Ver Detalles</button>
  </div>
 </div>
</div>

<div class="col-md-3">
 <div class="card">
  <img class="card-img-top" src="holder.js/100x180/" alt="">
  <div class="card-body">
   <h4 class="card-title">Oficio N°3/2023</h4>
   <p class="card-text">Anexo de contratación a Honorarios</p>
   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Ver Detalles</button>
  </div>
 </div>
</div>

<div class="col-md-3">
 <div class="card">
  <img class="card-img-top" src="holder.js/100x180/" alt="">
  <div class="card-body">
   <h4 class="card-title">Oficio N°4/2023</h4>
   <p class="card-text">Licitación rechazada</p>
   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Ver Detalles</button>
  </div>
 </div>
</div>






<div class="modal fade" name="exampleModal" id="exampleModal" tabindex="-1" role="dialog" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



<?php
 require("template/footer.php");
?>