<?php

/*
  Template name: Шаблон для Головної сторінки
*/

 get_header(); ?>

 <main class="main main--home"> 
 <section class="hero"> 
 <canvas class="canvas"></canvas> 
 <div class="container"> 
  <div class="hero__inner">
   <ul class="social"> 
      <?php
       if (is_active_sidebar('social')) {
         dynamic_sidebar('social');
       }
       ?>
    </ul>

       <div class="hero__content"> 
        <h1>
          <?php the_title();?>
      </h1> 

      <button class="btn modal-btn" type="button">
        <?php the_field('hero_btn');?>
      </button> 

    </div> 

    <?php
    $languages = pll_the_languages(array(
      'dropdown' => 0,
      'show_flags' => 0,
      'show_names' => 1,
      'hide_if_empty' => 0,
      'display_names_as' => 'slug',
      'raw' => 1
    ));

    if ($languages) {
      echo '<ul class="lang">';
      foreach ($languages as $lang) {
        $class = $lang['current_lang'] ? 'class="active"' : '';
        echo '<li>';
        echo '<a href="' . $lang['url'] . '" ' . $class . '>' . strtoupper($lang['slug']) . '</a>';
        echo '</li>';
      }
      echo '</ul>';
    }
    ?>

  </div> 
  </div> 
