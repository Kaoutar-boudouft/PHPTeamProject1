<!DOCTYPE HTML>
<html>

<head>
    <title> WELCOME</title>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <?php
    $res = '';
    $Masters = 0;
    $Licences = 0;
    if (isset($_POST['submit'])) {
        $Licences = $_POST['lic'];
        $Masters = $_POST['mas'];
        $somme = $Masters + $Licences;
        $res = 'J\'ai ' . $Licences . ' Licences et ' . $Masters . ' Masters, j\'ai donc ' . $somme . '<b> formations</b>';
    }
    ?>
    <div class="exe1">
        <h2>Exercice 1</h2>
        <hr>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <label class="form-label"> Nombres Licences: </label><input type="number" minlength='1' placeholder="Nombres Licences" name="lic" class="form-control w-50" value="<?= $Licences ?>" />
            <label class="form-label"> Nombres Masters: </label> <input type="number" minlength='1' placeholder="Nombres Masters" name="mas" class="form-control w-50" value="<?= $Masters ?>"/>
            <input type="submit" value="submit" name="submit" class="btn btn-primary mt-3"><br><br>
            <label class="form-label"><b>RESULTAT:</b></label>
            <p><?php echo $res; ?></p>
        </form>
    </div>
</body>

</html>