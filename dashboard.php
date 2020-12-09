<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberRoom_Admin</title>
    <link rel="stylesheet" href="dashboard.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@300;400&display=swap" rel="stylesheet">
</head>

<body>
    <div class="header">
        <div class="header_cadre">
            <div class="cadre_logo">
            </div>
            <div class="cadre_admin">
                <h2 class="title">Admin</h2>
            </div>
        </div>
        <div class="header_time">
            <h2 class="in_time">
                <p id="date"></p>
            </h2>
        </div>
    </div>


    <div class="formulaires">

        <!-- Partie Création d'utilisateur-->

        <div class="account">
            <h2 class="account_titre">Ajouter un utilisateur</h2>
            <form method="post">
                <input type="text" class="account_input" placeholder="𝑬𝒏𝒕𝒓𝒆𝒛 𝒖𝒏 𝒏𝒐𝒎" name="nom">
                <input type="text" class="account_input" placeholder="𝑬𝒏𝒕𝒓𝒆𝒛 𝒖𝒏 𝒑𝒓𝒆́𝒏𝒐𝒎" name="prenom">
                <input type="submit" class="account_button" value="Valider">
            </form>
        </div>
        <?php
            if (isset($_POST['prenom']) & isset($_POST['nom'])){
                $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                $reponse = $bdd->query('SELECT * FROM clients');

                $requete= 'INSERT INTO clients VALUES(NULL, "' . $_POST['nom'] . '", "' . $_POST['prenom'] . '")';
                $resultat = $bdd -> query($requete);
            }
        ?>

        <!-- Partie Assignation de postes-->

        <div class="reservations">
            <h2 class="reservations_titre">Assigner un poste</h2>
            <form method="post">
                <select class="select" name="poste">
                    <option value="1">Poste 1</option>
                    <option value="2">Poste 2</option>
                    <option value="3">Poste 3</option>
                    <option value="4">Poste 4</option>
                    <option value="5">Poste 5</option>
                    <option value="6">Poste 6</option>
                    <option value="7">Poste 7</option>
                    <option value="8">Poste 8</option>
                </select>
                <input type="text" class="reservations_input" placeholder="𝑬𝒏𝒕𝒓𝒆𝒛 𝒖𝒏 𝒏𝒐𝒎"
                    name="utilisateur_nom">
                <input type="text" class="reservations_input" placeholder="𝑬𝒏𝒕𝒓𝒆𝒛 𝒖𝒏 𝒑𝒓𝒆́𝒏𝒐𝒎"
                    name="utilisateur_prenom">
                <input type="submit" class="reservations_button" value="Valider">
            </form>
        </div>
    </div>
    <?php

        $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        $reponse = $bdd->query('SELECT * FROM postes');
        if (isset($_POST['utilisateur_nom']) & isset($_POST['utilisateur_prenom'])& $_POST['poste']==1) {
            $requete= "UPDATE postes SET numero=1, utilisateur_nom = '".$_POST['utilisateur_nom']."',utilisateur_prenom = '".$_POST['utilisateur_prenom']."', etat='indisponible' WHERE numero = 1";
            $resultat = $bdd -> query($requete);
        }
        elseif (isset($_POST['utilisateur_nom']) & isset($_POST['utilisateur_prenom'])& $_POST['poste']==2) {
            $requete= "UPDATE postes SET numero=2, utilisateur_nom = '".$_POST['utilisateur_nom']."',utilisateur_prenom = '".$_POST['utilisateur_prenom']."', etat='indisponible' WHERE numero = 2";
            $resultat = $bdd -> query($requete);
        }
        elseif (isset($_POST['utilisateur_nom']) & isset($_POST['utilisateur_prenom'])& $_POST['poste']==3) {
            $requete= "UPDATE postes SET numero=3, utilisateur_nom = '".$_POST['utilisateur_nom']."',utilisateur_prenom = '".$_POST['utilisateur_prenom']."', etat='indisponible' WHERE numero = 3";
            $resultat = $bdd -> query($requete);
        }
        elseif (isset($_POST['utilisateur_nom']) & isset($_POST['utilisateur_prenom'])& $_POST['poste']==4) {
            $requete= "UPDATE postes SET numero=4, utilisateur_nom = '".$_POST['utilisateur_nom']."',utilisateur_prenom = '".$_POST['utilisateur_prenom']."', etat='indisponible' WHERE numero = 4";
            $resultat = $bdd -> query($requete);
        }
        elseif (isset($_POST['utilisateur_nom']) & isset($_POST['utilisateur_prenom'])& $_POST['poste']==5) {
            $requete= "UPDATE postes SET numero=5, utilisateur_nom = '".$_POST['utilisateur_nom']."',utilisateur_prenom = '".$_POST['utilisateur_prenom']."', etat='indisponible' WHERE numero = 5";
            $resultat = $bdd -> query($requete);
        }
        elseif (isset($_POST['utilisateur_nom']) & isset($_POST['utilisateur_prenom'])& $_POST['poste']==6) {
            $requete= "UPDATE postes SET numero=6, utilisateur_nom = '".$_POST['utilisateur_nom']."',utilisateur_prenom = '".$_POST['utilisateur_prenom']."', etat='indisponible' WHERE numero = 6";
            $resultat = $bdd -> query($requete);
        }
        elseif (isset($_POST['utilisateur_nom']) & isset($_POST['utilisateur_prenom'])& $_POST['poste']==7) {
            $requete= "UPDATE postes SET numero=7, utilisateur_nom = '".$_POST['utilisateur_nom']."',utilisateur_prenom = '".$_POST['utilisateur_prenom']."', etat='indisponible' WHERE numero = 7";
            $resultat = $bdd -> query($requete);
        }
        elseif (isset($_POST['utilisateur_nom']) & isset($_POST['utilisateur_prenom'])& $_POST['poste']==8) {
            $requete= "UPDATE postes SET numero=8, utilisateur_nom = '".$_POST['utilisateur_nom']."',utilisateur_prenom = '".$_POST['utilisateur_prenom']."', etat='indisponible' WHERE numero = 8";
            $resultat = $bdd -> query($requete);
        }
        $reponse->closeCursor();
    ?>

    <!-- Partie information sur les postes-->

    <div class="postes">
        <div class="poste_1">
            <div class="poste_img__blue">
                <img src="images/poste_1.png" width="100%" height="100%">
            </div>
            <div class="poste_infos__blue">
                <ul class="poste_liste">
                    <li class="poste_titre">
                        <?php
                            $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                            $reponse = $bdd->query('SELECT * FROM postes WHERE numero=1');
                            while($donnees= $reponse->fetch()){
                                echo 'Poste n° ' . $donnees['numero'];
                            }
                            $reponse->closeCursor();
                        ?>
                    </li>

                    <li class="poste_utilisateur-nom">
                        <?php
                            $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                            $reponse = $bdd->query('SELECT * FROM postes WHERE numero=1');
                            while($donnees= $reponse->fetch()){
                                echo 'Nom : ' . $donnees['utilisateur_nom'];
                            }
                            $reponse->closeCursor();
                        ?>
                    </li>
                    <li class="poste_utilisateur-prenom">
                        <?php
                            $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                            $reponse = $bdd->query('SELECT * FROM postes WHERE numero=1');
                            while($donnees= $reponse->fetch()){
                                echo 'Prénom : ' . $donnees['utilisateur_prenom'];
                            }
                            $reponse->closeCursor();
                        ?>
                    </li>
                    <li class="poste_infos__temps">
                        <h3 class="timer-js">
                            <span class="minutes-js">25</span>
                            <span>:</span><span class="seconds-js">00</span>
                        </h3>
                    </li>
                </ul>
            </div>
            <div class="poste_timer">
                <input id="pomodoro-js" type="text" class="timer_input__blue" placeholder="Choisissez une durée (minutes)">
                <button id="reset-js" type="button" class="poste_button__blue">Valider</button>
                <button id="stop-js" type="button" class="poste_button__blue">Arrêter</button>
                <button id="start-js" type="button" class="poste_button__blue">Commencer</button>
            </div>
        </div>
        <div class="poste_2">
            <div class="poste_img__white">
                <img src="images/poste_2_white.png" width="100%" height="100%">
            </div>
            <div class="poste_infos__white">
                <ul class="poste_liste">
                    <li class="poste_titre">
                        <?php
                            $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                            $reponse = $bdd->query('SELECT * FROM postes WHERE numero=1');
                            while($donnees= $reponse->fetch()){
                                echo 'Poste n° ' . $donnees['numero'];
                            }
                            $reponse->closeCursor();
                        ?>
                    </li>

                    <li class="poste_utilisateur-nom">
                        <?php
                            $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                            $reponse = $bdd->query('SELECT * FROM postes WHERE numero=1');
                            while($donnees= $reponse->fetch()){
                                echo 'Nom : ' . $donnees['utilisateur_nom'];
                            }
                            $reponse->closeCursor();
                        ?>
                    </li>
                    <li class="poste_utilisateur-prenom">
                        <?php
                            $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                            $reponse = $bdd->query('SELECT * FROM postes WHERE numero=1');
                            while($donnees= $reponse->fetch()){
                                echo 'Prénom : ' . $donnees['utilisateur_prenom'];
                            }
                            $reponse->closeCursor();
                        ?>
                    </li>
                    <li class="poste_infos__temps">
                        <h3 class="timer-js_2">
                            <span class="minutes-js_2">25</span>
                            <span>:</span><span class="seconds-js_2">00</span>
                        </h3>
                    </li>
                </ul>
            </div>
            <div class="poste_timer">
                <input id="pomodoro-js_2" type="text" class="timer_input__white" placeholder="Choisissez une durée (minutes)">
                <button id="reset-js_2" type="button" class="poste_button__white">Valider</button>
                <button id="stop-js_2" type="button" class="poste_button__white">Arrêter</button>
                <button id="start-js_2" type="button" class="poste_button__white">Commencer</button>
            </div>
        </div>
        <div class="poste_3">
            <div class="poste_img__blue">
                <img src="images/poste_3.png" width="100%" height="100%">
            </div>
            <div class="poste_infos__blue">
                <ul class="poste_liste">
                    <li class="poste_titre">
                        <?php
                            $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                            $reponse = $bdd->query('SELECT * FROM postes WHERE numero=1');
                            while($donnees= $reponse->fetch()){
                                echo 'Poste n° ' . $donnees['numero'];
                            }
                            $reponse->closeCursor();
                        ?>
                    </li>

                    <li class="poste_utilisateur-nom">
                        <?php
                            $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                            $reponse = $bdd->query('SELECT * FROM postes WHERE numero=1');
                            while($donnees= $reponse->fetch()){
                                echo 'Nom : ' . $donnees['utilisateur_nom'];
                            }
                            $reponse->closeCursor();
                        ?>
                    </li>
                    <li class="poste_utilisateur-prenom">
                        <?php
                            $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                            $reponse = $bdd->query('SELECT * FROM postes WHERE numero=1');
                            while($donnees= $reponse->fetch()){
                                echo 'Prénom : ' . $donnees['utilisateur_prenom'];
                            }
                            $reponse->closeCursor();
                        ?>
                    </li>
                    <li class="poste_infos__temps">
                        <h3 class="timer-js_3">
                            <span class="minutes-js_3">25</span>
                            <span>:</span><span class="seconds-js_3">00</span>
                        </h3>
                    </li>
                </ul>
            </div>
            <div class="poste_timer">
                <input id="pomodoro-js_3" type="text" class="timer_input__blue" placeholder="Choisissez une durée (minutes)">
                <button id="reset-js_3" type="button" class="poste_button__blue">Valider</button>
                <button id="stop-js_3" type="button" class="poste_button__blue">Arrêter</button>
                <button id="start-js_3" type="button" class="poste_button__blue">Commencer</button>
            </div>
        </div>
        <div class="poste_4">
            <div class="poste_img__white">
                <img src="images/poste_4_white.png" width="100%" height="100%">
            </div>
            <div class="poste_infos__white">
                <ul class="poste_liste">
                    <li class="poste_titre">
                        <?php
                            $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                            $reponse = $bdd->query('SELECT * FROM postes WHERE numero=1');
                            while($donnees= $reponse->fetch()){
                                echo 'Poste n° ' . $donnees['numero'];
                            }
                            $reponse->closeCursor();
                        ?>
                    </li>

                    <li class="poste_utilisateur-nom">
                        <?php
                            $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                            $reponse = $bdd->query('SELECT * FROM postes WHERE numero=1');
                            while($donnees= $reponse->fetch()){
                                echo 'Nom : ' . $donnees['utilisateur_nom'];
                            }
                            $reponse->closeCursor();
                        ?>
                    </li>
                    <li class="poste_utilisateur-prenom">
                        <?php
                            $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                            $reponse = $bdd->query('SELECT * FROM postes WHERE numero=1');
                            while($donnees= $reponse->fetch()){
                                echo 'Prénom : ' . $donnees['utilisateur_prenom'];
                            }
                            $reponse->closeCursor();
                        ?>
                    </li>
                    <li class="poste_infos__temps">
                        <h3 class="timer-js_4">
                            <span class="minutes-js_4">25</span>
                            <span>:</span><span class="seconds-js_4">00</span>
                        </h3>
                    </li>
                </ul>
            </div>
            <div class="poste_timer">
                <input id="pomodoro-js_4" type="text" class="timer_input__white" placeholder="Choisissez une durée (minutes)">
                <button id="reset-js_4" type="button" class="poste_button__white">Valider</button>
                <button id="stop-js_4" type="button" class="poste_button__white">Arrêter</button>
                <button id="start-js_4" type="button" class="poste_button__white">Commencer</button>
            </div>
        </div>
        <div class="poste_5">
            <div class="poste_img__white">
                <img src="images/poste_5_white.png" width="100%" height="100%">
            </div>
            <div class="poste_infos__white">
                <ul class="poste_liste">
                    <li class="poste_titre">
                        <?php
                            $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                            $reponse = $bdd->query('SELECT * FROM postes WHERE numero=1');
                            while($donnees= $reponse->fetch()){
                                echo 'Poste n° ' . $donnees['numero'];
                            }
                            $reponse->closeCursor();
                        ?>
                    </li>

                    <li class="poste_utilisateur-nom">
                        <?php
                            $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                            $reponse = $bdd->query('SELECT * FROM postes WHERE numero=1');
                            while($donnees= $reponse->fetch()){
                                echo 'Nom : ' . $donnees['utilisateur_nom'];
                            }
                            $reponse->closeCursor();
                        ?>
                    </li>
                    <li class="poste_utilisateur-prenom">
                        <?php
                            $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                            $reponse = $bdd->query('SELECT * FROM postes WHERE numero=1');
                            while($donnees= $reponse->fetch()){
                                echo 'Prénom : ' . $donnees['utilisateur_prenom'];
                            }
                            $reponse->closeCursor();
                        ?>
                    </li>
                    <li class="poste_infos__temps">
                        <h3 class="timer-js_5">
                            <span class="minutes-js_5">25</span>
                            <span>:</span><span class="seconds-js_5">00</span>
                        </h3>
                    </li>
                </ul>
            </div>
            <div class="poste_timer">
                <input id="pomodoro-js_5" type="text" class="timer_input__white" placeholder="Choisissez une durée (minutes)">
                <button id="reset-js_5" type="button" class="poste_button__white">Valider</button>
                <button id="stop-js_5" type="button" class="poste_button__white">Arrêter</button>
                <button id="start-js_5" type="button" class="poste_button__white">Commencer</button>
            </div>
        </div>
        <div class="poste_6">
            <div class="poste_img__blue">
                <img src="images/poste_6.png" width="100%" height="100%">
            </div>
            <div class="poste_infos__blue">
                <ul class="poste_liste">
                    <li class="poste_titre">
                        <?php
                            $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                            $reponse = $bdd->query('SELECT * FROM postes WHERE numero=1');
                            while($donnees= $reponse->fetch()){
                                echo 'Poste n° ' . $donnees['numero'];
                            }
                            $reponse->closeCursor();
                        ?>
                    </li>

                    <li class="poste_utilisateur-nom">
                        <?php
                            $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                            $reponse = $bdd->query('SELECT * FROM postes WHERE numero=1');
                            while($donnees= $reponse->fetch()){
                                echo 'Nom : ' . $donnees['utilisateur_nom'];
                            }
                            $reponse->closeCursor();
                        ?>
                    </li>
                    <li class="poste_utilisateur-prenom">
                        <?php
                            $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                            $reponse = $bdd->query('SELECT * FROM postes WHERE numero=1');
                            while($donnees= $reponse->fetch()){
                                echo 'Prénom : ' . $donnees['utilisateur_prenom'];
                            }
                            $reponse->closeCursor();
                        ?>
                    </li>
                    <li class="poste_infos__temps">
                        <h3 class="timer-js_6">
                            <span class="minutes-js_6">25</span>
                            <span>:</span><span class="seconds-js_6">00</span>
                        </h3>
                    </li>
                </ul>
            </div>
            <div class="poste_timer">
                <input id="pomodoro-js_6" type="text" class="timer_input__blue" placeholder="Choisissez une durée (minutes)">
                <button id="reset-js_6" type="button" class="poste_button__blue">Valider</button>
                <button id="stop-js_6" type="button" class="poste_button__blue">Arrêter</button>
                <button id="start-js_6" type="button" class="poste_button__blue">Commencer</button>
            </div>
        </div>
        <div class="poste_7">
            <div class="poste_img__white">
                <img src="images/poste_7_white.png" width="100%" height="100%">
            </div>
            <div class="poste_infos__white">
                <ul class="poste_liste">
                    <li class="poste_titre">
                        <?php
                            $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                            $reponse = $bdd->query('SELECT * FROM postes WHERE numero=1');
                            while($donnees= $reponse->fetch()){
                                echo 'Poste n° ' . $donnees['numero'];
                            }
                            $reponse->closeCursor();
                        ?>
                    </li>

                    <li class="poste_utilisateur-nom">
                        <?php
                            $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                            $reponse = $bdd->query('SELECT * FROM postes WHERE numero=1');
                            while($donnees= $reponse->fetch()){
                                echo 'Nom : ' . $donnees['utilisateur_nom'];
                            }
                            $reponse->closeCursor();
                        ?>
                    </li>
                    <li class="poste_utilisateur-prenom">
                        <?php
                            $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                            $reponse = $bdd->query('SELECT * FROM postes WHERE numero=1');
                            while($donnees= $reponse->fetch()){
                                echo 'Prénom : ' . $donnees['utilisateur_prenom'];
                            }
                            $reponse->closeCursor();
                        ?>
                    </li>
                    <li class="poste_infos__temps">
                        <h3 class="timer-js_7">
                            <span class="minutes-js_7">25</span>
                            <span>:</span><span class="seconds-js_7">00</span>
                        </h3>
                    </li>
                </ul>
            </div>
            <div class="poste_timer">
                <input id="pomodoro-js_7" type="text" class="timer_input__white" placeholder="Choisissez une durée (minutes)">
                <button id="reset-js_7" type="button" class="poste_button__white">Valider</button>
                <button id="stop-js_7" type="button" class="poste_button__white">Arrêter</button>
                <button id="start-js_7" type="button" class="poste_button__white">Commencer</button>
            </div>
        </div>
        <div class="poste_8">
            <div class="poste_img__blue">
                <img src="images/poste_8.png" width="100%" height="100%">
            </div>
            <div class="poste_infos__blue">
                <ul class="poste_liste">
                    <li class="poste_titre">
                        <?php
                            $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                            $reponse = $bdd->query('SELECT * FROM postes WHERE numero=1');
                            while($donnees= $reponse->fetch()){
                                echo 'Poste n° ' . $donnees['numero'];
                            }
                            $reponse->closeCursor();
                        ?>
                    </li>

                    <li class="poste_utilisateur-nom">
                        <?php
                            $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                            $reponse = $bdd->query('SELECT * FROM postes WHERE numero=1');
                            while($donnees= $reponse->fetch()){
                                echo 'Nom : ' . $donnees['utilisateur_nom'];
                            }
                            $reponse->closeCursor();
                        ?>
                    </li>
                    <li class="poste_utilisateur-prenom">
                        <?php
                            $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                            $reponse = $bdd->query('SELECT * FROM postes WHERE numero=1');
                            while($donnees= $reponse->fetch()){
                                echo 'Prénom : ' . $donnees['utilisateur_prenom'];
                            }
                            $reponse->closeCursor();
                        ?>
                    </li>
                    <li class="poste_infos__temps">
                        <h3 class="timer-js_8">
                            <span class="minutes-js_8">25</span>
                            <span>:</span><span class="seconds-js_8">00</span>
                        </h3>
                    </li>
                </ul>
            </div>
            <div class="poste_timer">
                <input id="pomodoro-js_8" type="text" class="timer_input__blue" placeholder="Choisissez une durée (minutes)">
                <button id="reset-js_8" type="button" class="poste_button__blue">Valider</button>
                <button id="stop-js_8" type="button" class="poste_button__blue">Arrêter</button>
                <button id="start-js_8" type="button" class="poste_button__blue">Commencer</button>
            </div>
        </div>
    </div>

    <script>
    (function($) {
        var minutes = 25;
        var seconds = 0;
        var started = false;
        var counter;

        $('#more-js').on('click', function() {
            if (!started) {
                var n = parseInt($('#pomodoro-js').val());
                if (n >= 0) {
                    $('#pomodoro-js').val(n + 1);
                    minutes = n + 1;
                    seconds = 0;
                    $('.minutes-js').html(displayTime(minutes));
                    $('.seconds-js').html('00');
                }
            }
        });
        $('#less-js').on('click', function() {
            if (!started) {
                var n = parseInt($('#pomodoro-js').val());
                if (n > 1) {
                    $('#pomodoro-js').val(n - 1);
                    minutes = n - 1;
                    seconds = 0;
                    $('.minutes-js').html(displayTime(minutes));
                    $('.seconds-js').html('00');
                }
            }
        });

        $('#start-js').click(function() {
            if (!started) {
                started = true;
                counter = setInterval(timer, 1000);
            }
        });

        function timer() {
            if (seconds == 0) {
                seconds = 60;
                minutes--;
            }
            seconds--;
            if (minutes < 0) {
                if (seconds == 59) {
                    playSound("https://raw.githubusercontent.com/IonDen/ion.sound/master/sounds/bell_ring");
                }
                clearInterval(counter);
                //counter ended, do something here
                return;
            }
            var displaySeconds = displayTime(seconds);
            var displayMinutes = displayTime(minutes);
            $('.seconds-js').html(displaySeconds);
            $('.minutes-js').html(displayMinutes);
        }

        $('#stop-js').click(function() {
            started = false;
            clearInterval(counter);
            return;
        });

        $('#reset-js').click(function() {
            minutes = parseInt($('#pomodoro-js').val());
            seconds = 0;
            $('.minutes-js').html(displayTime(minutes));
            $('.seconds-js').html('00');

            started = false;
            clearInterval(counter);
            return;
        });

        function displayTime(t) {
            var display = t;
            if (t < 10) {
                display = '0' + t.toString();
            }
            return display;
        }

        function playSound(filename) {
            document.getElementById("sound").innerHTML = '<audio autoplay="autoplay"><source src="' + filename +
                '.mp3" type="audio/mpeg" /><source src="' + filename +
                '.ogg" type="audio/ogg" /><embed hidden="true" autostart="true" loop="false" src="' + filename +
                '.mp3" /></audio>';
        }

    })(jQuery);

    (function($) {
        var minutes = 25;
        var seconds = 0;
        var started = false;
        var counter;

        $('#more-js_2').on('click', function() {
            if (!started) {
                var n = parseInt($('#pomodoro-js_2').val());
                if (n >= 0) {
                    $('#pomodoro-js_2').val(n + 1);
                    minutes = n + 1;
                    seconds = 0;
                    $('.minutes-js_2').html(displayTime(minutes));
                    $('.seconds-js_2').html('00');
                }
            }
        });
        $('#less-js_2').on('click', function() {
            if (!started) {
                var n = parseInt($('#pomodoro-js_2').val());
                if (n > 1) {
                    $('#pomodoro-js_2').val(n - 1);
                    minutes = n - 1;
                    seconds = 0;
                    $('.minutes-js_2').html(displayTime(minutes));
                    $('.seconds-js_2').html('00');
                }
            }
        });

        $('#start-js_2').click(function() {
            if (!started) {
                started = true;
                counter = setInterval(timer, 1000);
            }
        });

        function timer() {
            if (seconds == 0) {
                seconds = 60;
                minutes--;
            }
            seconds--;
            if (minutes < 0) {
                if (seconds == 59) {
                    playSound("https://raw.githubusercontent.com/IonDen/ion.sound/master/sounds/bell_ring");
                }
                clearInterval(counter);
                //counter ended, do something here
                return;
            }
            var displaySeconds = displayTime(seconds);
            var displayMinutes = displayTime(minutes);
            $('.seconds-js_2').html(displaySeconds);
            $('.minutes-js_2').html(displayMinutes);
        }

        $('#stop-js_2').click(function() {
            started = false;
            clearInterval(counter);
            return;
        });

        $('#reset-js_2').click(function() {
            minutes = parseInt($('#pomodoro-js_2').val());
            seconds = 0;
            $('.minutes-js_2').html(displayTime(minutes));
            $('.seconds-js_2').html('00');

            started = false;
            clearInterval(counter);
            return;
        });

        function displayTime(t) {
            var display = t;
            if (t < 10) {
                display = '0' + t.toString();
            }
            return display;
        }

        function playSound(filename) {
            document.getElementById("sound").innerHTML = '<audio autoplay="autoplay"><source src="' + filename +
                '.mp3" type="audio/mpeg" /><source src="' + filename +
                '.ogg" type="audio/ogg" /><embed hidden="true" autostart="true" loop="false" src="' + filename +
                '.mp3" /></audio>';
        }

    })(jQuery);

    (function($) {
        var minutes = 25;
        var seconds = 0;
        var started = false;
        var counter;

        $('#more-js_3').on('click', function() {
            if (!started) {
                var n = parseInt($('#pomodoro-js_3').val());
                if (n >= 0) {
                    $('#pomodoro-js_3').val(n + 1);
                    minutes = n + 1;
                    seconds = 0;
                    $('.minutes-js_3').html(displayTime(minutes));
                    $('.seconds-js_3').html('00');
                }
            }
        });
        $('#less-js_3').on('click', function() {
            if (!started) {
                var n = parseInt($('#pomodoro-js_3').val());
                if (n > 1) {
                    $('#pomodoro-js_3').val(n - 1);
                    minutes = n - 1;
                    seconds = 0;
                    $('.minutes-js_3').html(displayTime(minutes));
                    $('.seconds-js_3').html('00');
                }
            }
        });

        $('#start-js_3').click(function() {
            if (!started) {
                started = true;
                counter = setInterval(timer, 1000);
            }
        });

        function timer() {
            if (seconds == 0) {
                seconds = 60;
                minutes--;
            }
            seconds--;
            if (minutes < 0) {
                if (seconds == 59) {
                    playSound("https://raw.githubusercontent.com/IonDen/ion.sound/master/sounds/bell_ring");
                }
                clearInterval(counter);
                //counter ended, do something here
                return;
            }
            var displaySeconds = displayTime(seconds);
            var displayMinutes = displayTime(minutes);
            $('.seconds-js_3').html(displaySeconds);
            $('.minutes-js_3').html(displayMinutes);
        }

        $('#stop-js_3').click(function() {
            started = false;
            clearInterval(counter);
            return;
        });

        $('#reset-js_3').click(function() {
            minutes = parseInt($('#pomodoro-js_3').val());
            seconds = 0;
            $('.minutes-js_3').html(displayTime(minutes));
            $('.seconds-js_3').html('00');

            started = false;
            clearInterval(counter);
            return;
        });

        function displayTime(t) {
            var display = t;
            if (t < 10) {
                display = '0' + t.toString();
            }
            return display;
        }

        function playSound(filename) {
            document.getElementById("sound").innerHTML = '<audio autoplay="autoplay"><source src="' + filename +
                '.mp3" type="audio/mpeg" /><source src="' + filename +
                '.ogg" type="audio/ogg" /><embed hidden="true" autostart="true" loop="false" src="' + filename +
                '.mp3" /></audio>';
        }

    })(jQuery);

    (function($) {
        var minutes = 25;
        var seconds = 0;
        var started = false;
        var counter;

        $('#more-js_4').on('click', function() {
            if (!started) {
                var n = parseInt($('#pomodoro-js_4').val());
                if (n >= 0) {
                    $('#pomodoro-js_4').val(n + 1);
                    minutes = n + 1;
                    seconds = 0;
                    $('.minutes-js_4').html(displayTime(minutes));
                    $('.seconds-js_4').html('00');
                }
            }
        });
        $('#less-js_4').on('click', function() {
            if (!started) {
                var n = parseInt($('#pomodoro-js_4').val());
                if (n > 1) {
                    $('#pomodoro-js_4').val(n - 1);
                    minutes = n - 1;
                    seconds = 0;
                    $('.minutes-js_4').html(displayTime(minutes));
                    $('.seconds-js_4').html('00');
                }
            }
        });

        $('#start-js_4').click(function() {
            if (!started) {
                started = true;
                counter = setInterval(timer, 1000);
            }
        });

        function timer() {
            if (seconds == 0) {
                seconds = 60;
                minutes--;
            }
            seconds--;
            if (minutes < 0) {
                if (seconds == 59) {
                    playSound("https://raw.githubusercontent.com/IonDen/ion.sound/master/sounds/bell_ring");
                }
                clearInterval(counter);
                //counter ended, do something here
                return;
            }
            var displaySeconds = displayTime(seconds);
            var displayMinutes = displayTime(minutes);
            $('.seconds-js_4').html(displaySeconds);
            $('.minutes-js_4').html(displayMinutes);
        }

        $('#stop-js_4').click(function() {
            started = false;
            clearInterval(counter);
            return;
        });

        $('#reset-js_4').click(function() {
            minutes = parseInt($('#pomodoro-js_4').val());
            seconds = 0;
            $('.minutes-js_4').html(displayTime(minutes));
            $('.seconds-js_4').html('00');

            started = false;
            clearInterval(counter);
            return;
        });

        function displayTime(t) {
            var display = t;
            if (t < 10) {
                display = '0' + t.toString();
            }
            return display;
        }

        function playSound(filename) {
            document.getElementById("sound").innerHTML = '<audio autoplay="autoplay"><source src="' + filename +
                '.mp3" type="audio/mpeg" /><source src="' + filename +
                '.ogg" type="audio/ogg" /><embed hidden="true" autostart="true" loop="false" src="' + filename +
                '.mp3" /></audio>';
        }

    })(jQuery);
    (function($) {
        var minutes = 25;
        var seconds = 0;
        var started = false;
        var counter;

        $('#more-js_5').on('click', function() {
            if (!started) {
                var n = parseInt($('#pomodoro-js_5').val());
                if (n >= 0) {
                    $('#pomodoro-js_5').val(n + 1);
                    minutes = n + 1;
                    seconds = 0;
                    $('.minutes-js_5').html(displayTime(minutes));
                    $('.seconds-js_5').html('00');
                }
            }
        });
        $('#less-js_5').on('click', function() {
            if (!started) {
                var n = parseInt($('#pomodoro-js_5').val());
                if (n > 1) {
                    $('#pomodoro-js_5').val(n - 1);
                    minutes = n - 1;
                    seconds = 0;
                    $('.minutes-js_5').html(displayTime(minutes));
                    $('.seconds-js_5').html('00');
                }
            }
        });

        $('#start-js_5').click(function() {
            if (!started) {
                started = true;
                counter = setInterval(timer, 1000);
            }
        });

        function timer() {
            if (seconds == 0) {
                seconds = 60;
                minutes--;
            }
            seconds--;
            if (minutes < 0) {
                if (seconds == 59) {
                    playSound("https://raw.githubusercontent.com/IonDen/ion.sound/master/sounds/bell_ring");
                }
                clearInterval(counter);
                //counter ended, do something here
                return;
            }
            var displaySeconds = displayTime(seconds);
            var displayMinutes = displayTime(minutes);
            $('.seconds-js_5').html(displaySeconds);
            $('.minutes-js_5').html(displayMinutes);
        }

        $('#stop-js_5').click(function() {
            started = false;
            clearInterval(counter);
            return;
        });

        $('#reset-js_5').click(function() {
            minutes = parseInt($('#pomodoro-js_5').val());
            seconds = 0;
            $('.minutes-js_5').html(displayTime(minutes));
            $('.seconds-js_5').html('00');

            started = false;
            clearInterval(counter);
            return;
        });

        function displayTime(t) {
            var display = t;
            if (t < 10) {
                display = '0' + t.toString();
            }
            return display;
        }

        function playSound(filename) {
            document.getElementById("sound").innerHTML = '<audio autoplay="autoplay"><source src="' + filename +
                '.mp3" type="audio/mpeg" /><source src="' + filename +
                '.ogg" type="audio/ogg" /><embed hidden="true" autostart="true" loop="false" src="' + filename +
                '.mp3" /></audio>';
        }

    })(jQuery);

    (function($) {
        var minutes = 25;
        var seconds = 0;
        var started = false;
        var counter;

        $('#more-js_6').on('click', function() {
            if (!started) {
                var n = parseInt($('#pomodoro-js_6').val());
                if (n >= 0) {
                    $('#pomodoro-js_6').val(n + 1);
                    minutes = n + 1;
                    seconds = 0;
                    $('.minutes-js_6').html(displayTime(minutes));
                    $('.seconds-js_6').html('00');
                }
            }
        });
        $('#less-js_6').on('click', function() {
            if (!started) {
                var n = parseInt($('#pomodoro-js_6').val());
                if (n > 1) {
                    $('#pomodoro-js_6').val(n - 1);
                    minutes = n - 1;
                    seconds = 0;
                    $('.minutes-js_6').html(displayTime(minutes));
                    $('.seconds-js_6').html('00');
                }
            }
        });

        $('#start-js_6').click(function() {
            if (!started) {
                started = true;
                counter = setInterval(timer, 1000);
            }
        });

        function timer() {
            if (seconds == 0) {
                seconds = 60;
                minutes--;
            }
            seconds--;
            if (minutes < 0) {
                if (seconds == 59) {
                    playSound("https://raw.githubusercontent.com/IonDen/ion.sound/master/sounds/bell_ring");
                }
                clearInterval(counter);
                //counter ended, do something here
                return;
            }
            var displaySeconds = displayTime(seconds);
            var displayMinutes = displayTime(minutes);
            $('.seconds-js_6').html(displaySeconds);
            $('.minutes-js_6').html(displayMinutes);
        }

        $('#stop-js_6').click(function() {
            started = false;
            clearInterval(counter);
            return;
        });

        $('#reset-js_6').click(function() {
            minutes = parseInt($('#pomodoro-js_6').val());
            seconds = 0;
            $('.minutes-js_6').html(displayTime(minutes));
            $('.seconds-js_6').html('00');

            started = false;
            clearInterval(counter);
            return;
        });

        function displayTime(t) {
            var display = t;
            if (t < 10) {
                display = '0' + t.toString();
            }
            return display;
        }

        function playSound(filename) {
            document.getElementById("sound").innerHTML = '<audio autoplay="autoplay"><source src="' + filename +
                '.mp3" type="audio/mpeg" /><source src="' + filename +
                '.ogg" type="audio/ogg" /><embed hidden="true" autostart="true" loop="false" src="' + filename +
                '.mp3" /></audio>';
        }

    })(jQuery);

    (function($) {
        var minutes = 25;
        var seconds = 0;
        var started = false;
        var counter;

        $('#more-js_7').on('click', function() {
            if (!started) {
                var n = parseInt($('#pomodoro-js_7').val());
                if (n >= 0) {
                    $('#pomodoro-js_7').val(n + 1);
                    minutes = n + 1;
                    seconds = 0;
                    $('.minutes-js_7').html(displayTime(minutes));
                    $('.seconds-js_7').html('00');
                }
            }
        });
        $('#less-js_7').on('click', function() {
            if (!started) {
                var n = parseInt($('#pomodoro-js_7').val());
                if (n > 1) {
                    $('#pomodoro-js_7').val(n - 1);
                    minutes = n - 1;
                    seconds = 0;
                    $('.minutes-js_7').html(displayTime(minutes));
                    $('.seconds-js_7').html('00');
                }
            }
        });

        $('#start-js_7').click(function() {
            if (!started) {
                started = true;
                counter = setInterval(timer, 1000);
            }
        });

        function timer() {
            if (seconds == 0) {
                seconds = 60;
                minutes--;
            }
            seconds--;
            if (minutes < 0) {
                if (seconds == 59) {
                    playSound("https://raw.githubusercontent.com/IonDen/ion.sound/master/sounds/bell_ring");
                }
                clearInterval(counter);
                //counter ended, do something here
                return;
            }
            var displaySeconds = displayTime(seconds);
            var displayMinutes = displayTime(minutes);
            $('.seconds-js_7').html(displaySeconds);
            $('.minutes-js_7').html(displayMinutes);
        }

        $('#stop-js_7').click(function() {
            started = false;
            clearInterval(counter);
            return;
        });

        $('#reset-js_7').click(function() {
            minutes = parseInt($('#pomodoro-js_7').val());
            seconds = 0;
            $('.minutes-js_7').html(displayTime(minutes));
            $('.seconds-js_7').html('00');

            started = false;
            clearInterval(counter);
            return;
        });

        function displayTime(t) {
            var display = t;
            if (t < 10) {
                display = '0' + t.toString();
            }
            return display;
        }

        function playSound(filename) {
            document.getElementById("sound").innerHTML = '<audio autoplay="autoplay"><source src="' + filename +
                '.mp3" type="audio/mpeg" /><source src="' + filename +
                '.ogg" type="audio/ogg" /><embed hidden="true" autostart="true" loop="false" src="' + filename +
                '.mp3" /></audio>';
        }

    })(jQuery);

    (function($) {
        var minutes = 25;
        var seconds = 0;
        var started = false;
        var counter;

        $('#more-js_8').on('click', function() {
            if (!started) {
                var n = parseInt($('#pomodoro-js_8').val());
                if (n >= 0) {
                    $('#pomodoro-js_8').val(n + 1);
                    minutes = n + 1;
                    seconds = 0;
                    $('.minutes-js_8').html(displayTime(minutes));
                    $('.seconds-js_8').html('00');
                }
            }
        });
        $('#less-js_8').on('click', function() {
            if (!started) {
                var n = parseInt($('#pomodoro-js_8').val());
                if (n > 1) {
                    $('#pomodoro-js_8').val(n - 1);
                    minutes = n - 1;
                    seconds = 0;
                    $('.minutes-js_8').html(displayTime(minutes));
                    $('.seconds-js_8').html('00');
                }
            }
        });

        $('#start-js_8').click(function() {
            if (!started) {
                started = true;
                counter = setInterval(timer, 1000);
            }
        });

        function timer() {
            if (seconds == 0) {
                seconds = 60;
                minutes--;
            }
            seconds--;
            if (minutes < 0) {
                if (seconds == 59) {
                    playSound("https://raw.githubusercontent.com/IonDen/ion.sound/master/sounds/bell_ring");
                }
                clearInterval(counter);
                //counter ended, do something here
                return;
            }
            var displaySeconds = displayTime(seconds);
            var displayMinutes = displayTime(minutes);
            $('.seconds-js_8').html(displaySeconds);
            $('.minutes-js_8').html(displayMinutes);
        }

        $('#stop-js_8').click(function() {
            started = false;
            clearInterval(counter);
            return;
        });

        $('#reset-js_8').click(function() {
            minutes = parseInt($('#pomodoro-js_8').val());
            seconds = 0;
            $('.minutes-js_8').html(displayTime(minutes));
            $('.seconds-js_8').html('00');

            started = false;
            clearInterval(counter);
            return;
        });

        function displayTime(t) {
            var display = t;
            if (t < 10) {
                display = '0' + t.toString();
            }
            return display;
        }

        function playSound(filename) {
            document.getElementById("sound").innerHTML = '<audio autoplay="autoplay"><source src="' + filename +
                '.mp3" type="audio/mpeg" /><source src="' + filename +
                '.ogg" type="audio/ogg" /><embed hidden="true" autostart="true" loop="false" src="' + filename +
                '.mp3" /></audio>';
        }

    })(jQuery);
    </script>
    <!-- Partie Footer -->
    <footer>

        <div>


            <ul class="mail">
                <li>LAVIT Gaetan<br> <a href="dimitrigign@gmail.com" id="copy"><img src="images/email.png" width="20px"
                            height="20px" /></a>
                    <a href="https://www.linkedin.com/in/dimitri-gigan-80a52a184/" target="blank"><img
                            src="images/linkedin-rond-300x300.png" width="20px" height="20px" /></a>
                    <a href="https://www.facebook.com/dimitri.gigan" target="blank"><img
                            src="images/Facebook-share-icon.png" width="20px" height="20px" /></a>
                    <a href="https://twitter.com/Dimimajin" target="blank"><img src="images/logo-rond-twitter.png"
                            width="20px" height="20px" /></a>

                </li>

                <li>GIGAN Dimitri


                    <br> <a href="dimitrigign@gmail.com" id="copy"><img src="images/email.png" width="20px"
                            height="20px" /></a>
                    <a href="https://www.linkedin.com/in/dimitri-gigan-80a52a184/" target="blank"><img
                            src="images/linkedin-rond-300x300.png" width="20px" height="20px" /></a>
                    <a href="https://www.facebook.com/dimitri.gigan" target="blank"><img
                            src="images/Facebook-share-icon.png" width="20px" height="20px" /></a>
                    <a href="https://twitter.com/Dimimajin" target="blank"><img src="images/logo-rond-twitter.png"
                            width="20px" height="20px" /></a>


                </li>


                <li>AH-KENG Abel <br> <a href="dimitrigign@gmail.com" id="copy"><img src="images/email.png" width="20px"
                            height="20px" /></a>
                    <a href="https://www.linkedin.com/in/dimitri-gigan-80a52a184/" target="blank"><img
                            src="images/linkedin-rond-300x300.png" width="20px" height="20px" /></a>
                    <a href="https://www.facebook.com/dimitri.gigan" target="blank"><img
                            src="images/Facebook-share-icon.png" width="20px" height="20px" /></a>
                    <a href="https://twitter.com/Dimimajin" target="blank"><img src="images/logo-rond-twitter.png"
                            width="20px" height="20px" /></a>
                </li>

                <li>BEGE Swann <br> <a href="dimitrigign@gmail.com" id="copy"><img src="images/email.png" width="20px"
                            height="20px" /></a>
                    <a href="https://www.linkedin.com/in/dimitri-gigan-80a52a184/" target="blank"><img
                            src="images/linkedin-rond-300x300.png" width="20px" height="20px" /></a>
                    <a href="https://www.facebook.com/dimitri.gigan" target="blank"><img
                            src="images/Facebook-share-icon.png" width="20px" height="20px" /></a>
                    <a href="https://twitter.com/Dimimajin" target="blank"><img src="images/logo-rond-twitter.png"
                            width="20px" height="20px" /></a>
                </li>

            </ul>

        </div>
        <p class="copyright">© Copyright Cyber Room </p>







    </footer>
    <script>
    setInterval(function() {
        var d = new Date();
        var h = d.toLocaleTimeString();
        console.log(d.toLocaleTimeString());
        document.getElementById("date").innerHTML = h;
    }, 100)
    </script>
</body>

</html>
