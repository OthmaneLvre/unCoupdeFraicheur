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

  <!-- HERO À PROPOS -->
  <section class="about-hero">
    <div class="container">
      <h1>À propos de Un Coup de Fraîcheur</h1>
      <p>
        Une approche humaine et professionnelle pour un intérieur
        propre, sain et agréable au quotidien.
      </p>
    </div>
  </section>

  <!-- NOTRE APPROCHE -->
  <section class="about-approach">
    <div class="container about-approach-container">

      <div class="about-text">
        <h2>Une approche simple, humaine et efficace</h2>
        <p>
          Chez Un Coup de Fraîcheur, chaque intervention est réalisée
          avec soin et attention. Nous privilégions des méthodes
          efficaces, des produits adaptés et une relation de confiance
          avec nos clients.
        </p>
        <p>
          Notre objectif est de vous offrir un service fiable,
          respectueux et adapté à vos besoins.
        </p>
      </div>

      <div class="about-image">
        <img src="../assets/images/about.jpg" alt="Équipe de nettoyage professionnelle">
      </div>

    </div>
  </section>

  <!-- VALEURS -->
  <section class="about-values">
    <div class="container">
      <h2>Nos engagements</h2>

      <div class="values-grid">

        <article class="value-card">
          <img src="../assets/icons/sparkle.svg" alt="">
          <h3>Soin et qualité</h3>
          <p>Chaque détail compte pour garantir un intérieur propre et agréable.</p>
        </article>

        <article class="value-card">
          <img src="../assets/icons/field.svg" alt="">
          <h3>Respect et discrétion</h3>
          <p>Nous intervenons avec sérieux, en toute confiance et discrétion.</p>
        </article>

        <article class="value-card">
          <img src="../assets/icons/clock.svg" alt="">
          <h3>Fiabilité</h3>
          <p>Ponctualité, régularité et prestations adaptées à vos besoins.</p>
        </article>

      </div>
    </div>
  </section>

    <!-- INFO / LOCALISATION -->
    <section class="about-info">
    <div class="container">
        <p>
        Nous intervenons sur votre secteur et ses alentours.<br>
        Pour toute demande spécifique, n’hésitez pas à nous contacter.
        </p>
    </div>
</section>

  <!-- CTA -->
  <section class="cta">
    <div class="container cta-container">
      <h2>Besoin d’un service de nettoyage de confiance ?</h2>
      <p>Contactez-nous pour un devis personnalisé</p>
      <a href="contact.php" class="btn-primary">Nous contacter</a>
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