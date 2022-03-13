<html>
<head>
<meta charset="UTF-8">  
<meta name="Keywords" content="HTML, NUKIM Summer Tour">    
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title> Summer Tour Signup</title>
<link rel="icon" href="Santorini1.jpeg" type="image/x-icon">

</head>
<body>
    <?php
      echo "<body bgcolor='#fdd695' background=Logo\Santorini2.jpg>";
    ?>
    
<center><h1>2022 Summer Trip Signup</h1></center>

<p><h2>If you're ready for the most amazing trip ever, hurry and sign up! </br>Joy is only a few clicks away!</h2>
<center>
<a href="https://www.greekboston.com/"> <img src="Logo/SantoriniView.jpg" width="34%" >  </a>
<a href="https://www.mystique.gr/.com/"> <img src="Logo/SantoriniHotel.jpg" width="35%" >  </a>
</center>

<hr color="#f4c430" width="800"/>
<form action="signup.html"method="post">
  <div>
   <p> <h3>Enter Your First and Last Name:</h3></p>
  <input type="text" name="first_name" placehlder="JJ" required>
  <input type="text" name="last_name" placehlder="Doe" required>
</div>
<p><h3>Select your date of birth:</h3></p>
<label for="birthday">Birthday:</label>
<input type="date" id="birthday" name="birthday">

<p><h3>What is your age?</h3></p>

<input type="age" name="user_age">
<p><h3>Enter your email address:</h3></p>

<textarea name="email"col="20" rows="5">

</textarea>

<p><h3>Enter your phone number:</h3></p>
<textarea name="telephone_Num"col="10" rows="5">

</textarea>
<p><h3>Please select your gender:</h3></p>
<input type="radio" id="male" name="gender" value=Male>
<label for="male">Male</label><br>

<input type="radio" id="female" name="gender" value=Female>
<label for="female">Female</label><br>

<input type="radio" id="non-binary" name="gender" value=Non-Binary>
<label for="non-binary">Non-Binary</label><br>

<input type="radio" id="other" name="gender" value=Other>
<label for="other">Other</label><br>

<label for="T_Shirt_Size">Choose your T-Shirt size:</label>

<select name="T_Shirt_Size" id="T_Shirt_Size" multiple>
  <option>S</option>
  <option>M</option>
  <option>L</option>
  <option>XL</option>
  <option>XXL</option>

</select>  
<p></h3>Select the colour T-Shirt that you want: <input type="color" name="Colour"></h3></p>


<p><h3>Select what kind of package you would like for the first night rave party: <h3></p>

<style>

  table,th,td{

    border: 1px solid black;
  }
</style>
<table>
<tr>
  <th>Package</th>
  <th>Includes</th>
</tr>
<tr>
  <td>VVIP</td>
  <td>Cabana,Unlimited drinks, free jelloshots,bodypaint/coloured powder</td>
</tr>
<tr>
  <td>VIP</td>
  <td>Two Vodka Towers, jelloshots on entry, coloured powder</td>
</tr>

<tr>
  <td>Regular Entry</td>
  <td>coloured powder</td>
</tr>
</table>

<p>
<label for="Package"></label>

<select name="Package" id="Package" multiple>
  <option>VVIP</option>
  <option>VIP</option>
  <option>Regular Entry</option>
  

</select>  
<div>
<label for="num_tickets"><h3>Enter the number of tickets you want to buy:</h3>
 <input type="text" id="num_tickets" value="1" name="num_tickets">
</div>

<p><input type="submit"></p>
</body>

</html>