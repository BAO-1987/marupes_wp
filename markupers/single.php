<?php get_header(); ?>

<main class="main main--top">

  <div class="container">


    <?php
    if (have_posts()) :
      while (have_posts()) :
        the_post();
    ?>
        <article class="single section">

                 <?php
            if ($return_url = wp_get_referer()) {
              ?>
              <a class="link link--back" href="<?php echo esc_url($return_url); ?>">
                <?php if ('ua' == pll_current_language()): ?>
                  Назад
                <?php elseif ('ru' == pll_current_language()): ?>
                 Назад
                <?php else: ?>
                Go back
                <?php endif; ?>
              </a>
              <?php
            }
          ?>

        <div class="single__wrapper">

        <div class="single__content">

          <div class="single__welcome">
           
           <div class="single__category">
              <span> 
                <?php the_field('blog_category'); ?>
              </span>

              <div>
                <span> 
                  <?php the_time('d.m.y');?>
              </span>
                <span>
                  <?php the_field('blog_read');?>
                </span>
              </div>
            </div>

            <h1 class="single__title title">
              <?php the_title(); ?>
            </h1>
          </div>

          <?php the_content(); ?>
        </div>

        <aside class="single__popular">
                <h2>
                     <?php
                        $current_lang = pll_current_language();
                        if ('ua' === $current_lang): ?>
                           Також популярні:
                        <?php elseif ('ru' === $current_lang): ?>
                          Также популярно:
                        <?php else: ?>
                           Also popular:
                        <?php endif; ?>
                  </h2>
     

     <ul class="single__grid">
    <?php
    $recent_posts = wp_get_recent_posts(array(
        'numberposts' => 2,
        'post_status' => 'publish',
        'category_name' => 'news',
        'orderby' => 'date',
        'order' => 'DESC'
    ));

    foreach ($recent_posts as $post) {
        $postId = $post['ID'];
        setup_postdata($post); 
        ?>
        
       <li class="blog__item">
            <article>
                <a href="<?php echo get_permalink($postId); ?>">
                    <header> 
                        <span><?php echo esc_html(get_field('blog_category', $postId)); ?></span>
                        <div> 
                            <span><?php echo get_the_date('d.m.y', $postId); ?></span> 
                            <span><?php echo esc_html(get_field('blog_read', $postId)); ?></span>
                        </div>
                    </header>
                    <h3><?php echo esc_html(get_the_title($postId)); ?></h3>
                    <span class="link">
                        <?php
                        $current_lang = pll_current_language();
                        if ('ua' === $current_lang): ?>
                            Перейти до новин
                        <?php elseif ('ru' === $current_lang): ?>
                            До
                        <?php else: ?>
                            Go to the news
                        <?php endif; ?>
                    </span>
                </a>
            </article>
        </li>
        
        <?php
    }
    wp_reset_postdata();
    ?>
</ul>



    </aside>

        </article>
    <?php
      endwhile;
    endif
    ?>
  </div>


</main>

<?php get_footer('social'); ?>