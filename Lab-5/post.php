<?php 
  require "db.php";
  $connection = createDBConnection();
  $postId = $_GET['id'];
  if (is_numeric($postId)){
    $sql_query = "SELECT * FROM post WHERE post_id = " . $postId;
    $result = mysqli_query($connection, $sql_query);
    if (mysqli_num_rows($result) > 0) {
      $get_post = mysqli_fetch_assoc($result);
    } else {
      header("Location: /home");
      exit();
    }
  } else {
      header("Location: /home");
      exit();
    }
  closeDBConnection($connection);                  
?>

<?php
  $post = [
    'id' => 1,
    'title' => 'The Road Ahead',
    'subtitle' => 'The road ahead might be paved - it might not be.',
    'image' => '/src/images/blo-main-image.png',
    'text' => '
      <span>Dark spruce forest frowned on either side the frozen waterway. The trees had been stripped by a recent wind of their white covering of frost, and they seemed to lean towards each other, black and ominous, in the fading light. A vast silence reigned over the land. The land itself was a desolation, lifeless, without movement, so lone and cold that the spirit of it was not even that of sadness. There was a hint in it of laughter, but of a laughter more terrible than any sadness—a laughter that was mirthless as the smile of the sphinx, a laughter cold as the frost and partaking of the grimness of infallibility. It was the masterful and incommunicable wisdom of eternity laughing at the futility of life and the effort of life. It was the Wild, the savage, frozen-hearted Northland Wild.</span>
      <span>But there was life, abroad in the land and defiant. Down the frozen waterway toiled a string of wolfish dogs. Their bristly fur was rimed with frost. Their breath froze in the air as it left their mouths, spouting forth in spumes of vapour that settled upon the hair of their bodies and formed into crystals of frost. Leather harness was on the dogs, and leather traces attached them to a sled which dragged along behind. The sled was without runners. It was made of stout birch-bark, and its full surface rested on the snow. The front end of the sled was turned up, like a scroll, in order to force down and under the bore of soft snow that surged like a wave before it. On the sled, securely lashed, was a long and narrow oblong box. There were other things on the sled—blankets, an axe, and a coffee-pot and frying-pan; but prominent, occupying most of the space, was the long and narrow oblong box.</span>
      <span>In advance of the dogs, on wide snowshoes, toiled a man. At the rear of the sled toiled a second man. On the sled, in the box, lay a third man whose toil was over,—a man whom the Wild had conquered and beaten down until he would never move nor struggle again. It is not the way of the Wild to like movement. Life is an offence to it, for life is movement; and the Wild aims always to destroy movement. It freezes the water to prevent it running to the sea; it drives the sap out of the trees till they are frozen to their mighty hearts; and most ferociously and terribly of all does the Wild harry and crush into submission man—man who is the most restless of life, ever in revolt against the dictum that all movement must in the end come to the cessation of movement.</span>
      <span>But at front and rear, unawed and indomitable, toiled the two men who were not yet dead. Their bodies were covered with fur and soft-tanned leather. Eyelashes and cheeks and lips were so coated with the crystals from their frozen breath that their faces were not discernible. This gave them the seeming of ghostly masques, undertakers in a spectral world at the funeral of some ghost. But under it all they were men, penetrating the land of desolation and mockery and silence, puny adventurers bent on colossal adventure, pitting themselves against the might of a world as remote and alien and pulseless as the abysses of space.</span>
    ',
  ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Road Ahead</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora&family=Oxygen&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="src/styles/TheRoadAhead.css">
</head>
<body>
    <header class="header">
      <div class="container">
        <div class="header__inner">
            <a href="http://localhost:8001/home"><h3 class="logo">Escape.</h3></a>
            <nav class="navigation">
              <ul>
                <li>
                  <a href="http://localhost:8001/home"">Home</a>
                </li>
                <li>
                  <a href="#">Categories</a>
                </li>
                <li>
                  <a href="#">About</a>
                </li>
                <li>
                  <a href="#">Contact</a>
                </li>
              </ul>
            </nav>
        </div>
      </div>
    </header>
    <main class="main">
      <section class="title">
        <div class="container">
          <div class="title__text">
            <h1>
              <?= $get_post['title'] ?>
            </h1>
            <p>
              <?= $get_post['subtitle'] ?>
            </p>
          </div>
        </div>
      </section>
      <div class="main__text">
        <div class="container">
          <div class="main__img">
            <img src="<?= $get_post['image_content'] ?>" alt="<?= $get_post['post_alt'] ?>" />
          </div>
        </div>
        <div class="container">
          <div class="main__text">
            <p>
              <?= $get_post['content'] ?>
            </p>
          </div>
        </div>
      </div>
    </main>
    <footer class="footer">
        <div class="container">
            <div class="footer-nav">
                <a href="http://localhost:8001/home"><h2 class="logo">Escape.</h2></a>
                <nav class="footer-navigation">
                    <ul class="footer-navigation-lists">
                        <li class="footer-navigation-list"><a href="http://localhost:8001/home">Home</a></li>
                        <li class="footer-navigation-list"><a href="#">Categories</a></li>
                        <li class="footer-navigation-list"><a href="#">About</a></li>
                        <li class="footer-navigation-list"><a href="#">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </footer>
</body>
</html>
