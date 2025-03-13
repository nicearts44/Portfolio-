<?php
// Détermine la page active
$currentPage = basename($_SERVER['PHP_SELF']); // Récupère le nom du fichier actuel
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio de Nicéphore AGOSSOU, technicien en maintenance biomédicale et passionné d'informatique et de systèmes embarqués.">
    <meta name="keywords" content="portfolio, maintenance biomédicale, systèmes embarqués, informatique, projets">
    <meta name="author" content="Nicéphore AGOSSOU">
    <title>Portfolio - <?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header>
        <nav>
            <a href="index.php" class="logo"> Nicéphore AGOSSOU</a>
            <ul class="menu">
                <li><a href="index.php" class="<?php echo ($currentPage == 'index.php') ? 'active' : ''; ?>">Accueil</a></li>
                <li><a href="about.php" class="<?php echo ($currentPage == 'about.php') ? 'active' : ''; ?>">À propos</a></li>
                <li><a href="projects.php" class="<?php echo ($currentPage == 'projects.php') ? 'active' : ''; ?>">Projets</a></li>
                <li><a href="experience.php" class="<?php echo ($currentPage == 'experience.php') ? 'active' : ''; ?>">Expériences</a></li>
                <li><a href="contact.php" class="<?php echo ($currentPage == 'contact.php') ? 'active' : ''; ?>">Contact</a></li>
            </ul>
            <!-- <button id="theme-toggle"><i class="fas fa-moon"></i></button>  -->
        </nav>
        <script src="assets/js/scripts.js"></script>
    </header>