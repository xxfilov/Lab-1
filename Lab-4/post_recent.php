<div class="most-recent__box">
    <a href="#"><img class="most-recent__box_image" src=<?= $post['mainImage'] ?> alt=<?= $post['mainImage'] ?>></a>
    <div class="most-recent__box_text">
        <h3 class="most-recent__box_title"><?= $post['title'] ?></h3>
        <p class="most-recent__box_subtitle"><?= $post['subtitle'] ?></p>
    </div>
    <div class="most-recent__box_who">
        <div class="most-recent__box_info">
            <img src=<?= $post['authorImage'] ?> alt=<?= $post['author'] ?>>
            <p class="most-recent__box_name"><?= $post['author'] ?></p>
        </div>
        <p class="most-recent__box_when-wrote">
            <?php
                echo date("d/m/Y", $post['date'])
            ?>
        </p>
    </div>
</div>