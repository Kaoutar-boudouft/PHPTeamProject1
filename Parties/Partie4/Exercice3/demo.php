<?php
include_once '../../../Traitement/dbFunctions.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../jquery-3.6.0.js"></script>
</head>

<body>
    <script>
        $(document).ready(function() {
            $("#cne").change(function() {
                var cne = $("#cne").val();

                $.ajax({
                    url: 'nomEtudiant.php',
                    method: 'post',
                    data: 'cne=' + cne
                }).done(function(response) {
                    // NOM
                    console.log(response)
                    array = response.split("#");
                    rep = JSON.parse(array[0]);
                    $("#nom").text(rep[0].nom);
                    //Table
                    table = JSON.parse(array[1]);
                    somme = 0;
                    moyenneG = 0;
                    $("#tbd").html("");
                    for (let i = 0; i < table.length; i++) {
                        $("#tbd").append("<tr><td>" + table[i].designation + "</td><td>" + table[i].note + "</td><td>" + table[i].Moyenne + "</td></tr>");
                        somme += parseFloat(table[i].note);
                        moyenneG += parseFloat(table[i].Moyenne);
                    }

                    $("#tbd").append('<tr class=""> <td scope = "row" > Moyenne Génerale </td> <td >' + somme + '</td> <td > ' + moyenneG + '</td>')

                })
            })
        })
    </script>
    <center>
        <h6><b>ROYAUME DU MAROC</b></h6>
    </center>
    <form action="" method="post">
        <div class="row">
            <div class="col-9"></div>
            <div class="col-3">Français / العربية</div>
        </div>
        <br><br>
        <center>
            <div class="row">
                <div class="col-4">Filière :</div>
                <div class="col-8">
                    <select name="filiere" id="" class="form-control w-50">
                        <option value="" selected disabled>Filière</option>
                        <?php
                        $cursor = getAllMatieres();
                        while ($row = $cursor->fetch()) {
                            echo ' <option value="' . $row[0] . '">' . $row[1] . '</option>';
                        }
                        ?>

                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-4">Code National :</div>
                <div class="col-8">
                    <select name="cne" id="cne" class="form-control w-50">
                        <option value="" selected disabled>Code National</option>
                        <?php
                        $cursor = getAllEtudiants();
                        while ($row = $cursor->fetch()) {
                            echo ' <option value="' . $row[0] . '">' . $row[0] . '</option>';
                        }
                        ?>
                    </select>
                </div>
            </div>
            <br>
            <label for="" class="form-label"> Nom et Prénom :</label>

            <label class="form-label" id="nom"></label>
            <br>

        </center>
        <!-- <input type="submit" value="Afficher" name="submit"> -->
        <div class="table">
            <table class="table table-light">
                <thead>
                    <tr>
                        <th scope="col">Matière</th>
                        <th scope="col">Note</th>
                        <th scope="col">Résultat (V/NV/R)</th>
                    </tr>
                </thead>
                <tbody id="tbd">
                    <!-- <?php
                            // if (isset($_POST["submit"])) {
                            //     $cne = $_POST["cne"];
                            //     $cursor = getBulletin($cne);
                            //     while ($row = $cursor->fetch()) {
                            //         echo '<tr class="">
                            //     <td scope="row">' . $row[0] . '</td>
                            //     <td>' . $row[1] . '</td>
                            //     <td>' . $row[2] . '</td>
                            // </tr>';
                            //     }
                            // }
                            ?> -->

                    <!-- <tr class="">
                        <td scope="row">Moyenne Génerale</td>
                        <td>Item</td>
                        <td>Item</td>
                    </tr> -->
                </tbody>
            </table>
        </div>
        <center><button class="btn btn-outline-dark" onclick="window.print()">Imprime</button></center>
    </form>
</body>

</html>