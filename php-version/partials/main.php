<main>
    <div class="container">
        <?php  foreach($database as $album) { ?>
            <div class="album_container" > 
                <div class="album_image">
                    <img src="<?php echo($album['poster']) ?>" alt="">
                </div>
                <div class="album_title">
                    <p><?php echo $album['title']?></p>
                    <p><?php echo $album['author']?></p>
                    <p><?php echo $album['year']?></p>
                           
                </div> 
            </div>        
        <?php } ?>
    </div>
</main>