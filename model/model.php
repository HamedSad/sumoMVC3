<?php

function getSports(){
    
    $db = dbConnect();

    $req = $db->query('SELECT * FROM sports ORDER BY sports.idSport DESC');
    
    return $req;
}



function getOne($idSport){
    
    $db = dbConnect();
    
    $req = $db->prepare('SELECT idSport, nameSport, titleSport, descriptionSport, seasonSport, urlImageSport FROM sports WHERE idSport = ?');
    $req->execute(array($idSport));
    $sport = $req->fetch();
    
    return $sport;
}

function postSport($nameSport, $titleSport, $descriptionSport, $seasonSport, $urlImageSport){
    $db = dbConnect();
    $newSport = $db->prepare('INSERT INTO sports (nameSport, titleSport, descriptionSport, seasonSport, urlImageSport) VALUES (?, ?, ?, ?, ?)');
    
    $lines = $newSport->execute(array($nameSport, $titleSport, $descriptionSport, $seasonSport, $urlImageSport));
        
    return $lines;
    
}

function dbConnect(){
    
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=sumo;charset=utf8', 'root', '');
        return $db;
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
    
    
}