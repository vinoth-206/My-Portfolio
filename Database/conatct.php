<?php
$n=$_POST['yname'];
$e=$_POST['yemail'];    
$m=$_POST['ymsg'];
$conn=mysqli_connect("localhost","root","","portfoliyo");
if(!$con){
    die("connection failed:".mysqli_connect_error());
}
$sql="INSERT INTO say(yname,yemail,ymsg) VALUES('$n','$e','$m')";
$reg=mysqli_query($conn,$sql);
if($reg){
    echo"Congratulations! you are  successfully registered.";
}
else{
    echo"error:".mysqli_error($conn);
}
mysqli_close($conn);
?>