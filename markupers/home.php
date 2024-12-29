<?php
/*
Template Name: home
*/
?>

<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header();

?>

<main class="main main--home">
    <section class="hero">

        <canvas class="canvas"></canvas>

        <div class="container">
            <div class="hero__inner">
                <?php get_template_part('template-parts/socials-menu'); ?>

                <div class="hero__content ">
                    <h1>
                        <?php echo get_field('hero_section')['title']; ?>
                    </h1>

                    <button class="btn modal-btn" type="button">
                        <?php echo get_field('hero_section')['button_content']; ?>
                    </button>
                </div>

                <ul class="lang">
                    <li>
                        <a class="active" href="#">eng</a>
                    </li>
                    <li>
                        <a href="#">ua</a>
                    </li>
                    <li>
                        <a href="#">ru</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section services">
        <div class="container">
            <div class="wrapper">
                <div class="section-heading">
                    <h2 class="title">
                        <?php echo get_field('services_section')['title']; ?>
                    </h2>

                    <p>
                        <?php echo get_field('services_section')['description']; ?>
                    </p>
                </div>

                <ul class="services__list" data-items="1">

                    <?php
                    $services_links = get_field('services_section')['services'];

                    if ($services_links): ?>
                        <?php foreach ($services_links as $service_link): ?>
                            <li class="<?php echo get_field('services_item', $service_link); ?>">
                                <article class="service-card">
                                    <a href="<?php echo get_permalink($service_link); ?>">

                                        <h3>
                                            <span style="background-image: url('<?php echo get_field('icon', $service_link); ?>');"></span>
                                            <?php echo get_the_title($service_link); ?>
                                        </h3>

                                        <p>
                                            <?php echo get_field('short_description', $service_link); ?>
                                        </p>

                                        <div class="service-card__price">
                                            <span>Up to</span>
                                            <span>
                                                <?php echo get_field('price', $service_link); ?>
                                            </span>
                                        </div>
                                    </a>
                                </article>
                            </li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>

                <a class="btn" href="<?php echo get_permalink(get_page_by_path('services')); ?>">
                    View all services
                </a>
            </div>
        </div>
    </section>

    <section class="portfolio section">
        <div class="container">

            <div class="portfolio__inner">

                <div class="section-heading">
                    <h2 class="title">
                        <?php echo get_field('portfolio_section')['title']; ?>
                    </h2>

                    <p>
                        <?php echo get_field('portfolio_section')['description']; ?>
                    </p>

                </div>

                <div class="portfolio__nav">
                    <button class="slider-btn slider-btn--prev" type="button"></button>
                    <button class="slider-btn slider-btn--next" type="button"></button>
                </div>

            </div>

            <div class="portfolio__slider">

                <ul class="portfolio__list swiper-wrapper">

                    <?php
                    $portfolio_items = get_field('portfolio_section')['projects_list'];

                    if ($portfolio_items): ?>

                        <?php foreach ($portfolio_items as $portfolio_item): ?>
                            <li class="portfolio__item swiper-slide">
                                <div class="portfolio__image">
                                    <img src="<?php echo get_the_post_thumbnail_url($portfolio_item, 'full'); ?>"
                                         alt="<?php echo get_the_title($portfolio_item); ?>" width="930" height="465"
                                         loading="lazy">
                                </div>

                                <div class="portfolio__content">
                                    <h3><?php echo get_the_title($portfolio_item); ?></h3>

                                    <dl class="portfolio__details">
                                        <?php
                                        $project_details = get_field_object('project_details', $portfolio_item)['value'];

                                        foreach ($project_details as $key => $project_detail): ?>
                                            <?php if ($project_detail !== ""): ?>

                                                <div class="portfolio__detail">
                                                    <dt><?php echo str_replace('_', ' ', $key); ?></dt>

                                                    <span></span>

                                                    <dd><?php echo $project_detail ?></dd>
                                                </div>

                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </dl>

                                    <span class="portfolio__category">
                                        <?php
                                        $project_tags = wp_get_post_tags($portfolio_item);
                                        $tags_amount = count($project_tags);


                                        foreach ($project_tags as $index => $project_tag) {
                                            echo esc_html($project_tag->name);
                                            if ($index < $tags_amount - 1) {
                                                echo ', ';
                                            }
                                        }
                                        ?>
                                    </span>

                                    <div class="portfolio__btns">
                                        <a class="btn btn--transparent"
                                           href="<?php echo get_permalink($portfolio_item); ?>">Learn more</a>

                                        <a class="link"
                                           href="<?php echo get_field('project_website', $portfolio_item) ?>"
                                           target="_blank">Go to the website</a>
                                    </div>
                                </div>
                            </li>

                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
            </div>

            <a class="btn" href="<?php echo get_permalink(get_page_by_path('portfolio')); ?>">View all projects</a>
        </div>

    </section>

    <section class="section stages">
        <div class="container">

            <div class="section-heading">
                <h2 class="title">
                    <?php echo get_field('stages_section')['title']; ?>
                </h2>

                <p><?php echo get_field('stages_section')['description']; ?></p>
            </div>

            <ul class="stages__list">
                <?php $stages_items = get_field('stages_section')['stages'];
                if ($stages_items): ?>

                    <?php foreach ($stages_items as $stages_item): ?>
                        <li class="stages__item">
                            <h3><?php echo get_the_title($stages_item); ?></h3>
                            <p><?php echo wp_strip_all_tags(apply_filters('the_content', get_post($stages_item)->post_content)); ?></p>
                            <span><?php echo get_field('hours', $stages_item); ?></span>
                            <span class="stages__icon"
                                  style="background-image: url('<?php echo get_the_post_thumbnail_url($stages_item, 'full'); ?>');"></span>
                        </li>
                    <?php endforeach; ?>
                <?php endif; ?>
            </ul>

            <button class="btn modal-btn" type="button">Order a consultation</button>
        </div>
    </section>

    <section class="section team">
        <div class="container">
            <div class="section-heading">
                <h2 class="title"><?php echo get_field('team_section')['title']; ?></h2>

                <p><?php echo get_field('team_section')['description']; ?></p>
            </div>

            <div class="team__slider">
                <ul class="team__list swiper-wrapper">
                    <?php $team_members = get_field('team_section')['team_list'];
                    if ($team_members): ?>

                        <?php foreach ($team_members as $team_member): ?>

                            <li class="team__member swiper-slide">
                                <img class="team__img"
                                     src="<?php echo get_the_post_thumbnail_url($team_member, 'full') ?>"
                                     alt="<?php echo get_the_title($team_member) ?>" width="270"
                                     height="406" loading="lazy">

                                <div class="team__person-info">
                                    <h3 class="team__name"><?php echo get_the_title($team_member) ?></h3>

                                    <p class="team__position"><?php echo get_field('position', $team_member) ?></p>
                                </div>

                                <ul class="social">
                                    <?php $member_socials = [
                                        'instagram' => get_field_object('instagram_page', $team_member),
                                        'facebook' => get_field_object('facebook_page', $team_member),
                                        'linkedin' => get_field_object('linked_in_page', $team_member),
                                    ];

                                    foreach ($member_socials as $member_social): ?>
                                        <?php $class_flag = '';

                                        switch ($member_social['name']) {
                                            case 'instagram_page':
                                                $class_flag = '--in';
                                                break;
                                            case 'facebook_page':
                                                $class_flag = '--fb';
                                                break;
                                            case 'linked_in_page':
                                                $class_flag = '--ln';
                                                break;
                                        } ?>

                                        <?php if (!empty($member_social['value'])): ?>
                                            <li class="social__item">
                                                <a class="social__link social__link<?php echo $class_flag ?>"
                                                   href="<?php echo $member_social['value'] ?>" target="_blank"></a>
                                            </li>

                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </ul>
                            </li>

                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>

                <div class="team__pagination swiper-pagination"></div>
            </div>
        </div>
    </section>

    <section class="stages stages--advantages section">

        <div class="container">

            <div class="section-heading">
                <h2 class="title"><?php echo get_field('benefits_section')['title']; ?></h2>

                <p><?php echo get_field('benefits_section')['description'] ?></p>

            </div>

            <ul class="stages__list stages__list--advantages">
                <?php $benefits_items = get_field('benefits_section')['services'];
                foreach ($benefits_items as $benefits_item): ?>

                    <?php if ($benefits_item): ?>
                        <li class="stages__item stages__item--solutions">
                            <p>
                                <?php echo wp_strip_all_tags(apply_filters('the_content', get_post($benefits_item)->post_content)); ?>
                            </p>
                            <span class="stages__icon"
                                  style="background-image: url('<?php echo get_the_post_thumbnail_url($benefits_item) ?>')"></span>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>

            <a class="btn" href="<?php echo get_permalink(get_page_by_path('services')); ?>">Learn more</a>
        </div>
    </section>

    <section class="reviews section">
        <div class="container">

            <div class="reviews__inner">
                <h2 class="title">
                    <?php echo get_field('reviews_section')['title']; ?>
                </h2>

                <div class="reviews__nav">
                    <button class="slider-btn slider-btn--prev" type="button"></button>
                    <button class="slider-btn slider-btn--next" type="button"></button>
                </div>
            </div>

            <div class="reviews__slider">
                <ul class="reviews__list swiper-wrapper">
                    <?php $reviews_items = get_field('reviews_section')['reviews_items'];
                    foreach ($reviews_items as $reviews_item): ?>
                        <?php if ($reviews_item): ?>

                            <li class="reviews__item swiper-slide">
                                <blockquote class="reviews__blockqoute">
                                    <p>
                                        <?php echo wp_strip_all_tags(apply_filters('the_content', get_post($reviews_item)->post_content)); ?>
                                    </p>

                                    <div class="reviews__content">
                                        <cite class="reviews__author">
                                            <?php echo get_field('review_author', $reviews_item); ?>
                                        </cite>

                                        <div class="reviews__links">
                                            <a class="link" href="<?php echo get_field('project_link', $reviews_item); ?>">Go to the website</a>
                                            <a class="link link--view" href="<?php echo get_permalink($reviews_item); ?>">View in original</a>
                                        </div>
                                    </div>
                                </blockquote>

                                <div class="reviews__image">
                                    <img src="<?php echo get_the_post_thumbnail_url($reviews_item, 'full'); ?>" alt="<?php echo get_the_title($reviews_item); ?>" width="380" height="175"
                                         loading="lazy">
                                </div>
                            </li>

                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
            </div>

            <a class="btn btn--transparent" href="<?php echo  get_permalink(get_page_by_path('portfolio/reviews')); ?>">
                View all reviews
            </a>

        </div>
    </section>

    <section class="section blog">
        <div class="container">
            <div class="wrapper">
                <div class="section-heading">
                    <h2 class="title"><?php echo get_field('blog_section')['title']; ?></h2>

                    <p>
                        <?php echo get_field('blog_section')['description']; ?>
                    </p>
                </div>
                          
              <?php echo get_template_part('template-parts/posts-slider'); ?>

               <a class="btn" href="<?php echo get_permalink(get_page_by_path('blog')); ?>">
                    View all news
                </a>

          </div>
    </section>

      
    <section class="faq section">
        <div class="container">
            <div class="section-heading">
              <h2 class="title">
                <?php echo get_field('faq_section')['title'];?>
              </h2>
          </div>
       
         <ul class="faq__list faq__list--home">
           <?php $faq_count = get_field('faq_section')['count'];?>
  
            <li class="faq__item">
              <span>You:</span>
             <p>
             <?php echo (get_field('faq_section')['question']); ?>
             </p>
            </li>
  
            <?php for ($counter = 1; $counter <= $faq_count; $counter++): ?>

            <li class="faq__item faq__item--manager">
              <span>Manager:</span>

             <p>
             <?php echo (get_field('faq_section')['answer' . $counter]); ?>

          <?php
          if ($counter !== 1) {
            $link = get_field('faq_section')['link' . $counter];
            if ($link && is_array($link) && isset($link['url'])):
          ?>
               <a href="<?php echo esc_url($link['url']); ?>" target="<?php echo esc_attr($link['target']); ?>">
                <?php echo esc_html($link['title']); ?>
               </a>
          <?php 
            endif;
          }
          ?>
             </p>
          </li>
                 <?php endfor; ?>
        </ul>

        </div>
    </section>
 

<!-- Ending of the <main> tag in the footer.php -->
<?php get_footer(); ?>