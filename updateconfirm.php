<?php
    require("DBconnect.php");
    $pNo=$_POST["pNo"];
    $pdate=$_POST["pdate"];

    $pathpart=pathinfo($_FILES["ppath"]["name"]);//取得檔案路徑
    $extname=$pathpart["extension"];
    //echo $extname;//png

    $now=date("Y-m-d");
    $finalphoto="Photo_".time().'.'.$extname;//產生新檔名

    $SQL="UPDATE photo SET ppath='$finalphoto',pdate='$now' WHERE pNo='$pNo'";

    if(copy($_FILES['ppath']['tmp_name'],$finalphoto)){
        if(mysqli_query($link,$SQL)){
            echo "<script type='text/javascript'>";
            echo "alert('照片更新成功')";
            echo "</script>";
            echo "<meta http-equiv='Refresh' content='0; url=photolist.php'>";
        }else{
            echo "<script type='text/javascript'>";
            echo "alert('照片更新失敗')";
            echo "</script>";
            echo "<meta http-equiv='Refresh' content='0; url=photolist.php'>";
        }
    }else{
        echo "failed";
    }
    
    ?>