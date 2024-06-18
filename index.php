<?php
require './src/arrays.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Quartiers libres #2</title>
  <link rel="stylesheet" href="./styles/main-style.css" />
  <link rel="icon" type="image/png" href="./assets/images/étoile_1.png" />
</head>

<body>
  <header id="up">
    <section>
      <h1>Quartiers libres #2</h1>
      <img src="./assets/images/quartiers_libres_2.webp" alt="photo d'enfant faisant du vélo avec titre quartiers libres #2 en haut de la photo" />
    </section>
    <section>
      <a href="https://clavette-lyon.heureux-cyclage.org/index.php/2024/01/24/samedi-22-juin-2024-fete-des-ateliers-velo-participatifs/" target="_blank">
        <div>
          <h3>Samedi 22 juin 2024</h3>
          <p>
            Fête des ateliers vélo participatifs
          </p>
        </div>
      </a>
      <a href="./templates/sunday.php">
        <div>
          <h3>Dimanche 23 juin 2024</h3>
          <p>Vélorution enfants</p>
        </div>
      </a>
    </section>
  </header>
  <nav>
    <ul>
      <li class="active"><a href="./index.php">Accueil</a></li>
      <li><a href="./templates/sunday.php">Vélorution</a></li>
      <li><a href="./templates/advocacy.php">Plaidoyer</a></li>
    </ul>
  </nav>
  <main>
    <section class="video-container">
      <img src="<?php echo $stars[2]['picture'] ?>" alt="<?php echo $stars[2]['alt'] ?>" loading="lazy">
      <div>
        <video controls controlslist="nodownload">
          <source src="./assets/videos/velorution-fisrt-edition.mp4" type="video/mp4">
        </video>
        <i>Quartiers Libres #1</i>
      </div>
      <img src="<?php echo $stars[5]['picture'] ?>" alt="<?php echo $stars[5]['alt'] ?>" loading="lazy">
    </section>
    <section>
      <div>
        <img src="<?php echo $stars[4]['picture'] ?>" alt="<?php echo $stars[5]['alt'] ?>" loading="lazy">
        <h2>Viva la vélorution !</h2>
        <p>Favorisons la mobilité des enfants dans le Grand Lyon !</p>
      </div>
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
          actives de tous les enfants.
        </p>
        <a href="./templates/advocacy.php">Plaidoyer</a>
        <p>
          Pour Clément Drognat Landré de La Rue Est À Nous, “il est urgent de
          rééquilibrer le partage de l’espace public en faveur des enfants et
          des mobilités actives. Il faut revoir les plans de circulation au
          sein des blocs d’habitations, apaiser les quartiers résidentiels et
          créer des rues scolaires sur tout le territoire de la Métropole !”.
        </p>
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
        <img src="./assets/images/flyer_vélorution.jpg" alt="flyer de l'énévement">
        <a href="./assets/images/flyer_vélorution.jpg" download="flyer-vélorution.jpg">Télécharger le Flyer</a>
      </div>
    </section>
    <section>
      <div class="heading-section">
        <img src="<?php echo $stars[2]['picture'] ?>" alt="<?php echo $stars[2]['alt'] ?>" loading="lazy">
        <h2>Actualités</h2>
      </div>
      <div>
        <h3>La Bibliambule rejoint la vélorution !</h3>
        <img src="./assets/images/Bibliambule_Maison_Environnement_2.jpg" alt="photo d'une médiathèque amublante ouverte avec des hamacs et le guidon du vélo">
        <p>La maison de l’environnement fait à présent parti des association organisatrices de l’évenement. Elle sera présente à la vélorution  avec sa médiathèque ambulante.</p>
        <p>Venez bouquiner confortablement installé dans un hamac et découvrir nos nouveautés : romans, BD, revues, DVD ou jeux de société… il y en a pour tous les goûts !</p>
      </div>
      <div>
        <h3>Vente de vélo</h3>
        <p>Le samedi 22 juin 2024, les ateliers vélo participatifs vous invitent, au Chat Perché, 29 rue Reinach dans le 7e à Lyon, pour une journée mécano-festive !</p>
        <p>Il y a aura de nombreuses animations ainsi qu’une vente de vélo pour les enfants.</p>
      </div>
    </section>
  </main>
  <footer>
    <section>
      <img src="<?php echo $stars[6]['picture'] ?>" alt="<?php echo $stars[6]['alt'] ?>" loading="lazy">
      <h2>Associations partenaires</h2>
    </section>
    <section>
      <?php foreach ($organisation as $key => $value) { ?>
        <a href="<?php echo $value['link'] ?>" target="_blank">
          <img src="<?php echo $value['src'] ?>" alt="<?php echo $value['alt'] ?>" class="<?php echo $value['class'] ?>" loading="lazy" /></a>
      <?php } ?>
    </section>
    <section>
      <a href="#up"><img src="./assets/icones/chevron_purple_up.png" alt="chevron violet qui vous ramène en haut de page"></a>
    </section>
  </footer>
</body>

</html>