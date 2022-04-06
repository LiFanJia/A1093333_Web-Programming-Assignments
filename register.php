
<!DOCTYPE HTML>

<html>

   <head>
 

       <meta charset="utf-8" />

       <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

  
       
   </head>

    <div id="page-wrapper">

    <!----header---->

    <section id="header">
        <div class="container">
            <h1 id="logo">Member Registration</h1>
    </div>
    </section>


    <section id="features">
        <div class="container">
            <div class="row aln-center">

            <!----Feature---->

            <form action="rinfo.php" method="post" style="width: %60%;" enctype="multipart/form-data">

            <table>
                <tr>
                    <td>Account</td>

                  <td><input type="text" name="user" onkeyup="value=value.replace(/[^\w\.V]/ig,'')" maxlength="20", placeholder="You must enter your username" required="required"></td>   

                </tr>

                <tr>
                    <td>Password</td>
                    <td><input type= "password" name="password" maxlength="20", placeholder="You must enter your password" required="required"></td>   

                </tr>

                <tr>

                <tr>
                    <td>Name</td>

                    <td><input type="text" name="uname" placeholder="Please enter your name" required></td>
                </tr>    

                <tr>
                    <td>telephone </td>
                    <td><input type="text" name="utel" minlength="10" maxlength="10" oninput="value=value.replace(/[^\d]/g, '')" pattern="[0-9]{10}" placeholder="Please enter your phone number" required="required"></td>

                     </tr>
                     <tr>

                    <td>E-mail</td>

                    <td><input type="email" name="uemail" placeholder="example: abc@gmail.com" required=required></td>


                    <td>Birthday</td>
													<td><input type="date" name="ubir" required="required"></td>
												</tr>
												<tr>
													<td>Username</td>
													<td><input type="text" name="uid" onkeyup="value=value.replace(/[^\w\.\/]/ig,'')" pattern="[a-zA-Z0-9]{10}" placeholder="請輸入您的身份證字號" required="required"></td>
												</tr>
												<tr>
													<td>Gender</td>
													<td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="usex" value="1" required="required">Female&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="usex" value="2">Male&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="usex" value="3">Don't Want To Say</td>
												</tr>
												<tr>
													<td rowspan="2">Member Photo</td>
													<td>
														<label class="btn btn-primary" style="width: 100%">
																<input name="uphoto" id="photo" style="display:none;" type="file" onchange="selectImgFile(this.files)" />
																<i class="fa fa-picture-o"></i> Upload Photo
														</label>
													</td>
												</tr>
												<tr>
													<td>
														<span id="file_name"></span>		
														    <script>
    
														      var inputFile = document.getElementById('photo');

														      inputFile.addEventListener('change', function(e) {

														        var fileData = e.target.files[0]; 
														        var fileName = fileData.name; 
														        

														        document.getElementById('file_name').innerText = fileName;
														       

														      }, false);

														    </script>
													</td>
												</tr>
												<tr>
													<td colspan="2">
														<input type="submit" name="" value="Member login">
														<input type="reset" name="" value="Reset username">
														<input type="button" value="login" onclick="javascript:location.href='LoginPage.php'">
													</td>
												</tr>
										</form>										
						</div>
					</div>
				</section>

			<!-- Footer -->

		</div>


</html>