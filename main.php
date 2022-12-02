<?php
if($_GET['action']){
   $question = $_GET['action'];
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Eurexpo</title>
    <link href="css/Style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</head>

<body>
<form action="action/action.php" method="post">
    <h1 class="title col-4 offset-4">Action Verite</h1>
    <section>
        <?php
        if($question){
            if($_GET['type']==0){
                ?><label class="offset-3 action">Action : <?php echo $question;?></label> <?php
            }else{
                ?><label class="offset-3 action">Verite : <?php echo $question;?></label> <?php
            }

        }
        ?>
    </section>
    <section class="double_button offset-3">
        <button class="btn btn-primary btn_action  " type="submit" name="action" value="action">Action</button>
        <button class="btn btn-primary btn_action " type="submit" name="verite" value="verite">Verite</button>
    </section>
    <section>
        <button class="btn btn-primary offset-3 col-6 button" type="submit" name="alea" value="alea">Aléatoire</button>
    </section>

</form>
</body>
</html>



