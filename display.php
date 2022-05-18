
<head>
    <html>
    <meta charset="UTF-8">
    <title>GFG User Details</title>
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
 
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
 
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
 
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
 
        td {
            font-weight: lighter;
        }
    </style>
</head>
<body>


<?php
// Include the database configuration file
include 'dbConfig.php';

?>
<table>
   <tr>
   <th>ImageNum</th>   
  <th>Name</th> </tr>
  
<?php    
// Get images from the database
$query = $db->query("SELECT * FROM images ORDER BY uploaded_on DESC");
$count=1;

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL = 'uploads/'.$row["file_name"];


?>
 <tr>
        <td>
            <?php
            echo "Image $count";
            $count++;
        
        ?>
        </td>
    <!-- way to resize image from database -->
    <td><img id="venue"  style="width: 500px; height: 200px"src="<?php echo $imageURL; ?>", ' . base64_encode($row["file_name"]) . '"/>';</td>
     </tr>
 
        <?php }
        }else{ ?>
            <p>No image(s) found...</p>
        <?php } ?>


 
    
    
    </table>
    
 
   
    
  

    </body>
    </html>    