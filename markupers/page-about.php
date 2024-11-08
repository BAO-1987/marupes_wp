<?php
/*
  Template name: Шаблон для Сторінки About

*/
get_header();
?>

 <main class="main main--top">

  <div class="about section">
        <div class="container">
          <div class="wrapper">
            <h1 class="title"> 
              <?php the_title();?>
            </h1>
           
            <?php the_field('about_desc');?>
          </div>
        </div>
  </div>

   <?php get_template_part('tmp/team'); ?>

   <section class="section seo">
        <div class="container">
          <div class="seo__inner">
            <div class="seo__image"> 
               <img  src="<?php echo get_field('seo_image') ['url'];?>"
                  alt="<?php echo get_field('seo_image')['alt'] ?>" 
            width="390" height="390"
                loading="lazy">
           </div>
            <blockquote class="seo__desc">
              <p> 
                <?php the_field('seo_cite');?>
              </p> <cite> 
                <?php the_field('seo');?>
                 </cite>
            </blockquote>
          </div>
        </div>
   </section>

   
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
        </div>
      </section>

      <section class="section seo seo--reverse">
        <div class="container">
          <div class="seo__inner">
            <blockquote class="seo__desc">
              <p> 
                <?php the_field('seo_cite2');?>
              </p> <cite> 
                <?php the_field('seo2');?>
                 </cite>
            </blockquote>

                  <div class="seo__image"> 
               <img  src="<?php echo get_field('seo_image2') ['url'];?>"
                  alt="<?php echo get_field('seo_image2')['alt'] ?>" 
            width="390" height="390"
                loading="lazy">
           </div>
          </div>
        </div>
      </section>

        <section class="section blog blog--about">
        <div class="container">
          <div class="wrapper">
            <div class="section-heading">
              <h2 class="title">
                 <?php the_field('about_news');?>
              </h2>
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

                <li class="blog__item ">
                  <article>
                     <a href="<?php the_permalink(); ?>">
                      <header> <span></span>
                        <div> <span><?php the_time('d.m.y');?></span> <span>3 m</span> </div>
                      </header>
                      <h3> <?php the_title();?>
                         </h3> <span class="link">Go to the news</span>
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
              <a class="btn" href="<?php echo esc_url(get_field('about_news_all')['url']); ?>">
         <?php the_field('about_news_btn');?>
        </a>
          </div>
        </div>
      </section>

      <?php get_template_part('tmp/portfolio'); ?>
      
      <?php get_template_part('tmp/contacts'); ?>
    </main>

    <?php get_footer();?>

