<!DOCTYPE HTML>
<html>

<head>
    <title> WELCOME</title>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />

</head>

<body>
    <?php
    //1 er exe
    function Rien($Licences, $Masters)
    {
        return 'J\'ai ' . $Licences . ' Licences et ' . $Masters . ' Masters, j\'ai donc ' . (int)$Licences + (int)$Masters . '<b> formations</b>';
    }
    $res = '';
    if (isset($_POST['submit'])) {
        $res = Rien($_POST['lic'], $_POST['mas']);
    }
    ?>
    <div class="exe1">
        <h2>Exercice 1</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <label> Nombres Licences: </label><input type="number" name="lic" />
            <label> Nombres Masters:</label> <input type="number" name="mas" />
            <input type="submit" value="submit" name="submit"><br><br>
            <label>RESULTAT: </label>
            <p><?php echo $res; ?></p>
        </form>
    </div>
</body>

</html>