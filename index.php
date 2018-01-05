<?php
  include_once('functions.php')
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Img downloader</title>
  </head>
  <body>
    <div class="wrapper">
      <form method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit" value="Загрузить файл!">
      </form>
    </div>
    <?php
    if(isset($_FILES['file'])) {
      $check = can_upload($_FILES['file']);
    
      if($check === true){
        make_upload($_FILES['file']);
        echo "<strong>Файл успешно загружен!</strong>";
      }else{
        echo "<strong>$check</strong>";  
      }
    }
    ?>
  </body>
</html>