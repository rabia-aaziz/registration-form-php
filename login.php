<?php
if(isset($_GET['msg'])){
    $error = $_GET['msg'];
    if($error == 1){
        echo '<div role="alert" class="alert alert-danger">This email is already registered</div>';
    }
}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
     <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
  <!-- icon-cdn -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
    integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>
<body>


    <div class="container">
 
    <h2>
     <small class="text-muted">User Login form</small>
   </h2>
  
        <div class="row">
            <div class="col-md-6">
            <form class="row g-3" method="post" action="form.php">
<div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="formGroupExampleInput" title=""
          placeholder="abc@gmail.com" required>
      </div>

      <div class="col-md-6" class="input-group-text">
        <label for="inputEmail4" class="form-label">Password</label>
     
          <input type="password" id="password" name="password" class="form-control" pattern="[a-z]{8,20}"
            id="inputEmail4" title=" Must contain at least 8 or more characters" required>
</div>

<div class="col-12">
        <button type="submit" name="loginbtn" class="btn btn-primary" id="regbtn">Login</button>
      </div>
</form>
</div>
</div>
</div>



</body>
</html>