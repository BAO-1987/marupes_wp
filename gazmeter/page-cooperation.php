<?php
/*
  Template name: Шаблон для сторінки "Cпівпраця"
*/
get_header();

?>

<main class="main molecule">

  <div class="container">

    <?php get_template_part('tmp/breadcrumbs'); ?>

    <section class="cooperation-page">

      <h1>
        <?php the_title(); ?>
      </h1>

      <div class="cooperation-page__content steps" style="background-image: url(<?php echo get_field('cooperation-image')['url']; ?>)">

        <ul>
          <li>
            <div>
              <svg>
                <use xlink:href="#5d560991e2d6771f"></use>
              </svg>
            </div>

            <p>
              <?php the_field('cooperation-first'); ?>
            </p>
          </li>

          <li>
            <div>
              <svg>
                <use xlink:href="#b8c7f1d8590c09f4"></use>
              </svg>
            </div>

            <p>
              <?php the_field('cooperation-second'); ?>
            </p>
          </li>

          <li>
            <div>
              <svg>
                <use xlink:href="#11255f1f1bf8aa0e"></use>
              </svg>
            </div>

            <p>
              <?php the_field('cooperation-third'); ?>
            </p>
          </li>

          <li>
            <div>
              <svg>
                <use xlink:href="#475b8865b44f2472"></use>
              </svg>
            </div>

            <p>
              <?php the_field('cooperation-fourth'); ?>
            </p>
          </li>
        </ul>

      </div>

    </section>

  </div>

  <?php get_template_part('tmp/contact'); ?>

</main>

<?php get_footer(); ?>