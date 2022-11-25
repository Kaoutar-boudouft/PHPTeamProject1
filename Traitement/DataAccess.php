<?php

    //1-methode connection
        function connextion()
                {
                    try  {
                       $bdd = new PDO('mysql:host=localhost;dbname=gestionnotes;charset=utf8', 'root', '');
                       $bdd->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
                       return $bdd;
                    }
                    catch (Exception $e)
                       {
                      echo('Erreur : ' . $e->getMessage());
                    }
                }

    
    //2-Methode de mise à jour
        function miseajour($req)
                {
           try  {
                       $bdd= connextion() ;
                       $maj=$bdd->exec($req);
                       return $maj;
           }
           catch (Exception $e)
                       {
            echo('Erreur : ' . $e->getMessage());
           }
           $bdd=null;
        }

    //3-Methode de selection

        function selection($req)
                {
                try{
                $bdd=connextion() ;
                $rep=$bdd->query($req);
                return $rep ;
                }
                catch (Exception $e)
                       {
                   echo('Erreur : ' . $e->getMessage());
                }
                $bdd=null;

       }  

    

