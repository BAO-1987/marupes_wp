<?php
// Creating the widget
class GM_Widget_Social extends WP_Widget
{

  function __construct()
  {
    parent::__construct(
      'gm_widget_social',
      'GazMeter - Соц. мережі',
      [
        'name' => 'GazMeter - Соц. мережі',
        'description' => 'Виводить посилання на соц. мережі'
      ]
    );
  }
  private $socials = [
    'fb' => [
      'facebook', 'fs'
    ],
    'tw' => [
      'twitter', 'fs'
    ],
    'in' => [
      'instagram', 'fs'
    ],
  ];


  public function form($instance)
  {
?>
    <p>
      <label for="<?php echo $this->get_field_id('id-link'); ?>">
        Посилання на соц. мережу
      </label>

      <input class="widefat" id="<?php echo $this->get_field_id('id-link'); ?>" name="<?php echo $this->get_field_name('link'); ?>" type="text" value="<?php echo $instance['link']; ?>" />
    </p>

    <p>
      <label for="<?php echo $this->get_field_id('id-slug'); ?>">
        Вибір соц. мережі
      </label>

      <select class="widefat" id="<?php echo $this->get_field_id('id-slug'); ?>" name="<?php echo $this->get_field_name('slug'); ?>">

        <?php
        foreach ($this->socials as $slug => $desc) :
        ?>

          <option value="<?php echo $slug ?>" <?php selected($instance['slug'], $slug, true) ?>>
            <?php echo $desc[0]; ?>
          </option>

        <?php
        endforeach;
        ?>
      </select>
    </p>

  <?php
  }

  public function widget($args, $instance)
  {
    $slug = $instance['slug'];
    $link = $instance['link'];
    $text = $this->socials[$slug][0];
  ?>

    <li class="social__item">
      <a class="social__link social__link--<?php echo $text ?>" href="<?php echo $link ?>" target="_blank">
        <span class="sr-only">
          <?php echo $text ?>
        </span>
      </a>
    </li>

<?php
  }

  public function update($new_instance, $old_instance)
  {
    return $new_instance;
  }
}
