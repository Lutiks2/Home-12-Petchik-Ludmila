<?php
$data = require 'data.php';
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Cantus</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
    <link rel="stylesheet" href="flexslider/flexslider.css">
    <link rel="stylesheet" href="slickslider/slick/slick.css">
    <link rel="stylesheet" href="slickslider/slick/slick-theme.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<header>
    <nav>
        <ul class="main-nav">
            <?php
            foreach ($data['mainMenu'] as $menuItem) {
                ?>
                <li>
                    <a href="<?php echo $menuItem['url']; ?>"><?php echo $menuItem['title']; ?></a>
                </li>
                <?php
            }
            ?>
        </ul>
        <a href="#"><img src="<?php echo $data['siteLogo']; ?>" alt="logo"></a>
        <div class="header-social">
            <ul class="social-list">
                <?php
                foreach ($data['socialLinks'] as $menuItem) {
                    ?>
                    <li class="<?php echo $menuItem['class']; ?>">
                        <a href="<?php echo $menuItem['url']; ?>"><?php echo $menuItem['count']; ?></a>
                    </li>
                    <?php
                }
                ?>
            </ul>
            <a href="<?php echo $data['buttonBuy']['url']; ?>"
               class="<?php echo $data['buttonBuy']['class']; ?><?php echo $data['buttonBuy']['intermediate']; ?>"><?php echo $data['buttonBuy']['title']; ?></a>
        </div>
    </nav>
</header>
<section>
    <div class="flexslider">
        <ul class="slides">
            <?php
            foreach ($data['welcome'] as $welcomeItem) {
                ?>
                <li>
                    <div class="welcome-banner <?php echo $welcomeItem['banner']; ?>">
                        <div class="welcome-heading">
                            <h1>
                                <?php echo $welcomeItem['heading']; ?>
                                <span class="<?php echo $welcomeItem['class']; ?>"><?php echo $welcomeItem['title']; ?></span>
                            </h1>
                            <a href="<?php echo $welcomeItem['url']; ?>"
                               class="<?php echo $welcomeItem['classButton']; ?><?php echo $welcomeItem['classIntermediate']; ?>">
                                <?php echo $welcomeItem['titleButton']; ?></a>
                        </div>
                    </div>
                </li>
                <?php
            }
            ?>
        </ul>
    </div>
