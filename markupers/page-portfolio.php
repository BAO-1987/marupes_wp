<?php
/*
  Template name: Шаблон для Сторінки Portfolio
*/
get_header();
?>

 <main class="main main--top">
    <h1 class="sr-only">Portfolio</h1>
      <section class="portfolio portfolio--main section">
        <div class="container">
          <h2 class="title">Portfolio</h2>
          <nav class="custom-checker is-scrolling">
            <ul class="custom-checker__list">
              <li class="custom-checker__item"> <input class="custom-checker__input" type="radio" name="category"
                  value="all" id="allCategories" checked> <label class="custom-checker__label" for="allCategories"> All
                </label> </li>
              <li class="custom-checker__item"> <input class="custom-checker__input" type="radio" name="category"
                  value="web-development" id="webDevelopment"> <label class="custom-checker__label"
                  for="webDevelopment"> Web-development </label> </li>
              <li class="custom-checker__item"> <input class="custom-checker__input" type="radio" name="category"
                  value="promotion" id="promotion"> <label class="custom-checker__label" for="promotion"> Promotion
                </label> </li>
              <li class="custom-checker__item"> <input class="custom-checker__input" type="radio" name="category"
                  value="support" id="support"> <label class="custom-checker__label" for="support"> Support </label>
              </li>
            </ul>
          </nav>
           <ul class="portfolio__list">

              <?php $portfolio_list = get_field('portfolio_list'); ?>

               <?php foreach ($portfolio_list as $portfolio_id):?>

              <li class="portfolio__item">
              
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
        </div>
      </section>
    </main>

    <?php
     get_footer();
     ?>
