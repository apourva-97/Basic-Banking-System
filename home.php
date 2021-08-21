<?php
$firstname= $_POST['firstname'];
$email= $_POST['email'];
$number= $_POST['number'];
$amount= $_POST['amount'];
// Database connection
$conn= new mysqli('localhost','root','','clientdata');
if($conn->connect_error){
     die('connection failed :'.$conn->connect_error);  
}
else{
     $stmt = $conn-> prepare("insert into datastore(firstname,email,number,amount)values(?,?,?,?)");
     
     $stmt->bind_param("ssii",$firstname,$email,$number,$amount);
     $stmt->execute();
     echo "registration Successfully...";
     $stmt->close();
     $conn->close();
}

?>