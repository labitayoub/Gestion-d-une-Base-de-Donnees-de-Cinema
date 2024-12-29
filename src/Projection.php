<?php
class Projection {
    private $id;
    private $film_id;
    private $salle_id;
    private $date;
    private $heure;

    public function __construct($film_id, $salle_id, $date, $heure) {
        $this->film_id = $film_id;
        $this->salle_id = $salle_id;
        $this->date = $date;
        $this->heure = $heure;
    }

}
