<?php
    include("cong.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MFM DATA</title>
    <style>
        body{
            background-color: antiquewhite;
            padding:0px;
            margin: 0px;;
            
        }
        center{
            position: sticky;
            top:0%;
            background-color: black;
            display: block;
            padding: 4PX;
            color: aliceblue;
            font-style: oblique;
            
        }
     table,td{
        padding: 8px;
        display:inline-block;
        flex-grow: 1;
        flex-basis: 30%;
        margin: 8px;
        
        
     }
     td{
        height: 30px;
        padding: 15px;

     }
     input{
        height: 15px;
        padding: 5px;
        background-color: whitesmoke;
         }
     .submit{
        height: 50px;
        width: 600px;
        justify-content: center;
        font-size: larger;
        padding-left: 20px;
             }
    </style>
</head>
<body>
    <center><h1 > MFM INPUT DATA </h1></center>
    <form method="POST" action=<?php htmlspecialchars($_SERVER["PHP_SELF"])?>>
    <table>
        <tr>
            <td>SS_ID  <input type="text"   name="ss_ID"></td>
            <td> PLANT_ID  <input type="text" name="plant_ID"><br></td>
            <td> MFM_ID  <input type="text" name="mfm_ID" ><br></td>
            <td> MW  <input type="text" name="mw"></td>
            <td> MVAR  <input type="text" name="mvar"></td>
            <td> RY_VOLT  <input type="text" name="ry_volt"></td>
            <td> YB_VOLT  <input type="text" name="yb_volt"></td>
            <td> BR_VOLT  <input type="text" name="br-volt"></td>
            <td>R-CUR  <input type="text" name="r_cur"></td>
            <td>   Y-CUR  <input type="text" name="y_cur"></td>
            <td>   B-CUR  <input type="text" name="b_cur"></td>
            <td>   PF  <input type="text" name="pf"></td>
            <td>    FREQ  <input type="text" name="freq"></td>
            <td>   IMPORT  <input type="text" name="import"></td>
            <td>   EXPORT  <input type="text" name="export"></td>
            <td>    BREAKER_OPEN  <input type="text" name="breaker_open"></td>
            <td>    BREAKER_CLOSE  <input type="text" name="breaker_close"></td>
        </tr>
        <tr>
            <td><input class="submit" type="submit" name="submit"></td>
        </tr>



        </table>

    </form>
</body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $ssid=filter_input(INPUT_POST,"ss_ID",FILTER_SANITIZE_SPECIAL_CHARS);
        $plantid=filter_input(INPUT_POST,"plant_ID",FILTER_SANITIZE_SPECIAL_CHARS);
        $mfmid=filter_input(INPUT_POST,"mfm_ID",FILTER_SANITIZE_SPECIAL_CHARS);
        $mw=filter_input(INPUT_POST,"mw",FILTER_SANITIZE_SPECIAL_CHARS);
        $mvar=filter_input(INPUT_POST,"mvar",FILTER_SANITIZE_SPECIAL_CHARS);
        $ryvolt=filter_input(INPUT_POST,"ry_volt",FILTER_SANITIZE_SPECIAL_CHARS);
        $ybvolt=filter_input(INPUT_POST,"yb_volt",FILTER_SANITIZE_SPECIAL_CHARS);
        $brvolt=filter_input(INPUT_POST,"br-volt",FILTER_SANITIZE_SPECIAL_CHARS);
        $rcur=filter_input(INPUT_POST,"r_cur",FILTER_SANITIZE_SPECIAL_CHARS);
        $ycur=filter_input(INPUT_POST,"y_cur",FILTER_SANITIZE_SPECIAL_CHARS);
        $bcur=filter_input(INPUT_POST,"b_cur",FILTER_SANITIZE_SPECIAL_CHARS);
        $pf=filter_input(INPUT_POST,"pf",FILTER_SANITIZE_SPECIAL_CHARS);
        $freq=filter_input(INPUT_POST,"freq",FILTER_SANITIZE_SPECIAL_CHARS);
        $import=filter_input(INPUT_POST,"import",FILTER_SANITIZE_SPECIAL_CHARS);
        $export=filter_input(INPUT_POST,"export",FILTER_SANITIZE_SPECIAL_CHARS);
        $breakeropen=filter_input(INPUT_POST,"breaker_open",FILTER_SANITIZE_SPECIAL_CHARS);
        $breakerclose=filter_input(INPUT_POST,"breaker_close",FILTER_SANITIZE_SPECIAL_CHARS);

        $sql= "INSERT INTO mfm (ss_ID,plant_ID,mfm_ID,mw,mvar,ry_volt,yb_volt,br_volt,r_cur,y_cur,b_cur,pf,freq,import,export,breaker_open,breaker_close) VALUES
                            ('$ssid','$plantid','$mfmid','$mw','$mvar','$ryvolt','$ybvolt','$brvolt','$rcur','$ycur','$bcur','$pf','$freq','$import','$export','$breakeropen','$breakerclose')";
        
        if(mysqli_query($conn1, $sql)){
            echo "SUCCESSFULLY ENTERED ";
        }
        else{
            echo "Error: " . $sql . "<br>" . mysqli_error($conn1);
        }


    }




?>
