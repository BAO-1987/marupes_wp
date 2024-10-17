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
        <h1><?php the_field('hero_title');?>
      </h1> <button class="btn modal-btn" type="button">Order a consultation</button> 
    </div> <ul class="lang"> <li> <a class="active" href="#">eng</a> </li> <li> <a href="#">ua</a> </li> <li> <a href="#">ru</a> </li> </ul> </div> </div> </section> 

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
            <span>Up to</span> 
            <span><?php echo get_field('services_price', $services_id); ?></span>
          </div>
        </a>
      </article>
    </li>
    <?php endforeach; ?>
  </ul>
            <a class="btn" href="<?php echo esc_url(get_field('services_all')['url']); ?>">View all services</a>
          </div>
        </div>
      </section>

      <section class="portfolio section">
        <div class="container">
          <div class="portfolio__inner">
            <div class="section-heading">
              <h2 class="title"> 
                <?php the_field('portfolio_title'); ?>
                 </h2>
              <p><?php the_field('portfolio_text'); ?></p>
            </div>
            <div class="portfolio__nav"> 
              <button class="slider-btn slider-btn--prev" type="button"></button>
               <button
                class="slider-btn slider-btn--next" type="button"></button>
               </div>
          </div>
          <div class="portfolio__slider">
            <ul class="portfolio__list swiper-wrapper">

              <?php $portfolio_list = get_field('portfolio_list'); ?>

               <?php foreach ($portfolio_list as $portfolio_id):?>

              <li class="portfolio__item swiper-slide">
              
                <div class="portfolio__image"> 
                  <img  src="<?php echo get_the_post_thumbnail_url($portfolio_id, 'full');?>"
                  alt="<?php echo get_the_title($portfolio_id)?>" width="930" height="465" loading="lazy">
                  </div>

                <div class="portfolio__content">
                  <h3>
                    <?php echo get_the_title($portfolio_id)?>
                  </h3>
                  <dl class="portfolio__details">

                  <?php if (get_field('portfolio_hours', $portfolio_id)): ?> 
                    <div class="portfolio__detail">
                      <dt>Hours of work</dt> <span></span>
                      <dd><?php the_field('portfolio_hours', $portfolio_id); ?></dd>
                    </div>
                  <?php endif; ?>

                  <?php if (get_field('portfolio_specialist', $portfolio_id)): ?> 
                    <div class="portfolio__detail">
                      <dt>Specialists</dt> <span></span>
                      <dd><?php the_field('portfolio_specialist', $portfolio_id); ?></dd>
                    </div>
                  <?php endif; ?>

                  <?php if (get_field('portfolio_price', $portfolio_id)): ?> 
                    <div class="portfolio__detail">
                      <dt>Price</dt> <span></span>
                      <dd><?php the_field('portfolio_price', $portfolio_id); ?></dd>
                    </div>
                  <?php endif; ?>

                  <?php if (get_field('portfolio_commercial', $portfolio_id)): ?> 
                    <div class="portfolio__detail">
                      <dt>Click cost CPC</dt> <span></span>
                      <dd><?php the_field('portfolio_commercial', $portfolio_id); ?></dd>
                    </div>
                  <?php endif; ?>

                   <?php if (get_field('portfolio_conversion', $portfolio_id)): ?> 
                    <div class="portfolio__detail">
                      <dt>Conversion</dt> <span></span>
                      <dd><?php the_field('portfolio_conversion', $portfolio_id); ?></dd>
                    </div>
                  <?php endif; ?>

                    <?php if (get_field('portfolio_leads', $portfolio_id)): ?> 
                    <div class="portfolio__detail">
                      <dt>leads</dt> <span></span>
                      <dd><?php the_field('portfolio_leads', $portfolio_id); ?></dd>
                    </div>
                  <?php endif; ?>

                  <?php if (get_field('portfolio_coverage', $portfolio_id)): ?> 
                    <div class="portfolio__detail">
                      <dt>Coverage</dt> <span></span>
                      <dd><?php the_field('portfolio_coverage', $portfolio_id); ?></dd>
                    </div>
                  <?php endif; ?>

                  <?php if (get_field('portfolio_involvement', $portfolio_id)): ?> 
                    <div class="portfolio__detail">
                      <dt>Involvement</dt> <span></span>
                      <dd><?php the_field('portfolio_involvement', $portfolio_id); ?></dd>
                    </div>
                  <?php endif; ?>

                    <?php if (get_field('portfolio_likes', $portfolio_id)): ?> 
                    <div class="portfolio__detail">
                      <dt>Av. number of likes</dt> <span></span>
                      <dd><?php the_field('portfolio_likes', $portfolio_id); ?></dd>
                    </div>
                  <?php endif; ?>
                                
                  </dl> 

                  <span class="portfolio__category">
                    <?php the_field('portfolio_category', $portfolio_id); ?>
                  </span>
                  <div class="portfolio__btns"> <a class="btn btn--transparent" href="<?php the_field('portfolio_more', $portfolio_id); ?>">Learn more</a> <a class="link"
                      href="<?php the_field('portfolio_web', $portfolio_id); ?>" target="_blank">Go to the website</a> </div>
                </div>
              </li>

               <?php endforeach; ?>
            </ul>
          </div> <a class="btn" href="#">View all projects</a>
        </div>
      </section>

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
          <button class="btn modal-btn" type="button">Order a consultation</button>
        </div>
      </section>

      <section class="section team">
        <div class="container">
          <div class="section-heading">
         <h2 class="title"><?php the_field('team_title'); ?></h2>

            <p> <?php the_field('team_text'); ?> </p>
          </div>
          <div class="team__slider">
            <ul class="swiper-wrapper team__list">

            <?php $team_list = get_field('team_list'); ?>

          <?php foreach ($team_list as $team_id):?>
             
                <li class="swiper-slide team__member"> <img class="team__img" src="<?php echo get_the_post_thumbnail_url($team_id, 'full');?>"
                  alt="<?php echo get_the_title($team_id)?>" width="270" height="406" loading="lazy">
                <div class="team__person-info">
                  <h3 class="team__name">
                    <?php echo get_the_title($team_id)?>
                  </h3>
                  <p class="team__position">
                    <?php the_field('team_job', $team_id)?>
                  </p>
                </div>
                <ul class="social">

                <li class="social__item">

                  <?php if (get_field('team_fb', $team_id)): ?> 
         
                     <a class="social__link social__link--fb" href="
                     <?php the_field('team_fb', $team_id); ?>" target="_blank"> <span
                        class="sr-only">Facebook page</span> </a> 
                        <?php endif; ?>
                      </li>

                  <li class="social__item"> 
                       <?php if (get_field('team_ln', $team_id)): ?> 
                    <a class="social__link social__link--ln" href="<?php the_field('team_ln', $team_id); ?>" target="_blank"> <span
                        class="sr-only">Linkedin page</span> 
                      <?php endif; ?></a> 
                      </li>

                  <li class="social__item"> 
                    <?php if (get_field('team_insta', $team_id)): ?> 
                    <a class="social__link social__link--insta" href="<?php the_field('team_insta', $team_id); ?>" target="_blank"> <span
                        class="sr-only">Instagram page</span> </a>
                        <?php endif; ?>
                       </li>
                </ul>
              </li>

          <?php endforeach; ?>
           
            </ul>
            <div class="swiper-pagination team__pagination"></div>
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
          </ul> <a class="btn" href="#">Learn more</a>
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
                  <div class="reviews__content"> <cite class="reviews__author">
                     <?php echo get_the_title($reviews_id)?>
                  </cite>
                    <div class="reviews__links"> <a class="link" href="<?php the_field('reviews_job', $reviews_id)?>" target="_blank">Go to the website</a> <a
                        class="link link--view" href="<?php the_field('reviews_lang', $reviews_id)?>" target="_blank"
                        >View in original</a>
                       </div>
                  </div>
                </blockquote>
                <div class="reviews__image"> <img src="<?php echo get_the_post_thumbnail_url($reviews_id, 'full');?>"
                alt="<?php echo get_the_title($reviews_id)?>" 
                    width="380" height="175" loading="lazy"> </div>
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
              <h2 class="title">Blog</h2>
              <p> Learn more about the world of IT in design, development and marketing, as well as about our company
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

                <li class="blog__item swiper-slide">
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
            </div> <a class="btn" href="#"> View all news </a>
          </div>
        </div>
      </section>
      
      <section class="faq section">
        <div class="container">
          <div class="section-heading">
            <h2 class="title">FAQ</h2>
          </div>
          <ul class="faq__list faq__list--home">
            <li class="faq__item"> <span>You:</span>
              <p>How long does it take to develop a project?</p>
            </li>
            <li class="faq__item faq__item--manager"> <span>Manager:</span>
              <p></p>
            </li>
            <li class="faq__item faq__item--manager"> <span>Manager:</span>
              <p>Hello! Depending on...
               <a href="<?php echo esc_url(get_field('main_faq')['url']); ?>">Read more</a>
              </p>
            </li>
            <li class="faq__item faq__item--manager"> <span>Manager:</span>
              <p>You will find more answers in the section 
               <a href="<?php echo esc_url(get_field('main_faq')['url']); ?>">FAQ</a>
              </p>
            </li>
          </ul>
        </div>
      </section>

     <?php get_template_part('tmp/contacts'); ?>

      <?php get_footer();?>