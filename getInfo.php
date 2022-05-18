<!Doctype html>
<html>

<head>
    <style>
        body{
            background-color: lightpink;
        }
        container{

        }
        .pdouble{
            position:center;
            border-style:double;
            border-color:grey;
            background-color: lightgrey;
            text-align:center;
        }
        
    </style>
</head>
<body>
<br><br>    <br><br>
<div class="pdouble">
<br><br>

        <form action="upload.php" method="post" enctype="multipart/form-data">
            Select Image File to Upload:
            <input type="file" name="file">
            <input type="submit" name="submit" value="UPLOAD">
            <br><br>            
    </form>
</div>


</body>
</html>