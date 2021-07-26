<?php

    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,'lost/found');

    if(isset($_POST['submit']))
    {
     
      $name=$_POST['name'];
      $description=$_POST['description'];
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
      $contact=$_POST['contact'];

      $query = "INSERT INTO `founditems`(`name`,`description`,`image`,`contact`) VALUES ('$name','$description','$file','$contact')";
      $query_run = mysqli_query($connection,$query);

      if($query_run){
         echo '<script language="javascript">';
         echo 'alert("Data Successfully Uploaded"); location.href="pro.html"';
         echo '</script>';
      }
      else{
         echo '<script type="text/javascript"> alert("image and details not uploaded") location.href="pro.html" </script>';
      }


    }

 ?>
 
 

 

 