</section> 

     <section class="section services">
        <div class="container">
          <div class="wrapper">
            <div class="section-heading">
              <h2 class="title">
                <?php the_field('services_title'); ?>
              </h2>
              <p> 
                <?php the_field('services_text'); ?>
              </p>
            </div>

   <ul class="services__list">
    <?php $services_list = get_field('services_list'); ?>
  
    <?php foreach ($services_list as $services_id): ?>
        <?php $services_link = get_field('services_link', $services_id);?>

    <li class="services__item">
      <article class="<?php echo get_field('services_card', $services_id); ?>">
       <a href="<?php echo esc_url($services_link['url']); ?>">
          <h3><?php echo get_the_title($services_id); ?></h3>
          <p><?php echo get_field('services_desc', $services_id); ?></p>
          <div class="service-card__price">
      <span>
         <?php if ('ua' == pll_current_language()) : ?>
        До
         <?php elseif ('ru' == pll_current_language()) : ?>
        До
         <?php else : ?>
        Up to
         <?php endif; ?>
      </span>

            <span><?php echo get_field('services_price', $services_id); ?></span>
          </div>
        </a>
      </article>
    </li>
    <?php endforeach; ?>
  </ul>

        <a class="btn" href="<?php echo esc_url(get_field('services_all')['url']); ?>">
         <?php the_field('services_btn');?>
        </a>
          </div>
        </div>
      </section>

     <?php get_template_part('tmp/portfolio'); ?>

      <section class="section stages">
        <div class="container">
          <div class="section-heading">
            <h2 class="title"> 
              <?php the_field('stages_title');?>
            </h2>
            <p><?php the_field('stages_text');?></p>
          </div>
          <ul class="stages__list">

          <?php $stages_list = get_field('stages_list'); ?>

           <?php foreach ($stages_list as $stages_id):?>

            <li class="<?php echo get_field('stages_card', $stages_id); ?>">
              <h3>
                <?php echo get_the_title($stages_id)?>
              </h3>
              <p> 
                <?php the_field('stages_desc', $stages_id)?>
              </p> 
              <span>
                <?php the_field('stages_hours', $stages_id)?>
              </span>
            </li>

        <?php endforeach; ?>
           
          </ul> 
          <button class="btn modal-btn" type="button">
        <?php the_field('hero_btn');?>
         </button> 
        </div>
      </section>

    <?php get_template_part('tmp/team'); ?>

      <section class="section stages stages--advantages">
        <div class="container">
          <div class="section-heading">
            <h2 class="title">
              <?php the_field('advantages_title');?>
            </h2>
            <p> 
               <?php the_field('advantages_text');?>
            </p>
          </div>
          <ul class="stages__list stages__list--advantages">
           <?php $advantages_list = get_field('advantages_list'); ?>

           <?php foreach ($advantages_list as $advantages_id):?>

            <li class="<?php echo get_field('advantages_icon', $advantages_id); ?>">
              <p>
                <?php echo get_the_title($advantages_id)?>
              </p>
            </li>

        <?php endforeach; ?>
          </ul>
            <a class="btn" href="<?php echo esc_url(get_field('advantages_all')['url']); ?>"> 
            <?php the_field('advantages_btn'); ?>
           </a>
        </div>
      </section>

      <section class="reviews section">
        <div class="container">
          <div class="reviews__inner">
            <h2 class="title"> 
              <?php the_field('reviews_title'); ?>
            </h2>
            <div class="reviews__nav"> <button class="slider-btn slider-btn--prev" type="button"></button> <button
                class="slider-btn slider-btn--next" type="button"></button> </div>
          </div>

          <div class="reviews__slider">
            <ul class="reviews__list swiper-wrapper">

             <?php $reviews_list = get_field('reviews_list'); ?>

              <?php foreach ($reviews_list as $reviews_id):?>

              <li class="reviews__item swiper-slide">
                <blockquote class="reviews__blockqoute">
                  <p> <?php the_field('reviews_descr', $reviews_id)?></p>
                  <div class="reviews__content"> 
                    <cite class="reviews__author">
                     <?php echo get_the_title($reviews_id)?>
                  </cite>
                    <div class="reviews__links"> 
                      <a class="link" href="<?php the_field('reviews_job', $reviews_id)?>" target="_blank">
                         <?php
                          $current_lang = pll_current_language();
                          if ('ua' === $current_lang): ?>
                       Перейти на сайт
                          <?php elseif ('ru' === $current_lang): ?>
                        До
                          <?php else: ?>
                        Go to the website
                          <?php endif; ?>
                      </a> 
                      <a class="link link--view" href="<?php the_field('reviews_lang', $reviews_id)?>" target="_blank">
                         <?php
                          $current_lang = pll_current_language();
                          if ('ua' === $current_lang): ?>
                     Переглянути в оригіналі
                          <?php elseif ('ru' === $current_lang): ?>
                        До
                          <?php else: ?>
                        View in original
                          <?php endif; ?>
                      </a>
                       </div>
                  </div>
                </blockquote>
                <div class="reviews__image">
                  <img src="<?php echo get_the_post_thumbnail_url($reviews_id, 'full');?>"
                  alt="<?php echo get_the_title($reviews_id)?>" 
                    width="380" height="175" loading="lazy">
                  </div>
              </li>
             
              <?php endforeach; ?>
            </ul>
          </div>

           <a class="btn btn--transparent" href="<?php echo esc_url(get_field('reviews_link')['url']); ?>"> 
            <?php the_field('reviews_btn'); ?>
           </a>
        </div>
      </section>

      <section class="blog section">
        <div class="container">
          <div class="wrapper">
            <div class="section-heading">
              <h2 class="title">
                <?php the_field('blog_title');?>
              </h2>
              <p>
                <?php the_field('blog_text'); ?>
              </p>
            </div>
            <div class="blog__slider swiper">
              <ul class="blog__slider-wrapper swiper-wrapper">

               <?php
                $my_posts = get_posts( array(
                'numberposts'      => 6,
                'category_name'    => 'news',
                'orderby'          => 'date',
                'order'            => 'ASC',
                'post_type'        => 'post',
                'suppress_filters' => true // подавлення роботи фільтрів зміни SQL запиту
                ) );

                global $post;

                
                foreach( $my_posts as $post ) {
                  setup_postdata( $post );
                  // Виведення заголовка посту або інших даних
                ?>

                <li class="blog__item swiper-slide  <?php the_field('blog_category'); ?>">
                  <article>
                     <a href="<?php the_permalink(); ?>">
                      <header> <span></span>
                        <div> <span><?php the_time('d.m.y');?></span> 
                        <span>
                          <?php the_field('blog_read');?>
                        </span> 
                      </div>
                      </header>
                      <h3> <?php the_title();?>
                         </h3>
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
                    </a> </article>
                </li>

                   <?php 
              }

                wp_reset_postdata(); // Скидання глобального об'єкта посту
               
                ?>
      
              </ul> 
              <button class="blog__slider-button blog__slider-button--prev" type="button"></button> <button
                class="blog__slider-button blog__slider-button--next" type="button"></button>
            </div> 
            
          <a class="btn" href="<?php echo esc_url(get_field('blog_all')['url']); ?>">
         <?php the_field('blog_btn');?>
        </a>
        
          </div>
        </div>
      </section>
      
      <section class="faq section">
        <div class="container">
          <div class="section-heading">
            <h2 class="title">FAQ</h2>
          </div>
    <ul class="faq__list faq__list--home">
  <?php 
  $faq_count = get_field('faq_count'); 
  ?>


  <li class="faq__item"> 
    <span>Ви:</span>
    <p><?php the_field('faq_question'); ?></p>
  </li>

 
  <?php for ($counter = 1; $counter <= $faq_count; $counter++): ?> 
    <li class="faq__item faq__item--manager">
      <span>Менеджер:</span>
      <p>
        <?php the_field('faq_anwerse' . $counter); ?> 

        <?php 
        $sub_link = get_field('faq_link' . $counter); 
        if ($sub_link): ?>
          <a href="<?php echo esc_url($sub_link['url']); ?>">
            <?php echo esc_html(pll__('Детальніше')); ?>
          </a>
        <?php endif; ?>
      </p>
    </li>
  <?php endfor; ?>
</ul>


        </div>
      </section>

     <?php get_template_part('tmp/contacts'); ?>

      </main>

      <?php get_footer();?>