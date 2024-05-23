
 <?php


 if(isset($_GET["msg"])){
    $msg=$_GET['msg'];
    if($msg ==1){
        echo '<div role="alert" class="alert alert-danger">This email is already registered</div>';
    }

 }
  ?> 




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
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

      <small class="text-muted">User Registration form</small>
    </h2>

    <form class="row g-3" method="post" action="form.php">

      <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Name</label>
        <input type="text" name="name" id="name" class="form-control" id="formGroupExampleInput"
          pattern="[A-Za-z].{3,20}" title="must contain 3 or more characters" placeholder="your name" required>
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">User Name</label>
        <input type="text" name="username" class="form-control" id="formGroupExampleInput2" pattern="[a-z]{8}"
          title="Must contain 8 characters" placeholder="user name" required>
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="formGroupExampleInput" title=""
          placeholder="abc@gmail.com" required>
      </div>

      <div class="col-md-6" class="input-group-text">
        <label for="inputEmail4" class="form-label">Password</label>
        <span>
          <input type="password" id="password" name="password" class="form-control" pattern="[a-z]{8,20}"
            id="inputEmail4" title=" Must contain at least 8 or more characters" required>

          <i class="bi bi-eye " id="eye"  ></i>
          <!-- <span class="input-group-text"><i class="bi bi-eye" id="eye"></i></span> -->
        </span>
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Confirm Password</label>
        <input type="password" id="confpass" name="confirmpassword" class="form-control " pattern="[a-z]{8,20}"
          id="inputPassword4" title="Must contain at least 8 or more characters" disabled required>

        <small class="form-text" id="helppass"></small>

      </div>
      <!-- <div class="col-12">
          <label for="inputAddress" class="form-label">Address</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="col-12">
          <label for="inputAddress2" class="form-label">Address 2</label>
          <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
        </div>
        <div class="col-md-6">
          <label for="inputCity" class="form-label">City</label>
          <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="col-md-4">
          <label for="inputState" class="form-label">State</label>
          <select id="inputState" class="form-select">
            <option selected>Choose...</option>
            <option>...</option>
          </select>
        </div>
        <div class="col-md-2">
          <label for="inputZip" class="form-label">Zip</label>
          <input type="text" class="form-control" id="inputZip">
        </div>
        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Check me out
            </label>
          </div>
        </div> -->
      <div class="col-12">
        <button type="submit" name="subform" class="btn btn-primary" id="regbtn" disabled>Register</button>
      </div>
    </form>
  </div>

</body>
<script src="script.js"></script>

</html>