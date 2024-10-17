<?php get_header(); ?>

<main class="main main--empty">

  <div class="no-page" style="background-image: url(&quot;<?php echo _gm_assets_path('images/404.jpg') ?>&quot;)">
    <div class="container">

      <div class="no-page__desc">
        <h1>
          <?php if ('uk' == pll_current_language()) : ?>
            упс, вийшла помилка
          <?php else : ?>
            упс, вышла ошибка
          <?php endif; ?>
        </h1>

        <p>
          <?php if ('uk' == pll_current_language()) : ?>
            Повернутися назад на головну сторінку
          <?php else : ?>
            Вернуться на главную страницу
          <?php endif; ?>
        </p>

        <a class="btn" href="<?php echo  get_home_url(); ?>">
          <?php if ('uk' == pll_current_language()) : ?>
            Назад
          <?php else : ?>
            На главную
          <?php endif; ?>
        </a>
      </div>

    </div>

  </div>
</main>

<?php get_footer(); ?>