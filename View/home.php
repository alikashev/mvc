
<?php require("header.php")?>

<div class="content-container">
  <a class='btn' href="index.php?action=createform">Maak nieuw contact aan</a>
  <br>
  <br>
  <form action="index.php?aciton=search" method='POST'>
    <input type="text" name="searchname" placeholder="Zoeken...">
    <input type="submit" value="Zoek">
  </form>
  <br>
  <?=$contacts;?>
</div>