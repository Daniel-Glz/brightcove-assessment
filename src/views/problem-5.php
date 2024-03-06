<?php 
    require_once './../controllers/VideoController.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $url = $_POST['url'];

        $videoController = new VideoController();
        $videoController->uploadVideo($name, $url);

        echo '<script>alert("Video sent to server")</script>';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../assets/css/styles.css">
    <title>Brightcove Assessment - Problem #5</title>
</head>
<body>
    <div class="main-wrapper problem-5">
        <div class="container">
            <header class="header">
                <a href="./" class="header__return-link">Return to homepage</a>
                <h1 class="header__title">Problem #5</h1>
                <h2 class="header__subtitle">Upload a video through CMS API and Ingest API</h2>
            </header>

            <div class="content">

                <div class="content__body">
                    <h3>Name: TEST - Problem #5</h3>
                    <h4>URL: <a target="_blank" href="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerEscapes.mp4">http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerEscapes.mp4</a></h4>
                    <form action="./problem-5.php" method="post">
                        <input class="content__upload-button" type="submit" value="Upload video">
                        <input type="hidden" name="name" value="TEST - Problem #5 TEST">
                        <input type="hidden" name="url" value="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerEscapes.mp4">
                    </form>
                </div>
                <div class="content__explanation">
                    <h2 class="content__explanation-title">Explanation / Process / Thoughts</h2>
                    <p class="content__explanation-text">
                        For this problem I took as a reference this page in the documentation: <a href="https://apis.support.brightcove.com/dynamic-ingest/getting-started/overview-dynamic-ingest-api-dynamic-delivery.html#ingestingVideos">https://apis.support.brightcove.com/dynamic-ingest/getting-started/overview-dynamic-ingest-api-dynamic-delivery.html#ingestingVideos</a> it gave me the idea to first, create a video object, once the video object was created, I took the video id from the response and then i used it to set the url to that video object.
                    </p>

                    <p class="content__explanation-text">
                        I used the APIModel class to make the requests to the CMS API and Ingest API, I created a method to create the video object (CMS API), and finally I created a method to upload the video (Ingest API).<br>
                        Here is the requests that I made in Postman before implementing the methods in the APIModel class:
                    </p>

                    <img class="content__explanation-image" src="./../assets/images/problem-5-postman.png" alt="Postman request">
                    <img class="content__explanation-image" src="./../assets/images/problem-5-postman2.png" alt="Postman request">
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