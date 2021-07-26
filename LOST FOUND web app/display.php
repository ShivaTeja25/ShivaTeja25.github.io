<?php

  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection,'lost/found');

  $query = " SELECT * FROM `founditems`";
  $query_run = mysqli_query($connection,$query);

  while($row = mysqli_fetch_array($query_run))
  {
  	?>
  	<tr>
  		
  		<td> <?php echo $row['name']; ?> </td>

  		<td> <?php echo $row['description']; ?> </td>

  		<td> <?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="cannot load image" style=" width: 200px heigth: 200px;">';?> </td>

  		<td> <?php echo $row['contact']; ?> </td>

  		
  	</tr>
  	<?php
  }

?>