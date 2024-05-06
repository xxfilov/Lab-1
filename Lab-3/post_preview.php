<div class="<?= $post['classname'] ?> featured-posts__boxes">
    <?php
        if ($post['classname'] === 'main__featured-posts_box-2'){
            echo '<button class="main__featured-posts_box-2_button button">Adventure</button>';
        }
    ?>
    <a class="<?= $post['classname'] ?>-title-link" href='/post'>
        <h3 class="<?= $post['classname'] ?>-title featured-posts__boxes_title"><?= $post['title'] ?></h3>
    </a>
    <p class="<?= $post['classname'] ?>-text featured-posts__boxes_text default__text"><?= $post['subtitle'] ?></p>
    <div class="<?= $post['classname'] ?>-info featured-posts__box_info">
        <div class="<?= $post['classname'] ?>-who featured-posts__box_who">
            <img src=<?= $post['img_modifier'] ?> alt=<?= $post['author'] ?>>
            <p class="<?= $post['classname'] ?>-who-wrote featured-posts__box_who-wrote default__text"><?= $post['author'] ?></p>
        </div>
        <p class="<?= $post['classname'] ?>-when featured-posts__box_when-wrote default__text"><?= $post['date'] ?></p>
    </div>
</div>