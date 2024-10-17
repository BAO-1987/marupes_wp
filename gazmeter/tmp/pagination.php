<div class="pagination">
  <?php $prev_link = get_previous_posts_link(__(''));
  $next_link = get_next_posts_link(__(''));
  // as suggested in comments
  if ($prev_link || $next_link) {
    echo '<ul class="pagination__btns">';
    if ($prev_link) {
      echo '<li class="pagination__btn btn pagination__btn--prev">' . $prev_link . '</li>';
    } else {
      echo '<span class="pagination__btn btn pagination__btn--prev disabled"></span>';
    }
    if ($next_link) {
      echo '<li class="pagination__btn btn pagination__btn--next">' . $next_link . '</li>';
    } else {
      echo '<span class="pagination__btn btn pagination__btn--next disabled"></span>';
    }
    echo '</ul>';
  } ?>

  <div class="pagination__progress">
    <span class="pagination__pages">
      <?php current_page(); ?>
    </span>

    <div class="pagination__line" aria-label="Прогрес сторынок">
      <span class="pagination__line-progress" style="width:calc(100% / <?php total_pages(); ?> *  <?php current_page(); ?>  )"></span>
    </div>

    <span class=" pagination__pages">
      <?php total_pages(); ?>
    </span>
  </div>
</div>