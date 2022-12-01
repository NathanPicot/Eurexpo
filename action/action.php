<?php
$action = ["Faire 2 pompes.","Faire la promotion de l'IT-Akademy.","Donner 3 nom de mangas.","propose nous une action ou une vérité a ajouter"];
$verite= ["Est-ce que tu veux devenir Developper ?","As-tu deja coder ?"];
choice($action,$verite);
function choice($action, $verite){
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

