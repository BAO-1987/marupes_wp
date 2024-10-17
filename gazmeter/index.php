<?php get_header(); ?>

<main class="main molecule">

  <div class="container">

    <?php get_template_part('tmp/breadcrumbs'); ?>

    <?php
    if (have_posts()) :
    ?>
      <section class="news">
        <h1>
          <?php if ('uk' == pll_current_language()) : ?>
            новини
          <?php else : ?>
            новости
          <?php endif; ?>
        </h1>

        <?php get_template_part('tmp/filter-news'); ?>


        <ul class="news__grid">

          <?php
          while (have_posts()) :
            the_post();

            if (has_post_thumbnail()) :
          ?>
              <li class="news__item">
                <div class="news__preview">
                  <?php the_post_thumbnail() ?>
                </div>

                <h2 class="news__title">
                  <a class="news__link" href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                  </a>
                </h2>
              </li>

            <?php else : ?>

              <li class="news__item">
                <div class="news__preview">
                  <img src="<?php echo _gm_assets_path('images/liquid.jpg') ?>" alt="" />
                </div>

                <h2 class="news__title">
                  <a class="news__link" href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                  </a>
                </h2>
              </li>

          <?php
            endif;
          endwhile; ?>

        </ul>


        <?php get_template_part('tmp/pagination');

        ?>

      </section>

    <?php else : ?>

      <?php get_template_part('tmp/no-posts'); ?>

    <?php
    endif;
    ?>

  </div>

</main>

<?php get_footer(); ?>