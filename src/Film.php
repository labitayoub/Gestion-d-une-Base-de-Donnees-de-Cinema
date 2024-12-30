<?php

class Film
{

    private $id;
    private $titre;
    private $genre;
    private $duree;
    private $date_sortie;
    private $realisation;
    private $distribution;

    public function __construct($id, $titre, $genre, $duree, $date_sortie, $realisation, $distribution,)
    {
        $this->id = $id;
        $this->titre = $titre;
        $this->genre = $genre;
        $this->duree = $duree;
        $this->date_sortie = $date_sortie;
        $this->realisation = $realisation;
        $this->distribution = $distribution;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getTitre()
    {
        return $this->titre;
    }
    public function getGenre()
    {
        return $this->genre;
    }
    public function getDuree()
    {
        return $this->duree;
    }
    public function getDate_sortie()
    {
        return $this->date_sortie;
    }
    public function getRealisation()
    {
        return $this->realisation;
    }
    public function getDistribution()
    {
        return $this->distribution;
    }


    public function setId($id)
    {
        $this->id = $id;
    }
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }
    public function setGenre($genre)
    {
        $this->genre = $genre;
    }
    public function setDuree($duree)
    {
        $this->duree = $duree;
    }
    public function setDate_sortie($date_sortie)
    {
        $this->date_sortie = $date_sortie;
    }
    public function setRealisation($realisation)
    {
        $this->realisation = $realisation;
    }
    public function setDistribution($distribution)
    {
        $this->distribution = $distribution;
    }


    public function __toString()
    {
        return "id :" . $this->id .
            ", titre :" . $this->titre .
            ", genre :" . $this->genre .
            ", duree :" . $this->duree .
            ", date_sortie :" . $this->date_sortie .
            ", date_sortie :" . $this->realisation .
            ", distribution :" . $this->distribution;
    }
}
