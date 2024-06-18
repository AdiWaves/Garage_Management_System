<?php

require("includes/common.php");

  // Getting the values from the signup page using $_POST[] and cleaning the data submitted by the user.
  $fname = $_POST['fname'];
  $fname = mysqli_real_escape_string($con, $fname);

  $lname = $_POST['lname'];
  $lname = mysqli_real_escape_string($con, $lname);

  $date = $_POST['date'];
  $date = mysqli_real_escape_string($con, $date);

  $fuel = $_POST['fuel'];
  $fuel = mysqli_real_escape_string($con, $fuel);

  $service = $_POST['serv'];
  $service = mysqli_real_escape_string($con, $serv);

  $brand = $_POST['make'];
  $brand = mysqli_real_escape_string($con, $brand);

  $model = $_POST['model'];
  $model = mysqli_real_escape_string($con, $model);


  $query = "SELECT * FROM users WHERE email='$email'";
  $result = mysqli_query($con, $query)or die($mysqli_error($con));
  $num = mysqli_num_rows($result);

  if ($num != 0) {
    $m = "<span class='red'>Email Already Exists</span>";
    header('location: signup.php?m1=' . $m);
  } else if (!preg_match($regex_email, $email)) {
    $m = "<span class='red'>Not a valid Email Id</span>";
    header('location: signup.php?m1=' . $m);
  } else if (!preg_match($regex_num, $contact)) {
    $m = "<span class='red'>Not a valid phone number</span>";
    header('location: signup.php?m2=' . $m);
  } else {
    
    $query = "INSERT INTO 'service'(fname, lname, date, fuel, service, brand, model)VALUES('" . $fname . "','" . $lname . "','" . $date . "','" . $fuel . "','" . $service . "','" . $brand . "','" . $model . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    $user_id = mysqli_insert_id($con);
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = $user_id;
    header('location: login.php');
  }
?>