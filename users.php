<?php
//list of users and passwords


$users=[

    "member"=>"12345",
    "admin"=>"12345"

    
];


//start session
session_start();

//Verify Login
if(isset($_POST['user'])&& !isset($_SESSION['user'])){

    //check password

    if($users[$_POST['user']]==$_POST['password']){

        //Register user in session on valid login

        $_SESSION['user']=$_POST['user'];
    }

    //failed
    if(!isset($_SESSION['user'])) {$failed=true;
    header("Location: LoginPage.php");
    exit();
    
    }
}

//Valid login
if(isset($_SESSION['user'])){

    header("Location:WelcomePage.php");
    exit();
}
?>