<section class="contacts section">
        <div class="container">
          <div class="contacts__inner">
            <div class="contacts__form">
              <div class="section-heading">
                <h2 class="title"> 
                  <?php
                  $current_lang = pll_current_language();
                  if ('ua' === $current_lang): ?>
                    Зв'яжіться з нами
                  <?php elseif ('ru' === $current_lang): ?>
                   Зв'яжіться з нами
                  <?php else: ?>
                  Contact us 
                  <?php endif; ?>
                </h2>
                <p> 
                    <?php
                    $current_lang = pll_current_language();
                    if ('ua' === $current_lang): ?>
                      Зв’яжіться з нами, щоб отримати ціну, допомогу або приєднатися до команди
                    <?php elseif ('ru' === $current_lang): ?>
                     Зв’яжіться з нами, щоб отримати ціну, допомогу або приєднатися до команди
                    <?php else: ?>
                      Contacts us for a quote, help or to join the team 
                    <?php endif; ?>
                </p>
              </div>

    <form class="form" action="#">
    <div class="form__inner"> 
    <label class="form__label"> 
      <input class="form__input" type="text" name="user-name" placeholder="<?php $current_lang = pll_current_language(); if ('ua' === $current_lang): ?> Ім'я <?php elseif ('ru' === $current_lang): ?>Имя <?php else: ?>Name <?php endif; ?>" required>
    </label>
            
    <label class="form__label">
        <input class="form__input" name="user-phone" placeholder="<?php $current_lang = pll_current_language(); if ('ua' === $current_lang): ?> Телефон <?php elseif ('ru' === $current_lang): ?> Телефон <?php else: ?> Phone <?php endif; ?>" inputmode="tel" type="tel" required>
    </label>
            
     <label class="form__label form__label--textarea">
      <textarea class="form__input form__input--textarea" placeholder="<?php $current_lang = pll_current_language(); if ('ua' === $current_lang): ?> Повідомлення <?php elseif ('ru' === $current_lang): ?> Сообщение <?php else: ?> Message<?php endif; ?>" name="user-message" rows="2"></textarea>
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

            </div>
            <div class="contacts__info">
              <div class="contact__information">
                <h3 class="title">
                    <?php
                    $current_lang = pll_current_language();
                    if ('ua' === $current_lang): ?>
                     Інформація
                    <?php elseif ('ru' === $current_lang): ?>
                      Інформація
                    <?php else: ?>
                     Info
                    <?php endif; ?>
                </h3>

                <ul class="contacts__list">
                  <li class="contacts__item">
                     <span class="contacts__name contacts__name--email">
                    <?php
                    $current_lang = pll_current_language();
                    if ('ua' === $current_lang): ?>
                      Пошта
                    <?php elseif ('ru' === $current_lang): ?>
                     Почта
                    <?php else: ?>
                      Email
                    <?php endif; ?>
                  </span> 
                   <?php
                    if (is_active_sidebar('email')) {
                      dynamic_sidebar('email');
                    }
                    ?>
                 </li>
                  <li class="contacts__item"> <span class="contacts__name contacts__name--phone">
                    <?php
                    $current_lang = pll_current_language();
                    if ('ua' === $current_lang): ?>
                      Телефон
                    <?php elseif ('ru' === $current_lang): ?>
                      Телефон
                    <?php else: ?>
                     Phone
                    <?php endif; ?>
                  </span> 
                   <?php
                    if (is_active_sidebar('phone')) {
                      dynamic_sidebar('phone');
                    }
                    ?>
                </li>
                  <li class="contacts__item"> <span class="contacts__name contacts__name--schedule">
                   
                    <?php
                    $current_lang = pll_current_language();
                    if ('ua' === $current_lang): ?>
                     Графік
                    <?php elseif ('ru' === $current_lang): ?>
                    Графік
                    <?php else: ?>
                      Schedule
                    <?php endif; ?>
                  </span>
                   <?php
                    if (is_active_sidebar('schedule')) {
                      dynamic_sidebar('schedule');
                    }
                    ?>
                </li>
                </ul>
              </div>
              <div class="contacts__follow">
                <h3 class="title">
                  <?php
                  $current_lang = pll_current_language();
                  if ('ua' === $current_lang): ?>
                 Слідкуйте за нами
                  <?php elseif ('ru' === $current_lang): ?>
                   Слідкуйте за нами
                  <?php else: ?>
                   Follow us
                  <?php endif; ?>
                </h3>
    
         <ul class="social"> 
        <?php
          if (is_active_sidebar('social')) {
         dynamic_sidebar('social');
         }
          ?>
       </ul>
              </div>
            </div>
          </div>
        </div>
      </section>