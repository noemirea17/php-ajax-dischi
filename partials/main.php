<main>
    <div class="container">
        <?php 
            foreach($database as $album) {
                echo '<div class="album_container" > 
                        <div class="album_image">
                            <img src="'.$album["poster"].'">
                        </div>
                        <div class="album_title">'.
                            '<p>'.$album["title"].'</p>'.
                            '<p>'.$album["author"].'</p>'.
                            '<p>'.$album["year"].'</p>'.
                        '</div>'. 
                    '</div>';        
            }
        ?>
    </div>
</main>