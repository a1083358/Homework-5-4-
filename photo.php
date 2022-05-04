<form action="photoupload.php"  method="post" enctype="multipart/form-data">
    <!--<input type="file" name="photo" accept="*.jpg,*.jpeg,*.png,*.gif">-->
    <input type="file" name="photo" accept="image/*"><br><!--可以阻擋使用者上傳非圖片檔-->
    <input type="submit">
    <a href=photolist.php>修改
</form>