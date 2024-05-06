<div class="featured-posts__boxes">
  <div class="featured-posts__image">
    <img style="width: 100%; position: relative; z-index: -1; max-width: 460px; min-height: 280px;" src="<?= $post['image_url'] ?>" alt=<?= $post['post_alt'] ?>>
  </div>
  
  <?php if ($post['post_id'] == 2) echo '<button class="main__featured-posts_box-2_button button">Adventure</button>';?>
  
  <a style= '' class="main__featured-posts_box-1_title-link" title="<?= $post['title'] ?>" href="/post?id=<?= $post['post_id'] ?>">
    <h3 class="featured-posts__boxes_title"><?= $post['title'] ?></h3>
  </a>

  <p class="featured-posts__boxes_text default__text"><?= $post['subtitle'] ?></p>
  <div class="featured-posts__box_info">
    <div class="who featured-posts__box_who">
      <img src=<?= $post['author_url'] ?> alt=<?= $post['author'] ?>>
      <p class="featured-posts__box_who-wrote default__text"><?= $post['author'] ?></p>
    </div>
    <p class="featured-posts__box_when-wrote default__text">
        <?php
            echo date("d/m/Y", $post['publish_date'])
        ?>
    </p>
  </div>
</div>

