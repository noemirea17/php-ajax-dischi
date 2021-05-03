<?php 

require 'database.php';

$action = $_GET['action'];



if($action == 'filter_authors') {
    $filteredAlbums = [];
        $author = $_GET['author'];
        foreach($database as $album){
            if($album['author'] == $author) {
                $filteredAlbums[] = $album;
            }
        }
        header('Content-Type: application/json');
        echo json_encode($filteredAlbums);

}else {
    header('Content-Type: application/json');
    echo json_encode($database); 
}

 






?>