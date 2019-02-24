<?php include '../contents/header1.php'; ?>

<title>Isigijimo Vietu Galerija</title>

<?php include '../contents/header2.php'; ?>

<?php include '../contents/navbar.php'; ?>

<!-- breadcrumb -->
<nav class="expand">
  <div class="nav-wrapper grey lighten-4">
    <div class="col s12">
      <a href="gallery.php" class="breadcrumb">Galerija</a>
      <a href="#!" class="breadcrumb">Įsigijimo vietos</a>
    </div>
  </div>
</nav>
<!-- breadcrumb pabaiga -->

<!-- loop'as isigijimo vietu nuotraukom -->
<div class="imageBox" id="imageBoxId"></div>
<!-- loopo pabaiga -->

<?php include '../contents/footer.php'; ?>

<?php include '../contents/indexScript.php'; ?>

<script>
  $(document).ready(function(){
    $('.materialboxed').materialbox();
  });

  var magnetBuys = <?php include '../database/magnetBuy.json'; ?>
  var list = '';
  for (i=0; i < magnetBuys.length; i++){
    var result = magnetBuys[i].match(/magnetukuIsigijumoVietos[/](.*).jpg/)[1];
    var upResult = result.charAt(0).toUpperCase() + result.slice(1)
    list += '<img class="materialboxed fotke hoverable" width="300" src="' + magnetBuys[i] + '" alt="' + upResult + '">'
    console.log(upResult);
  }
  document.getElementById('imageBoxId').innerHTML = list;
</script>

<?php include '../contents/ending.php'; ?>
