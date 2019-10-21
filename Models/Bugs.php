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
                public $createdAt;
                public $closed;
                function __construct($Id, $titre, $Description,$status,$createdAt,$closed) {
                    $this->Id = $Id;
                    $this->Description = $Description;
                    $this->titre = $titre;
                    $this->status = $status;
                    $this->createdAt = $createdAt;
                    $this->closed = $closed;
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

                function getCreatedAt() {
                    return $this->createdAt;
                }

                function getClosed() {
                    return $this->closed;
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

                function setCreatedAt($createdAt) {
                    $this->createdAt = $createdAt;
                }

                function setClosed($closed) {
                    $this->closed = $closed;
                }   
        }
        ?>
    </body>
</html>
