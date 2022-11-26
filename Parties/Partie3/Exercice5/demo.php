<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <form  method="post" enctype="multipart/form-data">
            <h1>Exercice 5</h1><hr>
            <div class="row"> <label>Choisir un fichier</label> <br><input type="file" name="File" accept=".txt"></div>
            <input type="submit" value="submit" name="submit" class="btn btn-primary mt-4"><br></div>
        </form>
    </body>
</html>
<?php 
include_once(dirname(__FILE__) . '../../../../Traitement/fonctions.php');
/**************************Code fonction Calculer1 utiliser*************************/
/*
    function Calculer1($ch){
        $arrV=['a','e','o','i','u'];
        $arrC=['b','c','d','h','f','j','g','k','l','m','n','p','q','r','s','t','v','w','x','y','z'];
        $vowels=0;
        $consonant=0;
        $string=file_get_contents($ch);
        for($i=0;$i<strlen($string);$i++){
            if(in_array(strtolower($string[$i]),$arrV)){$vowels++;}
            else  if(in_array(strtolower($string[$i]),$arrC)){$consonant++;}
        }
        return array('nVowels'=>$vowels,'nConsonant'=>$consonant);
    }
    */
    $res='';
    
    if(isset($_POST['submit'])!=NULL){
        $file=$_FILES['File']['name'];
        $filesize=$_FILES['File']['size'];
        $fileExtension=pathinfo($file, PATHINFO_EXTENSION);
        
        if($fileExtension=="txt"&& $filesize<10000){
            if(!empty($file)){
                move_uploaded_file($_FILES["File"]["tmp_name"], "uploads/" . $file);
                //copy($_FILES["File"]["tmp_name"], "uploads/" . $file);
                    $res=Calculer1("uploads/" . $file);
                    echo " <p>nombres des voyelles trouvées: ".$res['nVowels']."<br>nombre des consonnes trouvées: ".$res['nConsonant']."</p>";
                }
        }else {
            echo "<label class='form-label'>Veuillez verifiez votre fichier!!</label>";
        }
    }
?>