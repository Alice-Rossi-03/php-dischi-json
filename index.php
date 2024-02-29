
<!-- Consegna: creare una web-app che permetta di leggere una lista di dischi presente nel nostro server.-->

<!DOCTYPE html>
<html lang="en" data-bs-theme='dark'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-dischi-json</title>

    <!-- link to bs css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    
    <div id="app" class="position-relative">
        <header class="mx-auto bg-black" style='height: 5em;'>
            <div class="w-75 mx-auto d-flex align-items-center">
                <figure>
                    <img src="./assets/img/spotify_logo_icon_229290.png" alt="logo" style='height: 3em;' class="my-3">
                </figure>
            </div>
        </header>
        <main>
            <div class="w-75 mx-auto d-flex container mt-5">
                <div class="d-flex flex-wrap justify-content-center" style='gap: 1.5em;'>
                    <div class="card mb-4 border-0 bg-dark-subtle p-0" style="width: calc(100% / 3 - 1.5em); " v-for='(element, index) in albumList' :key='index' @click='showSong(index)'>
                        <img :src="element.poster" class="card-img-top" alt="..." style='width: 100%;'>
                        <div class="card-body text-center">
                            <h5 class="card-title">{{element.title}}</h5>
                            <small>{{element.author}}</small>
                            <h5 class="mt-2">{{element.year}}</h5>
                        </div>
                    </div>
                    
                </div>
            </div>
        </main>
        <div v-if='current' class="position-absolute top-0 bottom-0 start-0 end-0 d-flex justify-content-center align-items-center bg-black bg-opacity-75" @click='hideSong()'>
            <div class="card mb-4 border-0 bg-dark-subtle p-0" style="width: calc(100% / 3 - 1.5em); ">
                <img :src="currentSong.poster" class="card-img-top" alt="..." style='width: 100%;'>
                <div class="card-body text-center">
                    <h5 class="card-title">{{currentSong.title}}</h5>
                    <small>{{currentSong.author}}</small>
                    <h5 class="mt-2">{{currentSong.year}}</h5>
                </div>
            </div>
        </div>
    </div>


    <!-- link to bs js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- link to vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- link to axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <!-- link to my js -->
    <script src="./assets/js/main.js"></script>
</body>
</html>