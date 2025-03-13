<?php include 'includes/header.php'; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Technicien en Maintenance Biomédicale</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <!-- Section Hero -->
    <section id="hero">
    <div class="hero-image">
        <img src="assets/images/Banner_Nicéphore.png" alt="Banner Nicéphore">
    </div>
    <div class="hero-text">
        <h1>Etudiant en Génie Biomédical </h1>
        <p>Passionné par la maintenance biomédicale, les systèmes embarqués et l’internet des objets (IOT), je cherche à intégrer des systèmes d’informations hospitaliers modernes dans les hôpitaux. Mon objectif est de contribuer à la dématérialisation des longues tâches procédurales en milieu hospitalier et à l'optimisation du control et du suivi à distance des équipements médicaux.</p>
        <a href="./about.php" class="cta-button">Savoir Plus sur moi  <i class="fa-solid fa-angles-right"></i> </a>
    </div>
</section>

    <!-- Section Compétences -->
    <section id="skills">
        <h2>Mes Compétences</h2>
        <div class="skills-grid">
            <div class="skill-card">
                <i class="fa-solid fa-file"></i>
                <h3>Maîtrise du pack Office 365</h3>
                <p>Microsoft Word, Excel , PowerPoint </p>
            </div>
            <div class="skill-card">
                <i class="fa-solid fa-screwdriver-wrench"></i>
                <h3> Diagnostic et recherche de pannes sur équipements médicaux</h3>
                <p>Analyse des circuits de cartes électroniques , Dépannage .</p>
            </div>
            <div class="skill-card">
                <i class="fas fa-toolbox"></i>
                <h3>Maintenance et installation d’équipements biomédicaux</h3>
                <p>Acquisition ,Installation et  Validation des nouveaux équipements et établissement du plan de maintenance. </p>
            </div>
            <div class="skill-card">
                <i class="fas fa-laptop-code"></i>
                <h3> Développement web</h3>
                <p> HTML, CSS, JavaScript, PHP, SQL </p>
            </div>
            <div class="skill-card">
                <i class="fas fa-code"></i>
                <h3> Programmation et outils de simulation en électronique </h3>
                <p> Arduino , MATLAB , Proteus </p>
            </div>
        </div>
    </section>

   

    <!-- Section Projets -->
    <section id="projects-preview">
        <h2>Mes Projets</h2>
        <div class="projects-grid">
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
        </div>
        <a href="projects.php" class="cta-button">Voir tous mes projets</a>
    </section>

    <?php include 'includes/footer.php'; ?>
    <script src="assets/js/scripts.js"></script>
</body>
</html>