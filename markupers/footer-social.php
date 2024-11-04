  <footer class="footer footer--social">
      <div class="container">
        <div class="footer__inner">
          
         
  <a class="logo" href="<?php echo get_home_url(); ?>">
    <img src="<?php echo _gm_assets_path('images/footer-logo.svg'); ?>" 
         class="logo__image" 
         width="181" 
         height="21" 
         alt="logo of markupers">
  </a>

  <a class="btn btn--transparent" href="#">
    <?php
    $current_lang = pll_current_language();
    if ('ua' === $current_lang): ?>
      Заповніть бриф
    <?php elseif ('ru' === $current_lang): ?>
      Заповни бриф
    <?php else: ?>
      Fill in the brief
    <?php endif; ?>
  </a>

          <div class="footer__copyright"> 
          <span>
            <?php echo date('Y');?>
          </span> 
           <a class="footer__link" href="https://markupers.wp/contract-offer/">Contract offer</a> 
            </div>

             <ul class="social"> 
           <?php
            if (is_active_sidebar('social')) {
              dynamic_sidebar('social');
            }
            ?>
         </ul>
         
        </div>
      </div>

    </footer>

     <div class="modals">
      <dialog class="modal modal--start">
        <h2 class="modal__title title">Request a quote</h2> <button class="modal__close" type="button" data-modal-close>
          <span class="sr-only">close modal</span> </button>
        <form class="form form--modal " action="#">
    <div class="form__inner"> 
    <label class="form__label"> 
      <input class="form__input" type="text" name="user-name" placeholder="<?php $current_lang = pll_current_language();
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
                if ('ua' === $current_lang): ?> Повідомлення <?php elseif ('ru' === $current_lang): ?> Сообщение <?php else: ?> Message<?php endif; ?>"
                name="user-message" rows="2"></textarea>
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
        <h2 class="modal__title title">Thank you</h2>
        <p>Expect a call from our manager</p> <button class="btn btn--transparent modal__close" type="button"> <span
            class="sr-only">close modal</span> ok </button>
      </dialog>
    </div>
  
  </div>

  <?php wp_footer(); ?>
  
</body>

</html>