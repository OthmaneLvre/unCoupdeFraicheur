<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Un Coup de Fraîcheur</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- CSS -->
  <link rel="stylesheet" href="../css/reset.css">
  <link rel="stylesheet" href="../css/variables.css">
  <link rel="stylesheet" href="../css/layout.css">
  <link rel="stylesheet" href="../css/components.css">
  <link rel="stylesheet" href="../css/responsive.css">

  <!-- FONTS -->
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

</head>
<body>

<header class="header">
  <div class="container header-container">
    <a href="/" class="logo">
        <img src="../assets/images/logo.svg" alt="Logo Un Coup de Fraicheur">
    </a>

    <nav class="nav">
      <ul class="nav-list">
        <li><a href="/">Accueil</a></li>
        <li><a href="/services.php">Services</a></li>
        <li><a href="/a-propos.php">À propos</a></li>
        <li><a href="/contact.php">Contact</a></li>
        <li><a href="/contact.php" class="btn-primary">Nous contacter</a></li>
      </ul>
    </nav>

    <button class="burger" id="burger">
      <span></span>
      <span></span>
      <span></span>
    </button>
  </div>
</header>

<footer class="footer">
  <div class="container footer-container">

    <!-- Logo / Icône -->
    <div class="footer-logo">
      <img src="../assets/images/logo.svg" alt="Un Coup de Fraîcheur">
    </div>

    <!-- Phrase -->
    <p class="footer-description">
      Un service de nettoyage professionnel, soigné et respectueux de votre intérieur.
    </p>

    <!-- Navigation footer -->
    <nav class="footer-nav">
      <ul>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="services.php">Services</a></li>
        <li><a href="a-propos.php">À propos</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>

    <!-- Bas de footer -->
    <div class="footer-bottom">
      <p>© 2025 – Un Coup de Fraîcheur</p>
      <a href="mentions-legales.php">Mentions légales</a>
    </div>

  </div>
</footer>

<script src="/js/menu.js"></script>
</body>
</html>