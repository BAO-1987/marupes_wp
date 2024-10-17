<section class="contacts section">
        <div class="container">
          <div class="contacts__inner">
            <div class="contacts__form">
              <div class="section-heading">
                <h2 class="title"> Contact us </h2>
                <p> Contacts us for a quote, help or to join the team </p>
              </div>
              <form class="form" action="#">
                <div class="form__inner"> <label class="form__label"> <input class="form__input" type="text"
                      name="user-name" placeholder="Name" required> </label> <label class="form__label"> <input
                      class="form__input" name="user-phone" placeholder="Phone" inputmode="tel" type="tel" required>
                  </label> <label class="form__label form__label--textarea"> <textarea
                      class="form__input form__input--textarea" placeholder="Massage" name="user-message"
                      rows="2"></textarea> </label> <span class="form__label form__label--necessarily"> –
                    necessarily</span>
                  <p class="form__privacy"> By clicking the button, I consent to the processing of my personal data </p>
                  <button class="btn btn--form form__btn" type="submit"> Request a quote </button>
                </div>
              </form>
            </div>
            <div class="contacts__info">
              <div class="contact__information">
                <h3 class="title">Info</h3>
                <ul class="contacts__list">
                  <li class="contacts__item"> <span class="contacts__name contacts__name--email">Email</span> 
                   <?php
                    if (is_active_sidebar('email')) {
                      dynamic_sidebar('email');
                    }
                    ?>
                 </li>
                  <li class="contacts__item"> <span class="contacts__name contacts__name--phone">Phone</span> 
                   <?php
                    if (is_active_sidebar('phone')) {
                      dynamic_sidebar('phone');
                    }
                    ?>
                </li>
                  <li class="contacts__item"> <span class="contacts__name contacts__name--schedule">Schedule</span>
                   <?php
                    if (is_active_sidebar('schedule')) {
                      dynamic_sidebar('schedule');
                    }
                    ?>
                </li>
                </ul>
              </div>
              <div class="contacts__follow">
                <h3 class="title">Follow us</h3>
    
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