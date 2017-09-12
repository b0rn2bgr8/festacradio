<?php
 $con = mysqli_connect('localhost', 'root', '', 'festacradio');
 
 if(mysqli_connect_error()){
     
     echo 'Connection to database could not be established: ' . mysqli_connect_errno();
     
 }
 
