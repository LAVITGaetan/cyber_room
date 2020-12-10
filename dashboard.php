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
        if (isset($_POST['prenom']) & isset($_POST['nom'])) {
            $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            $reponse = $bdd->query('SELECT * FROM clients');

            $requete = 'INSERT INTO clients VALUES(NULL, "' . $_POST['nom'] . '", "' . $_POST['prenom'] . '")';
            $resultat = $bdd->query($requete);
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
                <input type="text" class="reservations_input" placeholder="𝑬𝒏𝒕𝒓𝒆𝒛 𝒖𝒏 𝒏𝒐𝒎" name="utilisateur_nom">
                <input type="text" class="reservations_input" placeholder="𝑬𝒏𝒕𝒓𝒆𝒛 𝒖𝒏 𝒑𝒓𝒆́𝒏𝒐𝒎" name="utilisateur_prenom">
                <input type="submit" class="reservations_button" value="Valider">
            </form>
        </div>
    </div>

    <!-- Requête pour assigner les utilisateurs-->
    <?php

    $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $reponse = $bdd->query('SELECT * FROM postes');
    if (isset($_POST['utilisateur_nom']) & isset($_POST['utilisateur_prenom']) & $_POST['poste'] == 1) {
        $requete = "UPDATE postes SET numero=1, utilisateur_nom = '" . $_POST['utilisateur_nom'] . "',utilisateur_prenom = '" . $_POST['utilisateur_prenom'] . "', etat='indisponible' WHERE numero = 1";
        $resultat = $bdd->query($requete);
    } elseif (isset($_POST['utilisateur_nom']) & isset($_POST['utilisateur_prenom']) & $_POST['poste'] == 2) {
        $requete = "UPDATE postes SET numero=2, utilisateur_nom = '" . $_POST['utilisateur_nom'] . "',utilisateur_prenom = '" . $_POST['utilisateur_prenom'] . "', etat='indisponible' WHERE numero = 2";
        $resultat = $bdd->query($requete);
    } elseif (isset($_POST['utilisateur_nom']) & isset($_POST['utilisateur_prenom']) & $_POST['poste'] == 3) {
        $requete = "UPDATE postes SET numero=3, utilisateur_nom = '" . $_POST['utilisateur_nom'] . "',utilisateur_prenom = '" . $_POST['utilisateur_prenom'] . "', etat='indisponible' WHERE numero = 3";
        $resultat = $bdd->query($requete);
    } elseif (isset($_POST['utilisateur_nom']) & isset($_POST['utilisateur_prenom']) & $_POST['poste'] == 4) {
        $requete = "UPDATE postes SET numero=4, utilisateur_nom = '" . $_POST['utilisateur_nom'] . "',utilisateur_prenom = '" . $_POST['utilisateur_prenom'] . "', etat='indisponible' WHERE numero = 4";
        $resultat = $bdd->query($requete);
    } elseif (isset($_POST['utilisateur_nom']) & isset($_POST['utilisateur_prenom']) & $_POST['poste'] == 5) {
        $requete = "UPDATE postes SET numero=5, utilisateur_nom = '" . $_POST['utilisateur_nom'] . "',utilisateur_prenom = '" . $_POST['utilisateur_prenom'] . "', etat='indisponible' WHERE numero = 5";
        $resultat = $bdd->query($requete);
    } elseif (isset($_POST['utilisateur_nom']) & isset($_POST['utilisateur_prenom']) & $_POST['poste'] == 6) {
        $requete = "UPDATE postes SET numero=6, utilisateur_nom = '" . $_POST['utilisateur_nom'] . "',utilisateur_prenom = '" . $_POST['utilisateur_prenom'] . "', etat='indisponible' WHERE numero = 6";
        $resultat = $bdd->query($requete);
    } elseif (isset($_POST['utilisateur_nom']) & isset($_POST['utilisateur_prenom']) & $_POST['poste'] == 7) {
        $requete = "UPDATE postes SET numero=7, utilisateur_nom = '" . $_POST['utilisateur_nom'] . "',utilisateur_prenom = '" . $_POST['utilisateur_prenom'] . "', etat='indisponible' WHERE numero = 7";
        $resultat = $bdd->query($requete);
    } elseif (isset($_POST['utilisateur_nom']) & isset($_POST['utilisateur_prenom']) & $_POST['poste'] == 8) {
        $requete = "UPDATE postes SET numero=8, utilisateur_nom = '" . $_POST['utilisateur_nom'] . "',utilisateur_prenom = '" . $_POST['utilisateur_prenom'] . "', etat='indisponible' WHERE numero = 8";
        $resultat = $bdd->query($requete);
    }
    $reponse->closeCursor();
    ?>

    <!-- Fin de la requête-->

    <?php
    $dbHost = '127.0.0.1';
    $dbName = 'cyber_room';
    $dbUsername = 'phpmyadmin';
    $dbPassword = 'Workout974!';

    $mysqli = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
    include("config.php");
    $result = mysqli_query($mysqli, "SELECT * FROM timer ORDER BY id DESC");
    while ($res = mysqli_fetch_array($result)) {
        $date = $res['date'];
        $h = $res['h'];
        $m = $res['m'];
        $s = $res['s'];
    }

    $result_2 = mysqli_query($mysqli, "SELECT * FROM timer WHERE id=2");
    while ($res_2 = mysqli_fetch_array($result_2)) {
        $date_2 = $res_2['date'];
        $h_2 = $res_2['h'];
        $m_2 = $res_2['m'];
        $s_2 = $res_2['s'];
    }

    $result_3 = mysqli_query($mysqli, "SELECT * FROM timer WHERE id=3");
    while ($res_3 = mysqli_fetch_array($result_3)) {
        $date_3 = $res_3['date'];
        $h_3 = $res_3['h'];
        $m_3 = $res_3['m'];
        $s_3 = $res_3['s'];
    }

    $result_4 = mysqli_query($mysqli, "SELECT * FROM timer WHERE id=4");
    while ($res_4 = mysqli_fetch_array($result_4)) {
        $date_4 = $res_4['date'];
        $h_4 = $res_4['h'];
        $m_4 = $res_4['m'];
        $s_4 = $res_4['s'];
    }

    $result_5 = mysqli_query($mysqli, "SELECT * FROM timer WHERE id=5");
    while ($res_5 = mysqli_fetch_array($result_5)) {
        $date_5 = $res_5['date'];
        $h_5 = $res_5['h'];
        $m_5 = $res_5['m'];
        $s_5 = $res_5['s'];
    }

    $result_6 = mysqli_query($mysqli, "SELECT * FROM timer WHERE id=6");
    while ($res_6 = mysqli_fetch_array($result_6)) {
        $date_6 = $res_6['date'];
        $h_6 = $res_6['h'];
        $m_6 = $res_6['m'];
        $s_6 = $res_6['s'];
    }

    $result_7 = mysqli_query($mysqli, "SELECT * FROM timer WHERE id=7");
    while ($res_7 = mysqli_fetch_array($result_7)) {
        $date_7 = $res_7['date'];
        $h_7 = $res_7['h'];
        $m_7 = $res_7['m'];
        $s_7 = $res_7['s'];
    }

    $result_8 = mysqli_query($mysqli, "SELECT * FROM timer WHERE id=8");
    while ($res_8 = mysqli_fetch_array($result_8)) {
        $date_8 = $res_8['date'];
        $h_8 = $res_8['h'];
        $m_8 = $res_8['m'];
        $s_8 = $res_8['s'];
    }
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
                        $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                        $reponse = $bdd->query('SELECT * FROM postes WHERE numero=1');
                        while ($donnees = $reponse->fetch()) {
                            echo 'Poste n° ' . $donnees['numero'];
                        }
                        $reponse->closeCursor();
                        ?>
                    </li>

                    <li class="poste_utilisateur-nom">
                        <?php
                        $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                        $reponse = $bdd->query('SELECT * FROM postes WHERE numero=1');
                        while ($donnees = $reponse->fetch()) {
                            echo 'Nom : ' . $donnees['utilisateur_nom'];
                        }
                        $reponse->closeCursor();
                        ?>
                    </li>
                    <li class="poste_utilisateur-prenom">
                        <?php
                        $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                        $reponse = $bdd->query('SELECT * FROM postes WHERE numero=1');
                        while ($donnees = $reponse->fetch()) {
                            echo 'Prénom : ' . $donnees['utilisateur_prenom'];
                        }
                        $reponse->closeCursor();
                        ?>
                    </li>
                    <li class="poste_infos__temps" id="demo">
                    </li>
                </ul>
            </div>
            <div class="poste_timer">
                <form method="POST" action="#">
                    Date <input type="date" class="timer_input__blue" name="date" value="<?php echo $date; ?>">
                    Heures <input type="number" class="timer_input__blue" name="h" value="<?php echo $h; ?>">
                    Minutes <input type="number" class="timer_input__blue" name="m" value="<?php echo $m; ?>">
                    Secondes<input type="number" class="timer_input__blue" name="s" value="<?php echo $s; ?>">
                    <button type="submit" class="poste_button__blue" name="update">Update</button>
                </form>
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
                        $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                        $reponse = $bdd->query('SELECT * FROM postes WHERE numero=2');
                        while ($donnees = $reponse->fetch()) {
                            echo 'Poste n° ' . $donnees['numero'];
                        }
                        $reponse->closeCursor();
                        ?>
                    </li>

                    <li class="poste_utilisateur-nom">
                        <?php
                        $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                        $reponse = $bdd->query('SELECT * FROM postes WHERE numero=2');
                        while ($donnees = $reponse->fetch()) {
                            echo 'Nom : ' . $donnees['utilisateur_nom'];
                        }
                        $reponse->closeCursor();
                        ?>
                    </li>
                    <li class="poste_utilisateur-prenom">
                        <?php
                        $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                        $reponse = $bdd->query('SELECT * FROM postes WHERE numero=2');
                        while ($donnees = $reponse->fetch()) {
                            echo 'Prénom : ' . $donnees['utilisateur_prenom'];
                        }
                        $reponse->closeCursor();
                        ?>
                    </li>
                    <li class="poste_infos__temps" id="demo_2">
                </ul>
            </div>
            <div class="poste_timer">
                <form method="POST" action="#">
                    Date<input type="date" class="timer_input__white" name="date_2" value="<?php echo $date_2; ?>">
                    Heures <input type="number" class="timer_input__white" name="h_2" value="<?php echo $h_2; ?>">
                    Minutes <input type="number" class="timer_input__white" name="m_2" value="<?php echo $m_2; ?>">
                    Secondes<input type="number" class="timer_input__white" name="s_2" value="<?php echo $s_2; ?>">
                    <button type="submit" class="poste_button__white" name="update_2">Update</button>
                </form>
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
                        $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                        $reponse = $bdd->query('SELECT * FROM postes WHERE numero=3');
                        while ($donnees = $reponse->fetch()) {
                            echo 'Poste n° ' . $donnees['numero'];
                        }
                        $reponse->closeCursor();
                        ?>
                    </li>

                    <li class="poste_utilisateur-nom">
                        <?php
                        $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                        $reponse = $bdd->query('SELECT * FROM postes WHERE numero=3');
                        while ($donnees = $reponse->fetch()) {
                            echo 'Nom : ' . $donnees['utilisateur_nom'];
                        }
                        $reponse->closeCursor();
                        ?>
                    </li>
                    <li class="poste_utilisateur-prenom">
                        <?php
                        $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                        $reponse = $bdd->query('SELECT * FROM postes WHERE numero=3');
                        while ($donnees = $reponse->fetch()) {
                            echo 'Prénom : ' . $donnees['utilisateur_prenom'];
                        }
                        $reponse->closeCursor();
                        ?>
                    </li>
                    <li class="poste_infos__temps" id="demo_3">
                </ul>
            </div>
            <div class="poste_timer">
                <form method="POST" action="#">
                    Date<input type="date" class="timer_input__blue" name="date_3" value="<?php echo $date_3; ?>">
                    Heures <input type="number" class="timer_input__blue" name="h_3" value="<?php echo $h_3; ?>">
                    Minutes <input type="number" class="timer_input__blue" name="m_3" value="<?php echo $m_3; ?>">
                    Secondes<input type="number" class="timer_input__blue" name="s_3" value="<?php echo $s_3; ?>">
                    <button type="submit" class="poste_button__blue" name="update_3">Update</button>
                </form>
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
                        $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                        $reponse = $bdd->query('SELECT * FROM postes WHERE numero=4');
                        while ($donnees = $reponse->fetch()) {
                            echo 'Poste n° ' . $donnees['numero'];
                        }
                        $reponse->closeCursor();
                        ?>
                    </li>

                    <li class="poste_utilisateur-nom">
                        <?php
                        $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                        $reponse = $bdd->query('SELECT * FROM postes WHERE numero=4');
                        while ($donnees = $reponse->fetch()) {
                            echo 'Nom : ' . $donnees['utilisateur_nom'];
                        }
                        $reponse->closeCursor();
                        ?>
                    </li>
                    <li class="poste_utilisateur-prenom">
                        <?php
                        $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                        $reponse = $bdd->query('SELECT * FROM postes WHERE numero=4');
                        while ($donnees = $reponse->fetch()) {
                            echo 'Prénom : ' . $donnees['utilisateur_prenom'];
                        }
                        $reponse->closeCursor();
                        ?>
                    </li>
                    <li class="poste_infos__temps" id="demo_4">
                </ul>
            </div>
            <div class="poste_timer">
                <form method="POST" action="#">
                     Date<input type="date" class="timer_input__white" name="date_4" value="<?php echo $date_4; ?>">
                     Heures <input type="number" class="timer_input__white" name="h_4" value="<?php echo $h_4; ?>">
                    Minutes <input type="number" class="timer_input__white" name="m_4" value="<?php echo $m_4; ?>">
                    Secondes<input type="number" class="timer_input__white" name="s_4" value="<?php echo $s_4; ?>">
                    <button type="submit" class="poste_button__white" name="update_4">Update</button>
                </form>
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
                        $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                        $reponse = $bdd->query('SELECT * FROM postes WHERE numero=5');
                        while ($donnees = $reponse->fetch()) {
                            echo 'Poste n° ' . $donnees['numero'];
                        }
                        $reponse->closeCursor();
                        ?>
                    </li>

                    <li class="poste_utilisateur-nom">
                        <?php
                        $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                        $reponse = $bdd->query('SELECT * FROM postes WHERE numero=5');
                        while ($donnees = $reponse->fetch()) {
                            echo 'Nom : ' . $donnees['utilisateur_nom'];
                        }
                        $reponse->closeCursor();
                        ?>
                    </li>
                    <li class="poste_utilisateur-prenom">
                        <?php
                        $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                        $reponse = $bdd->query('SELECT * FROM postes WHERE numero=5');
                        while ($donnees = $reponse->fetch()) {
                            echo 'Prénom : ' . $donnees['utilisateur_prenom'];
                        }
                        $reponse->closeCursor();
                        ?>
                    </li>
                    <li class="poste_infos__temps" id="demo_5">
                </ul>
            </div>
            <div class="poste_timer">
                <form method="POST" action="#">
                    Date<input type="date" class="timer_input__white" name="date_5" value="<?php echo $date_5; ?>">
                    Heures <input type="number" class="timer_input__white" name="h_5" value="<?php echo $h_5; ?>">
                    Minutes <input type="number" class="timer_input__white" name="m_5" value="<?php echo $m_5; ?>">
                    Secondes<input type="number" class="timer_input__white" name="s_5" value="<?php echo $s_5; ?>">
                    <button type="submit" class="poste_button__white" name="update_5">Update</button>
                </form>
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
                        $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                        $reponse = $bdd->query('SELECT * FROM postes WHERE numero=6');
                        while ($donnees = $reponse->fetch()) {
                            echo 'Poste n° ' . $donnees['numero'];
                        }
                        $reponse->closeCursor();
                        ?>
                    </li>

                    <li class="poste_utilisateur-nom">
                        <?php
                        $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                        $reponse = $bdd->query('SELECT * FROM postes WHERE numero=6');
                        while ($donnees = $reponse->fetch()) {
                            echo 'Nom : ' . $donnees['utilisateur_nom'];
                        }
                        $reponse->closeCursor();
                        ?>
                    </li>
                    <li class="poste_utilisateur-prenom">
                        <?php
                        $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                        $reponse = $bdd->query('SELECT * FROM postes WHERE numero=6');
                        while ($donnees = $reponse->fetch()) {
                            echo 'Prénom : ' . $donnees['utilisateur_prenom'];
                        }
                        $reponse->closeCursor();
                        ?>
                    </li>
                    <li class="poste_infos__temps" id="demo_6">
                </ul>
            </div>
            <div class="poste_timer">
                <form method="POST" action="#">
                    Date<input type="date" class="timer_input__blue" name="date_6" value="<?php echo $date_6; ?>">
                    Heures <input type="number" class="timer_input__blue" name="h_6" value="<?php echo $h_6; ?>">
                    Minutes <input type="number" class="timer_input__blue" name="m_6" value="<?php echo $m_6; ?>">
                    Secondes<input type="number" class="timer_input__blue" name="s_6" value="<?php echo $s_6; ?>">
                    <button type="submit" class="poste_button__blue" name="update_6">Update</button>
                </form>
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
                        $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                        $reponse = $bdd->query('SELECT * FROM postes WHERE numero=7');
                        while ($donnees = $reponse->fetch()) {
                            echo 'Poste n° ' . $donnees['numero'];
                        }
                        $reponse->closeCursor();
                        ?>
                    </li>

                    <li class="poste_utilisateur-nom">
                        <?php
                        $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                        $reponse = $bdd->query('SELECT * FROM postes WHERE numero=7');
                        while ($donnees = $reponse->fetch()) {
                            echo 'Nom : ' . $donnees['utilisateur_nom'];
                        }
                        $reponse->closeCursor();
                        ?>
                    </li>
                    <li class="poste_utilisateur-prenom">
                        <?php
                        $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                        $reponse = $bdd->query('SELECT * FROM postes WHERE numero=7');
                        while ($donnees = $reponse->fetch()) {
                            echo 'Prénom : ' . $donnees['utilisateur_prenom'];
                        }
                        $reponse->closeCursor();
                        ?>
                    </li>
                    <li class="poste_infos__temps" id="demo_7">
                </ul>
            </div>
            <div class="poste_timer">
                <form method="POST" action="#">
                     Date<input type="date" class="timer_input__white" name="date_7" value="<?php echo $date_7; ?>">
                     Heures <input type="number" class="timer_input__white" name="h_7" value="<?php echo $h_7; ?>">
                    Minutes <input type="number" class="timer_input__white" name="m_7" value="<?php echo $m_7; ?>">
                     Secondes<input type="number" class="timer_input__white" name="s_7" value="<?php echo $s_7; ?>">
                    <button type="submit" class="poste_button__white" name="update_7">Update</button>
                </form>
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
                        $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                        $reponse = $bdd->query('SELECT * FROM postes WHERE numero=8');
                        while ($donnees = $reponse->fetch()) {
                            echo 'Poste n° ' . $donnees['numero'];
                        }
                        $reponse->closeCursor();
                        ?>
                    </li>

                    <li class="poste_utilisateur-nom">
                        <?php
                        $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                        $reponse = $bdd->query('SELECT * FROM postes WHERE numero=8');
                        while ($donnees = $reponse->fetch()) {
                            echo 'Nom : ' . $donnees['utilisateur_nom'];
                        }
                        $reponse->closeCursor();
                        ?>
                    </li>
                    <li class="poste_utilisateur-prenom">
                        <?php
                        $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                        $reponse = $bdd->query('SELECT * FROM postes WHERE numero=8');
                        while ($donnees = $reponse->fetch()) {
                            echo 'Prénom : ' . $donnees['utilisateur_prenom'];
                        }
                        $reponse->closeCursor();
                        ?>
                    </li>
                    <li class="poste_infos__temps" id="demo_8">
                </ul>
            </div>
            <div class="poste_timer">
                <form method="POST" action="#">
                    Date<input type="date" class="timer_input__blue" name="date_8" value="<?php echo $date_8; ?>">
                    Heures <input type="number" class="timer_input__blue" name="h_8" value="<?php echo $h_8; ?>">
                     Minutes <input type="number" class="timer_input__blue" name="m_8" value="<?php echo $m_8; ?>">
                     Secondes<input type="number" class="timer_input__blue" name="s_8" value="<?php echo $s_8; ?>">
                    <button type="submit" class="poste_button__blue" name="update_8">Update</button>
                </form>
            </div>
        </div>
    </div>
    </div>
    <?php
    include_once("config.php");

    if (isset($_POST['update'])) {
        $date = $_POST['date'];
        $h = $_POST['h'];
        $m = $_POST['m'];
        $s = $_POST['s'];
        //updating the table
        $result = mysqli_query($mysqli, "UPDATE timer SET date='$date' WHERE id=1");
        $result = mysqli_query($mysqli, "UPDATE timer SET h='$h' WHERE id=1");
        $result = mysqli_query($mysqli, "UPDATE timer SET m='$m' WHERE id=1");
        $result = mysqli_query($mysqli, "UPDATE timer SET s='$s' WHERE id=1");
        //redirectig to the display page. In our case, 
        echo "Timer updated";
    }
    if (isset($_POST['update_2'])) {
        $date_2 = $_POST['date_2'];
        $h_2 = $_POST['h_2'];
        $m_2 = $_POST['m_2'];
        $s_2 = $_POST['s_2'];
        //updating the table
        $result_2 = mysqli_query($mysqli, "UPDATE timer SET date='$date_2' WHERE id=2");
        $result_2 = mysqli_query($mysqli, "UPDATE timer SET h='$h_2' WHERE id=2");
        $result_2 = mysqli_query($mysqli, "UPDATE timer SET m='$m_2' WHERE id=2");
        $result_2 = mysqli_query($mysqli, "UPDATE timer SET s='$s_2' WHERE id=2");
        //redirectig to the display page. In our case, 
        echo "Timer updated";
    }
    if (isset($_POST['update_3'])) {
        $date_3 = $_POST['date_3'];
        $h_3 = $_POST['h_3'];
        $m_3 = $_POST['m_3'];
        $s_3 = $_POST['s_3'];
        //updating the table
        $result_3 = mysqli_query($mysqli, "UPDATE timer SET date='$date_3' WHERE id=3");
        $result_3 = mysqli_query($mysqli, "UPDATE timer SET h='$h_3' WHERE id=3");
        $result_3 = mysqli_query($mysqli, "UPDATE timer SET m='$m_3' WHERE id=3");
        $result_3 = mysqli_query($mysqli, "UPDATE timer SET s='$s_3' WHERE id=3");
        //redirectig to the display page. In our case, 
        echo "Timer updated";
    }
    if (isset($_POST['update_4'])) {
        $date_4 = $_POST['date_4'];
        $h_4 = $_POST['h_4'];
        $m_4 = $_POST['m_4'];
        $s_4 = $_POST['s_4'];
        //updating the table
        $result_4 = mysqli_query($mysqli, "UPDATE timer SET date='$date_4' WHERE id=4");
        $result_4 = mysqli_query($mysqli, "UPDATE timer SET h='$h_4' WHERE id=4");
        $result_4 = mysqli_query($mysqli, "UPDATE timer SET m='$m_4' WHERE id=4");
        $result_4 = mysqli_query($mysqli, "UPDATE timer SET s='$s_4' WHERE id=4");
        //redirectig to the display page. In our case, 
        echo "Timer updated";
    }
    if (isset($_POST['update_5'])) {
        $date_5 = $_POST['date_5'];
        $h_5 = $_POST['h_5'];
        $m_5 = $_POST['m_5'];
        $s_5 = $_POST['s_5'];
        //updating the table
        $result_5 = mysqli_query($mysqli, "UPDATE timer SET date='$date_5' WHERE id=5");
        $result_5 = mysqli_query($mysqli, "UPDATE timer SET h='$h_5' WHERE id=5");
        $result_5 = mysqli_query($mysqli, "UPDATE timer SET m='$m_5' WHERE id=5");
        $result_5 = mysqli_query($mysqli, "UPDATE timer SET s='$s_5' WHERE id=5");
        //redirectig to the display page. In our case, 
        echo "Timer updated";
    }
    if (isset($_POST['update_6'])) {
        $date_6 = $_POST['date_6'];
        $h_6 = $_POST['h_6'];
        $m_6 = $_POST['m_6'];
        $s_6 = $_POST['s_6'];
        //updating the table
        $result_6 = mysqli_query($mysqli, "UPDATE timer SET date='$date_6' WHERE id=6");
        $result_6 = mysqli_query($mysqli, "UPDATE timer SET h='$h_6' WHERE id=6");
        $result_6 = mysqli_query($mysqli, "UPDATE timer SET m='$m_6' WHERE id=6");
        $result_6 = mysqli_query($mysqli, "UPDATE timer SET s='$s_6' WHERE id=6");
        //redirectig to the display page. In our case, 
        echo "Timer updated";
    }
    if (isset($_POST['update_7'])) {
        $date_7 = $_POST['date_7'];
        $h_7 = $_POST['h_7'];
        $m_7 = $_POST['m_7'];
        $s_7 = $_POST['s_7'];
        //updating the table
        $result_7 = mysqli_query($mysqli, "UPDATE timer SET date='$date_7' WHERE id=7");
        $result_7 = mysqli_query($mysqli, "UPDATE timer SET h='$h_7' WHERE id=7");
        $result_7 = mysqli_query($mysqli, "UPDATE timer SET m='$m_7' WHERE id=7");
        $result_7 = mysqli_query($mysqli, "UPDATE timer SET s='$s_7' WHERE id=7");
        //redirectig to the display page. In our case, 
        echo "Timer updated";
    }
    if (isset($_POST['update_8'])) {
        $date_8 = $_POST['date_8'];
        $h_8 = $_POST['h_8'];
        $m_8 = $_POST['m_8'];
        $s_8 = $_POST['s_8'];
        //updating the table
        $result_8 = mysqli_query($mysqli, "UPDATE timer SET date='$date_8' WHERE id=8");
        $result_8 = mysqli_query($mysqli, "UPDATE timer SET h='$h_8' WHERE id=8");
        $result_8 = mysqli_query($mysqli, "UPDATE timer SET m='$m_8' WHERE id=8");
        $result_8 = mysqli_query($mysqli, "UPDATE timer SET s='$s_8' WHERE id=8");
        //redirectig to the display page. In our case, 
        echo "Timer updated";
    }
    ?>
    <script>
        var countDownDate = <?php
                            echo strtotime("$date $h:$m:$s") ?> * 1000;
        var now = <?php echo time() ?> * 1000;

        // Update the count down every 1 second
        var x = setInterval(function() {
            now = now + 1000;
            // Find the distance between now an the count down date
            var distance = countDownDate - now;
            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            // Output the result in an element with id="demo"
            document.getElementById("demo").innerHTML = days + "d " + hours + "h " +
                minutes + "m " + seconds + "s ";
            // If the count down is over, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "EXPIRED";
            }
        }, 1000);

        var countDownDate_2 = <?php
                                echo strtotime("$date_2 $h_2:$m_2:$s_2") ?> * 1000;
        var now_2 = <?php echo time() ?> * 1000;

        // Update the count down every 1 second
        var x_2 = setInterval(function() {
            now_2 = now_2 + 1000;
            // Find the distance between now an the count down date
            var distance_2 = countDownDate_2 - now_2;
            // Time calculations for days, hours, minutes and seconds
            var days_2 = Math.floor(distance_2 / (1000 * 60 * 60 * 24));
            var hours_2 = Math.floor((distance_2 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes_2 = Math.floor((distance_2 % (1000 * 60 * 60)) / (1000 * 60));
            var seconds_2 = Math.floor((distance_2 % (1000 * 60)) / 1000);
            // Output the result in an element with id="demo"
            document.getElementById("demo_2").innerHTML = days_2 + "d " + hours_2 + "h " +
                minutes_2 + "m " + seconds_2 + "s ";
            // If the count down is over, write some text
            if (distance_2 < 0) {
                clearInterval(x_2);
                document.getElementById("demo_2").innerHTML = "EXPIRED";
                <?php

                ?>

            }
        }, 1000);

        var countDownDate_3 = <?php
                                echo strtotime("$date_3 $h_3:$m_3:$s_3") ?> * 1000;
        var now_3 = <?php echo time() ?> * 1000;

        // Update the count down every 1 second
        var x_3 = setInterval(function() {
            now_3 = now_3 + 1000;
            // Find the distance between now an the count down date
            var distance_3 = countDownDate_3 - now_3;
            // Time calculations for days, hours, minutes and seconds
            var days_3 = Math.floor(distance_3 / (1000 * 60 * 60 * 24));
            var hours_3 = Math.floor((distance_3 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes_3 = Math.floor((distance_3 % (1000 * 60 * 60)) / (1000 * 60));
            var seconds_3 = Math.floor((distance_3 % (1000 * 60)) / 1000);
            // Output the result in an element with id="demo"
            document.getElementById("demo_3").innerHTML = days_3 + "d " + hours_3 + "h " +
                minutes_3 + "m " + seconds_3 + "s ";
            // If the count down is over, write some text
            if (distance_3 < 0) {
                clearInterval(x_3);
                document.getElementById("demo_3").innerHTML = "EXPIRED";
                <?php

                ?>

            }
        }, 1000);

        var countDownDate_4 = <?php
                                echo strtotime("$date_4 $h_4:$m_4:$s_4") ?> * 1000;
        var now_4 = <?php echo time() ?> * 1000;

        // Update the count down every 1 second
        var x_4 = setInterval(function() {
            now_4 = now_4 + 1000;
            // Find the distance between now an the count down date
            var distance_4 = countDownDate_4 - now_4;
            // Time calculations for days, hours, minutes and seconds
            var days_4 = Math.floor(distance_4 / (1000 * 60 * 60 * 24));
            var hours_4 = Math.floor((distance_4 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes_4 = Math.floor((distance_4 % (1000 * 60 * 60)) / (1000 * 60));
            var seconds_4 = Math.floor((distance_4 % (1000 * 60)) / 1000);
            // Output the result in an element with id="demo"
            document.getElementById("demo_4").innerHTML = days_4 + "d " + hours_4 + "h " +
                minutes_4 + "m " + seconds_4 + "s ";
            // If the count down is over, write some text
            if (distance_4 < 0) {
                clearInterval(x_4);
                document.getElementById("demo_4").innerHTML = "EXPIRED";
                <?php

                ?>

            }
        }, 1000);
        var countDownDate_5 = <?php
                                echo strtotime("$date_5 $h_5:$m_5:$s_5") ?> * 1000;
        var now_5 = <?php echo time() ?> * 1000;

        // Update the count down every 1 second
        var x_5 = setInterval(function() {
            now_5 = now_5 + 1000;
            // Find the distance between now an the count down date
            var distance_5 = countDownDate_5 - now_5;
            // Time calculations for days, hours, minutes and seconds
            var days_5 = Math.floor(distance_5 / (1000 * 60 * 60 * 24));
            var hours_5 = Math.floor((distance_5 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes_5 = Math.floor((distance_5 % (1000 * 60 * 60)) / (1000 * 60));
            var seconds_5 = Math.floor((distance_5 % (1000 * 60)) / 1000);
            // Output the result in an element with id="demo"
            document.getElementById("demo_5").innerHTML = days_5 + "d " + hours_5 + "h " +
                minutes_5 + "m " + seconds_5 + "s ";
            // If the count down is over, write some text
            if (distance_5 < 0) {
                clearInterval(x_5);
                document.getElementById("demo_5").innerHTML = "EXPIRED";
                <?php

                ?>

            }
        }, 1000);

        var countDownDate_6 = <?php
                                echo strtotime("$date_6 $h_6:$m_6:$s_6") ?> * 1000;
        var now_6 = <?php echo time() ?> * 1000;

        // Update the count down every 1 second
        var x_6 = setInterval(function() {
            now_6 = now_6 + 1000;
            // Find the distance between now an the count down date
            var distance_6 = countDownDate_6 - now_6;
            // Time calculations for days, hours, minutes and seconds
            var days_6 = Math.floor(distance_6 / (1000 * 60 * 60 * 24));
            var hours_6 = Math.floor((distance_6 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes_6 = Math.floor((distance_6 % (1000 * 60 * 60)) / (1000 * 60));
            var seconds_6 = Math.floor((distance_6 % (1000 * 60)) / 1000);
            // Output the result in an element with id="demo"
            document.getElementById("demo_6").innerHTML = days_6 + "d " + hours_6 + "h " +
                minutes_6 + "m " + seconds_6 + "s ";
            // If the count down is over, write some text
            if (distance_6 < 0) {
                clearInterval(x_6);
                document.getElementById("demo_6").innerHTML = "EXPIRED";
                <?php

                ?>

            }
        }, 1000);


        var countDownDate_7 = <?php
                                echo strtotime("$date_7 $h_7:$m_7:$s_7") ?> * 1000;
        var now_7 = <?php echo time() ?> * 1000;

        // Update the count down every 1 second
        var x_7 = setInterval(function() {
            now_7 = now_7 + 1000;
            // Find the distance between now an the count down date
            var distance_7 = countDownDate_7 - now_7;
            // Time calculations for days, hours, minutes and seconds
            var days_7 = Math.floor(distance_7 / (1000 * 60 * 60 * 24));
            var hours_7 = Math.floor((distance_7 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes_7 = Math.floor((distance_7 % (1000 * 60 * 60)) / (1000 * 60));
            var seconds_7 = Math.floor((distance_7 % (1000 * 60)) / 1000);
            // Output the result in an element with id="demo"
            document.getElementById("demo_7").innerHTML = days_7 + "d " + hours_7 + "h " +
                minutes_7 + "m " + seconds_7 + "s ";
            // If the count down is over, write some text
            if (distance_7 < 0) {
                clearInterval(x_7);
                document.getElementById("demo_7").innerHTML = "EXPIRED";
                <?php

                ?>

            }
        }, 1000);

        var countDownDate_8 = <?php
                                echo strtotime("$date_8 $h_8:$m_8:$s_8") ?> * 1000;
        var now_8 = <?php echo time() ?> * 1000;

        // Update the count down every 1 second
        var x_8 = setInterval(function() {
            now_8 = now_8 + 1000;
            // Find the distance between now an the count down date
            var distance_8 = countDownDate_8 - now_8;
            // Time calculations for days, hours, minutes and seconds
            var days_8 = Math.floor(distance_8 / (1000 * 60 * 60 * 24));
            var hours_8 = Math.floor((distance_8 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes_8 = Math.floor((distance_8 % (1000 * 60 * 60)) / (1000 * 60));
            var seconds_8 = Math.floor((distance_8 % (1000 * 60)) / 1000);
            // Output the result in an element with id="demo"
            document.getElementById("demo_8").innerHTML = days_8 + "d " + hours_8 + "h " +
                minutes_8 + "m " + seconds_8 + "s ";
            // If the count down is over, write some text
            if (distance_8 < 0) {
                clearInterval(x_8);
                document.getElementById("demo_8").innerHTML = "EXPIRED";
                <?php

                ?>

            }
        }, 1000);
    </script>

    <!-- Partie Footer -->
    <footer>

        <div>


            <ul class="mail">
                <li>LAVIT Gaetan<br> <a href="dimitrigign@gmail.com" id="copy"><img src="images/email.png" width="20px" height="20px" /></a>
                    <a href="https://www.linkedin.com/in/dimitri-gigan-80a52a184/" target="blank"><img src="images/linkedin-rond-300x300.png" width="20px" height="20px" /></a>
                    <a href="https://www.facebook.com/dimitri.gigan" target="blank"><img src="images/Facebook-share-icon.png" width="20px" height="20px" /></a>
                    <a href="https://twitter.com/Dimimajin" target="blank"><img src="images/logo-rond-twitter.png" width="20px" height="20px" /></a>

                </li>

                <li>GIGAN Dimitri


                    <br> <a href="dimitrigign@gmail.com" id="copy"><img src="images/email.png" width="20px" height="20px" /></a>
                    <a href="https://www.linkedin.com/in/dimitri-gigan-80a52a184/" target="blank"><img src="images/linkedin-rond-300x300.png" width="20px" height="20px" /></a>
                    <a href="https://www.facebook.com/dimitri.gigan" target="blank"><img src="images/Facebook-share-icon.png" width="20px" height="20px" /></a>
                    <a href="https://twitter.com/Dimimajin" target="blank"><img src="images/logo-rond-twitter.png" width="20px" height="20px" /></a>


                </li>


                <li>AH-KENG Abel <br> <a href="dimitrigign@gmail.com" id="copy"><img src="images/email.png" width="20px" height="20px" /></a>
                    <a href="https://www.linkedin.com/in/dimitri-gigan-80a52a184/" target="blank"><img src="images/linkedin-rond-300x300.png" width="20px" height="20px" /></a>
                    <a href="https://www.facebook.com/dimitri.gigan" target="blank"><img src="images/Facebook-share-icon.png" width="20px" height="20px" /></a>
                    <a href="https://twitter.com/Dimimajin" target="blank"><img src="images/logo-rond-twitter.png" width="20px" height="20px" /></a>
                </li>

                <li>BEGE Swann <br> <a href="dimitrigign@gmail.com" id="copy"><img src="images/email.png" width="20px" height="20px" /></a>
                    <a href="https://www.linkedin.com/in/dimitri-gigan-80a52a184/" target="blank"><img src="images/linkedin-rond-300x300.png" width="20px" height="20px" /></a>
                    <a href="https://www.facebook.com/dimitri.gigan" target="blank"><img src="images/Facebook-share-icon.png" width="20px" height="20px" /></a>
                    <a href="https://twitter.com/Dimimajin" target="blank"><img src="images/logo-rond-twitter.png" width="20px" height="20px" /></a>
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
