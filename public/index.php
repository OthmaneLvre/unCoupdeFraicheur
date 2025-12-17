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

<main>

  <!-- HERO -->
  <section class="hero">
    <div class="container hero-container">

      <div class="hero-text">
        <h1>Un intérieur propre,<br> sain et rafraîchi</h1>
        <p>
          Un service de nettoyage professionnel, soigné et respectueux de votre intérieur.
        </p>
        <a href="contact.php" class="btn-primary">Nous contacter</a>
      </div>

      <div class="hero-image">
        <img src="../assets/images/hero-nettoyage.jpg" alt="Nettoyage intérieur">
      </div>

    </div>
  </section>

    <!-- SERVICES -->
  <section class="services">
    <div class="container">
      <h2 class="section-title">Services</h2>

      <div class="services-grid">

        <article class="service-card">
          <img src="../assets/icons/nettoyage.svg" alt="">
          <h3>Nettoyage intérieur</h3>
          <p>Intervention soignée et efficace pour un intérieur propre, sain et agréable au quotidien.</p>
          <a href="services.php">En savoir plus</a>
        </article>

        <article class="service-card">
          <img src="../assets/icons/nettoyage.svg" alt="">
          <h3>Nettoyage intérieur</h3>
          <p>Intervention soignée et efficace pour un intérieur propre, sain et agréable au quotidien.</p>
          <a href="services.php">En savoir plus</a>
        </article>

        <article class="service-card">
          <img src="../assets/icons/nettoyage.svg" alt="">
          <h3>Nettoyage intérieur</h3>
          <p>Intervention soignée et efficace pour un intérieur propre, sain et agréable au quotidien.</p>
          <a href="services.php">En savoir plus</a>
        </article>

      </div>
    </div>
  </section>

    <!-- POURQUOI -->
  <section class="why">
    <div class="container">
      <h2>Pourquoi nous choisir ?</h2>

      <p class="why-text">
        Nous mettons un point d’honneur à offrir un service de nettoyage soigné,
        fiable et respectueux. Chaque intervention est réalisée avec attention
        pour garantir un résultat impeccable et durable.
      </p>
    </div>
  </section>

    <!-- CTA -->
  <section class="cta">
    <div class="container cta-container">
      <h2>Besoin d’un intérieur impeccable ?</h2>
      <p>Réponse rapide et devis personnalisé</p>
      <a href="contact.php" class="btn-primary">Demander un devis</a>
    </div>
  </section>

</main>

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