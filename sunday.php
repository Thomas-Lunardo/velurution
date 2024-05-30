<?php
require './src/setTime.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vélorution</title>
    <link rel="stylesheet" href="./styles/sunday-style.css" />
</head>

<body>
    <header id="up">
        <a href="./index.php"><img src="./assets/icones/icon_house.png" alt="icone d'une maison" /></a>
        <h1>Vélorution enfants</h1>
    </header>
    <nav>
        <ul>
            <li><a href="./index.php">Accueil</a></li>
            <li class="active"><a href="./sunday.php">Vélorution</a></li>
            <li><a href="./advocacy.php">Plaidoyer</a></li>
        </ul>
    </nav>
    <main>
        <section>
            <div>
                <img src="./assets/images/étoile_1.png" alt="illustration d'une étoile faisant du vélo" loading="lazy">
                <div>
                    <p>Dimanche 23 juin 2024</p>
                    <p>10h00</p>
                </div>
            </div>
            <div>
                <b>La manifestation festive partira de la place des Terreaux à 11 heures pour arriver au parc Blandan.</b>
                <p>L’objectif : demander des politiques favorables à la mobilité active des enfants.</p>
                <p>Aujourd’hui, la ville est trop peu adaptée aux enfants, qui perdent en autonomie et peuvent de moins en moins se déplacer seuls dans leur quartier. Donnons-leur une plus grande place et permettons-leur de se déplacer en toute sécurité !</p>
            </div>
        </section>
        <section>
            <h6>Départ dans ...</h6>
            <div class="countdown-container">
                <img src="./assets/images/étoile_2.png" alt="illustration d'une étoile faisant du vélo" loading="lazy">
                <div class="countdown-container-unity">
                    <?php foreach ($timeInformation as $key => $time) { ?>
                        <div class="countdown-unity">
                            <p><?php echo strtoupper($key); ?></p>
                            <p><?php echo $time; ?></p>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <section>
            <h6>Le trajet</h6>
            <p>5,4 km</p>
            <p>Le parcours est facile afin que les enfants puissent passer un agréable moment. Nous ne montons pas à Fourvière cette année.</p>
            <div>
                <img src="./assets/images/étoile_4.png" alt="illustration d'une étoile violette souriante faisant de la trotinette" loading="lazy">
                <img src="./assets/images/trajet.webp" alt="capture d'écran d'une carte du trajet de la vélorution" loading="lazy">
            </div>
            <a href="https://maps.app.goo.gl/ybe8gtgS8Ds33BJj8" target="_blank">Trajet</a>
        </section>
        <section>
            <h6>L'organisation</h6>
            <img src="./assets/images/étoile_3.png" alt="illustration d'une étoile verte souriante faisant du vélo avec un petit personnage pour panier avant" class="et-star" loading="lazy">
            <p>10h00</p>
            <p>Rendez-vous sur la <strong>place des terreaux</strong></p>
            <p>Des musiciens accompagneront le cortège, et de nombreuses animations (Pimp’ Mon Vélo, parcours d’obstacle, jeux sur les mobilités…) sont prévues au départ et à l’arrivée. Vélos, trottinettes, rollers (...) sont tous bienvenus !</p>
            <img src="./assets/images/place-des-terreaux.webp" alt="photo de la place des Terreaux à Lyon avec vue sur l'hotel de ville" class="lyon-picture">
            <a href="https://maps.app.goo.gl/QRhSEUg9tsU6ucE47" target="_blank">Me rendre aux Terreaux</a>
            <div class="the-way">
                <div>
                    <img src="./assets/images/étoile_5.png" alt="illustration de deux étoiles souriantes faisant du tandem">
                    <p>11h00</p>
                    <p>Départ !</p>
                </div>
                <img src="./assets/icones/arrow-way.png" alt="dessin d'une flêche qui zig-zag" class="zig-zag" loading="lazy">
                <img src="./assets/icones/arrow_tablet&desktop.png" alt="dessin d'une flêche qui zig-zag" class="zig-zag-tablel-desktop" loading="lazy">
                <div>
                    <img src="./assets/images/étoile_7.png" alt="illustration d'une étoile faisant du vélo tirant un soleil souriant dans une charette" loading="lazy">
                    <p>12h00</p>
                    <p>Arrivée prévue au <strong>Parc Blandan</strong></p>
                </div>
            </div>
            <img src="./assets/images/parcblandan_ramparts.webp" alt="photo des ramparts du parc Blandan et son aire de jeux avec des toboggan" class="lyon-picture" loading="lazy">
            <a href="https://maps.app.goo.gl/KSu4UM3c2ywLJaQw9" target="_blank">Me rendre au parc Blandan</a>
        </section>
        <section>
            <h6>Participation</h6>
            <p>L’inscription n’est bien sûr pas obligatoire, mais elle nous permet de mieux estimer le nombre de personnes présentes pour préparer l’événement !</p>
            <a href="https://framaforms.org/participation-a-la-velorution-enfants-23-juin-2024-1713537427" target="_blank">Je participe avec des enfants</a>
            <a href="https://framaforms.org/je-veux-aider-a-lorganisation-de-la-velorution-enfants-1713525121" target="_blank">Je souhaite aider</a>
        </section>
    </main>
    <footer>
        <a href="#up"><img src="./assets/icones/chevron_purple_up.png" alt="chevron violet qui vous ramène en haut de page"></a>
    </footer>
</body>

</html>