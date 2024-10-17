<?php
/*
  Template name: Шаблон для сторінки контактів
*/
get_header();

?>

<main class="main molecule">

  <div class="container">

    <?php get_template_part('tmp/breadcrumbs'); ?>

    <section class="contact-page">

      <h1>
        <?php the_title(); ?>
      </h1>

      <div class="contact-page__inner">

        <address class="contact-page__data">
          <ul class="contact-page__list">
            <li class="contact-page__item">
              <svg class="contact-page__icon">
                <use xlink:href="#2a02e22c7b5bcc8a"></use>
              </svg>

              <?php
              if (is_active_sidebar('desc')) {
                dynamic_sidebar('desc');
              }
              ?>
            </li>

            <li class="contact-page__item">
              <svg class="contact-page__icon">
                <use xlink:href="#4c4c139c18328a79"></use>
              </svg>

              <div>
                <span class="contact-page__name">
                  Location
                </span>

                <span>
                  <?php
                  if (is_active_sidebar('address')) {
                    dynamic_sidebar('address');
                  }
                  ?>
                </span>
              </div>
            </li>

            <li class="contact-page__item">
              <svg class="contact-page__icon">
                <use xlink:href="#ef246e3a3501da3d"></use>
              </svg>

              <p>
                <span class="contact-page__name">
                  Contact | General Inquiries
                </span>

                <?php
                if (is_active_sidebar('email')) {
                  dynamic_sidebar('email');
                }
                ?>
              </p>
            </li>

            <li class="contact-page__item">
              <svg class="contact-page__icon">
                <use xlink:href="#75ea01e750218589"></use>
              </svg>

              <p>
                <span class="contact-page__name">
                  Phone
                </span>

                <?php
                if (is_active_sidebar('phone_number')) {
                  dynamic_sidebar('phone_number');
                }
                ?>
              </p>
            </li>
          </ul>

          <ul class="social">
            <?php
            if (is_active_sidebar('social')) {
              dynamic_sidebar('social');
            }
            ?>
          </ul>

          <div class="contact-page__map">
            <a href="https://goo.gl/maps/8SsthWwXvPyxZJCw9" target="_blank">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2524.748691590443!2d25.380156000000003!3d50.7431498!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47259a0b728f2809%3A0x7ec9300cbeb033aa!2z0LLRg9C70LjRhtGPINCV0LvQtdC60YLRgNC-0LDQv9Cw0YDQsNGC0L3QsCwgMywg0JvRg9GG0YzQuiwg0JLQvtC70LjQvdGB0YzQutCwINC-0LHQu9Cw0YHRgtGMLCA0MzAwMA!5e0!3m2!1suk!2sua!4v1688110521232!5m2!1suk!2sua" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </a>
          </div>
        </address>

        <div class="contact-page__form">

          <h3>
            <?php if ('uk' == pll_current_language()) : ?>Якщо у вас виникли питання, напишіть нам!
            <?php else : ?>Если у вас есть вопросы, напишите нам!
          <?php endif; ?>
          </h3>

          <form class="form" action="<?php echo _gm_assets_path('php/sender.php') ?>">
            <label class="form__area">
              <input type="tel" placeholder="<?php if ('uk' == pll_current_language()) : ?>Номер телефону<?php else : ?>Номер телефона<?php endif; ?>" name="number" required>

            </label>

            <label class="form__area">
              <input type="email" placeholder="Email" name="email" required>
            </label>

            <label class="form__area">
              <input type="text" placeholder="<?php if ('uk' == pll_current_language()) : ?>Ваше ім’я<?php else : ?>Ваше имя<?php endif; ?>" name="name" required>
            </label>

            <label class="form__area form__area--message">
              <textarea placeholder="<?php if ('uk' == pll_current_language()) : ?>Повідомлення<?php else : ?>Сообщшение<?php endif; ?>" name="message" required></textarea>
            </label>

            <button class="btn btn--center" type="submit">
              <?php if ('uk' == pll_current_language()) : ?>надіслати<?php else : ?>отправить<?php endif; ?>
            </button>

          </form>
        </div>

      </div>

    </section>

  </div>

</main>

<?php get_footer(); ?>