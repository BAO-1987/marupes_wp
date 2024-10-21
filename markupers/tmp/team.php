 <section class="section team">
        <div class="container">
          <div class="section-heading">
         <h2 class="title">
          <?php the_field('team_title'); ?>
         </h2>
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