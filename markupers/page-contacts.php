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
                <h2 class="title title--contacts"> Call us </h2>
                <p> If you have decided or not - call us and we will help! </p> <?php
                    if (is_active_sidebar('phone')) {
                      dynamic_sidebar('phone');
                    }
                    ?>
              </li>
              <li>
                <h2 class="title title--contacts"> Write to us </h2>
                <p> If you have any questions - we still have an e-mail </p> 
                  <?php
                    if (is_active_sidebar('email')) {
                      dynamic_sidebar('email');
                    }
                    ?>
              </li>
              <li>
                <h2 class="title title--contacts"> Live chat </h2>
                <p> Write to us directly in the chat and we will solve all the questions! </p> <button class="link"
                  type="button"> Go to the chat </button>
              </li>
            </ul>
          </div>
          <div class="contacts__follow section">
            <h3 class="title">Follow us</h3>
               <ul class="social"> 
        <?php
          if (is_active_sidebar('social')) {
         dynamic_sidebar('social');
         }
          ?>
       </ul>
          </div>
          <div class="faq faq--main section">
            <div class="container">
              <div class="section-heading">
                <h1 class="title">FAQ</h1>
              </div>
              <ul class="faq__list">
                <li class="faq__item faq__item--client"> <a class="faq__link" href="#time"> <span>You:</span>
                    <p>How long does it take to develop a project?</p>
                  </a> </li>
                <li class="faq__item faq__item--manager faq__panels" id="time">
                  <div> <span>Manager:</span>
                    <p> Depending on the amount of time, promotion (SEO, SMM), the number of pages, the complexity of
                      the functionality (animations, chats, etc.), if this application - more time. On average: from 2
                      months to 1 year. </p>
                  </div>
                </li>
                <li class="faq__item faq__item--client"> <a class="faq__link" href="#services"> <span>You:</span>
                    <p>What are the main services provided by a web studio?</p>
                  </a> </li>
                <li class="faq__item faq__item--manager faq__panels" id="services">
                  <div> <span>Manager:</span>
                    <p> The main services of a web studio are site development of any complexity, site design, site
                      promotion in search engines, setting up contextual advertising, working with the company's
                      reputation online and much more. More in <a href="/our-services.html">Services</a> </p>
                  </div>
                </li>
                <li class="faq__item faq__item--client"> <a class="faq__link" href="#cycle"> <span>You:</span>
                    <p>What is a full cycle web studio?</p>
                  </a> </li>
                <li class="faq__item faq__item--manager faq__panels" id="cycle">
                  <div> <span>Manager:</span>
                    <p> Full Cycle Web Studio is an online marketing agency that provides a full range of services from
                      the idea of designing and developing a site to the top 1 search engines and brand reputation
                      management online </p>
                  </div>
                </li>
                <li class="faq__item faq__item--client"> <a class="faq__link" href="#decision"> <span>You:</span>
                    <p> Freelancer or web studio: how to make the right decision? </p>
                  </a> </li>
                <li class="faq__item faq__item--manager faq__panels" id="decision">
                  <div> <span>Manager:</span>
                    <p> If we are talking about small tasks, you can entrust the work of a freelancer, but only proven.
                      If we are talking about projects set up for constant growth, the choice is obvious - it's a web
                      studio. After all, a web studio is a well-coordinated team of professionals </p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="contacts__answer">
            <h2 class="title"> Don't have an answer to your question? </h2> <button class="btn btn--transparent"
              type="button"> Ask a question in the chat </button>
          </div>
        </div>
      </section>

    </main>

    <?php get_footer('social');?>

