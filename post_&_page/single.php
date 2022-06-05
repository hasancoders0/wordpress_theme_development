<!-- header calling -->
<?php get_header(); ?>

<section id="body_area">
    <div class="container">
        <div class="row">
             <div class="col-sm-9">
             <?php get_template_part('template/post') ?> 
             <div id="comment_area">
                 <?php comments_template(); ?>
             </div>
            </div>
            <div class="col-sm-3">
                <?php  get_sidebar( ); ?>
            </div>
            </div>
        </div>
    </div>
</section>
  
<!-- Calling Footer -->
<?php get_footer(); ?>
