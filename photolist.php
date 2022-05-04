<?php
    require("DBconnect.php");

    $SQL="SELECT * FROM photo";

    echo "<h1>我的相簿</h1>";

    if($result=mysqli_query($link,$SQL)){
        echo "<table border='1' width=20%>";
        while($row=mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>";
                echo "<img src=".$row['ppath'].">";
                echo "</td>";
                echo "<td>";
                echo "<a href='update.php?pNo=".$row["pNo"]."'>修改";
                echo "</td>";
                echo "</tr>";    
                
        }
        echo "</table>";
    }