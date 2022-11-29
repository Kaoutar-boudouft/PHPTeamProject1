<?php
include_once '../../../Traitement/dbFunctions.php';
?>
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
        <div style="width: 80%" class="mx-auto">
            <div class='overflow-x-auto w-full'>
                <table class='table table table-responsive mx-auto max-w-4xl w-full  rounded-lg bg-white '>
                    <thead class="bg-light">
                        <tr class="text-dark text-left">
                            <th class="font-semibold text-sm uppercase px-6 py-4"> Table </th>
                            <th class="font-semibold text-sm uppercase px-6 py-4"> Actions </th>
                            <th class="font-semibold text-sm uppercase px-6 py-4 text-center"> Rows </th>
                            <th class="font-semibold text-sm uppercase px-6 py-4 text-center"> Type </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-3">
                                    <div>
                                        <p> Classes </p>
                                    </div>
                                </div>
                            </td>
                            <td class="pt-2">
                                <span class="badge badge-primary text-white text-sm w-1/3 pb-1 bg-primary font-semibold px-2 rounded-full w-100"><a style="text-decoration: none;color: white" href="./ClassesManagement/afficherClasses.php">Afficher</a></span>
                                <br>
                                <span class="badge badge-secondary text-white  bg-secondary font-semibold px-2 rounded-full w-100"> <a style="text-decoration: none;color: white" href="./ClassesManagement/ajouterClasse.php">Ajouter</a></span>
                            </td>
                            <td class="px-6 py-4 text-center"><?php
                                                                echo getRowsCount("classes");
                                                                ?>
                            </td>
                            <td class="px-6 py-4 text-center"> InnoDB </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-3">
                                    <div>
                                        <p> Matieres </p>
                                    </div>
                                </div>
                            </td>
                            <td class="pt-2">
                                <span class="badge badge-primary text-white text-sm w-1/3 pb-1 bg-primary font-semibold px-2 rounded-full w-100"><a style="text-decoration: none;color: white" href="./MatieresManagement/afficherMatieres.php">Afficher</a></span> <br>
                                <span class="badge badge-secondary text-white  bg-secondary font-semibold px-2 rounded-full w-100"> <a style="text-decoration: none;color: white" href="MatieresManagement/ajouterMatiere.php">Ajouter</a><br></span>
                            </td>
                            <td class="px-6 py-4 text-center"><?php
                                                                echo getRowsCount("matieres");
                                                                ?></td>
                            <td class="px-6 py-4 text-center"> InnoDB </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-3">
                                    <div>
                                        <p> Etudiants </p>
                                    </div>
                                </div>
                            </td>
                            <td class="pt-2">
                                <span class="badge badge-primary text-white text-sm w-1/3 pb-1 bg-primary font-semibold px-2 rounded-full w-100"><a style="text-decoration: none;color: white" href="./EtudiantsManagement/afficherEtudiants.php">Afficher</a></span><br>

                                <span class="badge badge-secondary text-white  bg-secondary font-semibold px-2 rounded-full w-100"> <a style="text-decoration: none;color: white" href="./EtudiantsManagement/ajouterEtudiant.php">Ajouter</a><br></span>
                            </td>
                            <td class="px-6 py-4 text-center"><?php
                                                                echo getRowsCount("etudiants");
                                                                ?></td>
                            <td class="px-6 py-4 text-center"> InnoDB </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-3">
                                    <div>
                                        <p> Notes </p>
                                    </div>
                                </div>
                            </td>
                            <td class="pt-2">
                                <span class="badge badge-primary text-white text-sm w-1/3 pb-1 bg-primary font-semibold px-2  w-100 ">
                                    <a style="text-decoration: none;color: white" href="./NotesManagement/afficherNotes.php">Afficher</a>
                                </span>
                                <br>
                                <span class="badge badge-secondary text-white  bg-secondary font-semibold px-2 rounded-full w-100 ">
                                    <a style="text-decoration: none;color: white" href="./NotesManagement/ajouterNotes.php">Ajouter</a>
                                    <br>
                                </span>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <?php
                                echo getRowsCount("notes");
                                ?></td>
                            <td class="px-6 py-4 text-center"> InnoDB </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>