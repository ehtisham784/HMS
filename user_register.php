<?php include 'header.php';?>
<?php
  session_start();
  if(isset($_POST['user_register'])){
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection, "hotel");
    $query="INSERT INTO user ";
    $query = "SELECT * FROM user WHERE cnic='$_POST[cnic]'";
    $query_run = mysqli_query($connection, $query);
    while($row=mysqli_fetch_assoc($query_run)){
      if($row['email'] == $_POST['email']){
        if($row['password'] == $_POST['password']){
          header("location:admin_dashboard.php");
        }
        else{
          echo "<script>alert('Wrong Password')</script>";
        }
      }
    }
  }
?>


<form class="row g-3 needs-validation" novalidate>
  <div class="col-md-4">
    <label  class="form-label">Full Name</label>
    <input type="text" class="form-control" id="" placeholder="name here" required>
  </div>
  <br>

  <div class="col-md-4">
    <label  class="form-label">CNIC</label>
    <input type="text" class="form-control" id="" placeholder="email here" required>
  </div>

  <div class="col-md-4">
    <label  class="form-label">Email</label>
    <input type="email" class="form-control" id="" placeholder="email here" required>
  </div>

  <div class="col-md-4">
    <label  class="form-label">Password</label>
    <input type="password" class="form-control" id="" placeholder="password here" required>
  </div>

  <div class="col-md-6">
    <label  class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" >
  </div>

  <div class="col-md-2">
    <label class="form-label">City</label>
    <input type="text" class="form-control" id="" placeholder="city here"> 
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary" name="user_register">Register</button>
  <a href="user_login.php" class="btn btn-primary">Already Registered!</a>
  </div> 
</form>
<br>
<br>
<?php include 'footer.php';?>