<?php
/*
  Template name: Шаблон для сторінки FAQ (Питання-відповідь)
*/
get_header();

?>

<main class="main molecule">

  <div class="container">

    <?php get_template_part('tmp/breadcrumbs'); ?>

    <section class="faq">
      <h1>
        <?php if ('uk' == pll_current_language()) : ?>
          Найпоширеніші питання
        <?php else : ?>
          Часто задаваемые вопросы
        <?php endif; ?>
      </h1>

      <ul class="faq__questions">
        <?php
        if (have_rows('faq')) :

          while (have_rows('faq')) : the_row();
            $question = get_sub_field('question');
            $answear = get_sub_field('answear');

        ?>
            <li class="faq__question">
              <details>
                <summary>
                  <?php echo $question; ?>
                </summary>

                <div class="content">
                  <p>
                    <?php echo $answear; ?>
                  </p>
                </div>
              </details>
            </li>
        <?php
          endwhile;
        endif;
        ?>
      </ul>

    </section>

  </div>

</main>

<?php get_footer(); ?>