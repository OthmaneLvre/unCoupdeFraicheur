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

  <!-- HERO CONTACT -->
  <section class="contact-hero">
    <div class="container">
        <h1>Contactez-nous</h1>
        <p>
            Une question, un besoin spécifique ou une demande de devis ?<br>
            Contactez-nous, nous vous répondrons rapidement.
        </p>
    </div>
  </section>

  <!-- CONTACT CONTENT -->
  <section class="contact-content">
    <div class="container contact-grid">

      <!-- FORMULAIRE -->
      <div class="contact-card">
        <form id="contact-form" novalidate>

            <div class="form-group">
                <label for="name">Nom<span>*</span></label>
                <input type="text" id="name" name="name" required>
                <span class="error-message"></span>
            </div>

            <div class="form-group">
                <label for="email">Email<span>*</span></label>
                <input type="email" id="email" name="email" required>
                <span class="error-message"></span>
            </div>

            <div class="form-group">
                <label for="phone">Téléphone<span>*</span></label>
                <input type="tel" id="phone" name="phone" required>
                <span class="error-message"></span>
            </div>

            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="4"></textarea>
                <span class="error-message"></span>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn-primary">
                    Envoyer ma demande
                </button>
            </div>

            <p class="form-note">*Champs obligatoires</p>
            <p id="form-feedback" class="form-feedback"></p>

        </form>
      </div>

      <!-- INFOS -->
      <div class="contact-infos">
        <h3>Un Coup de Fraîcheur</h3>
        <p>Service de nettoyage professionnel</p>

        <ul>
          <li>📍 Intervention sur votre secteur et alentours</li>
          <li>✉️ contact@uncoupdefraicheur.fr</li>
          <li>📞 06 XX XX XX XX</li>
        </ul>
      </div>

    </div>
  </section>

  <!-- MESSAGE DE RÉASSURANCE -->
  <section class="contact-reassurance">
    <div class="container">
      <p>
        Nous nous engageons à vous répondre rapidement et à vous proposer
        une solution adaptée à vos besoins.
      </p>
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