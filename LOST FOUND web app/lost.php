<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/bootstrap.min.css"> 
    <link rel="stylesheet" href="css/style.css">

	<title>Lost an item</title>
</head>
<body style="background-color: #c3d22673;">
	<header class="lost-page">
   	 <div>
   	 	<h1 class="headertxt-lostpage">SEARCH FOR YOUR LOST ITEM</h1> 	
   	 </div>
    </header>
    <form action="" method="POST" enctype="multipart/form-data">
     <center>	
    	<table width="80%" border="1" cellpadding="12">
    		<thead>
    			<tr>
    				<th> NAME </th>
    				<th>DESCRIPTION</th>
    				<th style="text-align: center;">IMAGE</th>
    				<th >CONTACT DETAILS</th>
    			</tr>
    		</thead>
    		<?php

                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,'lost/found');

                $query = " SELECT * FROM `founditems`";
                $query_run = mysqli_query($connection,$query);

                while($row = mysqli_fetch_array($query_run))
               {
  	            ?>
  	             <tr style="border-width: 1px;">
  	
  		            <td style="border-width: 1px;"> <?php echo $row['name']; ?> </td>

  		            <td style="border-width: 1px;"> <?php echo $row['description']; ?> </td>

  		            <td style="border-width: 1px; align-content:center"> <?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="NO image attached" style="width: 250px; height: 250px; ">';?> 
                    </td style="border-width: 1px;">

  		            <td> <?php echo $row['contact']; ?> </td>

  		
  	             </tr>
  	            <?php
               }

            ?>
    	</table>
      </center>	
    </form>

</body>
</html>