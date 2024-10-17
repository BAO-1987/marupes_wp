<section class="contact" style="background-image: url(&quot;<?php echo _gm_assets_path('images/contact.jpg') ?>&quot;)">
  <div class="container">

    <h2><?php if ('uk' == pll_current_language()) : ?>залишити заявку<?php else : ?>оставить заявку<?php endif; ?>
    </h2>

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
</section>