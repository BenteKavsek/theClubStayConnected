<?php

get_header();

print_r( the_title() );

if ( have_posts() ) :

	// Loop trough the posts
	while ( have_posts() ) :
	    // Load the data post data
		the_post();
		?>
        <main class="container my-5">
            <h1 class="mt-5"><?php the_title() ?></h1>
            <div class="col-lg-8 px-0">
                <?php the_excerpt() ?>
            </div>
        </main>
	    <?php
	endwhile;

else: 
    echo 'BITCH DIT BESTAAT NIET, U STUPID';
endif;

get_footer();
// die(__FILE__.':'.__LINE__);


