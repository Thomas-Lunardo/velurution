<?php

$organisation = [
  [
    'link' => 'https://larueestanouslyon.fr/accueil',
    'src' => './assets/logos/la_rue_est_à_nous.webp',
    'alt' => 'logo de l\'association La rue et à nous 69',
    'class' => 'first-logo',
  ],
  [
    'link' => 'https://www.maisonduvelolyon.org/',
    'src' => './assets/logos/maison_du_vélo_lyon.webp',
    'alt' => 'logo de l\'association Greenpeace',
    'class' => '',
  ],
  [
    'link' => 'https://www.greenpeace.fr/',
    'src' => './assets/logos/Greenpeace_logo.webp',
    'alt' => 'logo de l\'association Greenpeace',
    'class' => '',
  ],
  [
    'link' => 'https://cleancitiescampaign.org/',
    'src' => './assets/logos/Clean-Cities.webp',
    'alt' => 'logo de l\'association Clean-Cities',
    'class' => '',
  ],
  [
    'link' => 'https://rhone.alternatiba.eu/',
    'src' => './assets/logos/alternatiba_rhone.webp',
    'alt' => 'logo de l\'association Alternatiba',
    'class' => '',
  ],
  [
    'link' => 'https://clavette-lyon.heureux-cyclage.org',
    'src' => './assets/logos/clavette_lyonaise.webp',
    'alt' => 'logo de l\'association Clavette',
    'class' => '',
  ],
  [
    'link' => 'https://lavilleavelo.org/',
    'src' => './assets/logos/la_ville_à_vélo.webp',
    'alt' => 'logo de l\'association La ville à vélo',
    'class' => '',
  ],
];

?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Quartiers libres #2</title>
  <link rel="stylesheet" href="./styles/main-style.css" />
</head>

<body>
  <header>
    <section>
      <h1>Quartiers libres #2</h1>
      <img src="./assets/images/quartiers_libres_2.webp" alt="photo d'enfant faisant du vélo avec titre quartiers libres #2 en haut de la photo" />
    </section>
    <picture>
      <img src="./assets/icones/calendar.png" alt="icone d'un calendrier" />
    </picture>
    <section>
      <article>
        <h3>Samedi 22 juin 2024</h3>
        <p>
          Fête des ateliers vélo participatifs, avec des temps pour les
          enfants
        </p>
      </article>
      <article>
        <a href="./sunday.php">
        <h3>Dimanche 23 juin 2024</h3>
        <p>Vélorution enfants</p>
        </a>
      </article>
    </section>
  </header>
  <nav>
    <ul>
      <li><a href="./index.html" class="active">Accueil</a></li>
      <li><a href="./advocacy.php">Plaidoyer</a></li>
    </ul>
  </nav>
  <main>
    <section>
      <img src="./assets/icones/bike.png" alt="icone d'un vélocycliste" />
      <h2>Viva la vélorution !</h2>
      <p>Favorisons la mobilité des enfants dans le Grand Lyon !</p>
    </section>
    <section>
      <div>
        <p>
          Les 22 et 23 juin, plusieurs associations lyonnaises organisent la
          deuxième édition de Quartiers Libres. Le samedi, les ateliers vélo
          participatifs vous invitent à l’atelier du Chat Perché (Lyon 7) pour
          célébrer la vélonomie (spectacles, jeux…).
        </p>
        <p>
          Temps fort du week-end, le dimanche aura lieu la “vélorution” pour
          les enfants. La manifestation festive partira de la place des
          Terreaux à 11 h pour arriver au parc Blandan. L’objectif : demander
          des politiques favorables à la mobilité active des enfants.
        </p>
        <p>
          A l’occasion de cet événement, les associations entendent demander
          le déploiement de politiques permettant de développer les mobilités
          actives de tous les enfants
        </p>
        <div class="advocacay-cat">
          <a href="advocacy.php">Plaidoyer</a>
        </div>
        <p>
          Pour Clément Drognat Landré de La Rue Est À Nous, “il est urgent de
          rééquilibrer le partage de l’espace public en faveur des enfants et
          des mobilités actives. Il faut revoir les plans de circulation au
          sein des blocs d’habitations, apaiser les quartiers résidentiels et
          créer des rues scolaires sur tout le territoire de la Métropole !”.
        </p>
      </div>
      <div>
        <p>
          Dans l’ensemble, les associations demandent une action plus forte
          des communes pour accompagner les mobilités des enfants et des
          familles, comme le signale Frédérique Bienvenue de La Ville à Vélo :
          “Il faut créer plus d’aménagements cyclables de proximité, mais
          aussi des espaces dédiés aux pratiques ludiques. Surtout, les
          communes doivent se doter de référents aux mobilités actives des
          enfants pour enfin développer une culture transversale de cet enjeu,
          entre voirie, éducation, santé…”
        </p>
        <p>
          Enfin, Cyril Vernay de la Maison du Vélo Lyon insiste sur
          l’importance d’être attentif à toutes les situations :“Aujourd’hui,
          certains publics restent éloignés des mobilités actives. Il faut
          développer un continuum éducatif au vélo de la maternelle au
          collège, prendre en compte les accompagnants adultes… et aussi aider
          les familles précaires à se doter des équipements nécessaires !”
        </p>
      </div>
    </section>
  </main>
  <footer>
    <h2>Associations partenaires</h2>
    <section>
      <?php foreach ($organisation as $key => $value) { ?>
        <a href="<?php echo $value['link'] ?>" target="_blank">
          <img src="<?php echo $value['src'] ?>" alt="<?php echo $value['alt'] ?>" class="<?php echo $value['class'] ?>" /></a>
      <?php } ?>
    </section>
  </footer>
</body>

</html>