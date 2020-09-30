<div class="page-heading subheading<?php echo rand(1,4);?>">
    <?php 
        if (is_404()) { ?>

            <h1 class="entry-title">Oops! That page can&rsquo;t be found.</h1>

        <?php } elseif (is_search()) { ?>

            <h1 class="entry-title">
                <?php
                /* translators: %s: search query. */
                printf( esc_html__( 'Search Results for: %s', 'atsu-hr' ), '<span>' . get_search_query() . '</span>' );
                ?>
			</h1>

        <?php } else {
        
            the_title( '<h1 class="entry-title">', '</h1>' ); 
        }
    ?>

</div>
