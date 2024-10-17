<?php get_header(); ?>

<main class="main molecule">

  <div class="container">

    <?php get_template_part('tmp/breadcrumbs'); ?>

    <?php
    if ($return_url = wp_get_referer()) {
    ?>
      <a class="btn btn--back" href="<?php echo esc_url($return_url); ?>">Назад</a>
    <?php
    }
    ?>

    <?php
    if (have_posts()) :
      while (have_posts()) :
        the_post();
    ?>
        <article class="single">

          <?php the_post_thumbnail('full'); ?>

          <h1>
            <?php the_title(); ?>
          </h1>


          <?php the_content(); ?>


        </article>
    <?php
      endwhile;
    endif
    ?>

    <section class="news news--popular">
      <h2>
        <?php if ('uk' == pll_current_language()) : ?>
          Останні новини
        <?php else : ?>
          Последние новости
        <?php endif; ?>
      </h2>

      <ul class="news__grid">

        <?php
        $recent_posts = wp_get_recent_posts(3);

        foreach ($recent_posts as $post) {
          $postId = $post['ID'];
          $postImage = get_the_post_thumbnail($postId, 'full');

          if ($postImage) {
            echo '<li class="news__item"><div class="news__preview">' .
              get_the_post_thumbnail($postId, 'full') . '</div><h3 class="news__title">
              <a class="news__link" href="' . get_permalink($postId) . '" >' .   $post["post_title"] . ' </a>
            </h3>
          </li>';
          } else {

            echo '<li class="news__item"><div class="news__preview">' . '
            <img src="' .  get_bloginfo('template_directory') . '/assets/images/liquid.jpg" alt="' .  $post["post_title"] . '" /> </div><h3 class="news__title">
              <a class="news__link" href="' . get_permalink($postId) . '" >' .   $post["post_title"] . ' </a>
            </h3>
          </li>';
        ?>
        <?php }
        } ?>
      </ul>

    </section>

  </div>

</main>

<?php get_footer(); ?>