<?php
$action = ["Faire 2 pompes.","Faire la promotion de l'IT-Akademy.","Donner 3 nom de mangas."];
$verite= ["Est-ce que tu veux devenir Developper ?","As-tu deja coder ?"];
choice($action,$verite);
function choice($action, $verite){
    $choice_q = randint(0,1);
    if($choice_q === 0){
        $question = $action[randint(0,count($action)-1)];

        header('Location: index.php?action='.$action);


    }else{
        $question = $action[randint(0,count($verite)-1)];
        header('Location: index.php?action='.$action);
    }
}

