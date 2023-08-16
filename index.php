<?php 
require 'connect.php';
$id=1;
$sql="select * from car_details where id=?;";

$statment=mysqli_stmt_init($connect);

if(!mysqli_stmt_prepare($statment,$sql)){
    header("Location: pay.php?error=sql_error");
    exit();
}else{
mysqli_stmt_bind_param($statment,"s",$id);
mysqli_stmt_execute($statment);
$result=mysqli_stmt_get_result($statment);

if($row= mysqli_fetch_assoc($result))
{
    session_start();
    $_SESSION['picture']=$row['picture'];
    $_SESSION['name']=$row['name'];
    $_SESSION['price']=$row['price'];
    header("Location: indexx.php");
    exit;
}
}
?>