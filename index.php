<?php

require_once 'src/Film.php';

$Film1 = new Film(id :1,titre :"ayoub",genre :"action",duree :'1:00 H', date_sortie :"2023/02/03", realisation :"testt",distribution :"test");




// $Film1->titre = "hassan";


$Film1->setTitre(titre:'hassan');


echo $Film1->__Tostring();


// echo $Film1->getId();
// echo $Film1->getTitre();
// echo $Film1->getGenre();
// echo $Film1->getDuree();
// echo $Film1->getDate_sortie();
// echo $Film1->getRealisation();
// echo $Film1->getDistribution();

