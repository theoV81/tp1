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
                
                public $id;
                public $description;

               
                function getId() {
                    return $this->id;
                }

                function getDescription() {
                    return $this->description;
                }

                function setId($id) {
                    $this->id = $id;
                }

                function setDescription($description) {
                    $this->description = $description;
                }
                function __construct($id, $description) {
                    $this->id = $id;
                    $this->description = $description;
                }




            }

        ?>
    </body>
</html>
