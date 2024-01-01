<?php
 $servername ="localhost";
 $username   ="root";
 $password   = ""; 
 $dbname     = "responsiveform1";

 $connection = mysqli_connect($servername,$username,$password,$dbname);


 if($connection)
 {
    //echo"Connection ok";
 }

 else
 {
    echo"Connection failed ";
 }



?>
