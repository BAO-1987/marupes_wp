<?php
/*
  Template name: Шаблон для Сторінки Reviews

*/

get_header();

?>

 <main class="main main--top">
     <section class="reviews reviews--main section">
        <div class="container">
          <div class="section-heading">
            <h1 class="title"> Reviews </h1>
          </div>

           <ul class="reviews__list">

             <?php $reviews_list = get_field('reviews_list'); ?>

              <?php foreach ($reviews_list as $reviews_id):?>

              <li class="reviews__item">
                <blockquote class="reviews__blockqoute">
                  <p> <?php the_field('reviews_descr', $reviews_id)?></p>
                  <div class="reviews__content"> <cite class="reviews__author">
                     <?php echo get_the_title($reviews_id)?>
                  </cite>
                    <div class="reviews__links"> 
                      <a class="link" href="<?php the_field('reviews_job', $reviews_id)?>" target="_blank">Go to the website</a> 
                      <a class="link link--view" href="<?php the_field('reviews_lang', $reviews_id)?>"target="blank"
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
      </section>
    </main>
