<?php
/*
Template Name: our-services
*/
?>

<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header();

?>

<main class="main main--top">
  <h1 class="sr-only">
    <?php echo get_field('our-services_section')['sr-title']; ?>
  </h1>

  <section class="section services services--filter">
    <div class="container">
      <div class="wrapper">
        <div class="section-heading">
          <h2 class="title">
            <?php echo get_field('our-services_section')['title']; ?>
          </h2>
        </div>

        <nav class="custom-checker is-scrolling">
          <ul class="custom-checker__list">

            <li class="custom-checker__item">
              <input class="custom-checker__input" type="radio" name="category" value="all" id="allCategories" checked>
              <label class="custom-checker__label" for="allCategories">
                All
              </label>
            </li>

      <?php
    $my_posts = get_posts( array(
        'numberposts'      => -1,
        'category_name'    => 'checker',
        'orderby'          => 'date',
        'order'            => 'ASC',
        'post_type'        => 'post',
        'suppress_filters' => true,
    ) );

    global $post;

   foreach ( $my_posts as $index => $post ) {
    setup_postdata( $post );

    $checker_label = get_field('checker_label');

    if ( $checker_label ):
        $formatted_id = sanitize_title( $checker_label );
        ?>
        <li class="custom-checker__item">
            <input 
                class="custom-checker__input" 
                type="radio" 
                name="category" 
                value="<?php echo esc_attr( $formatted_id ); ?>" 
                id="<?php echo esc_attr( $formatted_id ); ?>">
            <label 
                class="custom-checker__label" 
                for="<?php echo esc_attr( $formatted_id ); ?>">
                <?php the_title(); ?>
            </label>
        </li>
        <?php
    endif;
}

wp_reset_postdata();

    ?>
          </ul>

        </nav>

          <ul class="services__list" data-items="1">

                    <?php
                    $services_links = get_field('services_section')['services'];

                    if ($services_links): ?>
                        <?php foreach ($services_links as $service_link): ?>
                            <li class="<?php echo get_field('services_item', $service_link); ?>">
                                <article class="service-card">
                                    <a href="<?php echo get_permalink($service_link); ?>">

                                        <h3>
                                            <span style="background-image: url('<?php echo get_field('icon', $service_link); ?>');"></span>
                                            <?php echo get_the_title($service_link); ?>
                                        </h3>

                                        <p>
                                            <?php echo get_field('short_description', $service_link); ?>
                                        </p>

                                        <div class="service-card__price">
                                            <span>Up to</span>
                                            <span>
                                                <?php echo get_field('price', $service_link); ?>
                                            </span>
                                        </div>
                                    </a>
                                </article>
                            </li>
                        <?php endforeach; ?>
                    <?php endif; ?>
          </ul>

        <p>
          <?php echo get_field('our-services_section')['description']; ?>
        </p>

        <button class="btn modal-btn" type="button">
          <?php echo get_field('our-services_section')['button_content']; ?>
        </button>
      </div>
    </div>
  </section>


  <!-- Ending of the <main> tag in the footer.php -->
  <?php get_footer('social'); ?>