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
                <div class="content__videos-container">
                    <?php foreach ($videos as $video) { ?>
                        <div class="video-card">
                            <h3 class="video-card__title">Name of video: <?php echo $video['name'] ?></h3>
                            <p class="video-card__id">ID: <?php echo $video['id'] ?></p>
                        </div>
                    <?php } ?>
                </div>
                <div class="content__explanation">
                    <h2 class="content__explanation-title">Explanation / Process / Thoughts</h2>
                    <p class="content__explanation-text">
                        To start with this problem, I first migrated the code to php, I chose this language because it helps me with the needs of this problem, I wanted to keep the credentials safe so that's why I didn't simple use javascript (frontend) to fetch the videos.
                        I created the requests that I was going to use in postman, the first one was to get the access token, the second one was to get the videos of the account id. I created the code in the APIModel.php file, utilizing the cURL library to make the requests.
                    </p>
                    
                    <p class="content__explanation-text">
                        As you see I used the MVC pattern to organize the code and I created a controller to fetch the videos (VideoController.php) through the model class (APIModel.php).
                    </p>

                    <p class="content__explanation-text">
                        Notes: I didn't use the specified credentials in the problem description, because it seems that they were not valid anymore, so I used my own credentials creating them in the Admin module giving just the necessary permissions to read the videos.
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
</body>
</html>