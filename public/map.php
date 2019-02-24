<?php include '../contents/header1.php'; ?>

<title>Zemelapis</title>

<link rel="stylesheet" type="text/css" href="../css/mapStyle.css">

<style>

</style>

  </head>
  <body>

<?php include '../contents/navbar.php'; ?>

<?php include '../contents/map-svg.php'; ?>

<!-- modalas -->
<div id="modal1" class="modal">
  <div class="modal-content">
    <h4 id="modalTitle"></h4>
    <div id="city-shops"></div>
  </div>

</div>
<!-- modalo pabaiga -->

<!-- collapse listas mazam ekranui -->
<div id="collapseList"></div>
<!-- collapse pabaiga -->

<?php include '../contents/footer.php'; ?>

<?php include '../contents/indexScript.php'; ?>

<script>

  $(document).ready(function(){
    $('.modal').modal();
  });

  $(document).ready(function(){
    $('.collapsible').collapsible();
  });

  //funkcija dideliam ekranui
  function fillModalContent(city){
    var cities = <?php include '../database/cities.json'; ?>;
    var selectedCity = cities[city];

    document.getElementById('modalTitle').innerHTML = '<div style="background-color:' + selectedCity.color + '">' + selectedCity.fullName + '</div>';

    document.getElementById('city-shops').innerHTML = "";
    for (var i = 0; i < selectedCity.shops.length; i++) {
      document.getElementById('city-shops').innerHTML +=
        '<p>' + '<b>' + selectedCity.shops[i].shopname + '</b>' + '<br>' +
        'Adresas: ' + selectedCity.shops[i].address + '<br>' +
        'Pirmadienis: ' + selectedCity.shops[i].workTimeI + '<br>' +
        'Antradienis: ' + selectedCity.shops[i].workTimeII + '<br>' +
        'Trečiadienis: ' + selectedCity.shops[i].workTimeIII + '<br>' +
        'Ketvirtadienis: ' + selectedCity.shops[i].workTimeIV + '<br>' +
        'Penktadienis: ' + selectedCity.shops[i].workTimeV + '<br>' +
        'Šeštadienis: ' + selectedCity.shops[i].workTimeVI + '<br>' +
        'Sekmadienis: ' + selectedCity.shops[i].workTimeVII +
        '</p>';
    }
  }


  //funkcija mazam ekranui
  var cityList = <?php include '../database/cities.json'; ?>;

  for (var cit in cityList) {
    if (cityList.hasOwnProperty(cit)) {
    document.getElementById('collapseList').innerHTML += '<ul class="collapsible hide-on-large-only"><li><div class="collapsible-header" id="collapseTitle"><b>' + cityList[cit].fullName +'</b></div><div class="collapsible-body" id="collapseContent-' + cit + '"></div></li></ul>';
      for (var citshop in cityList[cit].shops){
        document.getElementById('collapseContent-' + cit + '').innerHTML +=
        '<p>' + '<b>' + cityList[cit].shops[citshop].shopname + '</b>' + '<br>' +
        'Adresas: ' + cityList[cit].shops[citshop].address + '<br>' +
        'Pirmadienis: ' + cityList[cit].shops[citshop].workTimeI + '<br>' +
        'Antradienis: ' + cityList[cit].shops[citshop].workTimeII + '<br>' +
        'Trečiadienis: ' + cityList[cit].shops[citshop].workTimeIII + '<br>' +
        'Ketvirtadienis: ' + cityList[cit].shops[citshop].workTimeIV + '<br>' +
        'Penktadienis: ' + cityList[cit].shops[citshop].workTimeV + '<br>' +
        'Šeštadienis: ' + cityList[cit].shops[citshop].workTimeVI + '<br>' +
        'Sekmadienis: ' + cityList[cit].shops[citshop].workTimeVII +
        '</p>';
      }
    }
  }

</script>

<?php include '../contents/ending.php'; ?>
