<?php include 'header.php';?>
<?php
  session_start();
  if(isset($_POST['book_room']))
  {
    $connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection, "hotel");

    if($_POST['room_type'] == 'Single NON-AC')
    {
      $query = "UPDATE single_non_ac SET 
      holder_name='$_POST[holder_name]',
      holder_id='$_POST[holder_id]',
      holder_mobile='$_POST[holder_mobile]',
      holder_address='$_POST[holder_address]',
      child='$_POST[child_no]',
      adult='$_POST[adult_no]',
      in_date='$_POST[in_date]',
      out_date='$_POST[out_date]',
      status=1 WHERE room_no=$_POST[room_no]";
    }

    if($_POST['room_type']=='Single AC')
    {
      $query = "UPDATE single_ac SET 
      holder_name='$_POST[holder_name]',
      holder_id='$_POST[holder_id]',
      holder_mobile='$_POST[holder_mobile]',
      holder_address='$_POST[holder_address]',
      child='$_POST[child_no]',
      adult='$_POST[adult_no]',
      in_date='$_POST[in_date]',
      out_date='$_POST[out_date]',
      status=1 WHERE room_no=$_POST[room_no]";
    }

    if($_POST['room_type']=='Double NON-AC')
    {
      $query = "UPDATE double_non_ac SET 
      holder_name='$_POST[holder_name]',
      holder_id='$_POST[holder_id]',
      holder_mobile='$_POST[holder_mobile]',
      holder_address='$_POST[holder_address]',
      child='$_POST[child_no]',
      adult='$_POST[adult_no]',
      in_date='$_POST[in_date]',
      out_date='$_POST[out_date]',
      status=1 WHERE room_no=$_POST[room_no]";
    }

    if($_POST['room_type']=='Double AC')
    {
      $query = "UPDATE double_ac SET 
      holder_name='$_POST[holder_name]',
      holder_id='$_POST[holder_id]',
      holder_mobile='$_POST[holder_mobile]',
      holder_address='$_POST[holder_address]',
      child='$_POST[child_no]',
      adult='$_POST[adult_no]',
      in_date='$_POST[in_date]',
      out_date='$_POST[out_date]',
      status=1 WHERE room_no=$_POST[room_no]";
    }
    // now redirect the query
    $query_run = mysqli_query($connection, $query);
    header("Location:redirect_page.php");
  }

// In above code, string must be written in quotes
?>
<br><br>
<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8">
      <form class="" action="" method="POST" >
          <div class="form-group">
            <label>Full Name</label>
            <input type="text" class="form-control" id="" placeholder="enter name" name="holder_name" required>
          </div>  

          <div class="form-group">
            <label for=""  class="form-label">NIC Info</label>
            <input type="text" placeholder="enter 13-digit cnic #" class="form-control" name="holder_id" id="" required>
          </div>
        
          <div class="form-group">
            <label for=""  class="form-label">Contact Info</label>
            <input type="text" placeholder="enter mobile number" class="form-control" name="holder_mobile" id="" required>
          </div>

          <div class="form-group">
            <label for="inputAddress" class="form-label">Address</label>
            <input type="text" placeholder="enter address" class="form-control" id="" name="holder_address" placeholder="1234 Main St" required>
          </div>

          <div class="form-group">
            <label for="" class="form-label">Room #</label>
            <input type="text" class="form-control" name="room_no" readonly
            value="<?php
              echo $_GET['rn']; ?>">
          </div>

          <div class="form-group">
            <label for="" class="form-label">Room-Type</label>
            <input type="text" class="form-control" name="room_type" readonly
            value="<?php
             if($_GET['rt']=='a'){
               echo 'Single NON-AC';
             }
             if($_GET['rt']=='b'){
              echo 'Single AC';
            }
            if($_GET['rt']=='c'){
              echo 'Double NON-AC';
            }
            if($_GET['rt']=='d'){
              echo 'Double AC';
            } ?>">
          </div>
          
          <div class="form-group">
            <label>No. of kids</label>
            <select class="form-control" name="child_no">
              <option value="">Select</option>
              <option value="">1</option>
              <option value="">2</option>
              <option value="">3</option>
              <option value="">4</option>
            </select>
          </div>

          <div class="form-group">
            <label>No. of adults</label>
            <select class="form-control" name="adult_no">
              <option value="">Select</option>
              <option value="">1</option>
              <option value="">2</option>
              <option value="">3</option>
              <option value="">4</option>
            </select>
          </div>

          <div class="form-group">
            <label for="" class="form-label">Check-In</label>
            <input type="date" class="form-control" name="in_date"  >
          </div>

          <div class="form-group">
            <label for="" class="form-label">Check-Out</label>
            <input type="date" class="form-control" name="out_date" >
          </div>

          <div class="">
          <button type="submit" class="btn btn-primary" name="book_room" id="book_room" >Book Now</button>
          
          <a href="booking.php" class="btn btn-primary">Already Booked!</a>
          </div>
        
        </form>
  </div>
</div>

<br>
<br>
<?php include 'footer.php';?>