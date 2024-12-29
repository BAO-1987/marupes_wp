<?php

?>

<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header('simple');

?>

<main class="main main--empty">
  <section class="hero-simple hero-simple--stub">
    <div class="container">
      <div class="wrapper">
        <h1 class="title">
          Oops! This page doesn’t appear to exist
        </h1>

        <p>
          Error 404. We suggest you visit the <span>home page</span> or <span>request a quote</span> on this page
        </p>

        <div class="hero-simple__buttons">
          <a class="btn" href="<?php echo get_home_url(); ?>">
            Home page
          </a>

          <button class="link modal-btn" type="button">
            Request a quote
          </button>
        </div>
      </div>
    </div>

  </section>
</main>


<?php get_template_part('template-parts/modal'); ?>

</body>

</html>