<?php

get_header('simple');

?>

  <main class="main main--empty">

      <section class="hero-simple hero-simple--stub">
        <div class="container">

         <div class="wrapper">
            <h1>Work in progress</h1>

            <p>
              The page is under construction, and for now you can read with
              services on
            </p>

            <a class="btn" href="<?php echo get_home_url(); ?>">
                  <?php
                  $current_lang = pll_current_language();
                  if ('ua' === $current_lang): ?>
                   На головну
                  <?php elseif ('ru' === $current_lang): ?>
                  На главную
                  <?php else: ?>
                  Home page
                  <?php endif; ?>
                </a>
          </div>

        </div>
      </section>

    </main>

    </div>
</body>

</html>


