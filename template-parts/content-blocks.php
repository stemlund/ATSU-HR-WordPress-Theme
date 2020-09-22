<div class="entry-content masonry-wrapper">
<?php the_content(); ?>
                    <?php if (have_rows('content-blocks')):
                        while (have_rows('content-blocks')): the_row(); ?>
                        <div class="card-wrapper">
                            <div class="card">
                                <h2 id="<?php the_sub_field('hash');?>" class="card-head"><?php the_sub_field('heading');?></h2>
                                <div class="card-inner"><?php the_sub_field('content');?></div>
                            </div>
                        </div>
                    <?php endwhile;
                    else :
                    endif; ?>
                
                    
                </div><!-- .entry-content -->