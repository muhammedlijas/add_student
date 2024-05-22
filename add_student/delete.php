<?php 
include_once 'connection.php';

$id=$_GET['id'];



$delete="DELETE from student_details where id=$id";

$exicut=mysqli_query($connect,$delete);
if($exicut){
    header('location:main.php');
}
else{
    echo 'error';
}
?>