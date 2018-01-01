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
            <li class="ar-left">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </li>
            <li class="ar-right">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </li>
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
            <li class="ar-left" id="video-left">
                <i class="fa fa-angle-left flex-prev" aria-hidden="true"></i>
            </li>
            <li class="ar-right flex-next" id="video-right">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </li>
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
        <h2>Our Founder staying in our hearts</h2>
        <p>1982 <a href="#" class="cantus">cantus</a> Start jurny and now it‘s top class Rock Band in the California.
        </p>
        <a href="#" class="button white-button pop-up-open">learn more</a>
        <div class="pop-up-show">
            <div class="pop-up">
                <h4>Founder reed more</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad at beatae earum nam repellat, tempore
                    temporibus. Cumque deserunt id natus saepe vero! Aspernatur pariatur, voluptatem! Aliquid cum
                    debitis
                    quas recusandae.</p>
                <a href="#" class="button red-button pop-up-close">Close me</a>
            </div>
        </div>
    </div>
</section>
<div class="container clearfix">
    <section class="popular pull-left">
        <div class="heading">
            <h2>Popular
                <span>Songs</span>
            </h2>
        </div>
        <div class="cloud">
            <iframe width="100%" height="155" scrolling="no" frameborder="no"
                    src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/206823343&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=false"></iframe>
        </div>
        <ul class="song">
            <li><a href="#">01.My heart is dancing</a></li>
            <li><a href="#">02.Good day</a></li>
            <li><a href="#">03.Life for rent</a></li>
            <li><a href="#">04.Hello It's me</a></li>
            <li><a href="#">05.My heart is dancing</a></li>
            <li><a href="#">06.Good day</a></li>
            <li><a href="#">07.Life for rent</a></li>
            <li><a href="#">08.Hello It's me</a></li>
            <li><a href="#">09.My heart is dancing</a></li>
            <li><a href="#">10.Good day</a></li>
            <li><a href="#">11.Life for rent</a></li>
            <li><a href="#">12.Hello It's me</a></li>
        </ul>
    </section>
    <section class="instagram pull-right">
        <div class="heading">
            <h2>Instagram
                <span>Feed</span>
            </h2>
        </div>
        <ul class="instagram-list">
            <li>
                <a href="#">
                    <img src="images/insta1.png" alt="insta1">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="images/insta2.png" alt="insta2">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="images/insta3.png" alt="insta3">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="images/insta4.png" alt="insta4">
                </a>
            </li>
        </ul>
    </section>
</div>
<section class="download container">
    <div class="download-main">
        <h2>Download our official apps</h2>
        <p>Never stop listening. Take your playlists and likes wherever you go.</p>
        <ul class="download-list">
            <li>
                <a href="#">
                    <img src="images/apple.png" alt="App Store">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="images/google.png" alt="Google Play">
                </a>
            </li>
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
                <li><a href="#">Home</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="#">Gallery</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Albums</a></li>
                <li><a href="#">Pages</a></li>
            </ul>
        </nav>
        <p>Copyright © 2009–2016 <a href="#" class="cantus">cantus</a> © their respective owners. Shipped from Salem,
            Mass. USA.</p>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="slickslider/slick/slick.min.js"></script>
<script src="flexslider/jquery.flexslider.js"></script>
<script src="js/main.js"></script>
</body>
</html>