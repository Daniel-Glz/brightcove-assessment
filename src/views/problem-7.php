<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../assets/css/styles.css">
    <title>Brightcove Assessment - Problem #7</title>
</head>
<body>
    <div class="main-wrapper problem-7">
        <div class="container">
            <header class="header">
                <a href="./" class="header__return-link">Return to homepage</a>
                <h1 class="header__title">Problem #7</h1>
                <h2 class="header__subtitle">Lightbox</h2>
            </header>

            <div class="content">
                <div class="player-block">
                    <div id="container">
                    </div>
                    <div id="playerLightbox" class="playerHide">

                        <video-js
                            id="brightcove-player"
                            data-video-id="6348337860112"
                            data-account="6314466874001"
                            data-player="VHuNQ87E0N"
                            data-embed="default"
                            data-application-id=""
                            class="video-js"
                            controls=""
                            width="560"
                            height="315"
                        >
                        </video-js>

                    	<div id="playerClose" class="playerClose" onClick="hideAndStop();">Close</div>
                    </div>
                </div>
    
                <div class="content__explanation">
                    <h2 class="content__explanation-title">Explanation to a "Technical Person"</h2>
                    <p class="content__explanation-text">
                    To begin implementing a lightbox for the Brightcove video, the first thing we need to do is embed our video into the website. Once we have it embedded, we add an id to the video-js tag to access it from JavaScript. As you can see, I have a div with the id playerLightbox that has the class playerHide. This is to hide the div with the video until the user clicks on it, as what we are actually showing when the page loads is just an image of the video. We achieve this by adding the video image to the container via JavaScript when the video starts loading. Once the user clicks on the video, the playerLightbox div is given the playerShow class to display the video. This class adds absolute positioning and styling to center it on the screen. As an additional explanation at the beginning of the JavaScript code, in my case, I use the registerPlugin method, which is used to, so to speak, add a method that executes a function created by us when calling that "method" through the player instance.
                    </p>
                    <img class="content__explanation-image" src="./../assets/images/problem-7-code.png" alt="Code">
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
    <script src="./../assets/js/problem-7.js"></script>
</body>
</html>