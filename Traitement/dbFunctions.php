<?php
include_once 'DataAccess.php';

//common functions
function getRowsCount($tableName)
{
    $req = "select * from $tableName";
    $cursor = selection($req);
    return $cursor->rowCount();
}

//Table Matieres
function getAllMatieres()
{
    $req = "select * from matieres";
    return selection($req);
}

function getMatiereByCodeMat($codeMat)
{
    $req = "select * from matieres where codeMat='$codeMat'";
    $designation = "";
    $cursor = selection($req);
    while ($row = $cursor->fetch()) {
        $designation = $row[1];
    }
    $cursor->closeCursor();
    return $designation;
}

function addNewMatiere($codeMat, $designation)
{
    $req = "insert into matieres values('$codeMat','$designation')";
    return miseajour($req);
}

function removeMatiere($codeMat)
{
    $req = "delete from matieres where codeMat='$codeMat'";
    return miseajour($req);
}

function updateMatiere($codeMat, $newDesignation)
{
    $req = "update matieres set designation='$newDesignation' where codeMat='$codeMat'";
    return miseajour($req);
}


//Table Classes
function aficherClassesCode($codeC)
{
    $req = "select * from classes where codeClasse='$codeC'";
    $arr = [];
    $cursor = selection($req);
    while ($row = $cursor->fetch()) {
        $arr[0] = $row[1];
        $arr[1] = $row[2];
    }
    $cursor->closeCursor();
    return $arr;
}
function aficherClasses()
{
    $req = 'select * from classes';
    return selection($req);
}

function ajouterClasse($codeClasse, $filiere, $num)
{
    $req = "insert into classes values('$codeClasse','$filiere', '$num')";
    return miseajour($req);
}

function supprimerClasse($codeClasse)
{
    $req = "delete from classes where codeClasse='$codeClasse'";
    return miseajour($req);
}
function modifierClasse($codeClasse, $filiere, $num)
{
    $req = "update classes set filier='$filiere', num='$num' where codeClasse='$codeClasse'";
    return miseajour($req);
}

////////////////////TABLE Notes

function AfficherNotes()
{
    $req = "select * from notes";
    return selection($req);
}

function AjouterNote($codeMat, $cne, $note)
{
    $req = "insert into notes values('$codeMat','$cne',$note)";
    return miseajour($req);
}

function ModifierNote($codeMat, $cne, $note)
{
    $req = "update notes set note=$note where codeMat='$codeMat' and CNE='$cne'";
    return miseajour($req);
}
function SupprimerNote($codeMat, $cne)
{
    $req = "delete from notes where codeMat='$codeMat' and CNE='$cne'";
    return miseajour($req);
}
//tableEtudiantns
function getAllEtudiants()
{
    $req = "select * from etudiants";
    return selection($req);
}

function getMatierParCNE($cne)
{
    $req = "SELECT * from matieres where  codeMat not in(select codeMat from notes where CNE='$cne')";
    return selection($req);
}
///PARTIE4 Exercie 3
function getAllEtudiantParCNE($cne)
{
    $req = "select * from etudiants where CNE='$cne'";
    return selection($req);
}

function getBulletin($cne)
{
    $req = "SELECT matieres.designation,notes.note, (notes.note*1) as Moyenne FROM matieres JOIN notes on matieres.codeMat=notes.codeMat where notes.CNE='$cne'";
    return selection($req);
}
