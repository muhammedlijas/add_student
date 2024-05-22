<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Information</title>
<!-- Add Font Awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
    }
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    tr:hover {
        background-color: #ddd;
    }
    .action-cell {
        text-align: center;
    }
    .edit-icon, .delete-icon {
        cursor: pointer;
        color: #4CAF50;
        margin-right: 5px;
    }
    .delete-icon {
        color: #f44336;
    }
    .edit-button {
        display: block;
        background-color: red;
        height: 100%;
        padding: 0;
        margin: 0;
        text-decoration: none; /* Remove underline */
        color: white; /* Text color */
        line-height: 32px; /* Center the text vertically */
    }
    .edit-button:hover {
        background-color: darkred;
    }
</style>
</head>
<body>

<table>
  <thead>
    <tr>
      <th>Firstname</th>
      <th>Lastname</th>
      <th>DOB</th>
      <th>Email</th>
      <th>Contact Number</th>
      <th>Address</th>
      <th colspan="2" class="action-cell">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
  while($fetch=mysqli_fetch_array($query_exicut)){



?>
    <tr>
      <td><?php echo $fetch['firstname'] ?></td>
      <td><?php echo $fetch['lastname'] ?></td>
      <td><?php echo $fetch['dob'] ?></td>
      <td><?php echo $fetch['email'] ?></td>
      <td><?php echo $fetch['phonenumber'] ?></td>
      <td><?php echo $fetch['address'] ?></td>
      <td class="action-cell"><a class="edit-button" href="edit_page.php?id=<?php
      echo $fetch['id']
    //   session_start();
    //   $_SESSION['id']=$fetch['id'];

      
      ?>"><i class="fas fa-edit edit-icon"></i>Edit</a></td>
      <td class="action-cell"><a href="delete.php?id=<?php 
      echo $fetch['id'];
      
      ?>"><i class="fas fa-trash-alt delete-icon"></i>Delete</a></td>
    </tr>
    <?php } ?>
    <!-- Add more rows as needed -->
  </tbody>
</table>

</body>
</html>
