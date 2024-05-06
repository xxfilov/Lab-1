<?php
    $posts = [
        [
        'id' => 1,
        'title' => 'The Road Ahead',
        'subtitle' => 'The road ahead might be paved - it might not be.',
        'img_modifier' => 'http://localhost:8001/src/images/matvogels.png',
        'post' => 'Nother lights',
        'author' => 'Mat Vogels',
        'date' => 1443139200,
        'classname' => 'main__featured-posts_box-1',
        ],
        [
        'id' => 2,
        'title' => 'From Top Down',
        'subtitle' => 'Once a year, go someplace you’ve never been before.',
        'img_modifier' => 'http://localhost:8001/src/images/williamwong.png',
        'post' => 'Balloons',
        'author' => 'William Wong',
        'date' => 1443139200,
        'classname' => 'main__featured-posts_box-2',
        ],
    ];

    $posts_recent = [
        [
        'id' => 3,
        'mainImage' => 'src/images/stillstandingtall.png',
        'title' => 'Still Standing Tall',
        'subtitle' => 'Life begins at the end of your comfort zone.',
        'post' => 'Ballons'
        'author' => 'William Wong',
        'date' => 1443139200,
        'authorImage' => 'src/images/williamwong.png',    
        ],
        [
        'id' => 4,
        'mainImage' => 'src/images/sunnysideup.png',
        'title' => 'Sunny Side Up',
        'subtitle' => 'No place is ever as bad as they tell you it’s going to be.',
        'post' => 'Bridge',
        'author' => 'Mat Vogels',
        'date' => 1443139200,
        'authorImage' => 'src/images/matvogels.png',
        ],
        [
        'id' => 5,
        'mainImage' => 'src/images/waterfalls.png',
        'title' => 'Water Falls',
        'subtitle' => 'We travel not to escape life, but for life not to escape us.',
        'post' => 'Lake',
        'author' => 'Mat Vogels',
        'date' => 1443139200,
        'authorImage' => 'src/images/matvogels.png',
        ],
        [
        'id' => 6,
        'mainImage' => 'src/images/throughthemeat.png',
        'title' => 'Through the Mist',
        'subtitle' => 'Travel makes you see what a tiny place you occupy in the world.',
        'post' => 'Ocean',
        'author' => 'William Wong',
        'date' => 1443139200,
        'authorImage' => 'src/images/williamwong.png',
        ],
        [
        'id' => 7,
        'mainImage' => 'src/images/awakenearly.png',
        'title' => 'Awaken Early',
        'subtitle' => 'Not all those who wander are lost.',
        'post' => 'Cable Car',
        'author' => 'Mat Vogels',
        'date' => 1443139200,
        'authorImage' => 'src/images/matvogels.png',
        ],
        [
        'id' => 8,
        'mainImage' => 'src/images/tryitalways.png',
        'title' => 'Try it Always',
        'subtitle' => 'The world is a book, and those who do not travel read only one page.',
        'post' => 'Rainbow',
        'author' => 'Mat Vogels',
        'date' => 1443139200,
        'authorImage' => 'src/images/matvogels.png',
        ],
    ];
?>

<?php 
    require "db.php";
    $connection = createDBConnection();
    $posts = getPostsFromDB($connection);
    closeDBConnection($connection);
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
                            if ($post['featured'] == 1){
                                include 'post_preview.php';
                            }
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
                    <?php
                    foreach ($posts_recent as $post) {
                        if ($post['featured'] == 0){
                            include 'post_recent.php';
                        }  
                    }
                    ?>
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