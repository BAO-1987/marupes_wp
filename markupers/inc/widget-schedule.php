<?php
// Creating the widget
class GM_Widget_Schedule extends WP_Widget
{

  function __construct()
  {
    parent::__construct(
      'gm_widget_schedule',
      'Markupers - Графік роботи',
      [
        'name' => 'Markupers - Графік роботи',
        'description' => 'Виводить графік'
      ]
    );
  }

  public function widget($args, $instance)
  {
?>
    <span class="contacts__link">
      <?php
      echo $instance['text'];
      ?>
    </span>
  <?php
  }

  public function form($instance)
  {
  ?>
    <p>
      <label for="<?php echo $this->get_field_id('schedule'); ?>">
        Введіть графік роботи
      </label>
      <textarea class="widefat" id="<?php echo $this->get_field_id('text'); ?>" name="<?php echo $this->get_field_name('text'); ?>" value="<?php echo esc_html($instance['text']); ?>"><?php echo esc_html($instance['text']); ?></textarea>
    </p>
<?php
  }

  public function update($new_instance, $old_instance)
  {
    return $new_instance;
  }
}
