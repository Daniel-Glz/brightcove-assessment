<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../assets/css/styles.css">
    <title>Brightcove Assessment - Problem #8</title>
</head>
<body>
    <div class="main-wrapper problem-8">
        <div class="container">
            <header class="header">
                <a href="./" class="header__return-link">Return to homepage</a>
                <h1 class="header__title">Problem #8</h1>
                <h2 class="header__subtitle">Fixing issue of video player</h2>
            </header>

            <div class="content">

                <div class="content__explanation">
                    <h2 class="content__explanation-title">Explanation / Process / Thoughts</h2>
                    <p class="content__explanation-text">
                        To resolve this issue, the first thing I did was inspect the page and go to the video player tag, I found that everything seemed to be in order, also I checked the css and js files but everything was correct. I noticed that the script tag was not after the video player tag and neither at the end of the body tag. I realized that the script tag was in the head tag, so I moved it to the end of the body tag and the video player worked correctly.
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