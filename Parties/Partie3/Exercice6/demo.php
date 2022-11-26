<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <form  method="post" enctype="multipart/form-data">
            <h1>Exercice 6</h1><hr>
            <div class="row"> <label>Choisir un fichier</label> <br><input type="file" name="File" accept=".txt"></div>
            <input type="submit" value="submit" name="submit" class="btn btn-primary mt-4"><br></div>
        </form>
    </body>
</html>
<?php 
include_once(dirname(__FILE__) . '../../../../Traitement/fonctions.php');
/**************************Code fonction Calculer2 utiliser*************************/
/*
    function Calculer2($ch){
        $numbers=0;
        $char=0;
       $file=file_get_contents($ch);
       for($i=0;$i<strlen($file);$i++){
            if(is_numeric($file[$i])){
                $numbers++;
            }else if (ctype_alpha($file[$i])){
               $char++;
            }
        }
        return array('nNumbers'=>$numbers,'nChar'=>$char);
    } 
    
    */
    $res='';
    
    if(isset($_POST['submit'])!=NULL){
        $file=$_FILES['File']['name'];
        $filesize=$_FILES['File']['size'];
        $fileExtension=pathinfo($file, PATHINFO_EXTENSION);
        
        if($fileExtension=="txt"&& $filesize<10000){
            if(!empty($file)){
                move_uploaded_file($_FILES["File"]["tmp_name"], "../Exercice5/uploads/" . $file);
                //copy($_FILES["File"]["tmp_name"], "uploads/" . $file);
                    $res=Calculer2("../Exercice5/uploads/" . $file);
                    echo "<p>nombres des chiffres trouvés: ".$res['nNumbers']."<br>nombres des lettres trouvées: ".$res['nChar']."</p>";
                }
        }else {
            echo "<label class='form-label'>Veuillez verifiez votre fichier!!</label>";
        }
    }
?>