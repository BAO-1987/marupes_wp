<?php
/*
Template Name: contacts
*/
?>

<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header();

?>

<main class="main main--top">

  <section class="contacts contacts--main section">

    <div class="container">

      <div class="section-heading">
        <h1 class="title">
          <?php the_title();?>
        </h1>

        <p>
          <?php echo get_field('contacts')['description']; ?>
        </p>
      </div>

      <div class="contacts__wrapper section">

        <div class="contacts__form">
          <h2 class="title title--contacts">
            <?php echo get_field('contacts')['subtitle']; ?>
          </h2>

          <?php $chosen_form = get_field('select_form', get_queried_object_id());?>

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

        <ul class="contacts__interaction">

          <li>
            <h2 class="title title--contacts">
              <?php echo get_field('phone')['title']; ?>
            </h2>

            <p>
              <?php echo get_field('phone')['description']; ?>
            </p>

                 <?php
                    if (is_active_sidebar('phone')) {
                      dynamic_sidebar('phone');
                    }
                    ?>
            
          </li>

          <li>
            <h2 class="title title--contacts">
              <?php echo get_field('mail')['title']; ?>
            </h2>
            <p>
              <?php echo get_field('mail')['description']; ?>
            </p>

           <?php
                    if (is_active_sidebar('email')) {
                      dynamic_sidebar('email');
                    }
                    ?>
          </li>

          <li>
            <h2 class="title title--contacts">
              <?php echo get_field('chat')['title']; ?>
            </h2>
            <p>
              <?php echo get_field('chat')['description']; ?>
            </p>

            <button class="link" type="button">
              Go to the chat
            </button>
          </li>

        </ul>
      </div>

      <div class="contacts__follow section">
        <h3 class="title">
          <?php echo get_field('social'); ?>
        </h3>

        <?php get_template_part('template-parts/socials-menu'); ?>
      </div>


     <?php $main_faq_page_id = 50;

       $faq_section = get_field('faq_section', $main_faq_page_id);

        if ($faq_section && isset($faq_section['count'])):
         $faq_count = $faq_section['count'];
         $counter = 1;
        ?>

      <section class="faq faq--main section">
        <div class="container">
          <div class="section-heading">
            <h1 class="title">
              <?php echo get_the_title($main_faq_page_id); ?>
            </h1>
          </div>

          <ul class="faq__list">
            <?php while ($counter <= $faq_count): ?>
            <li class="faq__item faq__item--client">
              <a class="faq__link" href="#time<?php echo $counter; ?>">
                <span>You:</span>
                <p><?php echo esc_html($faq_section['question' . $counter] ?? ''); ?></p>
              </a>
            </li>

            <li class="faq__item faq__item--manager faq__panels" id="time<?php echo $counter; ?>">
              <div>
                <span>Manager:</span>
                <p>
                  <?php echo esc_html($faq_section['answer' . $counter] ?? ''); ?>

                  <?php if ($counter === 2 && isset($faq_section['link'])):
                                $link = $faq_section['link'];
                                if (is_array($link) && isset($link['url'])): ?>
                  <a href="<?php echo esc_url($link['url']); ?>" target="<?php echo esc_attr($link['target']); ?>">
                    <?php echo esc_html($link['title']); ?>
                  </a>
                  <?php endif; ?>
                  <?php endif; ?>
                </p>
              </div>
            </li>
            <?php $counter++; ?>
            <?php endwhile; ?>
          </ul>
        </div>
      </section>

    <?php endif; ?>

      <div class="contacts__answer">
        <h2 class="title">
          <?php echo get_field('live_chat')['title']; ?>
        </h2>

        <button class="btn btn--transparent" type="button">
          <?php echo get_field('live_chat')['button_content']; ?>
        </button>
      </div>

    </div>

  </section>



  <!-- Ending of the <main> tag in the footer.php -->
  <?php get_footer('social'); ?>