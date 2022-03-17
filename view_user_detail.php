<?php include 'header.php';?>
<br><br><br><br>
<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8">
    <form action="" method="POST">
      <a href="admin_booking.php" class="btn btn-primary">Book Room</a>
      <a href="" class="btn btn-primary">Check Room Status</a>
      <a href="" class="btn btn-primary">View User Details</a>
      <a href="" class="btn btn-primary">Recently Check-Outs</a>
      <a href="" class="btn btn-primary">Recently Check-Ins</a>
      <a href="./logout.php" class="btn btn-danger">LogOut</a>
      
    </form>
  </div>
  <div class="col-md-2"></div>  
</div>

<br><br><br><br>
<div class="row">
  <center><h3><b>Checked-IN Users's Details</b></h3></center>
  <br><br><br><br><br><br>
  <center><h4><b>Single non-AC</b></h4></center>
</div>
<br><br>
<div class="row">
  <div class="col-md-20">
    <table class="table">
      <thead>
        <tr>
          <td>Serial #</td>
          <td>User Name</td>
          <td>User ID</td>
          <td>User Contact Info</td>
          <td>Room #</td>
          <td>User Address</td>
          <td>Adults</td>
          <td>Children</td>
          <td>Check-In</td>
          <td>Check-Out</td>
        </tr>
      </thead>
        <?php
          $user_count=0;
          $connection = mysqli_connect("localhost","root","");
          $db = mysqli_select_db($connection, "hotel");
          $query = "SELECT * FROM single_non_ac WHERE status=1;";
          $query_run = mysqli_query($connection, $query);
          while($row=mysqli_fetch_assoc($query_run)){
            $user_count=$user_count+1;
            ?>
            <tr>
              <td><?php echo $user_count;?></td>
              <td><?php echo $row['holder_name'];?></td>
              <td><?php echo $row['holder_id'];?></td>
              <td><?php echo $row['holder_mobile'];?></td>
              <td><?php echo $row['room_no'];?></td>
              <td><?php echo $row['holder_address'];?></td>
              <td><?php echo $row['adult'];?></td>
              <td><?php echo $row['child'];?></td>
              <td><?php echo $row['in_date'];?></td>
              <td><?php echo $row['out_date'];?></td>
            </tr>
            <?php

          }
        ?>
    </table>
  </div>
</div>

<div class="row">
  <center><h4><b>Single AC</b></h4></center>
</div>

<br><br>

<div class="row">
  <div class="col-md-20">
    <table class="table">
      <thead>
        <tr>
          <td>Serial #</td>
          <td>User Name</td>
          <td>User ID</td>
          <td>User Contact Info</td>
          <td>Room #</td>
          <td>User Address</td>
          <td>Adults</td>
          <td>Children</td>
          <td>Check-In</td>
          <td>Check-Out</td>
        </tr>
      </thead>
        <?php
          $user_count=0;
          $connection = mysqli_connect("localhost","root","");
          $db = mysqli_select_db($connection, "hotel");
          $query = "SELECT * FROM single_ac WHERE status=1;";
          $query_run = mysqli_query($connection, $query);
          while($row=mysqli_fetch_assoc($query_run)){
            $user_count=$user_count+1;
            ?>
            <tr>
              <td><?php echo $user_count;?></td>
              <td><?php echo $row['holder_name'];?></td>
              <td><?php echo $row['holder_id'];?></td>
              <td><?php echo $row['holder_mobile'];?></td>
              <td><?php echo $row['room_no'];?></td>
              <td><?php echo $row['holder_address'];?></td>
              <td><?php echo $row['adult'];?></td>
              <td><?php echo $row['child'];?></td>
              <td><?php echo $row['in_date'];?></td>
              <td><?php echo $row['out_date'];?></td>
            </tr>
            <?php

          }
        ?>
    </table>
  </div>
</div>

<div class="row">
  <center><h4><b>Double non-AC</b></h4></center>
</div>

<br><br>

<div class="row">
  <div class="col-md-20">
    <table class="table">
      <thead>
        <tr>
          <td>Serial #</td>
          <td>User Name</td>
          <td>User ID</td>
          <td>User Contact Info</td>
          <td>Room #</td>
          <td>User Address</td>
          <td>Adults</td>
          <td>Children</td>
          <td>Check-In</td>
          <td>Check-Out</td>
        </tr>
      </thead>
        <?php
          $user_count=0;
          $connection = mysqli_connect("localhost","root","");
          $db = mysqli_select_db($connection, "hotel");
          $query = "SELECT * FROM double_non_ac WHERE status=1;";
          $query_run = mysqli_query($connection, $query);
          while($row=mysqli_fetch_assoc($query_run)){
            $user_count=$user_count+1;
            ?>
            <tr>
              <td><?php echo $user_count;?></td>
              <td><?php echo $row['holder_name'];?></td>
              <td><?php echo $row['holder_id'];?></td>
              <td><?php echo $row['holder_mobile'];?></td>
              <td><?php echo $row['room_no'];?></td>
              <td><?php echo $row['holder_address'];?></td>
              <td><?php echo $row['adult'];?></td>
              <td><?php echo $row['child'];?></td>
              <td><?php echo $row['in_date'];?></td>
              <td><?php echo $row['out_date'];?></td>
            </tr>
            <?php

          }
        ?>
    </table>
  </div>
</div>

<div class="row">
  <center><h4><b>Double AC</b></h4></center>
</div>

<br><br>

<div class="row">
  <div class="col-md-20">
    <table class="table">
      <thead>
        <tr>
          <td>Serial #</td>
          <td>User Name</td>
          <td>User ID</td>
          <td>User Contact Info</td>
          <td>Room #</td>
          <td>User Address</td>
          <td>Adults</td>
          <td>Children</td>
          <td>Check-In</td>
          <td>Check-Out</td>
        </tr>
      </thead>
        <?php
          $user_count=0;
          $connection = mysqli_connect("localhost","root","");
          $db = mysqli_select_db($connection, "hotel");
          $query = "SELECT * FROM double_ac WHERE status=1;";
          $query_run = mysqli_query($connection, $query);
          while($row=mysqli_fetch_assoc($query_run)){
            $user_count=$user_count+1;
            ?>
            <tr>
              <td><?php echo $user_count;?></td>
              <td><?php echo $row['holder_name'];?></td>
              <td><?php echo $row['holder_id'];?></td>
              <td><?php echo $row['holder_mobile'];?></td>
              <td><?php echo $row['room_no'];?></td>
              <td><?php echo $row['holder_address'];?></td>
              <td><?php echo $row['adult'];?></td>
              <td><?php echo $row['child'];?></td>
              <td><?php echo $row['in_date'];?></td>
              <td><?php echo $row['out_date'];?></td>
            </tr>
            <?php

          }
        ?>
    </table>
  </div>
</div>

<?php include 'footer.php';?>