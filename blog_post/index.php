<section id="body_area">
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
            <?php
                if (have_posts()):
                while (have_posts()) : the_post( );
            ?>
            <div class="blog_area">
                <div class="post_thumb">
                <a href="<?php the_permalink(); ?>">
                <?php echo the_post_thumbnail('post-thumbnails'); ?>
            </a>
                    
                </div>
                <div class="post_details">
                    <h3>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title( ); ?>
                        </a>
                    </h3>
                <?php the_excerpt(); ?>

                </div>
            
            </div>
            <?php 
            endwhile;
        else:
            _e( 'Not post found' );
              endif;
            ?>
            </div>
            <div class="col-sm-3">
                <h2>This is sideber area</h2>
            </div>
        </div>
    </div>
</section>
