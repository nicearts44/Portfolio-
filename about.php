<?php include 'includes/header.php'; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À propos - Portfolio</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <!-- Section À propos -->
    <section id="about">
        <h2>À propos de moi</h2>
        <div class="about-content">
            <div class="about-text">
                <p>
                    Je suis un <strong>Etudiant en année de licence de Maintenance Biomédicale et hospitalière </strong> passionné par l'innovation technologique, l'informatique et les systèmes embarqués. Mon parcours académique m'a permis d'acquérir des compétences solides dans ces domaines, tout en développant une approche pratique et innovante des défis technologiques.

                Mon objectif est d'intégrer des systèmes d’informations hospitaliers modernes dans les hôpitaux et de développer des solution numériques innovantes pour gérer les données biomédicaux.
                </p>
                <p>
                Ma vision est de contribuer à la dématérialisation des longues tâches procédurales en milieu hospitalier et à l'optimisation du control et du suivi à distance des équipements médicaux.
                </p>
                <a href="contact.php" class="cta-button">Contactez-moi</a>
            </div>
            <div class="about-image">
                <img src="./assets/images/Nice_bn.jpg" alt="Photo Nicéphore AGOSSOU ">
            </div>
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

    <!-- Section Parcours Académique -->
<section id="academic-timeline">
    <h2>Mon Parcours Académique</h2>
    <div class="academic-timeline">
        <div class="academic-item">
            <h3> Baccalauréat </h3>
            <p>Collège Catholique Notre-Dâme de Lourdes (CCNDL) | 2021 - 2022</p>
            <ul>
                <li>Série C</li>
                <li>Mention : Bien</li>
            </ul>
        </div>
        <div class="academic-item">
            <h3>Licence en Maintenance Biomédicale et Hospitalière (en cours )</h3>
            <p>Ecole Polytechnique d'Abomey Calavi  | 2022 - Présent </p>
            <!-- <ul>
                <li>Spécialisation en systèmes embarqués pour applications médicales.</li>
                <li>Projet de recherche sur les capteurs biomédicaux.</li>
            </ul> -->
        </div>
        <div class="academic-item">
            <h3>Master en Systèmes d'Information en Santé </h3>
            <!-- <p>École Nationale d'Ingénieurs | 2021 - 2023</p>
            <ul>
                <li>Conception et développement de systèmes embarqués pour la santé.</li>
                <li>Mémoire sur l'intégration de l'IA dans les dispositifs médicaux.</li>
            </ul> -->
        </div>
    </div>
</section>

    <?php include 'includes/footer.php'; ?>
    <script src="assets/js/scripts.js"></script>
</body>
</html>