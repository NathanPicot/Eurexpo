<?php

$action = ["Faire 2 pompes.","Donner 3 nom de mangas.","propose nous une action ou une vérité a ajouter","Faire 10 pompes"];
$verite= ["As-tu deja coder ?","Quel age as tu ?","Quelle action ou une vérité voudrais tu ajouter?", "Qui t'a forcé à venir ici?", "Dans quelle classe es-tu?", "Pourquoi es-tu venu ?", "As-tu déjà codé ?"];
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

        header('Location: ../index.php?action='.$question.'&type=0');

    }else{
        $rand = random_int(0,count($verite)-1);
        $question = $verite[$rand];
        header('Location: ../index.php?action='.$question.'&type=1');
    }
}

function action($action){
    $rand = random_int(0,count($action)-1);
    $question = $action[$rand];

    header('Location: ../index.php?action='.$question.'&type=0');
}

function verite($verite){
    $rand = random_int(0,count($verite)-1);
    $question = $verite[$rand];
    header('Location: ../index.php?action='.$question.'&type=1');
}

