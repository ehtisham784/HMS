<?php include 'header.php'; ?>



<br><br><br><br>
<!-- banner -->

<div class="row">
  <div class="col-md-12 animated fadeInDown">
    <center>
      <h2>Booking</h2>
    </center>
  </div>
</div>
<br><br>
<div class="animated fadeInUp">
  <center>
    <h5>Single Non-AC Room</h5>
  </center>
</div>
<br>
<div class="row">
  <?php
  $connection = mysqli_connect("localhost", "root", "");
  $db = mysqli_select_db($connection, "hotel");
  $query = "SELECT * FROM single_non_ac";
  $query_run = mysqli_query($connection, $query);
  while ($row = mysqli_fetch_assoc($query_run)) {
      ?>
  <div class="col-md-2" style="margin-left:90px">
    <div class="card bg-light" style="width:300px">
      <div class="card-body">
        Room #
        <?php
          echo $row['room_no']
          ?>
        <div class="card-body">
          <p class="card-text">
            Room Status:
            <?php
              if ($row['status'] == 0) {
                  echo "<b>Avaliable</b>";
              } else {
                  echo "<b>Booked</b>";
              } ?>
          </p>
          <a href="book_room.php?rn=<?php echo $row['room_no']. "&rt=a"; ?> " class="btn btn-success 
                <?php
                          if ($row['status'] == 0) {
                              echo "active";
                          } else {
                              echo "disabled";
                          } ?> ">Book</a>
          <a href="#" class="btn btn-danger 
                          <?php
                          if ($row['status'] == 0) {
                              echo "disabled";
                          } else {
                              echo "active";
                          } ?> ">Un-Book</a>                
        </div>
      </div>
    </div>

  </div>
  <?php
  }
  ?>
</div>
<br>
<br>

<div class="animated fadeInUp">
  <center>
    <h5>Single AC Room</h5>
  </center>
</div>
<br>
<div class="row">
  <?php
  $connection = mysqli_connect("localhost", "root", "");
  $db = mysqli_select_db($connection, "hotel");
  $query = "SELECT * FROM single_ac";
  $query_run = mysqli_query($connection, $query);
  while ($row = mysqli_fetch_assoc($query_run)) {
      ?>
  <div class="col-md-2" style="margin-left:90px">
    <div class="card bg-light" style="width:300px">
      <div class="card-body">
        Room #
        <?php
          echo $row['room_no']
          ?>
        <div class="card-body">
          <p class="card-text">
            Room Status:
            <?php
              if ($row['status'] == 0) {
                  echo "<b>Avaliable</b>";
              } else {
                  echo "<b>Booked</b>";
              } ?>
          </p>
          <a href="book_room.php?rn=<?php echo $row['room_no']. "&rt=b"; ?> "class="btn btn-success 
                          <?php
                          if ($row['status'] == 0) {
                              echo "active";
                          } else {
                              echo "disabled";
                          } ?> ">Book</a>
          <a href="#" class="btn btn-danger 
                          <?php
                          if ($row['status'] == 0) {
                              echo "disabled";
                          } else {
                              echo "active";
                          } ?> ">Un-Book</a>                
        </div>
      </div>
    </div>

  </div>
  <?php
  }
  ?>
</div>
<br>
<br>
<div class="animated fadeInUp">
  <center>
    <h5>Double Non-AC Room</h5>
  </center>
</div>
<br>
<div class="row">
  <?php
  $connection = mysqli_connect("localhost", "root", "");
  $db = mysqli_select_db($connection, "hotel");
  $query = "SELECT * FROM double_non_ac";
  $query_run = mysqli_query($connection, $query);
  while ($row = mysqli_fetch_assoc($query_run)) {
      ?>
  <div class="col-md-2" style="margin-left:90px">
    <div class="card bg-light" style="width:300px">
      <div class="card-body">
        Room #
        <?php
          echo $row['room_no']
          ?>
        <div class="card-body">
          <p class="card-text">
            Room Status:
            <?php
              if ($row['status'] == 0) {
                  echo "<b>Avaliable</b>";
              } else {
                  echo "<b>Booked</b>";
              } ?>
          </p>
          <a href="book_room.php?rn=<?php echo $row['room_no']. "&rt=c"; ?> "class="btn btn-success 
                          <?php
                          if ($row['status'] == 0) {
                              echo "active";
                          } else {
                              echo "disabled";
                          } ?> ">Book</a>
          <a href="# class="btn btn-danger 
                          <?php
                          if ($row['status'] == 0) {
                              echo "disabled";
                          } else {
                              echo "active";
                          } ?> ">Un-Book</a>                
        </div>
      </div>
    </div>

  </div>
  <?php
  }
  ?>
</div>
<br>
<br>
<div class="animated fadeInUp">
  <center>
    <h5>Double AC Room</h5>
  </center>
</div>
<br>
<div class="row">
  <?php
  $connection = mysqli_connect("localhost", "root", "");
  $db = mysqli_select_db($connection, "hotel");
  $query = "SELECT * FROM double_ac";
  $query_run = mysqli_query($connection, $query);
  while ($row = mysqli_fetch_assoc($query_run)) {
      ?>
  <div class="col-md-2" style="margin-left:90px">
    <div class="card bg-light" style="width:300px">
      <div class="card-body">
        Room #
        <?php
          echo $row['room_no']
          ?>
        <div class="card-body">
          <p class="card-text">
            Room Status:
            <?php
              if ($row['status'] == 0) {
                  echo "<b>Avaliable</b>";
              } else {
                  echo "<b>Booked</b>";
              } ?>
          </p>
          <a href="book_room.php?rn=<?php echo $row['room_no']. "&rt=d"; ?> "class="btn btn-success 
                          <?php
                          if ($row['status'] == 0) {
                              echo "active";
                          } else {
                              echo "disabled";
                          } ?> ">Book</a>
          <a href="#" class="btn btn-danger 
                          <?php
                          if ($row['status'] == 0) {
                              echo "disabled";
                          } else {
                              echo "active";
                          } ?> ">Un-Book</a>                
        </div>
      </div>
    </div>

  </div>
  <?php
  }
  ?>
</div>
<!-- banner-->



<!-- reservation-information -->

<!-- reservation-information -->



<!-- services -->

<!-- services -->
<br>
<br>
<br>
