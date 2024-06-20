<?php
require '../src/arrays.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Plaidoyer</title>
  <link rel="stylesheet" href="../styles/advocacy-style.css" />
  <link rel="icon" type="image/png" href="../assets/images/étoile_3.png" />
</head>

<body>
  <header>
    <h1>Plaidoyer</h1>
  </header>
  <nav>
    <nav class="navbar-desktop">
      <ul>
        <li><a href="../index.php">Accueil</a></li>
        <li><a href="./sunday.php">Vélorution</a></li>
        <li class="active"><a href="#">Plaidoyer</a></li>
        <li><a href="https://clavette-lyon.heureux-cyclage.org/index.php/2024/01/24/samedi-22-juin-2024-fete-des-ateliers-velo-participatifs/"  target="_blank">Fête des ateliers vélo</a>
      </ul>
    </nav>
    <nav class="navbar-mobile">
      <img src="../assets/icones/menu-burger.png" alt="icone d'un menu burger" class="burger">
      <ul class="nav-list-mobile">
        <li><a href="../index.php">Accueil</a></li>
        <li><a href="#">Plaidoyer</a></li>
        <li><a href="./sunday.php">Vélorution</a></li>
        <li><a href="https://clavette-lyon.heureux-cyclage.org/index.php/2024/01/24/samedi-22-juin-2024-fete-des-ateliers-velo-participatifs/">Fête des ateliers vélo</a>
          <p>Site La clavette</p>
        </li>
      </ul>
    </nav>
    <main>
      <p>Pour que les enfants puissent se déplacer en autonomie vers leurs activités, dans des quartiers plus vivants et respirables, nous demandons :
      </p>
      <section class="advocacy-grid">
        <?php foreach ($advocacy as $key => $value) { ?>
          <div>
            <img src="<?php echo $value['star'] ?>" alt="<?php echo $value['alt'] ?>" class="<?php echo $value['class'] ?>" loading="lazy">
            <h4><?php echo $value['title'] ?></h4>
            <p><?php echo $value['argument'] ?></p>
          </div>
        <?php } ?>
      </section>
    </main>
    <script src="../assets/script.js"></script>
</body>

</html>