<!-- header calling -->
<?php get_header(); ?>

<section id="body_area">
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
            <div id="archive_title">
              <?php
                  the_archive_title('<h1 class="title">','</h1>');
                  the_author_description('<div class="description">', '</div>');
              ?>
            </div>
            <?php get_template_part('template/blog'); ?> 
          </div>
            </div>
            <div class="col-sm-3">
                <?php  get_sidebar( ); ?>
            </div>
        </div>
    </div>
</section>
  
<!-- Calling Footer -->
<?php get_footer(); ?>
