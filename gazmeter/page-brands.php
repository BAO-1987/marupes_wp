<?php
/*
  Template name: Шаблон для сторінки "Марки гелію"
*/
get_header();

?>

<main class="main molecule">

  <div class="container">

    <?php get_template_part('tmp/breadcrumbs'); ?>


    <h1 class="sr-only">
      <?php the_title(); ?>
    </h1>

    <section class="way" id="brand-a">
      <h2>
        <?php the_field('title-a'); ?>
      </h2>

      <img src="<?php echo get_field('image-a')['url']; ?>" width="<?php echo get_field('image-a')['width']; ?>" height="<?php echo get_field('image-a')['height']; ?>" alt="<?php echo get_field('image-a')['alt']; ?>" loading="lazy">

      <div class="produce produce--reverse">
        <?php $brand_a = get_field('desc-a'); ?>

        <div class="produce__inner">
          <ul>
            <?php

            if (have_rows('list-a')) :
              while (have_rows('list-a')) : the_row();
            ?>
                <li>
                  <?php echo get_sub_field('list-item'); ?>
                </li>

            <?php
              endwhile;
            endif;
            ?>
          </ul>

          <div class="produce__content">
            <h3>
              <?php echo $brand_a['title']; ?>
            </h3>

            <div>
              <?php echo $brand_a['text']; ?>
            </div>

            <button class="btn order" type="button">
              <?php if ('uk' == pll_current_language()) : ?>
                Замовити
              <?php else : ?>
                Заказать
              <?php endif; ?>
            </button>
          </div>
        </div>

        <div class="advantages">
          <?php $delivery_a = get_field('delivery-a'); ?>

          <h2>
            <?php echo $delivery_a['title']; ?>
          </h2>

          <p>
            <?php echo $delivery_a['slogan-a']; ?>
          </p>

          <ul>
            <?php

            if (have_rows('delivery-item-a')) :
              while (have_rows('delivery-item-a')) : the_row();
            ?>
                <li>
                  <svg>
                    <use xlink:href="<?php echo get_sub_field('icon'); ?>"></use>
                  </svg>

                  <p>
                    <?php echo get_sub_field('text'); ?>
                  </p>
                </li>

            <?php
              endwhile;
            endif;
            ?>
          </ul>

        </div>
      </div>
    </section>

    <section class="way" id="brand-b">
      <h2>
        <?php the_field('title-b'); ?>
      </h2>

      <img src="<?php echo get_field('image-b')['url']; ?>" width="<?php echo get_field('image-b')['width']; ?>" height="<?php echo get_field('image-b')['height']; ?>" alt="<?php echo get_field('image-b')['alt']; ?>" loading="lazy">


      <div class="produce produce--reverse">
        <?php $brand_b = get_field('desc-b'); ?>

        <div class="produce__inner">
          <ul>
            <?php

            if (have_rows('list-b')) :
              while (have_rows('list-b')) : the_row();
            ?>
                <li>
                  <?php echo get_sub_field('list-item'); ?>
                </li>

            <?php
              endwhile;
            endif;
            ?>
          </ul>

          <div class="produce__content">
            <h3>
              <?php echo $brand_b['title']; ?>
            </h3>

            <div>
              <?php echo $brand_b['text']; ?>
            </div>

            <button class="btn order" type="button">
              <?php if ('uk' == pll_current_language()) : ?>
                Замовити
              <?php else : ?>
                Заказать
              <?php endif; ?>
            </button>
          </div>
        </div>

        <div class="advantages">
          <?php $delivery_a = get_field('delivery-b'); ?>

          <h2>
            <?php echo $delivery_a['title']; ?>
          </h2>

          <ul>
            <?php

            if (have_rows('delivery-item-b')) :
              while (have_rows('delivery-item-b')) : the_row();
            ?>
                <li>
                  <svg>
                    <use xlink:href="<?php echo get_sub_field('icon'); ?>"></use>
                  </svg>

                  <p>
                    <?php echo get_sub_field('text'); ?>
                  </p>
                </li>

            <?php
              endwhile;
            endif;
            ?>
          </ul>

        </div>
      </div>
    </section>

  </div>
</main>

<?php get_footer(); ?>