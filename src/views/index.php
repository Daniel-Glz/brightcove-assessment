<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../assets/css/styles.css">
    <title>Brightcove Assessment</title>
</head>
<body>
    <div class="main-wrapper home">
        <div class="container">
            <header class="header">
                <h1 class="header__title">Brightcove Assessment</h1>
            </header>

            <div class="content">
                <nav class="main-nav">
                    <ul class="main-nav__list">
                        <?php for ($i = 1; $i <= 8; $i++) { ?>
                            <?php if ($i === 4) { continue; } ?> 
                                <li class='main-nav__item'>
                                    <a 
                                        class='main-nav__link' 
                                        href='./problem-<?php echo $i; ?>.php'
                                    >
                                    Problem #<?php echo $i; ?>
                                    </a>
                                </li>
                        <?php } ?>
                    </ul>
                </nav>
            </div>

            <footer class="footer">
                <p class="footer__text">
                    Link to repository: 
                    <a class="footer__link" href="https://github.com/Daniel-Glz/brightcove-assessment" target="_blank">Github</a>
                </p>
            </footer>
        </div>
    </div>
</body>
</html>