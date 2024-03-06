<?php
    require_once('./../controllers/VideoController.php');
    $account_id = '6314466874001';
    
    $videos = VideoController::fetchVideos($account_id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../assets/css/styles.css">
    <title>Brightcove Assessment - Problem #2</title>
</head>
<body>
    <div class="main-wrapper problem-2">
        <div class="container">
            <header class="header">
                <a href="./" class="header__return-link">Return to homepage</a>
                <h1 class="header__title">Problem #2</h1>
                <h2 class="header__subtitle">Get videos of account id: <?php echo $account_id ?></h2>
            </header>

            <div class="content">
                <?php foreach ($videos as $video) { ?>
                    <div class="video-card">
                        <h3 class="video-card__title">Name of video: <?php echo $video['name'] ?></h3>
                        <p class="video-card__id">ID: <?php echo $video['id'] ?></p>
                    </div>
                <?php } ?>
            </div>
            <footer class="footer">
                <p class="footer__text">
                    Link to repository: 
                    <a class="footer__link" href="https://github.com" target="_blank">Github</a>
                </p>
            </footer>
        </div>
    </div>
</body>
</html>