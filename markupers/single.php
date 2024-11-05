<?php get_header(); ?>

<main class="main main--top">

  <div class="container">

         <?php
            if ($return_url = wp_get_referer()) {
              ?>
              <a class="link" href="<?php echo esc_url($return_url); ?>">
                <?php if ('ua' == pll_current_language()): ?>
                  Назад
                <?php elseif ('ru' == pll_current_language()): ?>
                 Назад
                <?php else: ?>
                Back
                <?php endif; ?>
              </a>
              <?php
            }
          ?>

    <?php
    if (have_posts()) :
      while (have_posts()) :
        the_post();
    ?>
        <article class="single">

          <div class="single__wellcome">
            <span class="name">
              блог
            </span>

            <h1 class="single__title title">
              <?php the_title(); ?>
            </h1>

            <div class="single__excerpt">
              <?php the_excerpt(); ?>
            </div>
          </div>

          <?php the_content(); ?>

        </article>
    <?php
      endwhile;
    endif
    ?>
  </div>


</main>

<?php get_footer('social'); ?>