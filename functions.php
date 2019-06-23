<?php function themaTinxian_bronnen() {
 wp_enqueue_script('tinxian-scripts', get_theme_file_uri('/js/scriptsTinxian.js'), NULL, '1.0', true);
 wp_enqueue_style('mijnGooglefonts','//fonts.googleapis.com/css?family=Roboto&display=swap');
 wp_enqueue_style('style', get_stylesheet_uri());
 }

 add_action('wp_enqueue_scripts', 'themaTinxian_bronnen');

 // registreer menu's van het thema

 register_nav_menus( array (
 'hoofd' => __('Hoofd menu'),
 'footer' => __('Menu in footer')
 ));

 // registeer/initialiseer widgets

function themaTinxian_widgets() {
   register_sidebar( array(
    'name'          => __( 'Widget aside' ),
    'id'            => ('widget_aside'),    // gebruik alleen onderkasten! ! !
    'description'   => ('Hier de widgets voor de aside plaatsen'),
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '<h4 class="widgettitel">',
    'after_title'   => '</h4>'
  ) );
}
add_action('widgets_init', 'themaTinxian_widgets');
?>