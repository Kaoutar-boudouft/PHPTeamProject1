<h2>Exercice 5</h2>
<hr>
<p>
Afin d’économiser l’espace de stockage, on utilise souvent des algorithmes de compression.<br> Parmi les algorithmes les plus utilisés on trouve l’algorithme de codage
RLE vu la facilité de le programmer.<br>
Le principe est simple, au lieu d’écrire :
<p style="font-weight: 900">wwwwwwwwwwwwbaaaabbbccccccbww</p>
Il vaut mieux écrire : <p style="font-weight: 900">12w1b4a3b6c1b2w</p>
C’est-à-dire remplacer chaque répétition d’un caractère par le nombre de répétitions
suivi du caractère répété.<br>
Ecrire une fonction CodageRLE qui reçoit en paramètres une chaine de caractères
TXT et retourne son codage RLE.<br> On suppose que la chaine TXT ne contient
pas de chiffres.<br>
Exemple :<br>
TXT : bbbbbbbbbbwbbwwwww <br> RLE : 10b1w2b5
</p>