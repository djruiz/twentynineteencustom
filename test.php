<?php
    while(have_posts()) {
        the_post(); ?>
        <div class="post-item">
            <h2><?php the_title();?></h2>
    </div>
    <?php ?>}

<h2>tsting</h2>