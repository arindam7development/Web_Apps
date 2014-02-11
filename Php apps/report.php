<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Indian Monuments</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
  <h2>Your words on - Indian Monuments</h2>

<?php
  $first_name = $_POST['firstname'];
  $last_name = $_POST['lastname'];
  $email = $_POST['email'];
  $which_monument = $_POST['whichmonument'];
  $experience = $_POST['experience'];
  $other = $_POST['other'];
  
  $dbc = mysqli_connect('localhost', 'root', 'arindam', 'monumentdb')
    or die('Error occured while connecting to MySQL server.');

  $query = "INSERT INTO monument_feedback (first_name, last_name,email,which_monument,experience, other) " .
    "VALUES ('$first_name', '$last_name','$email', '$which_monument', '$experience', " .
    "'$other')";

  $result = mysqli_query($dbc, $query)
    or die('Error querying database.');

  mysqli_close($dbc);

  echo 'Thanks for sharing your experience.<br />';
  echo 'You visited' . $which_monument.'<br />';
  echo ' Your experience :' . $experience . '<br />';
  echo 'Other comments: ' . $other . '<br />';
  echo 'Your email address is ' . $email;
?>

</body>
</html>
