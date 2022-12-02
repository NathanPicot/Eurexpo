<?php

$action = ["Faire 2 pompes.","Donne 3 nom de mangas.","Faire la roue","Faire 10 pompes","Faire 10 SQUATS."];
$verite= ["Est-ce que tu veux devenir Developpeur ?","Qui est l'auteur de Naruto ?","As-tu déjâ jouer à League Of Legend ?","Qui est l'auteur de BlueLock ?","As-tu deja codé ?","Quel âge as tu ?","Donne le nom de l'auteur de One Piece"];
if($_POST['action']){
    action($action);
}elseif ($_POST['alea']){
    alea($action,$verite);
}elseif ($_POST['verite']){
    verite($verite);
}

function alea($action, $verite){
    $choice_q = random_int(0,1);
    if($choice_q === 0){
        $rand = random_int(0,count($action)-1);
        $question = $action[$rand];

        header('Location: ../main.php?action='.$question.'&type=0');

    }else{
        $rand = random_int(0,count($verite)-1);
        $question = $verite[$rand];
        header('Location: ../main.php?action='.$question.'&type=1');
    }
}

function action($action){
    $rand = random_int(0,count($action)-1);
    $question = $action[$rand];

    header('Location: ../main.php?action='.$question.'&type=0');
}

function verite($verite){
    $rand = random_int(0,count($verite)-1);
    $question = $verite[$rand];
    header('Location: ../main.php?action='.$question.'&type=1');
}

