<?php

    try{

        $conn1=mysqli_connect("localhost","root","","proj4");
    }
    catch(mysqli_sql_exception){
        echo " YOUR ARE NOT CONNECTED";
    }
?>