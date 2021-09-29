<?php
include("conn.php");
global $connection;
if( isset($_POST['insertButton']))
{
  $firstName = $_POST['firstName'];
  $lastName =  $_POST['lastName'];
  $email =  $_POST['email'];
  $age =  $_POST['age'];
  $dob =  $_POST['dob'];
  $password =  $_POST['password'];
  $confirmPassword =  $_POST['confirmPassword'];
  if($password==$confirmPassword)
  {
    $insert_query = "INSERT INTO reg(firstname,lastname,email,age,dob,password,confirmpassword)VALUES ('$firstName','$lastName', '$email','$age','$dob','$password','$confirmPassword')"; 
    $result = mysqli_query($connection,$insert_query);
    if($result==true)
    {
     ?><script> alert("Done");</script><?php
    }
  }
  else
  {
    ?><script>alert("password missmatch");</script><?php
  }
  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
<style>
#mainDiv
{
  margin-top: 2em;
  display: flex;
  justify-content: center;
}
</style>
</head>
<body>
   
    <h1 class="text-center"><u>Registration Here</u></h1>
    <div class="container" id="mainDiv">
      
        <form method="post">
            <div class="mb-3" >
            <label for="nameoftheuser" class="form-label">First Name</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" class="form-label" name="firstName" id="nameoftheuser" required>
         </div>
    
         <div class="mb-3" >
            <label for="lastnameoftheuser" class="form-label">Last Name</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" class="form-label" name="lastName" id="lastnameoftheuser" required>
         </div>

        
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="" name="email" id="email" required>
          </div>

          <div class="mb-3" >
            <label for="age" class="form-label">Age</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="number" class="form-label" name="age" id="ageoftheuser" required>
         </div>

         <div class="mb-3" >
            <label for="dob" class="form-label">DOB</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="date" class="form-label" name="dob" id="doboftheuser" required>
         </div>



              
            <div  class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="text" name="password"  id="exampleInputPassword1" required>
            </div>
            <div  class="mb-3">
              <label for="exampleInputPassword2" class="form-label">Confirm Password</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="text" name="confirmPassword" id="exampleInputPassword2" required>
            </div>
           
            <button type="submit" name="insertButton" class="btn btn-secondary">Submit</button>
            <a href="login.html" style="color:#FF0000;">click here to login </a>
          </form>
    </div>

    
    
</body>
</html>