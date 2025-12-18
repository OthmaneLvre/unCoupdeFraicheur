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

    <!-- HERO SERVICES -->
    <section class="services-hero">
        <div class="container">
        <h1>Nos services de nettoyage</h1>
        <p>
            Des prestations professionnelles adaptées à vos besoins,
            pour un intérieur propre, sain et agréable.
        </p>
        </div>
    </section>

    <!-- LISTE DES SERVICES -->
    <section class="services-list">
        <div class="container services-list-container">

            <!-- Service 1 -->
            <article class="service-detail">
                <div class="service-icon">
                    <img src="../assets/icons/nettoyage.svg" alt="">
                </div>

                <div class="service-content">
                    <h2>Nettoyage intérieur</h2>
                    <p>
                    Le nettoyage complet et soigné de votre intérieur,
                    réalisé avec attention pour vous garantir un espace propre,
                    sain et agréable à vivre au quotidien.
                    </p>
                    <ul>
                    <li>Sols, surfaces et mobiliers</li>
                    <li>Cuisine et sanitaires</li>
                    <li>Dépoussiérage et finitions</li>
                    </ul>
                </div>
            </article>

            <!-- Service 2 (icone à droite) -->
            <article class="service-detail reverse">
                <div class="service-icon">
                    <img src="../assets/icons/nettoyage.svg" alt="">
                </div>

                <div class="service-content">
                    <h2>Nettoyage de fin de chantier</h2>
                    <p>
                    Après des travaux ou une rénovation, nous réalisons un
                    nettoyage complet pour éliminer poussières, résidus
                    et traces de peinture.
                    </p>
                    <ul>
                    <li>Élimination des poussières et résidus</li>
                    <li>Nettoyage complet des surfaces</li>
                    <li>Remise en état avant emménagement</li>
                    </ul>
                </div>
            </article>

            <!-- Service 3 -->
            <article class="service-detail">
                <div class="service-icon">
                    <img src="../assets/icons/nettoyage.svg" alt="">
                </div>

                <div class="service-content">
                    <h2>Entretien régulier</h2>
                    <p>
                    Un service d’entretien planifié pour maintenir votre
                    intérieur propre et sain dans la durée, avec des
                    prestations adaptées à vos besoins.
                    </p>
                    <ul>
                    <li>Interventions planifiées</li>
                    <li>Fréquence adaptée à vos besoins</li>
                    <li>Prestations sur mesure</li>
                    </ul>
                </div>
            </article>

        </div>
    </section>


    <!-- CTA -->
    <section class="cta cta-light">
        <div class="container cta-container">
        <h2>Besoin d’un service de nettoyage adapté ?</h2>
        <p>Contactez-nous pour un devis personnalisé</p>
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

<script type="module" src="../js/main.js"></script>

</body>
</html>