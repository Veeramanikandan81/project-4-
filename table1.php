<?php
    include("cong.php");
    $sql= "SELECT * FROM mfm";
    $result=mysqli_query($conn1,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA</title>
    <style>
    body{
        background-color:cornflowerblue;
        
    }
    th,td{
        border: 2px solid rgb(201, 182, 182);
        padding: 4px;
        box-shadow: brown;
    
    }
    table{
        width: 100%;
    }
    tr{
        color: cadetblue 100%;
        background-color: beige;
    }
    span{
        background-color: green;
    }
</style>
</head>

<body>
    
    <center ><h1> MFM DATA</h1></center>
    <table>
        <tr>
            <th> ACTIVE POW(MW) </th>
            <th> REACTIVE POW(MVAR)</th>
            <th> RY_VOLT(KVH)</th>
            <th> YB_VOLT(KVH)</th>
            <th> BY_VOLT(KVH)</th>
            <th> R_CUR(H)</th>
            <th> Y_CUR(H)</th>
            <th> B_CUR(H)</th>
            <th> PF</th>
            <th> FREQ(HZ)</th>
            <th> IMPORT(MWH)</th>
            <th> EXPORT(MWH)</th>
            <th> BREAKER_OPEN</th>
            <th> BREAKER_CLOSE</th>
            <th> TIMEOFUPDATE</th>
        </tr>
        <tr>
        <?php
            while($data=mysqli_fetch_array($result))
            {
            ?>
               <td style="background-color: <?php echo ($data['mw'] <=0) ? 'red' : 'green'; ?>"><?php 
                    $res['mw']= $data['mw']/1000000;
                    printf("%0.3f",$res['mw']);?></td>
                
                <td><?php 
                    $res['mvar']= $data['mvar']/1000000;
                    printf("%0.3f",$res['mvar']);?></td>
                <td style="background-color: <?php echo ($data['ry_volt'] <= 0) ? 'red' : 'green'; ?>">
                
                    <?php $res['ry_volt']= $data['ry_volt']/1000;
                    printf("%0.3f",$res['ry_volt']);?></td>
                <td style="background-color: <?php echo ($data['yb_volt'] <=0) ? 'red' : 'green'; ?>">
                    <?php $res['yb_volt']= $data['yb_volt']/1000;
                    printf("%0.3f",$res['yb_volt']);?></td>
                <td style="background-color: <?php echo ($data['br_volt'] <=0) ? 'red' : 'green'; ?>">
                    <?php $res['br_volt']= $data['br_volt']/1000;
                    printf("%0.3f",$res['br_volt']);?></td>
                <td style="background-color: <?php echo ($data['r_cur'] <=0) ? 'red' : 'green'; ?>">
                    <?php $res['r_cur']= $data['r_cur']/10;
                    printf("%0.3f",$res['r_cur']);?></td>
                <td style="background-color: <?php echo ($data['y_cur'] <=0) ? 'red' : 'green'; ?>">
                    <?php $res['y_cur']= $data['y_cur']/10;
                    printf("%0.3f",$res['y_cur']);?></td>
                <td style="background-color: <?php echo ($data['b_cur'] <=0) ? 'red' : 'green'; ?>">
                    <?php $res['b_cur']= $data['b_cur']/10;
                    printf("%0.3f",$res['b_cur']);?></td >
                <td><?php echo $data['pf'];?></td>
                <td><?php echo $data['freq'];?></td>
                <td><?php $res['import']= $data['import']/1000000;
                    printf("%0.3f",$res['import']);?></td>
                <td><?php $res['export']= $data['export']/1000000;
                    printf("%0.3f",$res['export']);?></td>
                <td><?php echo $data['breaker_open'];?></td>
                <td><?php echo $data['breaker_close'];?></td>
                <td><?php echo $data['timeofupdate'];?></td>                                                                         
                </tr>
            <?php
            }
                ?>
                
     </table>
</body>
</html>


<?PHP

        $view="CREATE VIEW AS SELECT mw,mvar FROM mfm WHERE mfm.id=mfm1.id";
        $data=mysqli_query($conn1,$view);
        



 