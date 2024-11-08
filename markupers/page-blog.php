<?php
/*
  Template name: Шаблон для Сторінки Blog
*/
get_header();
?>

 <main class="main main--top">
    <h1 class="sr-only">
       <?php the_field('blog_subtitle');?>
    </h1>

      <section class="blog blog--main section">

        <div class="tabs">
          <div class="container">
            <div class="wrapper">

              <h2 class="title">
               <?php the_title();?>
              </h2>

              <ul class="tabs__nav">
                <li class="tabs__item">
                  <a class="tabs__link" href="#news">News</a>
                </li>

                <li class="tabs__item">
                  <a class="tabs__link" href="#lessons">Lessons videos</a>
                </li>
              </ul>

              <nav class="custom-checker is-scrolling">
                <ul class="custom-checker__list">
                  <li class="custom-checker__item ">
                    <input class="custom-checker__input" type="radio" name="category" value="all" id="allCategories" checked="">
                    <label class="custom-checker__label" for="allCategories">
                      All
                    </label>
                  </li>

                  <li class="custom-checker__item ">
                    <input class="custom-checker__input" type="radio" name="category" value="company" id="company">
                    <label class="custom-checker__label" for="company">
                      Company
                    </label>
                  </li>

                  <li class="custom-checker__item ">
                    <input class="custom-checker__input" type="radio" name="category" value="design" id="design">
                    <label class="custom-checker__label" for="design">
                      Design
                    </label>
                  </li>

                  <li class="custom-checker__item ">
                    <input class="custom-checker__input" type="radio" name="category" value="webdev" id="webdev">
                    <label class="custom-checker__label" for="webdev">
                      Web-dev
                    </label>
                  </li>

                  <li class="custom-checker__item ">
                    <input class="custom-checker__input" type="radio" name="category" value="smm" id="smm">
                    <label class="custom-checker__label" for="smm">
                      SMM
                    </label>
                  </li>

                  <li class="custom-checker__item ">
                    <input class="custom-checker__input" type="radio" name="category" value="seo" id="seo">
                    <label class="custom-checker__label" for="seo">
                      SEO
                    </label>
                  </li>
                </ul>
              </nav>

      <div class="tabs__panels">
      

       <div id="news">
   <ul class="blog__list">
       <?php
       $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
       $query = new WP_Query( array(
           'posts_per_page' => 2,
           'category_name'  => 'news',
           'orderby'        => 'date',
           'order'          => 'ASC',
           'post_type'      => 'post',
           'paged'          => $paged
       ) );

       if ( $query->have_posts() ) {
           while ( $query->have_posts() ) {
               $query->the_post();
       ?>

       <li class="blog__item services__item <?php the_field('blog_category'); ?>">
           <article>
               <a href="<?php the_permalink(); ?>">
                   <header>
                       <span></span>
                       <div>
                           <span><?php the_time('d.m.y'); ?></span> 
                           <span><?php the_field('blog_read'); ?></span> 
                       </div>
                   </header>
                   <h3><?php the_title(); ?></h3> 
                   <span class="link">Go to the news</span>
               </a>
           </article>
       </li>

       <?php 
           }
       } else {
           echo '<p>Новини не знайдено</p>';
       }

       wp_reset_postdata();
       ?>
   </ul>

   <nav class="pagination" aria-label="pagination">
         <?php 
       echo paginate_links( array(
           'total'        => $query->max_num_pages,
           'current'      => $paged,
           'end_size'     => 1,
           'mid_size'     => 2,
           'prev_text'    => '',
           'next_text'    => __('<span class="btn btn--pagination">Load next</span>'),
           'type'         => 'list',
       ) );
       ?>
   </nav>
</div>

      <div id="lessons">
        <ul class="blog__list blog__list--video">

      <?php
       $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
       $query = new WP_Query( array(
           'posts_per_page' => 1,
           'category_name'  => 'lessons',
           'orderby'        => 'date',
           'order'          => 'ASC',
           'post_type'      => 'post',
           'paged'          => $paged
       ) );

       if ( $query->have_posts() ) {
           while ( $query->have_posts() ) {
               $query->the_post();
       ?>

              <li class="blog__item services__item <?php the_field('lesson_category'); ?>">
                      <article>
                        <div class="blog__categories">
                          <span>
                           <?php the_field('lessons_category'); ?>
                          </span>
                          <span>
                            <?php the_time('d.m.y'); ?>
                          </span>
                          <span>
                        <?php the_field('lessons_watch'); ?>
                          </span>
                          <span>
                            1K views
                          </span>
                        </div>

                        <h3>
                         <?php the_title(); ?>
                        </h3>

                        <div class="blog__iframe">
                       <?php 
          $lessons_link = get_field('lessons_link'); 

             if ($lessons_link) {
                 echo $lessons_link; // Виведення значення, якщо поле заповнене
             } else {
           echo 'Поле не заповнене'; // Повідомлення, якщо поле порожнє
             }
             ?>
                        </div>
                      </article>
                    </li>

                     <?php 
           }
       } else {
           echo '<p>Новини не знайдено</p>';
       }

       wp_reset_postdata();
       ?>

                  </ul>

                   <nav class="pagination" aria-label="pagination">
         <?php 
       echo paginate_links( array(
           'total'        => $query->max_num_pages,
           'current'      => $paged,
           'end_size'     => 1,
           'mid_size'     => 2,
           'prev_text'    => '',
           'next_text'    => __('<span class="btn btn--pagination">Load next</span>'),
           'type'         => 'list',
       ) );
       ?>
   </nav>
                </div>

              </div>

            </div>
          </div>

         </div>
    </section>

     <?php get_template_part('tmp/contacts'); ?>

    
    </main>

    <?php
     get_footer();
     ?>
