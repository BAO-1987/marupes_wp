<?php
/*
  Template name: Шаблон для сторінки "Балони з гелієм 40"
*/
get_header();

?>

<main class="main molecule">

  <div class="container">

    <?php get_template_part('tmp/breadcrumbs'); ?>

    <section class="helium-balloon">
      <h1>
        <?php the_title(); ?>
      </h1>

      <ul class="cheess-list">

        <?php

        if (have_rows('row')) :
          while (have_rows('row')) : the_row();
        ?>
            <li class="cheess-list__item">
              <div class="cheess-list__picture">
                <img src="<?php echo get_sub_field('image')['url']; ?>" width="<?php echo get_sub_field('image')['width']; ?>" height="<?php echo get_sub_field('image')['height']; ?>" alt="<?php echo get_sub_field('image')['alt']; ?>" loading="lazy">
              </div>

              <div class="cheess-list__desc">
                <?php echo get_sub_field('desc'); ?>
              </div>
            </li>

        <?php
          endwhile;
        endif;
        ?>
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