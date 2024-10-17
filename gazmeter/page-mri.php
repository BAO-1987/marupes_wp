<?php
/*
  Template name: Шаблон для сторінки "Заправка МРТ"
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

      <div class="way__desc steps" style="background-image: url(<?php echo get_field('mri-image')['url']; ?>)">
        <?php the_field('mri-desc'); ?>

        <button class="btn btn--border order" type="button">
          <?php if ('uk' == pll_current_language()) : ?>
            Замовити
          <?php else : ?>
            Заказать
          <?php endif; ?>
        </button>
      </div>

    </section>

    <section class="timeline">
      <h2>
        <?php the_field('mri-list-title'); ?>
      </h2>

      <ul class="timeline__list">

        <?php $list = get_field(
          'mri-list'
        ); ?>

        <li class="timeline__item timeline__item--active">
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

          <span class="timeline__progress">

          </span>
        </li>

        <li class="timeline__item ">
          <div>
            <?php echo $list['text-fourth']; ?>
          </div>

          <span class="timeline__icon timeline__icon--squere">
          </span>

          <h3>
            <?php echo $list['title-fourth']; ?>
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

  </div>
</main>

<?php get_footer(); ?>