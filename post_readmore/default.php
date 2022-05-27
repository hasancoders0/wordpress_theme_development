//start Except to 40 word
function sundarban_excerpt_more( $more ) {
    return  sprintf( '<br> <br><a href="%1$s" class="readmore">%2$s</a>',
          esc_url( get_permalink( get_the_ID() ) ),
          sprintf( __( 'Read more %s', 'wpdocs' ), '<span class="screen-reader-text">' . get_the_title( get_the_ID() ) . '</span>' )
    );
}
add_filter( 'excerpt_more', 'sundarban_excerpt_more' );

function sundarban_excerpt_lenght($length){
    return 40;
  }
  add_filter('excerpt_length', 'sundarban_excerpt_lenght', 999);
  //End Except to 40 word
