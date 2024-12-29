<?php
/*
Template Name: portfolio
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
    <?php the_title();?>
  </h1>

  
  <section class="portfolio portfolio--main section">
    <div class="container">
      <div class="section-heading">
        <h2 class="title">
          <?php the_title();?>
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
            <input class="custom-checker__input" type="radio" name="category"
              value="<?php echo esc_attr( $formatted_id ); ?>" id="<?php echo esc_attr( $formatted_id ); ?>">
            <label class="custom-checker__label" for="<?php echo esc_attr( $formatted_id ); ?>">
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

      <ul class="portfolio__list">

        <?php
                    $portfolio_items = get_field('projects_list');

                    if ($portfolio_items): ?>

        <?php foreach ($portfolio_items as $portfolio_item): ?>
        <li class="portfolio__item <?php echo get_field('portfolio_item', $portfolio_item); ?>">
          <div class="portfolio__image">
            <img src="<?php echo get_the_post_thumbnail_url($portfolio_item, 'full'); ?>"
              alt="<?php echo get_the_title($portfolio_item); ?>" width="930" height="465" loading="lazy">
          </div>

          <div class="portfolio__content">
            <h3><?php echo get_the_title($portfolio_item); ?></h3>

            <dl class="portfolio__details">
              <?php
                                        $project_details = get_field_object('project_details', $portfolio_item)['value'];

                                        foreach ($project_details as $key => $project_detail): ?>
              <?php if ($project_detail !== ""): ?>

              <div class="portfolio__detail">
                <dt><?php echo str_replace('_', ' ', $key); ?></dt>

                <span></span>

                <dd><?php echo $project_detail ?></dd>
              </div>

              <?php endif; ?>
              <?php endforeach; ?>
            </dl>

            <span class="portfolio__category">
              <?php
                                        $project_tags = wp_get_post_tags($portfolio_item);
                                        $tags_amount = count($project_tags);


                                        foreach ($project_tags as $index => $project_tag) {
                                            echo esc_html($project_tag->name);
                                            if ($index < $tags_amount - 1) {
                                                echo ', ';
                                            }
                                        }
                                        ?>
            </span>

            <div class="portfolio__btns">
              <a class="btn btn--transparent" href="<?php echo get_permalink($portfolio_item); ?>">Learn more</a>

              <a class="link" href="<?php echo get_field('project_website', $portfolio_item) ?>" target="_blank">Go to
                the website</a>
            </div>
          </div>
        </li>

        <?php endforeach; ?>
        <?php endif; ?>
      </ul>

    </div>
  </section>


  <!-- Ending of the <main> tag in the footer.php -->
  <?php get_footer(); ?>