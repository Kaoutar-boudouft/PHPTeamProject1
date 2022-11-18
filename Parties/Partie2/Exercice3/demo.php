<?php
include_once(dirname(__FILE__) . '../../../../Traitement/fonctions.php');
/**************************Code fonction Rpetition utiliser*************************/
/*function Rpetition($txt, $i){
   $c = 0;
    for ($j = $i; $j < strlen($txt); $j++) {
        if ($txt[$j] == $txt[$i]) {
            $c++;
        } else
            break;
        }
        return $c;
    }*/

$nbr = "";
if (isset($_POST["submit"])) {
    $txt = $_POST["txt"];
    $i = $_POST["i"];
    $nbr = Rpetition($txt, $i);
}
?>
<!DOCTYPE HTML>
<html>

<head>
    <title> WELCOME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <h1>Exercice 3</h1>
    <hr>
    <form action="" method="post">
        <label class="form-label">TXT: </label>
        <input type="text" name="txt" id="" class="form-control w-50" value="<?= $_POST['txt']??'' ?>">
        <label class="form-label">i: </label>
        <input type="text" name="i" id="" class="form-control w-50" value="<?= $_POST['i']??'' ?>">
        <input type="submit" value="Envoyer" name="submit" class="btn btn-primary mt-4">
        <br> <br>
        <label class="form-label">nbr: </label>
        <input readonly type="text" name="nbr" class="form-control w-50" id="" value='<?php echo $nbr ?>'>

    </form>
</body>

</html>