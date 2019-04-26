<?php function themaTinxian_bronnen() { ?>
<?php wp_enqueue_script('tinxian-scripts', get_theme_file_uri('/js/scriptsTinxian.js'), NULL, '1.0', true); ?>
<?php wp_enqueue_style('style', get_stylesheet_uri()); ?>
<?php } ?>

<?php add_action('wp_enqueue_scripts', 'themaTinxian_bronnen'); ?>

<?php // registreer menu's van he thema ?>

<?php register_nav_menus( array (
 'hoofd' => __('Hoofd menu'),
 'footer' => __('Menu in footer')));