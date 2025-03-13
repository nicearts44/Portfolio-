<?php include 'includes/header.php'; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Projets - Portfolio</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <!-- Section Projets -->
    <section id="projects">
        <h2>Mes Projets</h2>
        <!-- <div class="filters">
            <button class="filter-button active" data-filter="all">Tous</button>
            <button class="filter-button" data-filter="personal">Personnelles</button>
            <button class="filter-button" data-filter="scholar">Académiques</button>
           
        </div> -->
        <div class="projects-grid">
            <!-- Projet 1 -->
            <div class="project-card" data-category="personal">
                <img src="assets/images/feux_tric.jpg" alt="Feu tricolore">
                <div class="project-info">
                    <h3>Réalisation d'une maquette de feu tricolore avec Arduino</h3>
                    <p>Conception d'un système pour simuler le fonctionnement des feux tricolores</p>
                    <!-- <a href="#" class="project-link">Voir plus</a> -->
                </div>
            </div>
            <!-- Projet 2 -->
            <div class="project-card" data-category="scholar">
                <img src="assets/images/signaux.jpeg" alt="Acquisition et traitement de la température">
                <div class="project-info">
                    <h3>Acquisition et Traitement du Signal de Température corporelle </h3>
                    <p>Développement d'un module d'acquisition de la température et d'un algorithme pour le traitement des interférences sur ce signal avec le logiciel MATLAB</p>
                    <!-- <a href="#" class="project-link">Voir plus</a> -->
                </div>
            </div>
            <!-- Projet 3 -->
            <div class="project-card" data-category="personal">
                <img src="assets/images/smart_agri.jpeg" alt="Smart agri ">
                <div class="project-info">
                    <h3>SMART AGRI ( en cours ) </h3>
                    <p> Conception et Réalisation d'un Système d’Irrigation Intelligent avec Commande GSM. Ce projet vise à concevoir un système d’irrigation intelligent et autonome utilisant un module GSM pour la commande à distance et un capteur d’humidité pour optimiser l’arrosage.</p>
                    <!-- <a href="#" class="project-link">Voir plus</a> -->
                </div>
            </div>
            <!-- Projet 4 -->
            <div class="project-card" data-category="personal">
                <img src="assets/images/segbe.jpeg" alt="Projet SEGBE">
                <div class="project-info">
                    <h3>SEGBE ( en cours ) </h3>
                    <p> Ce projet dénommé « SÉGBÉ » vise à développer un traducteur automatique autonome, capable de traduire des conversations en temps réel entre le français et plusieurs langues locales béninoises. Le traducteur fonctionnera sans connexion à Internet, utilisant des technologies de reconnaissance vocale, de traduction automatique et de synthèse vocale. Le dispositif traduira automatiquement et de manière fluide les échanges entre les interlocuteurs, tout en s’adaptant aux variantes et accents des langues locales, à commencer par le fon.</p>
                    <!-- <a href="#" class="project-link">Voir plus</a> -->
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
    <script src="assets/js/scripts.js"></script>
</body>
</html>