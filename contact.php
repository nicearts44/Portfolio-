<?php include 'includes/header.php'; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Portfolio</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <!-- Section Contact -->
    <section id="contact">
        <h2>Contactez-moi</h2>
        <div class="contact-container">
            <!-- Formulaire de contact -->
            <div class="contact-form">
                <form action="contact_form.php" method="POST">
                    <div class="form-group">
                        <label for="name">Nom :</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email :</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message :</label>
                        <textarea id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="cta-button">Envoyer</button>
                </form>
            </div>

            <!-- Coordonnées -->
            <div class="contact-info">
                <h3>Coordonnées</h3>
                <ul>
                    <li><i class="fas fa-envelope"></i> Email : <a href="mailto:nicephoreagossou''@gmail.com">nicephoreagossou44@gmail.com</a></li>
                    <li><i class="fas fa-phone"></i> Téléphone : +229 01 64 49 19 91</li>
                    <li><i class="fas fa-map-marker-alt"></i> Adresse : Cotonou | Bénin </li>
                </ul>

                
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
    <script src="assets/js/scripts.js"></script>
</body>
</html>