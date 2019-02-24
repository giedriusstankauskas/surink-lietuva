<?php
  require __DIR__ . '/../app/app.php';
?>

<?php include '../contents/header1.php'; ?>

<meta name="description" content="PHP forma">

<title>Susisiekite</title>

<script src='https://www.google.com/recaptcha/api.js'></script>

<?php include '../contents/header2.php'; ?>

<?php include '../contents/navbar.php'; ?>

<section id="form" class="start">
  <div class="container">
     <h1 class="form-header center-align">Susisiekite su mumis</h1>
     <p class="center-align">
      Jei norite gauti su mumis susisiekti, atsiųsti pasiūlymą ar nusiskundimą - rašykite ir mes atsižvelgsime į jūsų prašymus.
     </p>
    <form id="contact" action="contact.php" method="POST" class="contact-form">
      <div class="form-group">
        <label for="name"></label>
        <input type="text" class="form-control" id="name" name="vardas" value="" placeholder="Jūsų vardas" required autofocus>
      </div>
      <div class="form-group">
        <label for="email"></label>
        <input type="email" class="form-control" id="email" name="email" value="" placeholder="Jūsų elektroninio pašto adresas" required>
      </div>
      <div class="form-group">
        <label for="message"></label>
        <textarea class="form-control" id="message" rows="4" name="message" placeholder="Jūsų žinutė" required></textarea>
      </div>
      <button type="submit" id="contact-submit" name="submit" class="btn btn-primary right">Siųsti</button>
      <!-- RECAPTCHA -->
      <div class="g-recaptcha" data-sitekey="6LcBiJMUAAAAADfKslmhycHyRRHdaLzkeLazOiwI"></div>
      <!-- RECAPTCHA pabaiga -->
    </form>
  </div>
</section>



<?php include '../contents/footer.php'; ?>

<?php include '../contents/indexScript.php'; ?>

<?php include '../contents/ending.php'; ?>
