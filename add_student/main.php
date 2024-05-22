<?php include 'connection.php' ?>
<?php include_once 'add_student.html' ;

if($_SERVER['REQUEST_METHOD']=='POST'){
   $firstname=$_POST['firstname'];
   $lastname=$_POST['lastname'];
   $dob=$_POST['dob'];
   $email=$_POST['email'];
   $contact=$_POST['contact'];
   $address=$_POST['address'];

   $sql="INSERT INTO student_details(firstname,lastname,dob,email,phonenumber,address) VALUES ('$firstname','$lastname','$dob','$email',$contact,'$address')";

   $query_exicut=mysqli_query($connect,$sql);


}

?>




<?php   
$sql='SELECT * FROM student_details';

$query_exicut=mysqli_query($connect,$sql);

?>
<?php include 'show_deatails.php' ?>
<?php 



?>
