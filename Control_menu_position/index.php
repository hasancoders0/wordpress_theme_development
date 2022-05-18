<div id="header_area" class="<?php echo get_theme_mod('sundarban_menu_position'); 
                ?>">
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <a href=""><img src="<?php echo get_theme_mod('sundarban_theme_logo'); 
                ?>" alt=""> </a>
            </div>
            <div class="col-sm-9">
               <?php wp_nav_menu( array('theme_location' => 'main_menu', 'menu_id' => 'nav') );  ?>
            </div>
        </div>
    </div>
</div>
