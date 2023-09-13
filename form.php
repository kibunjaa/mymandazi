<?php
session_start();

//database connection
require_once('C:\xampp\htdocs\attachment\logics\dbconnection.php');

//setting
if(isset($_POST['submit']))
{
    //fetch form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "INSERT INTO login  (username, password)
        VALUES('$username','$password') ";
        
        if($conn->query($query)==TRUE)
        {
            echo "login was made successfull ";
        }
        else
        {
            echo "Error: " . $query . "<br>" . $conn->error;
        }

        // Close the connection
        $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <style>
      body{background-color:orange;
        font-weight:bold;
      }
    </style>

    <title>Document</title>
</head>
<div>
  <div>
    <button onclick="document.location='home.php'"  type="button" class="btn btn-primary">HOME <i class="fa fa-home"></i> </button>
    <button onclick="document.location='contact.php'"  type="button" class="btn btn-primary">CONTACT <i class= "fa fa-envelope"> </i> </button>
    <button onclick="document.location='form.php'"  type="button" class="btn btn-primary">BUY MANDAZI <i class="fa fa-shopping-cart"></i></button>
    <button  onclick="document.location='othermenu.php'" type="button" class="btn btn-primary">OTHER MENU <i class="fa fa-cutlery"></i></button>
    <button type="button" class="btn btn-danger" onclick="document.location='home.php'"> Log Out <span> <i class="fa fa-sign-out"></i></span> </button>

</div>
  <body>
    <center>
     <img src="images/mand.jpg" alt="mandazi">
       <form action="login.php" method="post">
          <label for="name" class="form-label">Username</label>
          <input type="text"name="username" class="form-control">
               <br>
               <br>
               <label for="name" class="form-label">Password</label>
               <input type="text"name="password" class="form-control">        
             </label>
              <br>
              <br>
              <button type="submit" name="submit" width="100" class="btn btn-success">Log In</button>
        </form>                                                                                                                                                                                                                
     </center>
   </body>

</div>

</html>