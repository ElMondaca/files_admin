<?php
if($_POST){
 header('Location:admin_menu.php');
}
?>
<!doctype html>
<html lang="en">
<head>
 <title>Log-in</title>
 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<br/>
<div class="container">
 <div class="row">

 <div class="col-md-4">
  <!--Spacing the log in form-->
 </div>

  <div class="col-md-4">
   
   <div class="card">
    <div class="card-header">
     Login
    </div>
    <div class="card-body">
     <form action="#" method="POST">

      <div class = "form-group">
       <label>User name</label>
       <input type="text" class="form-control" name="user" placeholder="Enter your username">
       </div>

      <div class="form-group">
       <label>Password</label>
       <input type="password" name="password" class="form-control" placeholder="Password">
      </div>

      <button type="submit" class="btn btn-primary">Log in</button>
     </form>
    </div>
   </div>


  </div>
  
 </div>
</div>

</body>
</html>