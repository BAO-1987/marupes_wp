<?php
/*
Template Name: reviews
*/
?>

<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header();

?>

<main class="main main--top">
  <section class="reviews reviews--main section">
    <div class="container">
      <div class="section-heading">
        <h1 class="title">
          <?php the_title();?>
        </h1>
      </div>

          <ul class="reviews__list">
            <?php $reviews_items = get_field('reviews_items');
                    foreach ($reviews_items as $reviews_item): ?>
            <?php if ($reviews_item): ?>

            <li class="reviews__item swiper-slide">
              <blockquote class="reviews__blockqoute">
                <p>
                  <?php echo wp_strip_all_tags(apply_filters('the_content', get_post($reviews_item)->post_content)); ?>
                </p>

                <div class="reviews__content">
                  <cite class="reviews__author">
                    <?php echo get_field('review_author', $reviews_item); ?>
                  </cite>

                  <div class="reviews__links">
                    <a class="link" href="<?php echo get_field('project_link', $reviews_item); ?>">Go to the website</a>
                    <a class="link link--view" href="<?php echo get_permalink($reviews_item); ?>">View in original</a>
                  </div>
                </div>
              </blockquote>

              <div class="reviews__image">
                <img src="<?php echo get_the_post_thumbnail_url($reviews_item, 'full'); ?>"
                  alt="<?php echo get_the_title($reviews_item); ?>" width="380" height="175" loading="lazy">
              </div>
            </li>

            <?php endif; ?>
            <?php endforeach; ?>
          </ul>
      
    </div>
  </section>


  <!-- Ending of the <main> tag in the footer.php -->
  <?php get_footer(); ?>