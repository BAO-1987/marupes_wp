<?php
/*
  Template name: Шаблон для Сторінки Our-services

*/

get_header();

?>

  <main class="main main--top">
      <h1 class="sr-only">Our services</h1>
      <section class="section services services--filter">
        <div class="container">
          <div class="wrapper">
            <div class="section-heading">
              <h2 class="title">
                <?php the_title();?>
              </h2>
            </div>

            <nav class="custom-checker is-scrolling">
              <ul class="custom-checker__list">
                <li class="custom-checker__item"> <input class="custom-checker__input" type="radio" name="category"
                    value="all" id="allCategories" checked> <label class="custom-checker__label" for="allCategories">
                    All </label> </li>
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
            
            <ul class="services__list" data-items="1">

             <?php
                $my_posts = get_posts( array(
                'numberposts'      => -1,
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

              <li class="services__item <?php the_field('services_category'); ?>">
                <article class=" <?php the_field('services_card'); ?>"> <a href="<?php echo esc_url(get_field('services_link')['url']); ?>">
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
             
            </ul> 

            <p> If you can't decide, our manager will definitely help you choose the way your business succeeds for free
            </p> <button class="btn modal-btn" type="button">Order a consultation</button>
          </div>
        </div>
      </section>

        <?php get_template_part('tmp/contacts'); ?>
      
    </main>

         <?php get_footer('social');?>

