<?php
/**
 * This tamplate for showing Header section
 */

?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="no-js">
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head();  ?>
</head>

<body <?php body_class(); ?> >

<header id="header_area" class="<?php echo get_theme_mod('sundarban_menu_position'); 
                ?>">
    <div class="container">
        <div class="row">
            <div class="col-sm-2 align-items-center ">
                <a href="<?php echo home_url(); ?>"><img class="logosize align-items-center " src="<?php echo get_theme_mod('sundarban_theme_logo'); 
                ?> " alt=""> </a>
            </div>
            <div class="col-sm-9">
               <?php wp_nav_menu( array('theme_location' => 'main_menu', 'menu_id' => 'nav') );  ?>
            </div>
        </div>
    </div>
</header>
