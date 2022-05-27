function sundarban_add_google_font(){
    wp_enqueue_style('sundarban_google_font','https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Oswald&family=Roboto:wght@900&display=swap', 
    false );
}
add_action( 'wp_enqueue_scripts','sundarban_add_google_font' );
