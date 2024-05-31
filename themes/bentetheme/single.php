<?php

get_header();

the_post();
?>

<h1 class="mt-5"><?php the_title() ?></h1>
    <div class="col-lg-8 px-0">
        <?php the_excerpt() ?>
    </div>

    <p class="col-lg-8 px-0">
        Publish date: <?php the_date() ?>
    </p>

    <p class="col-lg-8 px-0">
        Update date: <?php the_modified_date() ?>
    </p>

<?php

    the_post_navigation(
        [
            'next_text' => __( 'Next post', 'Bente-thema' ),
            'prev_text' => __( 'Previous post:', 'Bente-thema' ),
        ] 
    );

get_footer();

// die(__FILE__.':'.__LINE__);


