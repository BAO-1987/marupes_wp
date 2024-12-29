<?php
/*
Template Name: Contact Form
*/
?>

<?php
$chosen_form = get_field('select_form', get_queried_object_id());
?>

<section class="contacts section">
  <div class="container">
    <div class="contacts__inner">

      <div class="contacts__form">
        <div class="section-heading">
          <h2 class="title">
            <?php echo get_the_title($chosen_form); ?>
          </h2>
          <p>
            <?php echo get_field('form_subtitle', $chosen_form); ?>
          </p>
        </div>

        <form class="form" action="#">
          <div class="form__inner">
            <label class="form__label">
              <input class="form__input" type="text" name="user-name"
                placeholder="<?php echo get_field('placeholder_name', $chosen_form); ?>" required="">
            </label>

            <label class="form__label">
              <input class="form__input" name="user-phone"
                placeholder="<?php echo get_field('placeholder_phone', $chosen_form); ?>" inputmode="tel" type="tel"
                required="">
            </label>

            <label class="form__label form__label--textarea">
              <textarea class="form__input form__input--textarea"
                placeholder="<?php echo get_field('placeholder_message', $chosen_form); ?>" name="user-message"
                rows="2"></textarea>
            </label>

            <span class="form__label form__label--necessarily"> – necessarily</span>

            <p class="form__privacy">
              <?php echo get_field('consent_text', $chosen_form); ?>
            </p>

            <button class="btn btn--form form__btn" type="submit">
              <?php echo get_field('button_text', $chosen_form); ?>
            </button>
          </div>
        </form>
      </div>
      <?php if (get_field('contact_info', $chosen_form) === true || get_field('social_media', $chosen_form) === true): ?>
      <div class="contacts__info">
        <?php if (get_field('contact_info', $chosen_form) === true): ?>
        <div class="contact__information">
          <h3 class="title">Info</h3>

          <ul class="contacts__list">
            <li class="contacts__item">
              <span class="contacts__name contacts__name--email">
                Email
              </span>
              <?php
                    if (is_active_sidebar('email')) {
                      dynamic_sidebar('email');
                    }
                    ?>
            </li>
            <li class="contacts__item"> <span class="contacts__name contacts__name--phone">
                Phone
              </span>
              <?php
                    if (is_active_sidebar('phone')) {
                      dynamic_sidebar('phone');
                    }
                    ?>
            </li>
            <li class="contacts__item">
              <span class="contacts__name contacts__name--schedule">
                Schedule
              </span>
              <?php
                    if (is_active_sidebar('schedule')) {
                      dynamic_sidebar('schedule');
                    }
                    ?>
            </li>
          </ul>

        </div>
        <?php endif; ?>

        <?php if (get_field('social_media', $chosen_form) === true): ?>
        <div class="contacts__follow">
          <h3 class="title">Follow us</h3>

          <?php get_template_part('template-parts/socials-menu'); ?>
        </div>
        <?php endif; ?>
      </div>
      <?php endif; ?>

    </div>

  </div>
</section>