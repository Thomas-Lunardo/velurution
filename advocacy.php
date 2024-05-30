<?php

$advocacy = [
  [
    'star' => './assets/images/étoile_1.png',
    'alt' => 'illustration d\'une étoile jaune faisant du vélo',
    'title' => 'Des quartiers vivants / apaisés / libres',
    'argument' => 'Par la forte diminution de la circulation et du stationnement automobile, la réduction de la vitesse, des plans de déplacement dans les blocs d’habitation, des aménagements cyclables de proximité.',
  ],
  [
    'star' => './assets/images/étoile_2.png',
    'alt' => 'illustration d\'une étoile verte faisant du monocycle',
    'title' => 'L’encouragement des trajets à pied, à vélo ou en trottinette vers l’école et leurs différentes activités',
    'argument' => 'Par l’aménagement de “rues scolaires”, le soutien aux initiatives de vélobus, des plans de déplacement des établissements scolaires…',
  ],
  [
    'star' => './assets/images/étoile_3.png',
    'alt' => 'illustration d\'une étoile verte faisant avec dans le panier avant, un rond rouge souriant',
    'title' => 'Une éducation à la mobilité tout au long de la scolarité',
    'argument' => 'Par la généralisation du Savoir rouler à vélo dans toutes les communes, et des actions de la petite enfance au lycée pour promouvoir les mobilités actives.',
  ],
  [
    'star' => './assets/images/étoile_4.png',
    'alt' => 'illustration d\'une étoile violette faisant de la trotinette',
    'title' => 'Le soutien à la pratique de loisirs',
    'argument' => 'Par des espaces ludiques pour le vélo, l’équipement des accueils de mineurs avec des flottes de vélos…',
  ],
  [
    'star' => './assets/images/étoile_5.png',
    'alt' => 'illustration de deux étoiles souriante faisant du tandem',
    'title' => 'Des politiques inclusives',
    'argument' => 'Par l’accompagnement des bailleurs sociaux pour le stationnement vélo, une aide à l’équipement des familles précaires, le soutien aux ateliers d’auto-réparation',
  ],
  [
    'star' => './assets/images/étoile_6.png',
    'alt' => 'illustration d\'une étoile rouge faisant de la rosalie',
    'title' => 'La formation des accompagnants adultes',
    'argument' => 'Sensibiliser, donner confiance et envie aux parents, aux enseignants, aux animateurs de centres de loisirs, de se déplacer de manière active avec les enfants…',
  ],
  [
    'star' => './assets/images/étoile_7.png',
    'alt' => 'illustration d\'une étoile bleue faisant du vélo tirant un soleil souriant dans une charette',
    'title' => 'Des politiques transversales pour soutenir la mobilité active des enfants',
    'argument' => 'Par des référents mobilités actives des enfants dans les communes dont la mission est de piloter ces sujets qui touchent aussi bien à la mobilité, aux sports, qu’à l’éducation, à la santé, ou encore à la sensibilisation des automobilistes.',
  ],
];

?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Plaidoyer</title>
  <link rel="stylesheet" href="./styles/advocacy-style.css" />
</head>

<body>
  <header>
    <a href="./index.php"><img src="./assets/icones/icon_house.png" alt="icone d'une maison" /></a>
    <h1>Plaidoyer</h1>
  </header>
  <nav>
    <ul>
      <li><a href="./index.php">Accueil</a></li>
      <li><a href="./sunday.php">Vélorution</a></li>
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