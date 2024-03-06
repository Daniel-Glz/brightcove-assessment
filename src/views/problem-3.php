<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../assets/css/styles.css">
    <title>Brightcove Assessment - Problem #3</title>
</head>
<body>
    <div class="main-wrapper problem-3">
        <div class="container">
            <header class="header">
                <a href="./" class="header__return-link">Return to homepage</a>
                <h1 class="header__title">Problem #3</h1>
                <h2 class="header__subtitle">Use of advertising through brightcove player</h2>
            </header>

            <div class="content">
                <div class="content__video">
                    <div class="brightcove-player">
                        <video-js
                            data-account="6314466874001"
                            data-player="9QseIo9RM"
                            data-embed="default"
                            controls=""
                            data-video-id="6348238620112"
                            data-playlist-id=""
                            data-application-id=""
                            class="vjs-fluid">
                        </video-js>
                    </div>
                </div>

                <div class="content__explanation">
                    <h2 class="content__explanation-title">Explanation / Process / Thoughts</h2>
                    <p class="content__explanation-text">
                        To start with this problem was easy for me, I saw that the Brightcove documentation has a video explaining how to add advertising to a video player, so I just followed the steps in the video. The video is located at this link: https://studio.support.brightcove.com/players/general/configuring-player-advertising-using-players-module.html 
                    </p>

                    <p class="content__explanation-text">
                        I found this video really helpful, and I was able to add advertising to the video player without any problems.
                    </p>
                </div>
            </div>
            <footer class="footer">
                <p class="footer__text">
                    Link to repository: 
                    <a class="footer__link" href="https://github.com/Daniel-Glz/brightcove-assessment" target="_blank">Github</a>
                </p>
            </footer>
        </div>
    </div>
    <script src="https://players.brightcove.net/6314466874001/9QseIo9RM_default/index.min.js"></script>
</body>
</html>