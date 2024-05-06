<?php
  $posts = [
    [
      'title' => 'The Road Ahead',
      'subtitle' => 'The road ahead might be paved - it might not be.',
      'img_modifier' => 'http://localhost:8001/src/images/matvogels.png',
      'author' => 'Mat Vogels',
      'date' => 'September 25, 2015',
      'classname' => 'main__featured-posts_box-1',
    ],
    [
      'title' => 'From Top Down',
      'subtitle' => 'Once a year, go someplace you’ve never been before.',
      'img_modifier' => 'http://localhost:8001/src/images/williamwong.png',
      'author' => 'William Wong',
      'date' => 'September 25, 2015',
      'classname' => 'main__featured-posts_box-2',
    ],
  ];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escape.</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora&family=Oxygen&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="src/styles/style.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header__main">
                <a href="/home"><h2 class="logo">Escape.</h2></a>
                <nav class="header__navigation">
                    <ul class="header__main_lists">
                        <li class="header__main_list"><a href="/home">Home</a></li>
                        <li class="header__main_list"><a href="#">Categories</a></li>
                        <li class="header__main_list"><a href="#">About</a></li>
                        <li class="header__main_list"><a href="#">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main class="main">
        <section class="title__piece">
            <div class="container">
                <div class="title__piece_main">
                    <h1 class="title__piece_main--title">Let's do it together.</h1>
                    <p class="title__piece_main--subtitle">We travel the world in search of stories. Come along for the ride.</p>
                    <button class="title__piece_main--button button">View Latest Posts</button>
                </div>
            </div>
        </section>
        <section class="main__nav">
            <div class="main__navigation">
                <div class="container">
                    <div class="main__navigation_nav">
                        <ul class="main__navigation_lists">
                            <li class="main__navigation_list">Nature</li>
                            <li class="main__navigation_list">Photography</li>
                            <li class="main__navigation_list">Relaxation</li>
                            <li class="main__navigation_list">Vacation</li>
                            <li class="main__navigation_list">Travel</li>
                            <li class="main__navigation_list">Adventure</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="main__featured-posts">
            <div class="container">
                <div class="main__featured-posts_title div__title">
                    <h2 class="main__title">Featured Posts</h2>
                </div>
                <div class="main__featured-posts_box">
                    <?php 
                        foreach ($posts as $post){
                            include 'post_preview.php';
                        }
                    ?>
                </div>
            </div>
        </section>
        <section class="main__most-recent">
            <div class="container">
                <div class="main__most-recent_title div__title">
                    <h2 class="main__title">Most Recent</h2>
                </div>
                <div class="most-recent__boxes">
                    <div class="most-recent__box-1 most-recent__box">
                        <a href="#">
                            <img class="most-recent__box_image" src="src/images/stillstandingtall.png" alt="stillStanding">
                        </a>
                        <div class="most-recent__box_text">
                            <h3 class="most-recent__box_title">Still Standing Tall</h3>
                            <p class="most-recent__box_subtitle">Life begins at the end of your comfort zone.</p>
                        </div>
                        <div class="most-recent__box_who">
                            <div class="most-recent__box_info">
                                <img src="src/images/williamwong.png" alt="williamWong">
                                <p class="most-recent__box_name">William Wong</p>
                            </div>
                            <p class="most-recent__box_when-wrote">9/25/2015</p>
                        </div>
                    </div>
                    <div class="most-recent__box-2 most-recent__box">
                        <a href="#">
                            <img class="most-recent__box_image" src="src/images/sunnysideup.png" alt="sunnysideup">
                        </a>
                        <div class="most-recent__box_text">
                            <h3 class="most-recent__box_title">Sunny Side Up</h3>
                            <p class="most-recent__box_subtitle">No place is ever as bad as they tell you it’s going to be.</p>
                        </div>
                        <div class="most-recent__box_who">
                            <div class="most-recent__box_info">
                                <img src="src/images/matvogels.png" alt="matvogels">
                                <p class="most-recent__box_name">Mat Vogels</p>
                            </div>
                            <p class="most-recent__box_when-wrote">9/25/2015</p>
                        </div>
                    </div>
                    <div class="most-recent__box-3 most-recent__box">
                        <a href="#">
                            <img class="most-recent__box_image" src="src/images/waterfalls.png" alt="waterfalls">
                        </a>
                        <div class="most-recent__box_text">
                            <h3 class="most-recent__box_title">Water Falls</h3>
                            <p class="most-recent__box_subtitle">We travel not to escape life, but for life not to escape us.</p>
                        </div>
                        <div class="most-recent__box_who">
                            <div class="most-recent__box_info">
                                <img src="src/images/matvogels.png" alt="matvogels">
                                <p class="most-recent__box_name">Mat Vogels</p>
                            </div>
                            <p class="most-recent__box_when-wrote">9/25/2015</p>
                        </div>
                    </div>
                    <div class="most-recent__box-4 most-recent__box">
                        <a href="#">
                            <img class="most-recent__box_image" src="src/images/throughthemeat.png" alt="throughthemeat">
                        </a>
                        <div class="most-recent__box_text">
                            <h3 class="most-recent__box_title">Through the Mist</h3>
                            <p class="most-recent__box_subtitle">Travel makes you see what a tiny place you occupy in the world.</p>
                        </div>
                        <div class="most-recent__box_who">
                            <div class="most-recent__box_info">
                                <img src="src/images/williamwong.png" alt="williamWong">
                                <p class="most-recent__box_name">William Wong</p>
                            </div>
                            <p class="most-recent__box_when-wrote">9/25/2015</p>
                        </div>
                    </div>
                    <div class="most-recent__box-5 most-recent__box">
                        <a href="#">
                            <img class="most-recent__box_image" src="src/images/awakenearly.png" alt="awakenEarly">
                        </a>
                        <div class="most-recent__box_text">
                            <h3 class="most-recent__box_title">Awaken Early</h3>
                            <p class="most-recent__box_subtitle">Not all those who wander are lost.</p>
                        </div>
                        <div class="most-recent__box_who">
                            <div class="most-recent__box_info">
                                <img src="src/images/matvogels.png" alt="matvogels">
                                <p class="most-recent__box_name">Mat Vogels</p>
                            </div>
                            <p class="most-recent__box_when-wrote">9/25/2015</p>
                        </div>
                    </div>
                    <div class="most-recent__box-6 most-recent__box">
                        <a href="#">
                            <img class="most-recent__box_image" src="src/images/tryitalways.png" alt="tryItAlways">
                        </a>
                        <div class="most-recent__box_text">
                            <h3 class="most-recent__box_title">Try it Always</h3>
                            <p class="most-recent__box_subtitle">The world is a book, and those who do not travel read only one page.</p>
                        </div>
                        <div class="most-recent__box_who">
                            <div class="most-recent__box_info">
                                <img src="src/images/matvogels.png" alt="matvogels">
                                <p class="most-recent__box_name">Mat Vogels</p>
                            </div>
                            <p class="most-recent__box_when-wrote">9/25/2015</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer">
        <footer class="footer">
            <div class="container">
                <div class="footer-nav">
                    <a href="#"><h2 class="logo">Escape.</h2></a>
                    <nav class="footer-navigation">
                        <ul class="footer-navigation-lists">
                            <li class="footer-navigation-list"><a href="/home">Home</a></li>
                            <li class="footer-navigation-list"><a href="#">Categories</a></li>
                            <li class="footer-navigation-list"><a href="#">About</a></li>
                            <li class="footer-navigation-list"><a href="#">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </footer>
    </footer>
</body>
</html>