<?php
error_reporting(E_ALL); 
ini_set('display_errors', 1);
require('db.php');
if(isset($_POST['submit'])){
$name=test_input($_POST['name']);
$phone=test_input($_POST['phone']);
$date=test_input($_POST['date']);
$time=test_input($_POST['time']);
$msg=test_input($_POST['msg']);

$sql = "INSERT INTO appoint (phone,name,c_date,c_time,msg) VALUES ('$phone','$name','$date','$time','$msg')";
if($conn->query($sql)===true){

    header('location:home.php');
      die();
}
else{
    echo "header('location:form.php');"  ;
}
}
function test_input($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data; 
}

?>