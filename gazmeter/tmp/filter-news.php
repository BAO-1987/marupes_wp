<ul class="filter">
  <li class="filter__item">
    <a class="filter__link" href="<?php if ('uk' == pll_current_language()) : echo get_the_permalink(11);
                                  else : echo get_the_permalink(452);
                                  endif; ?>">
      все
    </a>
  </li>

  <?php
  $custom_query = new WP_Query('posts_per_page=-1&cat=44');
  if ($custom_query->have_posts()) :
    while ($custom_query->have_posts()) : $custom_query->the_post();
      $posttags = get_the_tags();
      if ($posttags) {
        foreach ($posttags as $tag) {
          $all_tags[] = $tag->term_id;
        }
      }
    endwhile;
  endif;

  $tags_arr = array_unique($all_tags);
  $tags_str = implode(",", $tags_arr);



  $args = array(
    'smallest'  => 20,
    'largest'   => 20,
    'unit'      => 'px',
    'number'    => 0, 'form__btn btn',
    'hide_empty'   => true,
    'format'    => 'list',
    'include'   => $tags_str
  );

  wp_tag_cloud($args);
  ?>
</ul>