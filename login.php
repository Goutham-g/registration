<?php
include("conn.php");
global $connection;
if( isset($_POST['insertLogin']))
{
$userName = $_POST['userName'];
$password = $_POST['password'];

$sql = "SELECT * FROM registration WHERE email='$userName' AND password='$password' ";

		$result = mysqli_query($connection, $sql);

		if (mysqli_num_rows($result) == 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['email'] == $userName && $row['password'] === $password) {
            	$_SESSION['username'] = $row['email'];
            	$_SESSION['name'] = $row['firstname'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: home.php");
		        exit();
            }else{
				header("Location: login.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: login.php?error=Incorect User name or password");
	        exit();
		}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>
<body>
   
    <h1>Login</h1>
    <div class="mb-3" style="margin-top: 2em;">

        <form>

            <div class="mb-3" >
            <label for="user" class="form-label">Username</label>
            <input type=text class="form-label" name=userName id="user" >
         </div>
    

              
            <div  class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="text" name="password"  id="exampleInputPassword1">
            </div>
    
           
            <button type="submit" name="insertLogin" class="btn btn-secondary">Login</button>
          </form>
    </div>

    
    
</body>
</html>