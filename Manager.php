<?php

require('params.php');

class Manager
{
   public function connectDB(){
    try
         {
         $dbh = new PDO('mysql:host='.HOST.';dbname='.DBNAME.';charset=utf8', LOGIN, PASSWORD);
         
         $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

         return $dbh;

    } catch (Exception $e) {
        
        die('Erreur :' + $e);
    }
    
        return $dbh;
    }
    
}
 