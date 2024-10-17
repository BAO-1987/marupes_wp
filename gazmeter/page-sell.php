<?php
/*
  Template name: Шаблон для сторінки "Продаж гелію в балонах оптом"
*/
get_header();

?>

<main class="main molecule">

  <div class="container">

    <?php get_template_part('tmp/breadcrumbs'); ?>

    <section class="sell why">

      <h1>
        <?php the_title(''); ?>
      </h1>

      <img src="<?php echo get_field('sell-image')['url']; ?>" width="<?php echo get_field('sell-image')['width']; ?>" height="<?php echo get_field('sell-image')['height']; ?>" alt="<?php echo get_field('sell-image')['alt']; ?>" loading="lazy">

      <div>
        <?php echo get_field('sell-desc'); ?>
      </div>

      <ul class="why__list">
        <li>
          <svg>
            <use xlink:href="#12197b09c8b84be9"></use>
          </svg>

          <h3>
            <?php echo get_field('sell-first-item')['title']; ?>
          </h3>

          <div>
            <?php echo get_field('sell-first-item')['text']; ?>
          </div>
        </li>

        <li>
          <svg>
            <use xlink:href="#0cef1a636fbe1475"></use>
          </svg>

          <h3>
            <?php echo get_field('sell-second-item')['title']; ?>
          </h3>

          <div>
            <?php echo get_field('sell-second-item')['text']; ?>
          </div>
        </li>
      </ul>

      <button class="btn btn--center order" type="button">
        <?php if ('uk' == pll_current_language()) : ?>
          Замовити
        <?php else : ?>
          Заказать
        <?php endif; ?>
      </button>
    </section>

  </div>
</main>

<?php get_footer(); ?>