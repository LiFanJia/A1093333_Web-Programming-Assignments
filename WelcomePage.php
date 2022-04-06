<?php
session_start();

//greeting message


//Logout
if(isset($_POST['logout'])){
    unset($_SESSION['user']);
}

//Back to login if not signed in

if(!isset($_SESSION['user'])){

    header("location:LoginPage.php");
    exit();
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
</head>
<body>

<h1>Welcome, </h1>
<?php
  echo $_SESSION['user'];
?>


<!----Logout--->
<form method="post">
    <input type="hidden" name="logout" value="1"/>
    <input type="submit" value="logout"/>

</form>    

</body>

</html>
