<?php
  include_once('functions.php')
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Img downloader</title>
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>
    <div class="wrapper">
      <form class="form" method="post" enctype="multipart/form-data">
        <input class="form__input" type="file" name="file">
        <input class="form__input" type="submit" value="Загрузить файл!">
      </form>
    <?php
      if(isset($_FILES['file'])) {
        $check = can_upload($_FILES['file']);
      
        if($check === true){
          make_upload($_FILES['file']);
          echo "<span class='wrapper__message'>Файл успешно загружен!</span>";
        }else{
          echo "<span class='wrapper__message'>$check</span>";  
        }
      }
    ?>
    </div>
  </body>
</html>