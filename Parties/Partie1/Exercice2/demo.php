<!DOCTYPE HTML>
<html>

<head>
    <title> WELCOME</title>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        tr,
        td {
            width: 100px;
        }
    </style>
</head>

<body>

    <div class="exe3">
        <h2>Exercice 3</h2>
        <hr>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <label class="form-label">Temperature: </label><input type="number" name="textmp" min='-50' max='50' class="form-control w-50" />
            <!-- <label class="form-label">Ville: </label><input type="text" name="textv" class="form-control w-50" /> -->
            <br><label class="form-label">Ville: </label><br>
            <select name="nameville" id="" class="form-select w-50">
                <?php
                $villes = array(
                    'Al-Hoceima', 'Chefchaouen', 'Fahs-Anjra',
                    'Larache', 'Ouezzane', 'Tanger-Assilah', 'Tétouan', 'MDiq-Fnideq', 'Berkane',
                    'Driouch', 'Figuig', 'Guercif', 'Jerada', 'Nador', 'Oujda-Angad', 'Taourirt',
                    'Meknès', 'Boulemane', 'El-Hajeb', 'Fès', 'Ifrane', 'Sefrou', 'Taounate', 'Taza',
                    'Moulay-Yacoub', 'Kénitra', 'Khémisset', 'Rabat', 'Salé', 'Sidi-Kacem', 'Sidi-Slimane',
                    'Skhirate-Témara', 'Azilal', 'Béni-Mellal', 'Fquih-Ben-Salah', 'Khénifra', 'Khouribga',
                    'Benslimane', 'Berrechid', 'Casablanca', 'El Jadida', 'Médiouna', 'Mohammadia',
                    'Nouaceur', 'Settat', 'Sidi-Bennour', 'Al Haouz', 'Chichaoua', 'El-Kelâa-des-Sraghna',
                    'Essaouira', 'Marrakech', 'Rehamna', 'Safi', 'Youssoufia', 'Errachidia', 'Midelt',
                    'Ouarzazate', 'Tinghir', 'Zagora', 'Agadir', 'Chtouka-Ait-Baha',
                    'Ait-Melloul', 'Taroudannt', 'Tata', 'Tiznit', 'Assa-Zag', 'Guelmim',
                    'Sidi-Ifni', 'Tan-Tan', 'Boujdour', 'Es-Semara', 'Laâyoune', 'Tarfaya', 'Aousserd',
                    'Oued-Ed-Dahab'
                );
                for ($i = 0; $i < count($villes); $i++) {
                    echo '<option value=' . $villes[$i] . '>' . $villes[$i] .
                        '</option>';
                }
                ?>

            </select>
            <input type="submit" value="submit" name="submit" class="btn btn-primary mt-3" Onclick="<?php echo $res; ?>">
        </form>
    </div>
    <?php
    print " <br><table class='table table-sm table-light table-bordered table-responsive ' >
            <tr>
                <td>Couleur</td>
                <td>Temperature</td>
                <td>Ville</td>

            </tr>";
    function Tabletempture($temp, $ville)
    {

        $arrT = array(
            'Entre 50 et 30', 'Entre 28 et 32', 'Entre 27 et 22', 'Entre 21 et 17', 'Entre 16 et 11', 'Entre 10 et 5',
            'Entre 4 et 0', 'Entre -1 et -6', 'Entre -6 et -11', 'Entre -12 et -17', 'Entre -18 et -22', 'Entre -23 et -50'
        );
        $arrC = array(
            '#8b0000', '#cc0000', 'Red', 'Orange', 'yellow', '#3cb371',
            'green', '#87ceeb', 'Blue', '#9400d3', '#8b008b', 'Magenta'
        );

        for ($i = 0; $i < 12; $i++) {
            print "<tr><td style='background-color:$arrC[$i]';></td>";
            print "<td>$arrT[$i]</td>";
            switch ($i) {
                case 0:
                    if ($temp >= 30 && $temp <= 50) {
                        print "<td style='color:$arrC[$i]'>$ville</td>";
                    } else print "<td></td>";
                    break;
                case 1:
                    if ($temp >= 28 && $temp <= 32) {
                        print "<td style='color:#cc0000'>$ville</td>";
                    } else print "<td></td>";

                    break;
                case 2:
                    if ($temp >= 22 && $temp <= 27) {
                        print "<td style='color:red'>$ville</td>";
                    } else print "<td></td>";

                    break;
                case 3:
                    if ($temp >= 17 && $temp <= 21) {
                        print "<td style='color:orange'>$ville</td>";
                    } else print "<td></td>";

                    break;
                case 4:
                    if ($temp >= 11 && $temp <= 16) {
                        print "<td style='color:yellow'>$ville</td>";
                    } else print "<td></td>";

                    break;
                case 5:
                    if ($temp >= 5 && $temp <= 10) {
                        print "<td style='color:#3cb371'>$ville</td>";
                    } else print "<td></td>";

                    break;
                case 6:
                    if ($temp >= 0 && $temp <= 4) {
                        print "<td style='color:green'>$ville</td>";
                    } else print "<td></td>";

                    break;
                case 7:
                    if ($temp >= -6 && $temp <= -1) {
                        print "<td style='color:#87ceeb'>$ville</td>";
                    } else print "<td></td>";

                    break;
                case 8:
                    if ($temp >= -11 && $temp <= -6) {
                        print "<td style='color:blue'>$ville</td>";
                    } else print "<td></td>";

                    break;
                case 9:
                    if ($temp >= -17 && $temp <= -12) {
                        print "<td style='color:#9400d3'>$ville</td>";
                    } else print "<td></td>";

                    break;
                case 10:
                    if ($temp >= -22 && $temp <= -18) {
                        print "<td style='color:#8b008b'>$ville</td>";
                    } else print "<td></td>";

                    break;
                case 11:
                    if ($temp >= 50 && $temp <= -23) {
                        print "<td style='color:magenta'>$ville</td>";
                    } else print "<td></td>";
                    break;
            }
            print "</tr>";
        }
        print "</table>";
    }
    if (empty($_POST['textmp'])) {
        $txt = "";
    } else {
        $txt = $_POST['textmp'];
    }
    if (empty($_POST['nameville'])) {
        $txttv = "";
    } else {
        $txttv = $_POST['nameville'];
    }
    Tabletempture($txt, $txttv);
    ?>

</body>

</html>