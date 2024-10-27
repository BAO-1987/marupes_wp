<?php

$widgets = [
  'widget-social.php',
  'widget-contacts.php',
  'widget-schedule.php',
  'widget-email.php',
];

foreach ($widgets as $w) {
  require_once(__DIR__ . '/inc/' . $w);
}

add_action('after_setup_theme', 'gm_setup');
add_action('wp_enqueue_scripts', 'connect_scripts');
add_action('wp_enqueue_scripts', 'remove_block_css', 100);
add_action('after_setup_theme', 'gm_show_sidebar');
add_action('widgets_init', 'gm_register');

add_filter('script_loader_tag', 'change_my_script', 10, 3);
add_filter('show_admin_bar', '__return_false');

add_filter('upload_mimes', 'cc_mime_types');

add_filter( 'upload_mimes', 'svg_upload_allow' );

# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}

add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

# Исправление MIME типа для SVG файлов.
function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

	// WP 5.1 +
	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) ){
		$dosvg = in_array( $real_mime, ['image/svg', 'image/svg+xml' ] );
	}
	else {
		$dosvg = ( '.svg' === strtolower( substr( $filename, -4 ) ) );
	}

	// mime тип был обнулен, поправим его
	// а также проверим право пользователя
	if( $dosvg ){

		// разрешим
		if( current_user_can('manage_options') ){

			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		// запретим
		else {
			$data['ext']  = false;
			$data['type'] = false;
		}

	}

	return $data;
}

function gm_show_sidebar()
{
    remove_theme_support('widgets-block-editor');
}

function remove_block_css()
{
    wp_dequeue_style('classic-theme-styles');
    wp_dequeue_style('wp-block-library'); // Wordpress core
    wp_dequeue_style('wp-block-library-theme'); // Wordpress core
    wp_dequeue_style('wc-block-style'); // WooCommerce
    wp_dequeue_style('storefront-gutenberg-blocks'); // Storefront theme
}

function connect_scripts()
{

    wp_enqueue_style(
    'wp-style-vendor',
    _gm_assets_path('css/reset.css'),
    [],
    '1.0',
    'all'
  );

    wp_enqueue_style(
        'wp-style-main',
        _gm_assets_path('css/style.css'),
        [],
        '1.0',
        'all'
    );
  
    wp_enqueue_script('rs-script-main', _gm_assets_path('js/index.js'));

    // отменяем зарегистрированный jQuery
    wp_deregister_script('jquery-core');
    wp_deregister_script('jquery');
}

function gm_setup()
{
    register_nav_menu('menu-header', 'Головне меню');

    add_theme_support('custom-logo');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_filter( 'document_title_separator', function() {
	return '|';
});

function _gm_assets_path($path)
{
    return get_template_directory_uri() . '/assets/' . $path;
}

function cc_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}

function change_my_script($tag, $handle, $src)
{
    if ('rs-script-vendor' === $handle || 'rs-script-main' === $handle || 'rs-script-fancy' === $handle) {
        return str_replace(' src', ' defer src', $tag);
    }
    return $tag;
}

function gm_register()
{

  register_sidebar([
    'name' => 'Соціальні мережі',
    'id' => 'social',
    'before_widget' => null,
    'after_widget' => null
  ]);

  register_sidebar([
    'name' => 'Електронна пошта',
    'id' => 'email',
    'before_widget' => null,
    'after_widget' => null
  ]);

  register_sidebar([
    'name' => 'номер телефону',
    'id' => 'phone',
    'before_widget' => null,
    'after_widget' => null
  ]);

  register_sidebar([
    'name' => 'Графік роботи',
    'id' => 'schedule',
    'before_widget' => null,
    'after_widget' => null
  ]);


  register_widget('gm_widget_social');
  register_widget('gm_widget_email');
  register_widget('gm_widget_contacts');
  register_widget('gm_widget_schedule');
}

function disable_plugin_updates($value) {
    if(isset($value) && is_object($value)) {
       unset($value->response);
    }
    return $value;
}
add_filter('site_transient_update_plugins', 'disable_plugin_updates');


class Header_Walker_Nav_Menu extends Walker_Nav_Menu {

    function start_el( &$output, $item, $depth = 0, $args = null, $current_object_id = 0 ) {
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

        // Оригінальні класи елемента меню
        $classes = (array) $item->classes;

        // Додаємо клас 'true', якщо елемент активний або є батьківським для активного елемента
        if (in_array('current-menu-item', $item->classes) || in_array('current-menu-parent', $item->classes) || in_array('current-menu-ancestor', $item->classes)) {
            $classes[] = 'true'; // Додаємо новий клас 'true'
        }

        // Формуємо id для елемента, якщо воно є
        $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
        $id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';

        // Формуємо список класів для <li> елемента
        $class_names = join(' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ));
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

        // Виводимо <li> елемент з id та класами
        $output .= $indent . '<li' . $id . $class_names . '>';

        // Атрибути для <a> тега
        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';

        // Додаємо клас link-dropdown до <a> тега, якщо елемент має підменю
        $link_classes = '';
        if ($args->walker->has_children) {
            $link_classes = 'link-dropdown'; // Додаємо клас для <a> тега з підменю
            $attributes .= ' title="' . esc_attr($item->title) . '"'; // Додаємо title для підменю
            $item->url = ''; // Видаляємо href для елементів з підменю
        }

        // Формуємо <a> тег з відповідними атрибутами та класом link-dropdown
        $item_output = $args->before;
        $item_output .= '<a' . $attributes . ($item->url ? ' href="' . esc_attr( $item->url ) . '"' : '') . ' class="' . esc_attr($link_classes) . '">';
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        // Додаємо кінцевий результат у вихідний потік
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
}












