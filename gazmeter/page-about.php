<?php
/*
  Template name: Шаблон для сторінки "Про нас"
*/
get_header();

?>

<main class="main">

  <div class="container">

    <?php get_template_part('tmp/breadcrumbs'); ?>

    <section class="about">

      <div class="about__picture">
        <img src=" <?php echo get_field('image-hero')['url']; ?>" width="<?php echo get_field('image-hero')['width'] ?>" height="<?php echo get_field('image-hero')['height'] ?>" alt="<?php echo get_field('image-hero')['alt'] ?>" loading="lazy">
      </div>

      <div class="about__content">
        <h1>
          <?php the_title(); ?>
        </h1>

        <div>
          <?php the_field('description') ?>
        </div>

        <div class="about__btns">
          <a class="btn" href="<?php if ('uk' == pll_current_language()) : echo get_the_permalink(140);
                                else : echo get_the_permalink(414);
                                endif; ?>">
            <?php if ('uk' == pll_current_language()) : ?>
              Співпраця
            <?php else : ?>
              Сотрудничество
            <?php endif; ?>
          </a>

          <a class="btn" href="<?php if ('uk' == pll_current_language()) : echo get_the_permalink(13);
                                else : echo get_the_permalink(409);
                                endif; ?>">
            <?php if ('uk' == pll_current_language()) : ?>
              Контакти
            <?php else : ?>
              Контакты
            <?php endif; ?>
          </a>
        </div>

      </div>
    </section>


    <?php if (have_rows('logo')) :
    ?>

      <section class="clients">
        <h2>
          <?php if ('uk' == pll_current_language()) : ?>
            наші клієнти
          <?php else : ?>
            наши клиенты
          <?php endif; ?>

        </h2>

        <ul>
          <?php while (have_rows('logo')) : the_row();
            $item = get_sub_field('logo-image');
          ?>

            <li>
              <img src=" <?php echo $item['url']; ?>" width="<?php echo $item['width'] ?>" height="<?php echo $item['height'] ?>" alt="<?php echo $item['alt'] ?>" loading="lazy">
            </li>

          <?php
          endwhile; ?>

        </ul>
      </section>

    <?php endif; ?>

    <!-- <section class="reviews">

      <h2>
        відгуки
      </h2>

      <ul>
        <li>
          <svg width="147" height="24" viewBox="0 0 147 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12.6316 19.2884L20.4379 24L18.3663 15.12L25.2632 9.14526L16.1811 8.37474L12.6316 0L9.08211 8.37474L0 9.14526L6.89684 15.12L4.82526 24L12.6316 19.2884Z" fill="#FFC700"></path>
            <path d="M42.8943 19.2884L50.7006 24L48.629 15.12L55.5259 9.14526L46.4437 8.37474L42.8943 0L39.3448 8.37474L30.2627 9.14526L37.1595 15.12L35.088 24L42.8943 19.2884Z" fill="#FFC700"></path>
            <path d="M73.1579 19.2884L80.9643 24L78.8927 15.12L85.7895 9.14526L76.7074 8.37474L73.1579 0L69.6085 8.37474L60.5264 9.14526L67.4232 15.12L65.3516 24L73.1579 19.2884Z" fill="#FFC700"></path>
            <path d="M103.421 19.2884L111.227 24L109.155 15.12L116.052 9.14526L106.97 8.37474L103.421 0L99.8712 8.37474L90.7891 9.14526L97.6859 15.12L95.6143 24L103.421 19.2884Z" fill="#FFC700"></path>
            <path d="M133.684 19.2884L141.491 24L139.419 15.12L146.316 9.14526L137.234 8.37474L133.684 0L130.135 8.37474L121.053 9.14526L127.95 15.12L125.878 24L133.684 19.2884Z" fill="#FFC700"></path>
          </svg>

          <div>
            <img class="image" src="images/reviews.jpg" width="45" height="45" alt="Аватар" loading="lazy">

            <p>
              <span>
                Іванов І.І.
              </span>

              <span>
                Компанія “ТОВ Назва”
              </span>
            </p>
          </div>

          <blockquote>
            “Важливо, щоб постачання ним клієнтів здійснювала надійна фірма, яка багато років взаємодіє з провідними
            українськими та
            зарубіжними виробниками, а продукт був чистим, високоякісним.”
          </blockquote>
        </li>

        <li>
          <svg width="147" height="24" viewBox="0 0 147 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12.6316 19.2884L20.4379 24L18.3663 15.12L25.2632 9.14526L16.1811 8.37474L12.6316 0L9.08211 8.37474L0 9.14526L6.89684 15.12L4.82526 24L12.6316 19.2884Z" fill="#FFC700"></path>
            <path d="M42.8943 19.2884L50.7006 24L48.629 15.12L55.5259 9.14526L46.4437 8.37474L42.8943 0L39.3448 8.37474L30.2627 9.14526L37.1595 15.12L35.088 24L42.8943 19.2884Z" fill="#FFC700"></path>
            <path d="M73.1579 19.2884L80.9643 24L78.8927 15.12L85.7895 9.14526L76.7074 8.37474L73.1579 0L69.6085 8.37474L60.5264 9.14526L67.4232 15.12L65.3516 24L73.1579 19.2884Z" fill="#FFC700"></path>
            <path d="M103.421 19.2884L111.227 24L109.155 15.12L116.052 9.14526L106.97 8.37474L103.421 0L99.8712 8.37474L90.7891 9.14526L97.6859 15.12L95.6143 24L103.421 19.2884Z" fill="#FFC700"></path>
            <path d="M133.684 19.2884L141.491 24L139.419 15.12L146.316 9.14526L137.234 8.37474L133.684 0L130.135 8.37474L121.053 9.14526L127.95 15.12L125.878 24L133.684 19.2884Z" fill="#FFC700"></path>
          </svg>

          <div>
            <img class="image" src="images/reviews.jpg" width="45" height="45" alt="Аватар" loading="lazy">

            <p>
              <span>
                Іванов І.І.
              </span>

              <span>
                Компанія “ТОВ Назва”
              </span>
            </p>
          </div>

          <blockquote>
            “Важливо, щоб постачання ним клієнтів здійснювала надійна фірма, яка багато років взаємодіє з провідними
            українськими та
            зарубіжними виробниками, а продукт був чистим, високоякісним.”
          </blockquote>
        </li>

        <li>
          <svg width="147" height="24" viewBox="0 0 147 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12.6316 19.2884L20.4379 24L18.3663 15.12L25.2632 9.14526L16.1811 8.37474L12.6316 0L9.08211 8.37474L0 9.14526L6.89684 15.12L4.82526 24L12.6316 19.2884Z" fill="#FFC700"></path>
            <path d="M42.8943 19.2884L50.7006 24L48.629 15.12L55.5259 9.14526L46.4437 8.37474L42.8943 0L39.3448 8.37474L30.2627 9.14526L37.1595 15.12L35.088 24L42.8943 19.2884Z" fill="#FFC700"></path>
            <path d="M73.1579 19.2884L80.9643 24L78.8927 15.12L85.7895 9.14526L76.7074 8.37474L73.1579 0L69.6085 8.37474L60.5264 9.14526L67.4232 15.12L65.3516 24L73.1579 19.2884Z" fill="#FFC700"></path>
            <path d="M103.421 19.2884L111.227 24L109.155 15.12L116.052 9.14526L106.97 8.37474L103.421 0L99.8712 8.37474L90.7891 9.14526L97.6859 15.12L95.6143 24L103.421 19.2884Z" fill="#FFC700"></path>
            <path d="M133.684 19.2884L141.491 24L139.419 15.12L146.316 9.14526L137.234 8.37474L133.684 0L130.135 8.37474L121.053 9.14526L127.95 15.12L125.878 24L133.684 19.2884Z" fill="#FFC700"></path>
          </svg>

          <div>
            <img class="image" src="images/reviews.jpg" width="45" height="45" alt="Аватар" loading="lazy">

            <p>
              <span>
                Іванов І.І.
              </span>

              <span>
                Компанія “ТОВ Назва”
              </span>
            </p>
          </div>

          <blockquote>
            “Важливо, щоб постачання ним клієнтів здійснювала надійна фірма, яка багато років взаємодіє з провідними
            українськими та
            зарубіжними виробниками, а продукт був чистим, високоякісним.”
          </blockquote>
        </li>
      </ul>

      <div class="pagination">

        <div class="pagination__btns">

          <a class="pagination__btn btn pagination__btn--prev disabled" href="#">
            <span class="sr-only">
              Наступна сторінка
            </span>
          </a>

          <a class="pagination__btn btn pagination__btn--next" href="#">
            <span class="sr-only">
              Попередня сторінка
            </span>
          </a>

        </div>

        <div class="pagination__progress">
          <span class="pagination__pages">
            01
          </span>

          <div class="pagination__line" aria-label="Прогрес сторынок">
            <span class="pagination__line-progress" style="width: 25%"></span>
          </div>

          <span class="pagination__pages">
            05
          </span>
        </div>
      </div>
    </section> -->

  </div>

</main>

<?php get_footer(); ?>