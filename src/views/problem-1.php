<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../assets/css/styles.css">
    <title>Brightcove Assessment - Problem #1</title>
</head>
<body>
    <div class="main-wrapper problem-1">
        <div class="container">
            <header class="header">
                <a href="./" class="header__return-link">Return to homepage</a>
                <h1 class="header__title">Problem #1</h1>
                <h2 class="header__subtitle">Manipulation of video player</h2>
            </header>

            <div class="content">
                <div class="content__video">
                    <div class="brightcove-player">
                        <video-js    
                            id="brightcove-player"
                            data-account="6314466874001"
                            data-player="VHuNQ87E0N"
                            data-embed="default"
                            controls=""
                            data-video-id="6348239508112"
                            data-playlist-id=""
                            data-application-id=""
                            class="vjs-fluid">
                        </video-js>
                    </div>
                </div>

                <div class="content__explanation">
                    <h2 class="content__explanation-title">Explanation / Process / Thoughts</h2>
                    <h3 class="content__explanation-warning">All manipulations to video player are being announced in the console</h3>
                    <p class="content__explanation-text">
                        To start with the first problem of the assessment, the first thing I did was to read Brightcove's documentation to understand how their video players work and how I could integrate and manipulate the player. After some searching, I found this section in the documentation: <a href="https://player.support.brightcove.com/coding-topics/index.html" target="_blank" rel="noopener noreferrer">https://player.support.brightcove.com/coding-topics/index.html</a> This is where I found most of the methods I used, such as muted(), getPlayer(), and currentTime(). I also discovered that the best way to use setTimeout() is through the player instance, as it has its own method for doing so that works better (Information obtained from
                        <a href="https://player.support.brightcove.com/brightcove-player/current-release/Player.html#setTimeout" target="_blank">https://player.support.brightcove.com/brightcove-player/current-release/Player.html#setTimeout</a>).
                    </p>
                    <p class="content__explanation-text">
                        After that, I started writing the JavaScript code for this problem, which is located in the file problem-1.js. I created a function that, when the video is ready to play, mutes the video and starts the countdown to skip ahead 20 seconds. I decided to use the 'loadedmetadata' event after the ready() method of the player is executed to ensure that the video is ready to play because according to the documentation, this is the correct way to do it. 
                    </p>

                    <p class="content__explanation-text">
                        Concerns: I didn't know if i should start the video when the page loads or if I should wait for the user to click the play button. I decided to start the video when the user clicks the play button because is not specified in the problem statement.
                    </p>
                </div>
            </div>

            <footer class="footer">
                <p class="footer__text">
                    Link to repository: 
                    <a class="footer__link" href="https://github.com" target="_blank">Github</a>
                </p>
            </footer>
        </div>
    </div>
    <script src="https://players.brightcove.net/6314466874001/VHuNQ87E0N_default/index.min.js"></script>
    <script src="./../assets/js/problem-1.js"></script>
</body>
</html>