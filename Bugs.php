<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        class bug {
                
                public $Id;
                public $Description;
                public $titre;
                public $status;
               
                function __construct($Id, $titre, $Description,$status) {
                    $this->Id = $Id;
                    $this->Description = $Description;
                    $this->titre = $titre;
                    $this->status = $status;
                }

                function getId() {
                    return $this->Id;
                }

                function getDescription() {
                    return $this->Description;
                }

                function getTitre() {
                    return $this->titre;
                }

                function getStatus() {
                    return $this->status;
                }

                function setId($Id) {
                    $this->Id = $Id;
                }

                function setDescription($Description) {
                    $this->Description = $Description;
                }

                function setTitre($titre) {
                    $this->titre = $titre;
                }

                function setStatus($status) {
                    $this->status = $status;
                }
                
                           
        }
        ?>
    </body>
</html>
