<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header('simple');

?>

<main class="main main--top">

  <div class="container">


    <?php
    if (have_posts()) :
      while (have_posts()) :
        the_post();
    ?>

    <article class="single section">

      <?php
          if ($return_url = wp_get_referer()) {
              ?>
      <a class="link link--back" href="<?php echo esc_url($return_url); ?>">
        Go back
      </a>
      <?php
            }
          ?>

      <div class="single__wrapper">

        <div class="single__content">

          <div class="single__welcome">

            <div class="single__category">
              <span>
                <?php
              $categories = get_the_category();
              if (!empty($categories)) {
                echo esc_html($categories[0]->name); 
              }
              ?>
              </span>

              <div>
                <span>
                  <?php the_time('d.m.y');?>
                </span>
                <span>
                  <?php echo get_field('reading_time');?>
                </span>
              </div>
            </div>

            <h1 class="single__title title">
              <?php the_title(); ?>
            </h1>
          </div>

          <?php the_content(); ?>
        </div>

        <aside class="single__popular">
          <h2>
            Also popular:
          </h2>

          <ul class="single__grid">
            <?php
      $recent_posts = wp_get_recent_posts(array(
        'numberposts' => 2,
        'post_status' => 'publish',
        'category_name' => 'news',
        'orderby' => 'date',
        'order' => 'DESC'
      ));

    foreach ($recent_posts as $post) {
        $postId = $post['ID'];
        setup_postdata($post); 
        ?>

            <li class="blog__item">
              <article>
                <a href="<?php echo get_permalink($postId); ?>">
                  <header>
                    <span>
                      <?php
              $categories = get_the_terms($postId, 'category');
           if (!empty($categories)) {
    
            $filtered_categories = array_filter($categories, function ($category) {
          return $category->slug !== 'news'; 
       });

    
       $category_names = wp_list_pluck($filtered_categories, 'name');
        $category_names = array_map('ucwords', $category_names); 

        echo esc_html(implode(', ', $category_names));
     }
    ?>
                    </span>
                    <div>
                      <span>
                        <?php echo get_the_date('d.m.y', $postId); ?>
                    </span>
                      <span><?php echo get_field('reading_time', $postId); ?>
                      </span>
                    </div>
                  </header>
                  <h3><?php echo esc_html(get_the_title($postId)); ?></h3>
                  <span class="link">
                    Go to the news
                  </span>
                </a>
              </article>
            </li>

            <?php
        }
       wp_reset_postdata();
        ?>
          </ul>


    </aside>

    </article>
    <?php
      endwhile;
    endif
    ?>
  </div>



  <!-- Ending of the <main> tag in the footer.php -->
  <?php get_footer('social'); ?>