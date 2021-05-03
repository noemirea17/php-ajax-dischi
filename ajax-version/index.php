<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <img src="img/Spotify_logo.png" alt="">
    </header>
    <main>
        <div id="app">
        <select v-model="selected" @change="getFilteredAlbums">
            <option v-for="author in authors" >{{author}}</option>
        </select>
            <div class="container">              
                <div v-for="album in albums" class="album_container">
                    <div class="album_image">
                        <img :src="album.poster" alt="">
                    </div>
                    <div class="album_title">
                        <p>{{album.title}}</p>
                        <p>{{album.author}}</p>
                        <p>{{album.year}}</p> 
                    </div>                  
                </div>
            </div>    
        </div>
    </main>
    <script src="js/main.js"></script>
</body>
</html>