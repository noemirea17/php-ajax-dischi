<main>
    <div class="container">
        <?php  foreach($database as $album) { ?>
            <div class="album_container" > 
                <div class="album_image">
                    <?php echo '<img src="'.$album['poster'].'">'; ?>
                </div>
                <div class="album_title">
                     <?php  echo '<p>'.$album['title'].'</p>'; 
                            echo '<p>'.$album['author'].'</p>'; 
                            echo '<p>'.$album['year'].'</p>'; 
                    ?>        
                </div> 
            </div>        
        <?php } ?>
    </div>
</main>