<?php
// Creating the widget
class GM_Widget_Email extends WP_Widget
{

  function __construct()
  {
    parent::__construct(
      'gm_widget_email',
      'Markupers - Електронна пошта',
      [
        'name' => 'Markupers - Електронна пошта',
        'description' => 'Виводить e-mail'
      ]
    );
  }

  public function widget($args, $instance)
  {
?>
    <a class="contacts__link" href="mailto:<?php echo $instance['email'] ?>">
      <?php echo $instance['email'] ?>
    </a>
  <?php
  }

  public function form($instance)
  {
  ?>
    <p>
      <label for="<?php echo $this->get_field_id('email'); ?>">
        Введіть e-mail
      </label>
      <input class="widefat" id="<?php echo $this->get_field_id('email'); ?>" name="<?php echo $this->get_field_name('email'); ?>" type="email" value="<?php echo $instance['email']; ?>" />
    </p>
<?php
  }

  public function update($new_instance, $old_instance)
  {
    return $new_instance;
  }
}