<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../assets/css/styles.css">
    <link href="https://player.support.brightcove.com/assets/css/videojs.afk-monitor.min.css" rel="stylesheet">
    <title>Brightcove Assessment - Problem #6</title>
</head>
<body>
    <div class="main-wrapper problem-6">
        <div class="container">
            <header class="header">
                <a href="./" class="header__return-link">Return to homepage</a>
                <h1 class="header__title">Problem #6</h1>
                <h2 class="header__subtitle">Adding "Are you still watching?" and "Toggle Controlbar" Feature</h2>
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
                <button class="content__button" id="toggle-controlbar-btn">Toggle Controlbar</button>
                <div class="content__explanation">
                    <h2 class="content__explanation-title">Explanation / Thoughts / Process</h2>
                    <p class="content__explanation-text">
                        To add the "Are you still watching?" feature, I used the videojs.afk-monitor.min.js resource that I found in the examples of the documentation. This plugin is used to monitor the user's activity and, if the user is inactive for a certain amount of time, it will display a message asking if the user is still watching.
                    </p>

                    <p class="content__explanation-text">
                        To add the "Toggle Controlbar" feature, I created a button that toggles a class that hides the controlbar. This is done by adding an event listener to the button that toggles the class every time the button is clicked.
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
    <script src="https://players.brightcove.net/6314466874001/VHuNQ87E0N_default/index.min.js"></script>
    <script src="https://player.support.brightcove.com/assets/js/videojs.afk-monitor.min.js"></script>
    <script src="./../assets/js/problem-6.js"></script>
</body>
</html>