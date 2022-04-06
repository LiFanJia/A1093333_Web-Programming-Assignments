<!DOCTYPE html>
<?php
   $cookie_name="members";
   $cookie_value=$users;
//    setcookie("members",$users, time() +300);
setcookie('users[0]', 'member' , time()+3600);
setcookie('my_array[1]', 'admin' , time()+3600);


?>
<html>
    <head>
    <meta charset="utf-8/">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    
    <title>LOGIN</title>
    <style>
       
        img{
            width: 150px;
            border-radius:75px;
            
            /* float: left;
            margin-right=10px; */
        }
        #center{
            text-align:center;
        }
      
    </style>
    </head>
    <?php
        echo "<body bgcolor='#FAAFBA'>";
    
    ?>
    <body>
        <?php
            if(isset($_COOKIE[$cookie_name])){
                echo "Cookie named '".$cookie_name . " ' is not set!";

            }else{
                echo "Cookie '".$cookie_name . " 'is set!<br>";
                //echo "Value is: " .$_COOKIE[$cookie_name];
            }
        
        ?>
        
         <div id= "center">
         <p><img src="profilePic.png"></p>
        

        </div>
      <section id="features">
          <div class="container">
              <div class="row aln-center">
                  <div class="col-6 col-8-medium col-12-small">

                  <!---Feature--->
                  <!-- <header></header> -->
                <h2 align ="center">User Login</h2>

                  <form action="" method="post" style="width: 60%; margin: 0px auto;" enctype="multipart/form-data">
        
                     <table class="center" > 
                        
                        <tr>
                            <td>Username:</td>
                            <td><input type="text" name="user" style="text-align: center;" required maxlength="25" placeholder="Enter your name"></td>

                        </tr>

                        <tr>
                            <td>Password:</td>
                            <td><input type="password" name="password" style="text-align: center;" required placeholder="Enter your password"></td>
                        </tr>
                        
                        <tr>

                            <td>

                                <input type="submit" value="login" name="Login" style="width: 100%">
                            
                            </td>
                        
                            
                        </tr>
                 



                        <tr>

                            <td>
                                
                            <input type="button"  value="Forgot Password" onclick="javascript:location.href='ForgotPassword.php'" style="width:100%">


                            </td>

                      </tr>

                      <tr>

                      
                            <td>
                                
                                <input type="button"  value="Sign Up" onclick="javascript:location.href='register.php'" style="width:100%">
    
    
                            </td>
                      </tr>

            


                    </table>     
                </form>
                </section>
                </div>


            </div>
        </div>    
        <?php
            require "users.php";
            if(isset($failed)){
                echo "<div> Invalid user/Password</div>";
//use filler for now then find out how to redirect maybe <a href="javascript...">
                
            }
        ?>
       
   <!--LOGIN FORM-->


    <!-- <form method="post">
        <input type="text" name="user" required/>
        <input type="password" name="password" required/>
        <input type="submit" value="login"/>

</form>    -->
</body> 


</html>