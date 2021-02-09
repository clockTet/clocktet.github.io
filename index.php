<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minhflix</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>

        <a href="#" class="logo"><img src="img/logo.png"></a>
        <ul class="navigation">
            <li><a href="#">Home</a></li>
            <li><a href="#">Tv show</a></li>
            <li><a href="#">Movie</a></li>
            <li><a href="#">Lastest</a></li>
            <li><a href="https://minh2501.github.io/">Github</a></li>
        </ul>
        <div class="search">
            <input type="text" placeholder="Search">
            <i class="fa fa-search" aria-hidden="true"></i>
        </div>
    </header>

    <div class="banner">
        <img src="img/doremon.jpg" class="bg">
        <div class="content">
            <img src="img/name.png" class="movieTitle">
            <h4>
                <span>2020</span>
                <span><i>10+</i></span>
                <span>1h 20min</span>
                <span>action</span>
            </h4>
            <p>Phim hay vai chuong anh em a</p>
            <div class="buttons">
                <a href="#"><i class="fa fa-play" aria-hidden="true"></i>Play</a>
                <a href="#"><i class="fa fa-plus" aria-hidden="true"></i>My list</a>
            </div>
        </div>

        <a class="play" onclick="toggleVideo();"><img src="img/play.png">watch trailer</a>
    </div>

    <div class="trailer">
        <video src="img/trailer.mp4" controls="true" autoplay="true"></video>
        <img src="img/close.png" class="close" onclick="toggleVideo();">
    </div>

    <script>
        function toggleVideo() {
            const trailer = document.querySelector('.trailer');
            const video = document.querySelector('video');
            trailer.classList.toggle('active')
            video.currentTime = 0;
            video.pause();
        }
    </script>

</body>

</html>