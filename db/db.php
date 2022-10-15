<?php
$servername = "localhost: 3307";
$username = "root";
$password = "";
$database = "contact";

$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn){
    echo 'not connect';
}
if($_SERVER['REQUEST_METHOD']=='POST')
{   $id=$_POST['id'];
    $name=$_POST['name1'];
    $email=$_POST['email'];
    $num=$_POST['num'];
    $msg=$_POST['msg'];

   
    
    $sql="INSERT INTO `contactus` (`id`,`name`, `email`, `number`, `msg`, `datetime`) VALUES ('$id+1', '$name', '$email', '$num', '$msg', current_timestamp())";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo'<div> error </div>'.mysqli_error($conn);
    }
    else{
        echo'<div> error </div>'.mysqli_error($conn);
    }
}



?>
