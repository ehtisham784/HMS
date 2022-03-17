<?php include './header.php';?>
<?php
  session_start();
  if(isset($_POST['admin_login'])){
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection, "hotel");
    $query = "SELECT * FROM admin WHERE email='$_POST[email]'";
    $query_run = mysqli_query($connection,$query);
    while($row=mysqli_fetch_assoc($query_run)){
      if($row['email'] == $_POST['email'])
      {
        if($row['password'] == $_POST['password'])
          {
            $_SESSION['name']=$row['name'];
            $_SESSION['email']=$row['email'];
            header("Location:admin_dashboard.php");
          }
        else
        {
            echo "<script>alert('Wrong Password')</script>";
        }
      }
    }
  }
?>
<br>
<form>
  <div style="text-align: center;">
  <label class="form-label" >Admin</label>
  </div>
  
  <div class="mb-3">
    <label for="exampleInputEmail1" name="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" name="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <br>
  <button type="submit" name="admin_login" class="btn btn-primary">Login</button>
  <button type="submit" class="btn btn-primary">Register</button>
  
</form>
<br><br><br><br>
<?php include './footer.php';?>