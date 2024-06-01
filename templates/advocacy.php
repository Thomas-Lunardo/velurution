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
</head>

<body>
  <header>
    <a href="../index.php"><img src="../assets/icones/icon_house.png" alt="icone d'une maison" /></a>
    <h1>Plaidoyer</h1>
  </header>
  <nav>
    <ul>
      <li><a href="../index.php">Accueil</a></li>
      <li><a href="../templates/sunday.php">Vélorution</a></li>
      <li  class="active"><a href="./advocacy.php">Plaidoyer</a></li>
    </ul>
  </nav>
  <main>
    <p>Pour que les enfants puissent se déplacer en autonomie vers leurs activités, dans des quartiers plus vivants et respirables, nous demandons :
    </p>
    <div class="advocacy-grid">
      <?php foreach ($advocacy as $key => $value) { ?>
        <article>
          <img src="<?php echo $value['star'] ?>" alt="<?php echo $value['alt'] ?>" loading="lazy">
          <h4><?php echo $value['title'] ?></h4>
          <p><?php echo $value['argument'] ?></p>
        </article>
      <?php } ?>
    </div>
  </main>
</body>

</html>