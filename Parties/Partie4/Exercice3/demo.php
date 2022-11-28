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
            $("#classe").change(function() {
                var codeclasse = $("#classe").val();
                $.ajax({
                    url: 'classe.php',
                    method: 'post',
                    data: 'codeC=' + codeclasse
                }).done(function(response) {
                    etudiant = JSON.parse(response);
                    $("#nom").text("");
                    $("#tbd").html("");
                    $("#cne").html("");
                    $("#cne").append(' <option value="" selected disabled>Code National</option>')
                    for (let i = 0; i < etudiant.length; i++) {
                        $("#cne").append("<option vlaue='" + etudiant[i].CNE + "'>" + etudiant[i].CNE + "</option>")
                    }
                })
            })
            $("#cne").change(function() {
                var cne = $("#cne").val();

                $.ajax({
                    url: 'nomEtudiant.php',
                    method: 'post',
                    data: 'cne=' + cne
                }).done(function(response) {
                    // NOM
                    //console.log(response)
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
                        somme += parseFloat(table[i].Moyenne);
                        moyenneG += parseFloat(table[i].note);
                    }
                    moyenneG = moyenneG / table.length;
                    $("#tbd").append('<tr class=""> <td scope = "row" > <b id="moy">Moyenne Génerale</b> </td> <td >' + moyenneG + '</td> <td > ' + somme + '</td>')

                })
            })
            $("#ar").click(function() {
                if ($("#fillang").text() == "filiere") {
                    $("#fillang").text("الشعبة");
                    $("#codelang").text("الرقم البطاقة الوطنية");
                    $("#langM").text("المادة");
                    $("#langN").text("النقطة");
                    $("#langR").text("الناتجة");
                    $("#moy").text("المتوسط ​​العام");
                    $("#nomP").text(": الإسم واللقب")
                    $("#titre").text("مملكة المغرب")
                    $("#btnP").text("الطباعة")
                } else {
                    $("#fillang").text("filiere");
                    $("#codelang").text("Code National");
                    $("#langM").text("Matière");
                    $("#langN").text("Note");
                    $("#langR").text("Résultat (V/NV/R)");
                    $("#moy").text("Moyenne Génerale")
                    $("#nomP").text("Nom et Prénom :")
                    $("#titre").text("ROYAUME DU MAROC")
                    $("#btnP").text("Imprime")
                }
            })
        })

        function imprimer() {
            document.getElementById("btnP").style.display = 'none';
            window.print();
            document.getElementById("btnP").style.display = 'block';
        }
    </script>
    <center>
        <h6><b id="titre">ROYAUME DU MAROC</b></h6>
    </center>
    <form action="" method="post">
        <div class="row">
            <div class="col-9"></div>
            <div class="col-3"><a id="ar" class="btn btn-link">Français/العربية</a> </div>
        </div>
        </div>
        <br><br>
        <center>
            <div class="row">
                <div class="col-4" id="fillang">filiere</div>
                <div class="col-8">
                    <select name="filiere" id="classe" class="form-control w-50">
                        <option value="" selected disabled>Filière</option>
                        <?php
                        $cursor = aficherClasses();
                        while ($row = $cursor->fetch()) {
                            echo ' <option value="' . $row[0] . '">' . $row[1] . '</option>';
                        }
                        ?>

                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-4" id="codelang">Code National :</div>
                <div class="col-8">
                    <select name="cne" id="cne" class="form-control w-50">


                    </select>
                </div>
            </div>
            <br>
            <label for="" class="form-label" id="nomP"> Nom et Prénom :</label>
            <p class="form-label" id="nom"></p>
            <br>
        </center>
        <!-- <input type="submit" value="Afficher" name="submit"> -->
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <div class="table">
                    <table class="table table-light">
                        <thead>
                            <tr>
                                <th scope="col" id="langM">Matière</th>
                                <th scope="col" id="langN">Note</th>
                                <th scope="col" id="langR">Résultat (V/NV/R)</th>
                            </tr>
                        </thead>
                        <tbody id="tbd">
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-1"></div>
        </div>
    </form>
    <center><button class="btn btn-outline-dark" id="btnP" onclick="imprimer()">Imprime</button></center>

</body>

</html>