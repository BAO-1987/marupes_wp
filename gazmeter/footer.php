<footer class="footer">
  <div class="container">

    <a class="logo" href="<?php echo  get_home_url(); ?>">
      <?php
      $logo_img = '';
      if ($custom_logo_id = get_theme_mod('custom_logo')) {
        $logo_img = wp_get_attachment_image($custom_logo_id, 'full', false, array(
          'class' => 'logo__image',
          'width' => '170',
          'height' => '32'
        ));
      }
      echo $logo_img;
      ?>
    </a>

    <div class="footer__inner">
      <div class="footer__desc">
        <?php
        if (is_active_sidebar('desc_footer')) {
          dynamic_sidebar('desc_footer');
        }
        ?>
      </div>

      <div class="footer__social">
        <span>
          <?php if ('uk' == pll_current_language()) : ?>Слідкуйте за нами<?php else : ?>Следите за нами<?php endif; ?>
        </span>

        <ul class="social">
          <?php
          if (is_active_sidebar('social')) {
            dynamic_sidebar('social');
          }
          ?>
        </ul>
      </div>
    </div>

    <span class="copy">
      Copyright <span class="copy__year"></span> © All right reserved
    </span>

    <script>
      document.querySelector(".copy__year").textContent = new Date().getFullYear();
    </script>
  </div>
</footer>

<dialog class="modal modal--success">
  <div class="modal__inner">
    <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
      <rect width="44" height="44" rx="7" fill="#000" />
      <path d="M20.4615 29.992C19.1381 28.6499 14.4359 22.8411 12 21.0209V21C12.9231 21 18.5385 22.4511 20.0769 23.7512C21.9231 18.1345 28.7949 14.9101 32 14C26.6154 16.3403 20.8462 30.3821 20.4615 29.992Z" fill="#fff" />
    </svg>

    <div class="modal__desc">
      <h3 class="modal__title">
        <?php if ('uk' == pll_current_language()) : ?>
          Ваше повідомлення відправлено
        <?php else : ?>
          Ваше сообщение отправлено
        <?php endif; ?>
      </h3>
    </div>

    <div class="modal__click"><button class="btn close" type="button">
        <?php if ('uk' == pll_current_language()) : ?>
          Закрити
        <?php else : ?>
          Закрыть
        <?php endif; ?>
      </button>
    </div>
  </div>
</dialog>

<dialog class="modal modal--contact">

  <div class="modal__inner">
    <button class="modal__close close" type="button" aria-label="Закрити">
    </button>

    <h3><?php if ('uk' == pll_current_language()) : ?>залишити заявку<?php else : ?>оставить заявку<?php endif; ?>
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
</dialog>

<dialog class="modal modal--video">
  <div class="modal__inner">
    <button class="modal__close close" type="button" aria-label="Закрити">
    </button>

    <video src="" autoplay controls></video>

  </div>
</dialog>

<script>
  const form = document.querySelector('.form')
  const dialog = document.querySelector('.modal--success')
  const dialogOrder = document.querySelector('.modal--contact')
  const orderBtn = [...document.querySelectorAll('.order')]
  const closeBtn = [...document.querySelectorAll('.close')]

  form.addEventListener('submit', formSend)

  async function formSend(e) {
    e.preventDefault();

    let formData = new FormData(form)

    const formPhpLink = form.getAttribute('action')

    let response = await fetch(formPhpLink, {
      method: 'POST',
      body: formData
    })

    if (response.ok) {

      if (dialogOrder.open) {
        dialogOrder.close();
      }

      dialog.showModal();

      form.reset()

      setTimeout(() => {
        dialog.close();
      }, 10000);
      return response;
    } else {
      return Promise.reject(response);
    }
  }

  orderBtn?.forEach(btn => {
    btn?.addEventListener('click', () => {
      dialogOrder.showModal()
    })
  })

  closeBtn.forEach(close => {
    close?.addEventListener('click', e => {
      e.target.closest('.modal').close()

      document.querySelector('.modal--video video').pause();
      document.querySelector('.modal--video video').currentTime = 0;
    })
  });
</script>
</div>

<?php wp_footer(); ?>

</body>

</html>