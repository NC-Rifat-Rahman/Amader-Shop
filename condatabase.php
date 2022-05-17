<?php
include("database.php");


$name = $_POST["username"];
$email = $_POST["email"];
$phonenumber = $_POST["phonenumber"];
$query = $_POST["query"];
$subject = $_POST["subject"];



$sql = "INSERT INTO `contact` (`username`, `email`, `phonenumber`, `query`, `subject`) VALUES ('$username','$email', '$phonenumber','$query','$subject')";
$result = mysqli_query($conn,$sql);



if($result){
  echo "Input Success.";
  sleep(1);
  header("Location: index.php");
}
else{
  echo "ERROR";
}


 ?>