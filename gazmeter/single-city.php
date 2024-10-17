<?php get_header(); ?>

<main class="main molecule">

  <div class="container">

    <?php get_template_part('tmp/breadcrumbs'); ?>


    <h1>
      <?php the_title(); ?>
    </h1>

    <section class="about about--city">

      <div class="about__picture">

        <img src="<?php echo get_field('image')['url']; ?>" width="<?php echo get_field('image')['width']; ?>" height="<?php echo get_field('image')['height']; ?>" alt="<?php echo get_field('image')['alt']; ?>" loading="lazy">
      </div>

      <div class="about__content">
        <?php echo get_field('text'); ?>
      </div>
    </section>

    <section class="brands">
      <h2>
        <?php echo get_field('propose')['title']; ?>
      </h2>

      <?php echo get_field('propose')['desc']; ?>

    </section>
  </div>

  <?php get_template_part('tmp/contact'); ?>

</main>

<?php get_footer(); ?>