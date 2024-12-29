<?php

class Film{

        private $id;
        private $titre;
        private $genre;
        private $duree;
        private $date_sortie;
        private $realisation;
        private $distribution;

        public function __construct($titre,$genre,$duree, $date_sortie, $realisation,$distribution,) {
            $this->titre = $titre;
            $this->genre = $genre;
            $this->duree = $duree;
            $this->date_sortie = $date_sortie;
            $this->realisation = $realisation;
            $this->distribution = $distribution;
        }

    

}