</section>
<section class="introducing">
    <div class="container line">
        <div class="heading">
            <h2><?php echo $data['introdusing']['heading']; ?>
                <span><?php echo $data['introdusing']['subheading']; ?></span>
            </h2>
        </div>
        <ul class="arrow">
            <?php
            foreach ($data['introdusing']['arrows'] as $arrowItem) {
                ?>
                <li class="<?php echo $arrowItem['class']; ?>" id="<?php echo $arrowItem['id']; ?>">
                    <i class="<?php echo $arrowItem['icon']; ?>" aria-hidden="true"></i>
                </li>
                <?php
            }
            ?>
        </ul>
        <div class="your-class">
            <ul class="introducing-list slider">
                <?php
                foreach ($data['introdusing']['introducing-slider'] as $sliderItem) {
                    ?>
                    <li>
                        <img src="<?php echo $sliderItem['src']; ?>" alt="<?php echo $sliderItem['alt']; ?>">
                        <div class="intro-list">
                            <h4><?php echo $sliderItem['heading']; ?></h4>
                            <span><?php echo $sliderItem['subheading']; ?></span>
                            <ul class="social-list social-hide">
                                <?php
                                foreach ($sliderItem['socialList'] as $socialItem) {
                                    ?>
                                    <li class="<?php echo $socialItem['class']; ?>">
                                        <a href="<?php echo $socialItem['href']; ?>"><?php echo $socialItem['title']; ?></a>
                                    </li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </div>
    </div>
</section>
<div class="container clearfix">
    <section class="upcoming pull-left">
        <div class="heading">
            <h2><?php echo $data['upcoming']['heading']; ?>
                <span><?php echo $data['upcoming']['subheading']; ?></span>
            </h2>
        </div>
        <div class="concert clearfix">
            <div class="concert-date">
                <img src="<?php echo $data['upcoming']['src']; ?>" alt="<?php echo $data['upcoming']['alt']; ?>">
                <div class="hover-date">
                    <div class="wrap-span">
                        <span><?php echo $data['upcoming']['date']; ?></span>
                        <span><?php echo $data['upcoming']['month']; ?></span>
                    </div>
                </div>
            </div>
            <div class="location">
                <h5><?php echo $data['upcoming']['nameList']; ?></h5>
                <dl>
                    <?php
                    foreach ($data['upcoming']['list'] as $listItem) {
                        ?>
                        <dt><?php echo $listItem['dt']; ?><span><?php echo $listItem['span']; ?></span></dt>
                        <dd><?php echo $listItem['dd']; ?></dd>
                        <?php
                    }
                    ?>
                </dl>
                <a href="<?php echo $data['upcoming']['url']; ?>"
                   class="<?php echo $data['upcoming']['classButton']; ?><?php echo $data['upcoming']['classIntermediate']; ?>">
                    <?php echo $data['upcoming']['titleButton']; ?></a>
            </div>
        </div>
    </section>
    <section class="latest pull-right">
        <div class="heading">
            <h2><?php echo $data['latest']['heading']; ?>
                <span><?php echo $data['latest']['subheading']; ?></span>
            </h2>
        </div>
        <ul class="arrow">
            <?php
            foreach ($data['latest']['arrows'] as $arrowItem) {
                ?>
                <li class="<?php echo $arrowItem['class']; ?>" id="<?php echo $arrowItem['id']; ?>">
                    <i class="<?php echo $arrowItem['icon']; ?>" aria-hidden="true"></i>
                </li>
            <?php
            }
            ?>
        </ul>
        <div>
            <ul class="videoslider">
                <?php
                foreach ($data['latest']['video'] as $menuItem) {
                    ?>
                    <li>
                        <iframe width="372" height="290"
                                src="<?php echo $menuItem['src']; ?>&amp;controls=0&amp;showinfo=0"
                                frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </div>
    </section>
</div>
<section class="founder container">
    <div class="founder-main">
        <h2><?php echo $data['founder']['heading']; ?></h2>
        <p><?php echo $data['founder']['paragraphBefore']; ?>
            <a href="<?php echo $data['founder']['url']; ?>" class="<?php echo $data['founder']['link']; ?>">
                <?php echo $data['founder']['title']; ?>
            </a>
            <?php echo $data['founder']['paragraphAfter']; ?>
        </p>
        <a href="<?php echo $data['founder']['url']; ?>"
           class="<?php echo $data['founder']['classButton']; ?><?php echo $data['founder']['classIntermediate']; ?>
                  <?php echo $data['founder']['openButton']; ?>">
            <?php echo $data['founder']['titleButton']; ?></a>
        <div class="pop-up-show">
            <div class="pop-up">
                <h4><?php echo $data['founder']['popUpHeading']; ?></h4>
                <p><?php echo $data['founder']['text']; ?></p>
                <a href="<?php echo $data['founder']['url']; ?>"
                   class="<?php echo $data['founder']['classButton']; ?><?php echo $data['founder']['closeClassIntermediate']; ?>
                  <?php echo $data['founder']['closeButton']; ?>">
                    <?php echo $data['founder']['closeTitleButton']; ?></a>
            </div>
        </div>
    </div>
</section>
<div class="container clearfix">
    <section class="popular pull-left">
        <div class="heading">
            <h2><?php echo $data['popular']['heading']; ?>
                <span><?php echo $data['popular']['subheading']; ?></span>
            </h2>
        </div>
        <div class="cloud">
            <iframe width="100%" height="155" scrolling="no" frameborder="no"
                    src="<?php echo $data['popular']['link']; ?>&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=false"></iframe>
        </div>
        <ul class="song">
            <?php
            foreach ($data['popular']['song'] as $songItem) {
                ?>
                <li>
                    <a href="<?php echo $songItem['url']; ?>"><?php echo $songItem['name']; ?></a>
                </li>
                <?php
            }
            ?>
        </ul>
    </section>
    <section class="instagram pull-right">
        <div class="heading">
            <h2><?php echo $data['instagram']['heading']; ?>
                <span><?php echo $data['instagram']['subheading']; ?></span>
            </h2>
        </div>
        <ul class="instagram-list">
            <?php
            foreach ($data['instagram']['list'] as $listItem) {
                ?>
                <li>
                    <a href="<?php echo $listItem['url']; ?>">
                        <img src="<?php echo $listItem['src']; ?>" alt="<?php echo $listItem['alt']; ?>">
                    </a>
                </li>
                <?php
            }
            ?>
        </ul>
    </section>
</div>
<section class="download container">
    <div class="download-main">
        <h2><?php echo $data['download']['heading']; ?></h2>
        <p><?php echo $data['download']['text']; ?></p>
        <ul class="download-list">
            <?php
            foreach ($data['download']['list'] as $listItem) {
                ?>
                <li>
                    <a href="<?php echo $listItem['url']; ?>">
                        <img src="<?php echo $listItem['src']; ?>" alt="<?php echo $listItem['alt']; ?>">
                    </a>
                </li>
                <?php
            }
            ?>
        </ul>
    </div>
</section>
<div class="subscribe container">
    <form class="form" action="#" method="post">
        <input type="email" placeholder="subscribe newsletter" class="email" name="email">
        <input type="submit" class="sendsubmit" name="send" value="Отправить"/>
    </form>
</div>
<footer class="footer">
    <div class="container">
        <nav class="footer-nav">
            <ul class="main-nav">
                <?php
                foreach ($data['footer']['list'] as $listItem) {
                    ?>
                    <li>
                        <a href="<?php echo $listItem['url']; ?>"><?php echo $listItem['title']; ?></a>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </nav>
        <p><?php echo $data['footer']['textBefore']; ?>
            <a href="<?php echo $data['footer']['url']; ?>" class="<?php echo $data['footer']['class']; ?>">
                <?php echo $data['footer']['title']; ?>
            </a>
            <?php echo $data['footer']['textAfter']; ?>
        </p>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="slickslider/slick/slick.min.js"></script>
<script src="flexslider/jquery.flexslider.js"></script>
<script src="js/main.js"></script>
</body>
</html>