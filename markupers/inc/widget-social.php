<?php
// Creating the widget
class GM_Widget_Social extends WP_Widget
{

  function __construct()
  {
    parent::__construct(
      'gm_widget_social',
      'Markupers - Соц. мережі',
      [
        'name' => 'Markupers - Соц. мережі',
        'description' => 'Виводить посилання на соц. мережі'
      ]
    );
  }

  // Масив соціальних мереж
  private $socials = [
    'fb' => ['Facebook'],
    'ln' => ['Linkedin'],
    'insta' => ['Instagram'],
    'yt' => ['Youtube'],
    'be' => ['Behance'],
  ];

  // Метод для виведення форми в адмінці
  public function form($instance)
  {
    foreach ($this->socials as $slug => $desc) {
      $link = !empty($instance['link_' . $slug]) ? $instance['link_' . $slug] : '';  // Перевірка наявності даних
      ?>
      <p>
        <label for="<?php echo $this->get_field_id('link_' . $slug); ?>">
          Посилання на <?php echo esc_html($desc[0]); ?>
        </label>
        <input class="widefat" id="<?php echo $this->get_field_id('link_' . $slug); ?>" name="<?php echo $this->get_field_name('link_' . $slug); ?>" type="text" value="<?php echo esc_attr($link); ?>" />
      </p>
      <?php
    }
  }

  // Метод для збереження та оновлення даних
  public function update($new_instance, $old_instance)
  {
    $instance = [];
    foreach ($this->socials as $slug => $desc) {
      $instance['link_' . $slug] = !empty($new_instance['link_' . $slug]) ? esc_url_raw($new_instance['link_' . $slug]) : '';
    }
    return $instance;
  }

  // Виведення віджета на сайті
  public function widget($args, $instance)
  {
    foreach ($this->socials as $slug => $desc) {
      $link = !empty($instance['link_' . $slug]) ? $instance['link_' . $slug] : '#';  // Посилання для кожної соцмережі
      $short_name = $slug;  // Скорочена назва для класу (наприклад, 'fb', 'tw', 'in')
      $full_name = $desc[0];  // Повна назва соцмережі (наприклад, 'Facebook', 'Twitter', 'Instagram')
      ?>
      <li class="social__item">
        <a class="social__link social__link--<?php echo esc_attr($short_name); ?>" href="<?php echo esc_url($link); ?>" target="_blank">
          <span class="sr-only"><?php echo esc_html($full_name); ?></span>
        </a>
      </li>
      <?php
    }
  }
}

