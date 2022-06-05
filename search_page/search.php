<!-- header calling -->
<?php get_header(); ?>

<section id="body_area">
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
            <div id="search_title">
              <h2 class="title">
                  <?php printf(__('Search Resulte for: %s', 'sundarban'), get_search_query()); ?> 
              </h2>
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
