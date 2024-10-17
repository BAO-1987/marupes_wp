<?php
/*
  Template name: Шаблон для сторінки "Газоподібний гелій"
*/
get_header();

?>

<main class="main molecule">

  <div class="container">

    <?php get_template_part('tmp/breadcrumbs'); ?>

    <section class="way">
      <h1>
        <?php the_title(); ?>
      </h1>

      <div class="way__desc steps" style="background-image: url(<?php echo get_field('liquid-image')['url']; ?>)">

        <?php the_field('liquid-desc'); ?>

        <button class="btn btn--border order" type="button">
          <?php if ('uk' == pll_current_language()) : ?>
            Замовити
          <?php else : ?>
            Заказать
          <?php endif; ?>
        </button>
      </div>
    </section>

    <section class="produce produce--reverse">
      <h2>
        <?php the_field('produce-title'); ?>
      </h2>

      <div class="produce__inner">
        <ul>

          <?php
          if (have_rows('produce-list')) :
            while (have_rows('produce-list')) : the_row();
          ?>
              <li>
                <?php echo  get_sub_field('produce-list-text'); ?>
              </li>
          <?php
            endwhile;
          endif;
          ?>
        </ul>

        <div class="produce__content">
          <?php the_field('produce-desc'); ?>

          <button class="btn order" type="button">
            <?php if ('uk' == pll_current_language()) : ?>
              Замовити
            <?php else : ?>
              Заказать
            <?php endif; ?>
          </button>
        </div>
      </div>
    </section>

    <section class="propose">
      <h2>
        <?php if ('uk' == pll_current_language()) : ?>
          Ми пропонуємо гелій
        <?php else : ?>
          Мы предлагаем гелий
        <?php endif; ?>
      </h2>

      <ul>
        <li>
          <div>
            <span>
              Марка А
            </span>

            <span>
              99,999%
            </span>
          </div>

          <?php if ('uk' == pll_current_language()) : ?>
            <a class="btn" href="<?php echo get_the_permalink(263); ?>#brand-a">
              Детальніше
            </a>
          <?php else : ?>
            <a class="btn" href="<?php echo get_the_permalink(454); ?>#brand-a">
              Подробнее
            </a>
          <?php endif; ?>
        </li>

        <li>
          <div>
            <span>
              Марка Б
            </span>

            <span>
              99,99%
            </span>
          </div>

          <?php if ('uk' == pll_current_language()) : ?>
            <a class="btn" href="<?php echo get_the_permalink(263); ?>#brand-b">
              Детальніше
            </a>
          <?php else : ?>
            <a class="btn" href="<?php echo get_the_permalink(454); ?>#brand-b">
              Подробнее
            </a>
          <?php endif; ?>

        </li>
      </ul>
    </section>

    <section class="cities cities--images">
      <ul>
        <li>
          <?php if ('uk' == pll_current_language()) : ?>

            <a href="<?php echo get_the_permalink(263); ?>">

              <?php echo get_the_post_thumbnail(263); ?>

              <p>
                <span>
                  <?php echo get_the_title(263); ?>
                </span>

                <span class="btn">
                  Детальніше
                </span>
              </p>
            </a>

          <?php else : ?>

            <a href="<?php echo get_the_permalink(454); ?>">

              <?php echo get_the_post_thumbnail(454); ?>

              <p>
                <span>
                  <?php echo get_the_title(454); ?>
                </span>

                <span class="btn">
                  Подробнее
                </span>
              </p>
            </a>

          <?php endif; ?>
        </li>

        <li>
          <?php if ('uk' == pll_current_language()) : ?>

            <a href="<?php echo get_the_permalink(308); ?>">

              <?php echo get_the_post_thumbnail(308); ?>

              <p>
                <span>
                  <?php echo get_the_title(308); ?>
                </span>

                <span class="btn">
                  Детальніше
                </span>
              </p>
            </a>

          <?php else : ?>

            <a href="<?php echo get_the_permalink(443); ?>">

              <?php echo get_the_post_thumbnail(443); ?>

              <p>
                <span>
                  <?php echo get_the_title(443); ?>
                </span>

                <span class="btn">
                  Подробнее
                </span>
              </p>
            </a>
          <?php endif; ?>

        </li>

        <li>
          <?php if ('uk' == pll_current_language()) : ?>

            <a href="<?php echo get_the_permalink(167); ?>">

              <?php echo get_the_post_thumbnail(167); ?>

              <p>
                <span>
                  <?php echo get_the_title(167); ?>
                </span>

                <span class="btn">
                  Детальніше
                </span>
              </p>
            </a>

          <?php else : ?>

            <a href="<?php echo get_the_permalink(421); ?>">

              <?php echo get_the_post_thumbnail(421); ?>

              <p>
                <span>
                  <?php echo get_the_title(421); ?>
                </span>

                <span class="btn">
                  Подробнее
                </span>
              </p>
            </a>

          <?php endif; ?>
        </li>

        <li>
          <?php if ('uk' == pll_current_language()) : ?>

            <a href="<?php echo get_the_permalink(332); ?>">

              <?php echo get_the_post_thumbnail(332); ?>

              <p>
                <span>
                  <?php echo get_the_title(332); ?>
                </span>

                <span class="btn">
                  Детальніше
                </span>
              </p>
            </a>

          <?php else : ?>

            <a href="<?php echo get_the_permalink(433); ?>">

              <?php echo get_the_post_thumbnail(433); ?>

              <p>
                <span>
                  <?php echo get_the_title(433); ?>
                </span>

                <span class="btn">
                  Подробнее
                </span>
              </p>
            </a>
          <?php endif; ?>

        </li>

      </ul>
    </section>
  </div>
</main>

<?php get_footer(); ?>