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

            <ul class="services__list" data-items="1">

             <?php
                $my_posts = get_posts( array(
                'numberposts'      => 6,
                'category_name'    => 'services',
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

              <li class="services__item">
                <article class="   <?php the_field('services_card'); ?>"> <a href="#">
                    <h3> 
                      <?php the_title();?>
                  </h3>
                    <p> 
                      <?php the_field('services_desc'); ?>
                    </p>
                    <div class="service-card__price"> <span> Up to </span> <span>  <?php the_field('services_price'); ?> </span> </div>
                  </a> </article>
              </li>

              <?php 

              }

                wp_reset_postdata(); // Скидання глобального об'єкта посту
               
                ?>
             
            </ul> <a class="btn" href="#"> View all services </a>
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
            <div class="portfolio__nav"> <button class="slider-btn slider-btn--prev" type="button"></button> <button
                class="slider-btn slider-btn--next" type="button"></button> </div>
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