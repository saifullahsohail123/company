<?php
$host = "localhost";
$user = "root";
$pwd = "";
$dbname = "company";

$conn = mysqli_connect($host,$user,$pwd,$dbname);
if(!$conn){
    die("Sorry. Can not connect");
}

// $username = $_POST['username'];
// $user_email = $_POST['password'];
// $user_password = $_POST['email'];
// $field = $_POST['field'];

// $insertQuery = "INSERT INTO `company_user` (`user_name`, `user_email`, `user_password`, `field`) VALUES  ('$username', '$user_email', '$user_password','$field')";

//  $result = mysqli_query($conn,$insertQuery);

//  if($result){

//   echo "success";
//  }
 


$query = "SELECT * FROM `company_user`";
$result = mysqli_query($conn,$query);

$arr = array();

while ($row = mysqli_fetch_assoc($result)){


$arr[]=$row;


  
}

$json = json_encode($arr);

echo $json;

?>