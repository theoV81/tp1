<?php
namespace BugApp\Models;
        class bug {

                public $Id;
                public $Description;
                public $titre;
                public $status;
                public $createdAt;
                public $closed;
                public $IP;
                public $URL;
                function __construct($Id, $titre, $Description,$status,$createdAt,$closed,$URL,$IP) {
                    $this->Id = $Id;
                    $this->Description = $Description;
                    $this->titre = $titre;
                    $this->status = $status;
                    $this->createdAt = $createdAt;
                    $this->closed = $closed;
                    $this->URL = $URL;
                    $this->IP = $IP;
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
                function getURL() {
                    return $this->URL;
                }

                function getIP() {
                    return $this->IP;
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

                function setIP($IP) {
                    $this->IP = $IP;
                }

                function setURL($URL) {
                    $this->URL = $URL;
                }
        }
