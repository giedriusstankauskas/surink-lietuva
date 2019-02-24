<?php
// access
//$secretKey = '6LcBiJMUAAAAAE_miGtAWNQWLT7BME_uY-Da5jui';
//$captcha = $_POST['g-recaptcha-response'];
//
//if(!$captcha){
//  echo '<p class="alert alert-warning">Please check the the captcha form.</p>';
//  exit;
//}

if(isset($_POST['submit'])) {
  $vardas = trim($_POST['vardas']);
  $email = trim($_POST['email']);
  $message = trim($_POST['message']);

if(!empty($vardas) && !empty($email) && !empty($message)) {
  if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $from = $email;
    $to = "giedrius.stankaukas@yahoo.com";
    $subject = "Nauja Zinute";
    $autorius = 'Nuo ' . $vardas . ', ' . $email;
    $zinute = htmlspecialchars($message);
    mail($to, $subject, $autorius, $zinute, $from);
    echo "<script>alert('Dekojame, jusu zinute gauta');</script>";
  }
}

include('db.php');
  }
?>
