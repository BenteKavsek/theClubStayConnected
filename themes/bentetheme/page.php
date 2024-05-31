<?php

get_header();

the_post();
?>

<h1 class="mt-5"><?php the_title() ?></h1>
    <div class="col-lg-8 px-0">
        <?php the_excerpt() ?>
    </div>

<?php

get_footer();
// die(__FILE__.':'.__LINE__);


