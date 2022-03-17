<?php

    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection, "hotel");
    if($_GET['rt']=='a'){
      $query = "UPDATE single_non_ac SET 
      holder_name=null,
      holder_id=null,
      holder_mobile=null,
      holder_address=null,
      child=null,
      adult=null,
      in_date=null,
      out_date=null,
      status=0 WHERE room_no=$_GET[rn]";
    }

    if($_GET['rt']=='b'){
      $query = "UPDATE single_non_ac SET 
      holder_name=null,
      holder_id=null,
      holder_mobile=null,
      holder_address=null,
      child=null,
      adult=null,
      in_date=null,
      out_date=null,
      status=0 WHERE room_no=$_GET[rn]";
    }

    if($_GET['rt']=='c'){
      $query = "UPDATE single_non_ac SET 
      holder_name=null,
      holder_id=null,
      holder_mobile=null,
      holder_address=null,
      child=null,
      adult=null,
      in_date=null,
      out_date=null,
      status=0 WHERE room_no=$_GET[rn]";
    }

    if($_GET['rt']=='d'){
      $query = "UPDATE single_non_ac SET 
      holder_name=null,
      holder_id=null,
      holder_mobile=null,
      holder_address=null,
      child=null,
      adult=null,
      in_date=null,
      out_date=null,
      status=0 WHERE room_no=$_GET[rn]";
    }
    $query_run=mysqli_query($connection, $query);
    header("location:redirect_unbook.php");
?>