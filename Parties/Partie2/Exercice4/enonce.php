<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../resources/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="../../../resources/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
(e) Afin d’économiser l’espace de stockage, on utilise souvent des algorithmes de compression. Parmi les algorithmes les plus utilisés on trouve l’algorithme de codage
RLE vu la facilité de le programmer.
Le principe est simple, au lieu d’écrire :
wwwwwwwwwwwwbaaaabbbccccccbww.
Il vaut mieux écrire : 12w1b4a3b6c1b2w.
C’est-à-dire remplacer chaque répétition d’un caractère par le nombre de répétitions
suivi du caractère répété.
Ecrire une fonction CodageRLE qui reçoit en paramètres une chaine de caractères
TXT et retourne son codage RLE. On suppose que la chaine TXT ne contient
pas de chiffres.
Exemple :
TXT : bbbbbbbbbbwbbwwwww RLE : 10b1w2b5

    
    </div>
</body>
</html>