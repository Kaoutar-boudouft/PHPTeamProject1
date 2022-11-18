<?php
include_once(dirname(__FILE__) . '../../../../Traitement/fonctions.php');
/**************************Code fonction Entier utiliser*************************/
/*function Entier($txt, $i)
    {
        $c = 0;
        $ch = "";
        for ($j = $i; $j < strlen($txt); $j++) {
            if (is_numeric($txt[$j])) {
                $c += 1;
                $ch = $ch . $txt[$j];
            } else break;
        }
        if ($ch == ""
        ) $ch = "0";
        return [$c, $ch];
    }
    */
$res = array("", "");
if (isset($_POST["submit"])) {
    $txt = $_POST["txt"];
    $i = $_POST["i"];
    $res = Entier($txt, $i);
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
    <h1>Exercice 4</h1>
    <hr>
    <form action="" method="post">
        <label class="form-label">TXT :</label>
        <input type="text" name="txt" id="" class="form-control w-50" value="<?= $_POST['txt']??'' ?>">
        <label class="form-label">i:</label>
        <input type="text" name="i" id="" class="form-control w-50" value="<?= $_POST['i']??'' ?>">
        <label class="form-label"> RES :</label>
        <input type="text" name="" id="" readonly class="form-control w-50" value="<?php echo $res[1] ?>">
        <label class="form-label">nbr</label>
        <input type="text" name="res" id="" readonly class="form-control w-50" value="<?php echo $res[0] ?>">
        <br> <input type="submit" value="Envoyer" name="submit" class="btn btn-primary mt-4">
    </form>
</body>

</html>