<?php
/*
Template Name: Socials Menu
*/
?>

<?php
$social_menu = wp_get_nav_menu_items('socials-links');

if ($social_menu) {
    echo '<ul class="social">';
    echo implode('', array_map('create_social_items', $social_menu));
    echo '</ul>';
}
?>
