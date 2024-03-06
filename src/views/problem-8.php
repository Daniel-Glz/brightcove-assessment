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
                <div class="content__video">
                    <div class="brightcove-player">
                        <video-js    
                            data-account="6314466874001"
                            data-player="VHuNQ87E0N"
                            data-embed="default"
                            controls=""
                            data-video-id="6348335383112"
                            data-playlist-id=""
                            data-application-id=""
                            class="vjs-fluid">
                        </video-js>
                    </div>
                </div>
                <div class="content__explanation">
                    <h2 class="content__explanation-title">Explanation to "Non-Technical person"</h2>
                    <p class="content__explanation-text">
                    So You need to go to your webpage code, it seems that there&apos;s a piece of code called a script tag that&apos;s in the wrong place (&lt;script src=“{link}”&gt;&lt;/script&gt; that’s how the script tag should look). This tag is supposed to be at the end of the body tag in your webpage&apos;s code, but right now it&apos;s in the head section.
To fix this, you&apos;ll need to access your website&apos;s code and find where the script tag is located, it should be after this tag &lt;head&gt; and before this tag &lt;/head&gt;. Then, simply cut it from where it is and paste it at the end of your website’s code just a line before the &lt;/body&gt; tag.
Once you&apos;ve done that, save the changes, and your player should start working properly.
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
    <script src="./../assets/js/problem-1.js"></script>
</body>
</html>