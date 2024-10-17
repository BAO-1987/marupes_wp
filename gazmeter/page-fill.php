<?php
/*
  Template name: Шаблон для сторінки "Заправка балону гелієм"
*/
get_header();

?>

<main class="main molecule">

  <div class="container">

    <?php get_template_part('tmp/breadcrumbs'); ?>
    <section class="timeline">
      <h1>
        <?php the_title(); ?>
      </h1>

      <h2 class="sr-only">
        <?php if ('uk' == pll_current_language()) : ?>
          Перелік процесу
        <?php else : ?>
          Перечень процесса
        <?php endif; ?>

      </h2>

      <ul class="timeline__list">
        <?php $list = get_field(
          'fiil-list'
        ); ?>

        <li class="timeline__item timeline__item--active molecule">
          <div>
            <?php echo $list['text-first']; ?>
          </div>

          <span class="timeline__icon timeline__icon--start">
          </span>

          <h3>
            <?php echo $list['title-first']; ?>
          </h3>

          <span class="timeline__progress">
          </span>
        </li>

        <li class="timeline__item ">
          <div>
            <?php echo $list['text-second']; ?>
          </div>

          <span class="timeline__icon timeline__icon--like">
          </span>

          <h3>
            <?php echo $list['title-second']; ?>
          </h3>

          <span class="timeline__progress">

          </span>
        </li>

        <li class="timeline__item ">
          <div>
            <?php echo $list['text-third']; ?>
          </div>

          <span class="timeline__icon timeline__icon--team">
          </span>

          <h3>
            <?php echo $list['title-third']; ?>
          </h3>
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

    <section class="brands brands--fill">
      <h2>
        <?php the_field('fill-title'); ?>
      </h2>

      <div class="brands__desc">
        <?php the_field('fill-slogan'); ?>
      </div>

      <div class="brands__wrapp">

        <div class="brands__wrapp-content">
          <?php the_field('fill-desc'); ?>
        </div>

        <div class="brands__wrapp-image">
          <img src="<?php echo get_field('fill-image')['url']; ?>" width="<?php echo get_field('fill-image')['width']; ?>" height="<?php echo get_field('fill-image')['height']; ?>" alt="<?php echo get_field('fill-image')['alt']; ?>" loading="lazy">

        </div>
      </div>

    </section>

  </div>
</main>

<?php get_footer(); ?>