<?php
    //$photompname=$_FILES["photo"]["tmp_name"];
    //echo $photompname;

    require("DBconnect.php");

    $pathpart=pathinfo($_FILES["photo"]["name"]);//取得檔案路徑
    $extname=$pathpart["extension"];
    //echo $extname;//png

    $now=date("Y-m-d");
    $finalphoto="Photo_".time().'.'.$extname;//產生新檔名
    $SQL="INSERT INTO photo (ppath,pdate) VALUES ('$finalphoto','$now')";//將圖片路徑加入資料庫
    if(copy($_FILES['photo']['tmp_name'],$finalphoto)){
        if(mysqli_query($link,$SQL)){
            echo "<script type='text/javascript'>";
            echo "alert('照片上傳成功')";
            echo "</script>";
            echo "<meta http-equiv='Refresh' content='0; url=photo.php'>";
        }else{
            echo "<script type='text/javascript'>";
            echo "alert('照片上傳失敗')";
            echo "</script>";
            echo "<meta http-equiv='Refresh' content='0; url=photo.php'>";
        }
    }else{
        echo "failed";
    }




    //確認檔案是否上傳成功
    //if(copy($_FILES["photo"]["tmp_name"],$_FILES["photo"]["name"])){
      //  echo "success";
    //}else{
       // echo "failed";
    //}
    ?>