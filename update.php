<?php
    require("DBconnect.php");
    $pNo=$_GET["pNo"];
    $SQL="SELECT * FROM user WHERE pNo='$pNo'";
    if($result=mysqli_query($link,$SQL)){
        while($row=mysqli_fetch_assoc($result)){
            $pNo=$row["pNo"];
            $ppath=$row["ppath"];
            $pdate=$row["pdate"];
        }
    }
?>
<center>
    <h1>更新</h1>
    <form action="updateconfirm.php" method="post" style="width: 80%;" enctype="multipart/form-data">
        User number：<?php echo $pNo;?><br>
        <input type="hidden" name='pNo' value='<?php echo $pNo;?>';>
        照片：<input type="file" name="ppath"  accept="image/*"><br><br>
        <input type="hidden" name='pdate' value='<?php echo $pdate;?>';>
        <input type="submit"><br><br>
        </form>
        </center>