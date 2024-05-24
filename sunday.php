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
    <header>
        <a href="./index.php"><img src="./assets/icones/icon_house.png" alt="icone d'une maison" /></a>
        <h1>Vélorution enfants</h1>
    </header>
    <nav>
        <ul>
            <li><a href="./index.php">Accueil</a></li>
            <li><a href="./advocacy.php">Plaidoyer</a></li>
            <li><a href="./sunday.php" class="active">Vélorution</a></li>
        </ul>
    </nav>
    <main>
        <section>
            <div>
                <img src="./assets/images/étoile_1.png" alt="illustration d'une étoile faisant du vélo">
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
                <img src="./assets/images/étoile_2.png" alt="illustration d'une étoile faisant du vélo">
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
                <img src="./assets/images/étoile_4.png" alt="illustration d'une étoile violette souriante faisant de la trotinette">
                <img src="./assets/images/trajet.webp" alt="capture d'écran d'une carte du trajet de la vélorution">
            </div>
            <a href="https://maps.app.goo.gl/ybe8gtgS8Ds33BJj8" target="_blank">Trajet</a>
        </section>
        <section>
            <h6>L'organisation</h6>
            <img src="./assets/images/étoile_3.png" alt="illustration d'une étoile verte souriante faisant du vélo avec un petit personnage pour panier avant">
            <p>10h00</p>
            <p>Rendez-vous sur la place des terreaux</p>
            <p>Des musiciens accompagneront le cortège, et de nombreuses animations (Pimp’ Mon Vélo, parcours d’obstacle, jeux sur les mobilités…) sont prévues au départ et à l’arrivée. Vélos, trottinettes, rollers (...) sont tous bienvenus !</p>
            <img src="./assets/images/place-des-terreaux.webp" alt="photo de la place des Terreaux à Lyon avec vue sur l'hotel de ville">
            <a href="https://maps.app.goo.gl/QRhSEUg9tsU6ucE47" target="_blank">Me rendre aux Terreaux</a>
            <div>
                <img src="./assets/images/étoile_5.png" alt="illustration de deux étoiles souriantes faisant du tandem">
                <p>11h00</p>
                <p>Départ !</p>
            </div>
            <img src="./assets/icones/arrow-way.png" alt="dessin d'une flêche qui zig-zig">
            <div>
                <img src="./assets/images/étoile_7.png" alt="illustration d'une étoile faisant du vélo tirant un soleil souriant dans une charette">
                <p>12h00</p>
                <p>Arrivée prévue au Parc Blandan</p>
            </div>
            <img src="./assets/images/parcblandan_ramparts.webp" alt="photo des ramparts du parc Blandan et son aire de jeux avec des toboggan">
            <a href="https://maps.app.goo.gl/KSu4UM3c2ywLJaQw9" target="_blank">Me rendre au parc Blandan</a>
        </section>
        <section>
            <h6>Participation</h6>
            <p>L’inscription n’est bien sûr pas obligatoire, mais elle nous permet de mieux estimer le nombre de personnes présentes pour préparer l’événement !</p>
            <a href="https://maps.app.goo.gl/KSu4UM3c2ywLJaQw9" target="_blank">Je participe avec des enfants</a>
            <a href="https://maps.app.goo.gl/KSu4UM3c2ywLJaQw9" target="_blank">Je souhaite aider</a>
        </section>
    </main>
</body>

</html>