<?php
require('../template/header.php');
?>

<div class="col-md-5">
 <form method="POST">
  <div class = "form-group">
  <label for="document">Document Numer/Date</label>
  <input type="text" class="form-control" name ="document" id="document" placeholder="Document Number/Date">
  </div>
  <div class="form-group">
  <label for="detail">Details</label>
  <textarea class="form-control" id="detail" name="detail" placeholder="Details"></textarea>
  </div><br/>
  <button type="submit" class="btn btn-primary">Sign In</button>
 </form>
 
 
</div>
<div class="col-md-7">
 Data
</div>

<?php
require('../template/footer.php');
?>