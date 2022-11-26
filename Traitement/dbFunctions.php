<?php
include_once 'DataAccess.php';

//common functions
function getRowsCount($tableName){

    $req="select * from $tableName";
    $cursor=selection($req);
    return $cursor->rowCount();
}

//Table Matieres
function getAllMatieres(){
    $req="select * from matieres";
    return selection($req);
}

function getMatiereByCodeMat($codeMat){
    $req="select * from matieres where codeMat='$codeMat'";
    $designation="";
    $cursor=selection($req);
    while ($row=$cursor->fetch()){
        $designation=$row[1];
    }
    $cursor->closeCursor();
    return $designation;
}

function addNewMatiere($codeMat,$designation){
    $req="insert into matieres values('$codeMat','$designation')";
    return miseajour($req);
}

function removeMatiere($codeMat){
    $req="delete from matieres where codeMat='$codeMat'";
    return miseajour($req);
}

function updateMatiere($codeMat,$newDesignation){
    $req="update matieres set designation='$newDesignation' where codeMat='$codeMat'";
    return miseajour($req);
}
//Table Classes
function aficherClassesCode($codeC){
    $req="select * from classes where codeClasse='$codeC'";
    $arr=[];
    $cursor=selection($req);
    while ($row=$cursor->fetch()){
        $arr[0]=$row[1];
        $arr[1]=$row[2];
    }
    $cursor->closeCursor();
    return $arr;
}
    function aficherClasses(){
        $req='select * from classes';
        return selection($req);
    }

    function ajouterClasse($codeClasse, $filiere, $num){
        $req="insert into classes values('$codeClasse','$filiere', '$num')";
        return miseajour($req);
    }

    function supprimerClasse($codeClasse){
        $req="delete from classes where codeClasse='$codeClasse'";
        return miseajour($req);
    }
    function modifierClasse($codeClasse,$filiere,$num){
        $req="update classes set filier='$filiere', num='$num' where codeClasse='$codeClasse'";
        return miseajour($req);
    }



