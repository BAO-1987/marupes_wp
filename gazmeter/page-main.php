<?php
/*
  Template name: Шаблон для головної сторінки
*/

get_header();

?>

<main class="main main--home">
  <section class="hero">
    <div class="hero__image">
      <img src="<?php echo get_field('main-image')['url'] ?>" width="<?php echo get_field('main-image')['width'] ?>" height="<?php echo get_field('main-image')['height'] ?>" alt="<?php echo get_field('main-image')['alt'] ?>" loading="lazy">
    </div>

    <div class="container">

      <div class="hero__inner">

        <h1 class="hero__title">
          <?php the_field('main-title'); ?>
        </h1>

        <p class="hero__text text">
          <?php the_field('subtitle-main'); ?>
        </p>
      </div>

    </div>
  </section>

  <div class="container">

    <section class="about-slim">
      <div class="about-slim__inner">
        <div class="about-slim__image">
          <img src="<?php echo get_field('about-image')['url']; ?>" width="680" height="490" alt="<?php echo get_field('about-image')['alt']; ?>" loading="lazy">
        </div>

        <div class="about-slim__content">
          <h2>
            <?php the_field('about-title'); ?>
          </h2>

          <div class="about-slim__desc">
            <p>
              <?php the_field('about-desc'); ?>
            </p>
          </div>

          <ul class="about-slim__list">
            <li class="about-slim__item">
              <span class="hexagon">
                <svg>
                  <use xlink:href="#d1b0dc939a2176e7"></use>
                </svg>
              </span>

              <span>
                <?php echo get_field('about-list')['about-list-f']; ?>
              </span>
            </li>

            <li class="about-slim__item">
              <span class="hexagon">
                <svg>
                  <use xlink:href="#adb3605132b3107d"></use>
                </svg>
              </span>

              <span>
                <?php echo get_field('about-list')['about-list-s']; ?>
              </span>
            </li>

            <li class="about-slim__item">
              <span class="hexagon">
                <svg>
                  <use xlink:href="#c2743eea3cf8632c"></use>
                </svg>
              </span>

              <span>
                <?php echo get_field('about-list')['about-list-t']; ?>
              </span>
            </li>
          </ul>
        </div>
      </div>

      <ul class="about-slim__advantages">
        <?php
        if (have_rows('point')) :

          while (have_rows('point')) : the_row();
            $sub_image = get_sub_field('point-image');
            $sub_title = get_sub_field('point-title');
            $sub_desc = get_sub_field('point-text');
        ?>
            <li class="about-slim__advantage">
              <img class="about-slim__decoration" src="<?php echo $sub_image['url'] ?>" width="<?php echo $sub_image['width'] ?>" height="<?php echo $sub_image['height'] ?>" alt="<?php echo $sub_image['alt'] ?>" loading="lazy">

              <h3>
                <?php echo $sub_title; ?>
              </h3>

              <p class="about-slim__text text">
                <?php echo $sub_desc; ?>
              </p>
            </li>

        <?php
          endwhile;
        endif;
        ?>
      </ul>
    </section>

    <section class="production">
      <h2>
        <?php the_field('production-title'); ?>
      </h2>

      <ul>
        <?php
        if (have_rows('product')) :

          while (have_rows('product')) : the_row();
            $sub_image = get_sub_field('product-image');
            $sub_title = get_sub_field('product-title');
            $sub_desc = get_sub_field('product-desc');
        ?>
            <li>
              <h3>
                <?php echo $sub_title; ?>
              </h3>

              <div class="production__image">
                <img src="<?php echo $sub_image['url'] ?>" width="<?php echo $sub_image['width'] ?>" height="<?php echo $sub_image['height'] ?>" alt="<?php echo $sub_image['alt'] ?>" loading="lazy">
              </div>

              <div class="production__text">
                <?php echo $sub_desc; ?>
              </div>

              <button class="btn order" type="button">
                <?php if ('uk' == pll_current_language()) : ?>
                  Замовити
                <?php else : ?>
                  Заказать
                <?php endif; ?>
              </button>
            </li>
        <?php
          endwhile;
        endif;
        ?>
      </ul>
    </section>

    <section class="cooperation">

      <?php $coop = get_field('cooperation-list'); ?>

      <h2>
        <?php the_field('cooperation-title'); ?>
      </h2>

      <div class="cooperation__inner">
        <div class="cooperation__image">
          <div class="hexagon">
            <img src="<?php echo _gm_assets_path('images/home/labman.jpg') ?>" width="700" height="600" alt="Хімічні дослідження" loading="lazy">
          </div>

          <span class="cooperation__expireance">
            <span>
              <?php the_field('cooperation-years'); ?>
            </span>

            <span class="cooperation__desc">

              <?php if ('uk' == pll_current_language()) : ?>
                років досвіду
              <?php else : ?>
                лет опыта
              <?php endif; ?>
            </span>
          </span>
        </div>

        <ul class="cooperation__list">
          <li class="cooperation__item">
            <div class="cooperation__icon">
              <svg>
                <use xlink:href="#ef246e3a3501da3d"></use>
              </svg>
            </div>

            <span class="cooperation__desc">
              <?php echo $coop['first'] ?>
            </span>
          </li>

          <li class="cooperation__item">
            <div class="cooperation__icon">
              <svg>
                <use xlink:href="#75ea01e750218589"></use>
              </svg>
            </div>

            <span class="cooperation__desc">
              <?php echo $coop['second'] ?>
            </span>
          </li>

          <li class="cooperation__item">
            <div class="cooperation__icon">
              <svg>
                <use xlink:href="#96e742d5f69e7d78"></use>
              </svg>
            </div>

            <span class="cooperation__desc">
              <?php echo $coop['third'] ?>
            </span>
          </li>

          <li class="cooperation__item">
            <div class="cooperation__icon">
              <svg>
                <use xlink:href="#91c04f74f1e933d4"></use>
              </svg>
            </div>

            <span class="cooperation__desc">
              <?php echo $coop['fourth'] ?>
            </span>
          </li>

          <li class="cooperation__item">
            <div class="cooperation__icon">
              <svg>
                <use xlink:href="#3bfe07906a40183a"></use>
              </svg>
            </div>

            <span class="cooperation__desc">
              <?php echo $coop['five'] ?>
            </span>
          </li>
        </ul>
      </div>
    </section>


    <?php if (get_posts()) : ?>
      <section class="blog">
        <h2>
          <?php if ('uk' == pll_current_language()) : ?>
            новини компанії gazmeter
          <?php else : ?>
            новости компании gazmeter
          <?php endif; ?>
        </h2>

        <ul>
          <?php
          $posts = get_posts([
            'numberposts' => 3
          ]);

          if ($posts) :

            foreach ($posts as $post) :

              setup_postdata($post);
          ?>

              <li>
                <article>
                  <?php
                  if (has_post_thumbnail()) :
                    the_post_thumbnail('full');
                  else :
                  ?>
                    <img src="<?php echo _gm_assets_path('images/liquid.jpg') ?>" alt="" />

                  <?php endif; ?>

                  <h3>
                    <?php the_title(); ?>
                  </h3>

                  <a class="btn btn--center" href="<?php the_permalink(); ?>">
                    <?php if ('uk' == pll_current_language()) : ?>
                      читати більше
                    <?php else : ?>
                      читать больше
                    <?php endif; ?>
                  </a>
                </article>
              </li>

          <?php
            endforeach;
            wp_reset_postdata();
          endif;
          ?>
        </ul>

        <a class="btn btn--center" href="<?php echo get_the_permalink(11); ?>">
          <?php if ('uk' == pll_current_language()) : ?>
            більше новин
          <?php else : ?>
            больше новостей
          <?php endif; ?>
        </a>
      </section>
    <?php
    endif;
    ?>
    <?php ?>

    <section class="ceo">
      <h2>
        <?php the_field('ceo-title'); ?>
      </h2>

      <div class="ceo__inner">
        <div class="ceo__desc">
          <p>
            <?php the_field('ceo-desc'); ?>
          </p>

          <div class="ceo__sign">
            <span>
              Директор ТОВ GazMeter
            </span>

            <img class="ceo__icon" src="<?php echo _gm_assets_path('images/icons/sign.svg') ?>" width="105" height="100" alt="Підпис директора" loading="lazy">
          </div>
        </div>

        <div class="ceo__picture">
          <button class="ceo__video" type="button" data-src="<?php echo _gm_assets_path('welcome.mp4') ?>">
            <img class="image" src="<?php echo _gm_assets_path('images/home/director.png') ?>" width="535" height="470" alt="Директор компанії" loading="lazy">
          </button>
        </div>
      </div>

    </section>

    <section class="gallery">
      <h2>
        галерея
      </h2>

      <ul class="gallery__images">
        <?php
        if (have_rows('gallery')) :

          while (have_rows('gallery')) : the_row();
            $sub_image = get_sub_field('gallery-image');
        ?>
            <li class="gallery__image">
              <img src="<?php echo $sub_image['url'] ?>" width="<?php echo $sub_image['width'] ?>" height="<?php echo $sub_image['height'] ?>" alt="<?php echo $sub_image['alt'] ?>" loading="lazy">
            </li>
        <?php
          endwhile;
        endif;
        ?>
      </ul>
    </section>

    <?php if (have_rows('faq', 113)) :
      $counter = 0;
    ?>
      <section class="faq">
        <h2>
          <?php if ('uk' == pll_current_language()) : ?>
            Найпоширеніші питання
          <?php else : ?>
            Часто задаваемые вопросы
          <?php endif; ?>
        </h2>

        <ul class="faq__questions">

          <?php while (have_rows('faq', 113) && $counter <= 2) : the_row(); ?>

            <li class="faq__question">
              <details>
                <summary>
                  <?php the_sub_field('question'); ?>
                </summary>

                <div class="content">
                  <p>
                    <?php the_sub_field('answear'); ?>
                  </p>
                </div>
              </details>
            </li>

          <?php
            $counter += 1;
          endwhile; ?>

        </ul>

        <a class="faq__more" href="<?php echo get_the_permalink(113); ?>">
          <?php if ('uk' == pll_current_language()) : ?>
            популярні питання
          <?php else : ?>
            популярные вопросы
          <?php endif; ?>
        </a>
      </section>
    <?php endif; ?>

  </div>

  <?php get_template_part('tmp/contact'); ?>

</main>

<?php get_footer(); ?>