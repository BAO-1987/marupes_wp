<?php
/*
  Template name: Шаблон для Сторінки Contacts

*/
get_header();
?>

 <main class="main main--top">

  <section class="contacts contacts--main section">
        <div class="container">
          <div class="section-heading wrapper">
            <h1 class="title"> 
              <?php the_title();?>
            </h1>
            <p> 
               <?php the_field('contacts_desc');?>
            </p>
          </div>
          <div class="contacts__wrapper section">
            <div class="contacts__form">
              <h2 class="title title--contacts"> 
                 <?php the_field('contacts_subtitle');?>
                 </h2>
              <form class="form" action="#">
    <div class="form__inner"> 
    <label class="form__label"> 
      <input class="form__input" type="text" name="user-name" placeholder="<?php $current_lang = pll_current_language();
                      if ('ua' === $current_lang): ?> Ім'я <?php elseif ('ru' === $current_lang): ?>Имя <?php else: ?>Name <?php endif; ?>"
                      required>
                  </label>
              
                  <label class="form__label">
                    <input class="form__input" name="user-phone"
                      placeholder="<?php $current_lang = pll_current_language();
                      if ('ua' === $current_lang): ?> Телефон <?php elseif ('ru' === $current_lang): ?> Телефон <?php else: ?> Phone <?php endif; ?>"
                      inputmode="tel" type="tel" required>
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
            </div>
            <ul class="contacts__interaction">
              <li>
                <h2 class="title title--contacts"> 
                  <?php $current_lang = pll_current_language();
                      if ('ua' === $current_lang): ?> Зателефонуйте нам<?php elseif ('ru' === $current_lang): ?> <?php else: ?>Call us<?php endif; ?>
                </h2>
                <p> 
                  <?php $current_lang = pll_current_language();
                      if ('ua' === $current_lang): ?> Вирішили чи ні - телефонуйте і ми допоможемо!<?php elseif ('ru' === $current_lang): ?>
                      Если вы уже определились или нет - позвоните нам, и мы поможем!<?php else: ?>If you have decided or not - call us and we will help! <?php endif; ?>
                  </p> 
                  <?php
                    if (is_active_sidebar('phone')) {
                      dynamic_sidebar('phone');
                    }
                    ?>
              </li>
              <li>
                <h2 class="title title--contacts"> 
                   <?php $current_lang = pll_current_language();
                      if ('ua' === $current_lang): ?>Напишіть нам<?php elseif ('ru' === $current_lang): ?>
                      Напишите нам<?php else: ?>Write to us<?php endif; ?>
                </h2>

                <p> 
                    <?php $current_lang = pll_current_language();
                      if ('ua' === $current_lang): ?>Якщо у вас виникнуть запитання - у нас ще є електронна пошта<?php elseif ('ru' === $current_lang): ?>
                      Если у вас есть вопросы - у нас еще есть электронная почта<?php else: ?> If you have any questions - we still have an e-mail<?php endif; ?>
                </p> 
                  <?php
                    if (is_active_sidebar('email')) {
                      dynamic_sidebar('email');
                    }
                    ?>
              </li>
              <li>
                <h2 class="title title--contacts"> 
                  <?php $current_lang = pll_current_language();
                      if ('ua' === $current_lang): ?>Онлайн чат<?php elseif ('ru' === $current_lang): ?>
                      Онлайн чат<?php else: ?> Live chat<?php endif; ?>
                </h2>

                <p> 
                  <?php $current_lang = pll_current_language();
                      if ('ua' === $current_lang): ?>Напишіть нам безпосередньо в чат і ми знайдемо рішення!<?php elseif ('ru' === $current_lang): ?>
                     Напишите нам прямо в чате и мы решим все вопросы!<?php else: ?>Write to us directly in the chat and we will solve all the questions! <?php endif; ?>
                </p> 
                <button class="link"
                  type="button"> Go to the chat </button>
              </li>
            </ul>
          </div>
          <div class="contacts__follow section">
            <h3 class="title">
              <?php $current_lang = pll_current_language();
                      if ('ua' === $current_lang): ?>Слідкуйте за нами!<?php elseif ('ru' === $current_lang): ?>
                     Подписывайтесь на нас<?php else: ?>Follow us<?php endif; ?>
            </h3>
               <ul class="social"> 
        <?php
          if (is_active_sidebar('social')) {
         dynamic_sidebar('social');
         }
          ?>
       </ul>
          </div>


              <?php
// Задайте основний ID сторінки FAQ (ID основного перекладу сторінки FAQ)
$main_faq_page_id = 72; // використайте ID основної сторінки FAQ

// Отримуємо ID сторінки FAQ для поточної мови за допомогою Polylang
$faq_page_id = pll_get_post($main_faq_page_id);

if ($faq_page_id):
    // Отримуємо кількість FAQ
    $faq_count = get_field('faq_count', $faq_page_id); 
    $counter = 1;
?>

<section class="faq faq--main section">
    <div class="container">
        <div class="section-heading">
            <h2 class="title">FAQ</h2>
        </div>

        <ul class="faq__list">
            <?php while ($counter <= $faq_count): ?>
                <li class="faq__item faq__item--client"> 
                    <a class="faq__link" href="#time<?php echo $counter; ?>">
                        <span>
                            <?php
                                $current_lang = pll_current_language();
                                if ('ua' === $current_lang): ?>
                                    Ти:
                                <?php elseif ('ru' === $current_lang): ?>
                                    Ти:
                                <?php else: ?>
                                    You:
                                <?php endif; ?>
                        </span>
                        <p><?php echo get_field('faq_question' . $counter, $faq_page_id); ?></p>
                    </a> 
                </li>

                <li class="faq__item faq__item--manager faq__panels" id="time<?php echo $counter; ?>">
                    <div> 
                        <span> 
                            <?php
                                if ('ua' === $current_lang): ?>
                                    Менеджер:
                                <?php elseif ('ru' === $current_lang): ?>
                                    Менеджер:
                                <?php else: ?>
                                    Manager
                                <?php endif; ?>
                        </span>
                        <p><?php echo get_field('faq_anwerse' . $counter, $faq_page_id); ?></p>
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
                <?php $current_lang = pll_current_language();
                      if ('ua' === $current_lang): ?>Не маєте відповіді на своє запитання?<?php elseif ('ru' === $current_lang): ?>
                    Нет ответа на ваш вопрос?<?php else: ?>Don't have an answer to your question? <?php endif; ?>
            </h2>
             <button class="btn btn--transparent" type="button"> 
              <?php $current_lang = pll_current_language();
                      if ('ua' === $current_lang): ?>Поставте питання в чаті<?php elseif ('ru' === $current_lang): ?>
                   Задайте вопрос в чате<?php else: ?>Ask a question in the chat<?php endif; ?>
              
            </button>
          </div>
        </div>
      </section>

    </main>

    <?php get_footer('social');?>

