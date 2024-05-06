
<div class="most-recent__box">
    <a href='/post?id=<?= $post['post_id'] ?>'><img class="most-recent__box_image" src=<?= $post['image_url'] ?> alt=<?= $post['post_alt'] ?>></a>
    <div class="most-recent__box_text">
      <h3 class="most-recent__box_title"><?= $post['title'] ?></h3>
      <p class="most-recent__box_subtitle"><?= $post['subtitle'] ?></p>
    </div>
    <div class="most-recent__box_who">
      <div class="most-recent__box_info">
        <img src=<?= $post['author_url'] ?> alt=<?= $post['author'] ?>>
        <p class="most-recent__box_name"><?= $post['author'] ?></p>
      </div>
      <p class="most-recent__box_when-wrote">
        <?php
            echo date("d/m/Y", $post['publish_date'])
        ?>
      </p>
    </div>
</div>