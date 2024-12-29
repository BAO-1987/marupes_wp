<?php
// Creating the widget
class GM_Widget_Contacts extends WP_Widget
{

  function __construct()
  {
    parent::__construct(
      'gm_widget_contacts',
      'Markupers - Контакти (номер телефону)',
      [
        'name' => 'Markupers - Контакти (номер телефону)',
        'description' => 'Виводить номер телефону'
      ]
    );
  }

  public function widget($args, $instance)
  {
    $tel_text = $instance['phone'];
    $pattern = '/[^-+0-9]/';
    $tel = preg_replace($pattern, '', $tel_text);
?>

    <a class="contacts__link" href="tel:+38<?php echo $tel ?>">
      <?php echo $instance['phone'] ?>
    </a>

  <?php
  }

  public function form($instance)
  {
  ?>
    <p>
      <label for="<?php echo $this->get_field_id('phone'); ?>">
        Введіть номер телефону
      </label>
      <input class="widefat" id="<?php echo $this->get_field_id('phone'); ?>" name="<?php echo $this->get_field_name('phone'); ?>" type="text" value="<?php echo $instance['phone']; ?>" />
    </p>
<?php
  }

  public function update($new_instance, $old_instance)
  {
    return $new_instance;
  }
}