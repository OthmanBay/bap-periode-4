<?php

function make_connection(){
    define('HOST','localhost');
    define('USERNAME', 'root');
    define('PASSWORD','');
    define('DB','25353_db');
    $mysqli = new mysqli(HOST,USERNAME,PASSWORD,DB);
    if ($mysqli->connect_errno){
        die('connection error:' .$mysqli->connect_errno .'<br>');

    }
    return $mysqli;
}
function get_mailadresses(){
    $mysqli = make_connection();
    $query ="SELECT emailadres FROM nieuwsbrief";
    $stmt= $mysqli->prepare($query) or die('Error preparing');
    $stmt->bind_result($emailadres) or die ('Error binding results');
    $stmt-> execute() or die ('error executing');
    $results = array();
    while ( $stmt->fetch()){
        $results[] = $emailadres;
    }
    return $results;
}