<?php
add_action('wp_enqueue_scripts', 'markupers_scripts');

function markupers_scripts() {
    wp_enqueue_style('main-style', get_stylesheet_directory_uri() . '/style.css');

    wp_enqueue_script('first-scripts', get_stylesheet_directory_uri() . '/assets/js/404.6300e3bc.js', array(), '1.0.0');
    wp_enqueue_script('second-scripts', get_stylesheet_directory_uri() . '/assets/js/404.975ef6c8.js', array(), '1.0.0');
    wp_enqueue_script( 'custom-scripts', get_stylesheet_directory_uri() . '/assets/js/custom.js', array(), '', true );

    wp_script_add_data( 'first-scripts', 'strategy', 'defer' );
    wp_script_add_data( 'second-scripts', 'strategy', 'defer' );
}

add_filter( 'upload_mimes', 'svg_upload_allow' );
function svg_upload_allow( $mimes ) {
    $mimes['svg']  = 'image/svg+xml';

    return $mimes;
}

add_theme_support('custom-logo');
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('menus');
add_filter( 'document_title_separator', function() {
	return '|';
});

function register_location_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
            'footer-menu' => __( 'Footer Menu' )
        )
    );
}
add_action( 'init', 'register_location_menus' );

function add_custom_logo_options( $wp_customize ) {
    $wp_customize->add_setting('second_logo', array(
        'default' => '',
        'sanitize_callback' => 'esc_url',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'second_logo', array(
        'label'    => __('Second Logo (Light Mode)', 'markupers'),
        'section'  => 'title_tagline',
        'settings' => 'second_logo',
        'priority' => 8,
    )));
}
add_action('customize_register', 'add_custom_logo_options');

// creating function for socials-menu.php
function create_social_items($menu_item) {
    $title = strtolower($menu_item->title);
    $url = esc_url($menu_item->url);
    $classname = implode(' ', $menu_item->classes);

    return '<li class="social__item">'
        . '<a class="social__link ' . $classname . '" href="' . $url . '" target="_blank">'
        . '<span class="sr-only">' . $title . '</span>'
        . '</a>'
        . '</li>';
}


$widgets = [
  'widget-contacts.php',
  'widget-schedule.php',
  'widget-email.php',
];

add_action('widgets_init', 'gm_register');

foreach ($widgets as $w) {
  require_once(__DIR__ . '/inc/' . $w);
}

function gm_register()
{

  register_sidebar([
    'name' => 'Електронна пошта',
    'id' => 'email',
    'before_widget' => "",
    'after_widget' => ""
  ]);

  register_sidebar([
    'name' => 'Номер телефону',
    'id' => 'phone',
    'before_widget' => "",
    'after_widget' => ""
  ]);

  register_sidebar([
    'name' => 'Графік роботи',
    'id' => 'schedule',
    'before_widget' => "",
    'after_widget' => ""
  ]);


  register_widget('gm_widget_email');
  register_widget('gm_widget_contacts');
  register_widget('gm_widget_schedule');
}

function true_remove_default_widget() {
	unregister_widget('WP_Widget_Archives'); // Архиви
	unregister_widget('WP_Widget_Calendar'); // Календар
	unregister_widget('WP_Widget_Categories'); // Рубрики
	unregister_widget('WP_Widget_Meta'); // Мета
	unregister_widget('WP_Widget_Pages'); // Сторінки
	unregister_widget('WP_Widget_Recent_Comments'); // Нові коментарі
	unregister_widget('WP_Widget_Recent_Posts'); // Нові пости
	unregister_widget('WP_Widget_RSS'); // RSS
	unregister_widget('WP_Widget_Search'); // Пошук
	unregister_widget('WP_Widget_Tag_Cloud'); // Хмара тегів
	unregister_widget('WP_Widget_Text'); // Текст
	unregister_widget('WP_Nav_Menu_Widget'); // Довільне меню
  unregister_widget('WP_Widget_Tag_Cloud');            // Віджет хмарки тегів
  unregister_widget('WP_Widget_Media_Image');          // Віджет для зображень
 unregister_widget('WP_Widget_Media_Gallery');        // Віджет для галерей
  unregister_widget('WP_Widget_Media_Audio');          // Віджет для аудіо
  unregister_widget('WP_Widget_Media_Video');          // Віджет для відео
}
 
add_action( 'widgets_init', 'true_remove_default_widget', 20 );

function php_in_widgets($widget_content) {
	if (strpos($widget_content, '<' . '?') !== false) {
		ob_start();
		eval('?' . '>' . $widget_content);
		$widget_content = ob_get_contents();
		ob_end_clean();
	}
	return $widget_content;
}
 
add_filter('widget_text', 'php_in_widgets', 99);


?>




