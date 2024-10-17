<?php
// Creating the widget
class GM_Widget_Address extends WP_Widget
{

  function __construct()
  {
    parent::__construct(
      'gm_widget_address',
      'GazMeter - Адресса',
      [
        'name' => 'GazMeter - Адресса',
        'description' => 'Виводить адрессу'
      ]
    );
  }

  public function widget($args, $instance)
  {
?>
    <address>
      <?php
      echo $instance['text'];
      ?>
    </address>
  <?php
  }

  public function form($instance)
  {
  ?>
    <p>
      <label for="<?php echo $this->get_field_id('phone'); ?>">
        Введіть адрессу
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
