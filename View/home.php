
<?php require("header.php")?>

<div class="row">
  <div class="side">
    <h2>About Me</h2>
    <h5>Photo of me:</h5>
    <div class="fakeimg" style="height:200px;">Image</div>
    <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
    <h3>More Text</h3>
    <p>Lorem ipsum dolor sit ame.</p>
    <div class="fakeimg" style="height:60px;">Image</div><br>
    <div class="fakeimg" style="height:60px;">Image</div><br>
    <div class="fakeimg" style="height:60px;">Image</div>
  </div>
  <div class="main">
    <div class="content-container">
    <button type="button" onclick="loadCreateForm()">Change Content</button>
    <br>
    <br>
    <form action="index.php?aciton=search" method='POST'>
      <input type="text" name="searchname" placeholder="Zoeken...">
      <input type="submit" value="Zoek">
    </form>
    <br>
    <?=$contacts;?>
    <button type="button" onclick="loadDoc()">Change Content</button>
  </div>
  </div>
</div>

<script src="./assets/js/main.js"></script>
<?php require("footer.php")?>
