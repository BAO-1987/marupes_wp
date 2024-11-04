<?php

get_header();

?>

 <main class="main main--empty">
      <section class="hero-simple hero-simple--stub">
        <div class="container">
          <div class="wrapper">
            <h1 class="title">
              <?php
              $current_lang = pll_current_language();
              if ('ua' === $current_lang): ?>
              Ой! Ця сторінка не існує
              <?php elseif ('ru' === $current_lang): ?>
               Упс! Страницы нет
              <?php else: ?>
                 Oops! This page doesn’t appear to exist 
              <?php endif; ?>
            </h1>

            <p>

            <?php
            $current_lang = pll_current_language();
            if ('ua' === $current_lang): ?>
           Помилка 404. Радимо відвідати <span>домашню сторінку</span> або <span>запитувати ціну</span> на цій сторінці
            <?php elseif ('ru' === $current_lang): ?>
             Ошибка 404. Мы предлагаем вам посетить <span>главную страницу</span> или <span>запросить расценки</span> на этой странице
            <?php else: ?>
              Error 404. We suggest you visit the <span>home page</span> or <span>request a quote</span> on this page
            <?php endif; ?>
              
            </p>

            <div class="hero-simple__buttons">
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

               <button class="link modal-btn" type="button">
                <?php
               $current_lang = pll_current_language();
               if ('ua' === $current_lang): ?>
                 Запросити пропозицію
               <?php elseif ('ru' === $current_lang): ?>
                 Запросить предложение
               <?php else: ?>
                 Request a quote
               <?php endif; ?>
                 </button>
            </div>
          </div>
        </div>

      </section>
    </main>
    
<div class="modals">
      <dialog class="modal modal--start">
        <h2 class="modal__title title">
      <?php
      $current_lang = pll_current_language();
      if ('ua' === $current_lang): ?>
        Запросити пропозицію
      <?php elseif ('ru' === $current_lang): ?>
        Запросить предложение
      <?php else: ?>
        Request a quote
      <?php endif; ?>
    </h2>
    <button class="modal__close" type="button" data-modal-close>
      <span class="sr-only">close modal</span> </button>
    <form class="form form--modal " action="#">
      <div class="form__inner">
        <label class="form__label">
          <input class="form__input" type="text" name="user-name"
            placeholder="<?php $current_lang = pll_current_language();
            if ('ua' === $current_lang): ?> Ім'я <?php elseif ('ru' === $current_lang): ?>Имя <?php else: ?>Name <?php endif; ?>" required>
        </label>

        <label class="form__label">
          <input class="form__input" name="user-phone"
            placeholder="<?php $current_lang = pll_current_language();
            if ('ua' === $current_lang): ?> Телефон <?php elseif ('ru' === $current_lang): ?> Телефон <?php else: ?> Phone <?php endif; ?>" inputmode="tel"
            type="tel" required>
        </label>

        <label class="form__label form__label--textarea">
          <textarea class="form__input form__input--textarea"
            placeholder="<?php $current_lang = pll_current_language();
            if ('ua' === $current_lang): ?> Повідомлення <?php elseif ('ru' === $current_lang): ?> Сообщение <?php else: ?> Message<?php endif; ?>" name="user-message"
            rows="2"></textarea>
        </label>

        <span class="form__label form__label--necessarily">
          <?php
          $current_lang = pll_current_language();
          if ('ua' === $current_lang): ?>
            – обов'язково
          <?php elseif ('ru' === $current_lang): ?>
            – обязательно
          <?php else: ?>
            – necessarily
          <?php endif; ?>
        </span>

        <p class="form__privacy">
          <?php
          $current_lang = pll_current_language();
          if ('ua' === $current_lang): ?>
            Натискаючи кнопку, я погоджуюся на обромоїх персональних даних
          <?php elseif ('ru' === $current_lang): ?>
            Нажимая на кнопку, я даю согласие на обработку моих персональных данных
          <?php else: ?>
            By clicking the button, I consent to the processing of my personal data
          <?php endif; ?>
        </p>

        <button class="btn btn--form form__btn" type="submit">
          <?php
          $current_lang = pll_current_language();
          if ('ua' === $current_lang): ?>
            Запросити пропозицію
          <?php elseif ('ru' === $current_lang): ?>
            Запросить предложение
          <?php else: ?>
            Request a quote
          <?php endif; ?>
        </button>
      </div>
    </form>
  </dialog>
  <dialog class="modal modal--finish"> <button class="modal__close" type="button"> <span class="sr-only">close
        modal</span> </button>
    <h2 class="modal__title title">
      <?php
      $current_lang = pll_current_language();
      if ('ua' === $current_lang): ?>
        Дякуємо
      <?php elseif ('ru' === $current_lang): ?>
        Спасиба
      <?php else: ?>
        Thank you
      <?php endif; ?>
    </h2>
    <p>
      <?php
      $current_lang = pll_current_language();
      if ('ua' === $current_lang): ?>
        Очікуйте на дзвінок
      <?php elseif ('ru' === $current_lang): ?>
        Ожидайте на дзвонок
      <?php else: ?>
        Expect a call from our manage
      <?php endif; ?>
    </p>
    <button class="btn btn--transparent modal__close" type="button"> <span class="sr-only">close modal</span> ok
    </button>
  </dialog>
</div>


