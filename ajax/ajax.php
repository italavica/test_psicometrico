<?php 

       $con = mysqli_connect('localhost','itzelavila','iaac23','test_psicometrico');

       if (isset($_POST['id'])) {

       	 $id=$_POST['id'];
       	 $query = mysqli_query($con, "SELECT * FROM municipios WHERE estado_id='$id' ");
       	 while ($row = mysqli_fetch_array($query)) {

       	 	$id=$row['id'];
       	 	$municipio=$row['nombre'];
       	 	echo " <option value='$municipio'>  $municipio </option> ";
       	 }

       }

?> 