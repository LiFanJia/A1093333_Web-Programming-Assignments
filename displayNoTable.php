
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
<table>
   <tr>
   <th>ImageNum</th>   
  <th>Name</th>
   </tr>
 


 
    <tr>
        <td>
            Image 1        </td>
    <!-- way to resize image from database -->
    <td><img id="venue"  style="width: 500px; height: 200px"src="uploads/20211203_134137.jpg", ' . base64_encode($row["file_name"]) . '"/>';</td>
     </tr>
     
    
 
    <tr>
        <td>
            Image 2        </td>
    <!-- way to resize image from database -->
    <td><img id="venue"  style="width: 500px; height: 200px"src="uploads/20211203_134137.jpg", ' . base64_encode($row["file_name"]) . '"/>';</td>
     </tr>
     
    
    </table>
    
  

    </body>
    </html>   