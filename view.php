<?php
    include("cong.php");
    $sql="SELECT FROM mmf";
    $result=mysqli_query($conn1,$sql);

    while($row=mysqli_fetch_array($result)){
        $total=$row['mw']+$row['mvar'];

    }

    


?>