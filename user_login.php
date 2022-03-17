<?php include 'header.php';?>
<?php
  session_start();
  if(isset($_POST['user_login'])){
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection, "hotel");
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
?>

<br>
<form>
  <div style="text-align: center;">
  <label class="form-label" >User</label>
  </div>
  
  <div class="mb-3">
    <label for="" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">CNIC</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <br>
  <button type="submit" class="btn btn-primary" name="user_login" >Login</button>
  <a href="user_register.php" class="btn btn-primary">Register</a>

</form>
<br><br><br><br>
<?php include 'footer.php';?>