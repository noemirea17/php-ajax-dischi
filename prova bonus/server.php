<?php 

require 'database.php';

header('Content-Type: application/json');

if(!empty($_GET["listAuthor"])) {
    $listAuthor = $_GET["listAuthor"];
    $authors = [];
    if($listAuthor == true) {
        foreach($database as $album) {
            if(!in_array($album['author'], $authors)) {
                $authors[] = $album['author'];
            }
        }

    }
    echo json_encode($authors);
}else {
    echo json_encode($database);
}





?>

   

