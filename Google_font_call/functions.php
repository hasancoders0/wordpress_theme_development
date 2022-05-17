//for calling Google Font
function sundarban_add_google_font(){
    wp_enqueue_style('sundarban_google_font','https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap', 
    false );
}
add_action( 'wp_enqueue_scripts','sundarban_add_google_font' );
