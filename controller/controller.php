<?php

require('model/model.php');

function listSports(){
    
    $sports = getSports();
    
    require('view/listSportsView.php');
}

function sport(){
    
    $sport = getOne($_GET['idSport']);
    
    require('view/sportView.php');
}

function addSport($nameSport, $titleSport, $descriptionSport, $seasonSport, $urlImageSport){
    
    $lines = postSport($nameSport, $titleSport, $descriptionSport, $seasonSport, $urlImageSport);
    
    if ($lines === false){
        die('erreur addSport');
    }
    else {
        header('Location: index.php');
    }
}