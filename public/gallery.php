<?php include '../contents/header1.php'; ?>

<title>Galerija</title>

<style>
  .sliderDiv{
    display: flex;
    flex-wrap: wrap;
  }
  .singleSlider{
    margin: 20px;
  }
</style>

<?php include '../contents/header2.php'; ?>

<?php include '../contents/navbar.php'; ?>

<!-- VISI SLIDERIAI -->
<div class="sliderDiv">
<!-- kalediniu egluciu SLIDER'is -->
<div class="singleSlider">
  <a href="../public/treeGallery.php">
    <div class="slider hoverable" style="width: 200px">
      <ul class="slides" id="christmasTreeSlider">

      </ul>
    </div>
  </a>
</div>
<!-- kalediniu egluciu SLIDER'io pabaiga -->

<!-- miestu info SLIDER'is -->
<div class="singleSlider">
  <a href="../public/cityInfoGallery.php">
    <div class="slider hoverable" style="width: 200px">
      <ul class="slides" id="cityInfoSlider">

      </ul>
    </div>
  </a>
</div>
<!-- miestu info SLIDER'io pabaiga -->

<!-- pirkimo vietu SLIDER'is -->
<div class="singleSlider">
  <a href="../public/magnetBuyingPlaces.php">
    <div class="slider hoverable" style="width: 200px">
      <ul class="slides" id="magnetBuySlider">

      </ul>
    </div>
  </a>
</div>
<!-- pirkimo vietu SLIDER'io pabaiga -->
</div>
<!-- visu SLIDERIU pabaiga -->


<?php include '../contents/footer.php'; ?>

<?php include '../contents/indexScript.php'; ?>

<script>
  $(document).ready(function(){
    $('.slider').slider({
      height: 200,
      indicators: false
    });
  });

  // Kalediniu egluciu slideris
  var christmasTrees = <?php include '../database/christmasTrees.json'; ?>
  var treeList = '';
  for (i=0; i < christmasTrees.length; i++){
    treeList += '<li> <img src="' + christmasTrees[i] + '"><div class="caption right-align"><h4 style="color: white">Kalėdinės Eglutės</h4></div></li>';
  }
  document.getElementById('christmasTreeSlider').innerHTML = treeList;

  // miestu info slideris
  var cityInfos = <?php include '../database/cityInfo.json'; ?>
  var cityInfoList = '';
  for (i=0; i < cityInfos.length; i++){
    cityInfoList += '<li> <img src="' + cityInfos[i] + '"><div class="caption right-align"><h4 style="color: black">Miestų aprašymai</h4></div></li>';
  }
  document.getElementById('cityInfoSlider').innerHTML = cityInfoList;

  // pirkimo vietu slideris
  var magnetBuys = <?php include '../database/magnetBuy.json'; ?>
  var magnetBuyInfoList = '';
  for (i=0; i < magnetBuys.length; i++){
    magnetBuyInfoList += '<li> <img src="' + magnetBuys[i] + '"><div class="caption right-align"><h4 style="color: black">Įsigijimo vietos</h4></div></li>';
  }
  document.getElementById('magnetBuySlider').innerHTML = magnetBuyInfoList;
</script>

<?php include '../contents/ending.php'; ?>
