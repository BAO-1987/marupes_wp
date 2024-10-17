<?php
/*
  Template name: Шаблон для сторінки "Cпівпраця"
*/
get_header();

?>

<main class="main molecule">

  <div class="container">

    <?php get_template_part('tmp/breadcrumbs'); ?>

    <?php

    $the_query = new WP_Query([
      'numberposts' => 2,
      'post_type' => 'city', 'posts_per_page' => -1,
      'order'    => 'ASC'
    ]);


    if ($the_query->have_posts()) :
    ?>
      <section class="cities">
        <h2>
          <?php if ('uk' == pll_current_language()) : ?>
            Замовити гелій в різних містах
          <?php else : ?>
            Заказать гелий в разных городах
          <?php endif; ?>
        </h2>

        <ul>
          <?php

          while ($the_query->have_posts()) :
            $the_query->the_post();
          ?>

            <li>
              <a href="<?php echo get_the_permalink(); ?>">
                <span>
                  <?php the_title(); ?>
                </span>

                <span class="btn">
                  <?php if ('uk' == pll_current_language()) : ?>
                    Детальніше
                  <?php else : ?>
                    Подробнее
                  <?php endif; ?>
                </span>
              </a>
            </li>
          <?php endwhile;
          wp_reset_postdata();
          ?>
        </ul>
      </section>
    <?php
    endif;
    ?>
  </div>

  <?php get_template_part('tmp/contact'); ?>

</main>

<?php get_footer(); ?>