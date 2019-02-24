<?php include '../contents/header1.php'; ?>

<title>Galerija</title>

<style>
  .imageBox{
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
  }
  img{
    padding: 4px;
  }
  .breadcrumb{
    padding-left: 20px;
    color: black;
  }
  .breadcrumb:last-child{
    color: darkgrey;
  }
  .breadcrumb:before{
    display: none
  }
  .container{
      display: flex;
      flex-wrap: wrap;
      max-width: 700px;
    }
    img{
      width: 200px;
      margin: 5px;
    }
</style>

<?php include '../contents/header2.php'; ?>

<?php include '../contents/navbar.php'; ?>

<!-- breadcrumb -->
<nav class="expand">
  <div class="nav-wrapper grey lighten-4">
    <div class="col s12">
      <a href="gallery.php" class="breadcrumb">Galerija</a>
      <a href="#!" class="breadcrumb">Kalėdinės Eglutės</a>
    </div>
  </div>
</nav>
<!-- breadcrumb pabaiga -->

<?php include '../database/christmasTrees.php'; ?>


<div class="container">
    <div id="gallery"></div>
  </div>


<?php include '../contents/footer.php'; ?>

<?php include '../contents/indexScript.php'; ?>

<script>
  $(document).ready(function(){
    $('.materialboxed').materialbox();
  });

  var images = [
"../images/ChristmasTrees/alytausAps.jpg",
"../images/ChristmasTrees/kaunoAps.jpg",
"../images/ChristmasTrees/klaipedosAps.jpg",
"../images/ChristmasTrees/marijampolesAps.jpg",
"../images/ChristmasTrees/panevezioAps.jpg",
"../images/ChristmasTrees/siauliuAps.jpg",
"../images/ChristmasTrees/tauragesAps.jpg",
"../images/ChristmasTrees/telsiuAps.jpg",
"../images/ChristmasTrees/utenosAps.jpg",
"../images/ChristmasTrees/vilniausAps.jpg"];

    var list = '<h1>' + 'Galerija' + '</h1>'

    for (i=0; i < images.length; i++){
      var result = images[i].match(/ChristmasTrees[/](.*).jpg/)[1];
      var upResult = result.charAt(0).toUpperCase() + result.slice(1)
      list += '<img src="' + images[i] + '" alt="' + upResult + '">'
      console.log(upResult);
    }

    document.getElementById('gallery').innerHTML = list;

</script>

<?php include '../contents/ending.php'; ?>
