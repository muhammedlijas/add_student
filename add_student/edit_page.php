
<?php
include_once 'connection.php'; 
// session_start();
// $id =$_POST['id'];

// echo $id;
$id=$_GET['id'];



$sql="select * from student_details where id=$id";

$query=mysqli_query($connect,$sql);
$fetch=mysqli_fetch_array($query);



// echo var_dump($fetch)

?>

<form action="" method="post">
  <div>
    <label for="firstname">First Name:</label><br>
    <input type="text" id="firstname" name="firstname" value="<?php echo $fetch['firstname']; ?>"  required><br>
  </div>
  <div>
    <label for="lastname">Last Name:</label><br>
    <input type="text" id="lastname" name="lastname" value="<?php echo $fetch['lastname']; ?>"  required><br>
  </div>
  <div>
    <label for="dob">Date of Birth:</label><br>
    <input type="date" id="dob" name="dob" value="<?php echo $fetch['dob']; ?>"  required><br>
  </div>
  <div>
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" value="<?php echo $fetch['email']; ?>"  required><br>
  </div>
  <div>
    <label for="contact">Contact Number:</label><br>
    <input type="tel" id="contact" name="contact" value="<?php echo $fetch['phonenumber']; ?>"  required><br>
  </div>
  <div>
    <label for="address">Address:</label><br>
    <input type="text" id="address" name="address" value="<?php echo $fetch['address']; ?>"  required><br>
  </div>
  <div>
    <button type="submit">Submit</button>
  </div>
</form>

<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $ufirstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $dob=$_POST['dob'];
    $email=$_POST['email'];
    $phonenumber=$_POST['contact'];
    $address=$_POST['address'];


   
   

   $after= mysqli_query($connect,"UPDATE student_details SET firstname='$ufirstname',lastname='$lastname' ,dob='$dob',email='$email',phonenumber=$phonenumber,address='$address'  where id='$id'");
  if($after){
    header('location:main.php');
  }
    
}

?>