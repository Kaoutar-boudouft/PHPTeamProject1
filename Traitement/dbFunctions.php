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







