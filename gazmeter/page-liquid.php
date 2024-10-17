<?php
/*
  Template name: Шаблон для сторінки "Рідкий гелій"
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

    <section class="why">
      <h2>
        <?php the_field('liquid-list-title'); ?>
      </h2>

      <ul class="why__list">
        <?php
        if (have_rows('liquid-list-item')) :

          while (have_rows('liquid-list-item')) : the_row();
            $icon = get_sub_field('liquid-list-icon');
            $title = get_sub_field('liquid-list-title');
            $desc = get_sub_field('liquid-list-desc');

        ?>
            <li>
              <svg>
                <use xlink:href="<?php echo $icon; ?>"></use>
              </svg>

              <h3>
                <?php echo $title; ?>
              </h3>

              <div>
                <?php echo $desc; ?>
              </div>
            </li>
        <?php
          endwhile;
        endif;
        ?>
      </ul>
    </section>

    <section class="produce">
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
        </div>
      </div>
    </section>

    <section class="cities cities--images">

      <ul>
        <li>

          <?php if ('uk' == pll_current_language()) : ?>
            <a href="<?php echo get_the_permalink(230); ?>">

              <img src="<?php echo get_field('mri-image', 230)['url']; ?>" width="<?php echo get_field('mri-image', 230)['width']; ?>" height="<?php echo get_field('mri-image', 230)['height']; ?>" alt="<?php echo get_field('mri-image', 230)['alt']; ?>" loading="lazy">

              <p>
                <span>
                  <?php echo get_the_title(230); ?>
                </span>

                <span class="btn">
                  Детальніше
                </span>
              </p>
            </a>
          <?php else : ?>

            <a href="<?php echo get_the_permalink(446); ?>">
              <img src="<?php echo get_field('mri-image', 446)['url']; ?>" width="<?php echo get_field('mri-image', 446)['width']; ?>" height="<?php echo get_field('mri-image', 446)['height']; ?>" alt="<?php echo get_field('mri-image', 446)['alt']; ?>" loading="lazy">

              <p>
                <span>
                  <?php echo get_the_title(446); ?>
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