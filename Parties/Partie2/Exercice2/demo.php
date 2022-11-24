<?php 
include_once(dirname(__FILE__) . '../../../../Traitement/fonctions.php');
/**************************Code fonction Remplacer utiliser*************************/
/*function Remplacer($X,$Y,$TXT)
{
    return str_replace($X,$Y,$TXT);
}*/
    $res = '';
    if (isset($_POST["submit"]))
    {
        $TXT = $_POST['txt'];
        $X = $_POST['x'];
        $Y = $_POST['y'];
        $res = Remplacer($X,$Y,$TXT);
    }
    
?>

<!DOCTYPE HTML>
<html>

<head>
    <title> WELCOME</title>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>


    <div class="exe2">
        <h2>Exercice 2</h2>
        <hr>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <label class="form-label"> TXT: </label> <input type="text"  placeholder="Txt" name="txt" class="form-control w-50" value="<?= $_POST['txt']??'' ?>"/>
            <label class="form-label"> X: </label> <input type="text" placeholder="X" name="x" class="form-control w-50" value="<?= $_POST['x']??'' ?>"/>
            <label class="form-label"> Y: </label> <input type="text" placeholder="Y" name="y" class="form-control w-50" value="<?= $_POST['y']??'' ?>"/>
            <input type="submit" value="submit" name="submit" class="btn btn-primary mt-3"><br><br>
            <label class="form-label"><b>RESULTAT:</b><?php echo ' ' . $res ?></label>
        </form>
    </div>

</body>

</html>