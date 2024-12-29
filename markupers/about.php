<?php
/*
Template Name: about
*/
?>

<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header();

?>

<main class="main main--top">

  <div class="about section">

    <div class="container">
      <div class="wrapper">
        <h1 class="title">
          <?php echo get_field('about_section')['title']; ?>
        </h1>

        <p>
          <?php echo get_field('about_section')['description']; ?>
        </p>

        <p>
          <?php echo get_field('about_section')['description2']; ?>
        </p>
      </div>
    </div>
  </div>

  <section class="section team">

    <div class="container">
      <div class="section-heading">
        <h2 class="title">
          <?php echo get_field('team_section')['title']; ?>
        </h2>
      </div>

      <div class="team__slider">
        <ul class="team__list swiper-wrapper">
          <?php $team_members = get_field('team_section')['team_list'];
                    if ($team_members): ?>

          <?php foreach ($team_members as $team_member): ?>

          <li class="team__member swiper-slide">
            <img class="team__img" src="<?php echo get_the_post_thumbnail_url($team_member, 'full') ?>"
              alt="<?php echo get_the_title($team_member) ?>" width="270" height="406" loading="lazy">

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

  <section class="seo section">

    <div class="container">

      <div class="seo__inner">

        <div class="seo__image">
          <img src="<?php echo get_field('seo_section') ['image']['url'];?>"
            alt="<?php echo get_field('seo_section') ['image']['alt'] ?>" width="390" height="390" loading="lazy">
        </div>

        <blockquote class="seo__desc">
          <p>
            <?php echo get_field('seo_section') ['cite']?>
          </p>

          <cite>
            <?php echo get_field('seo_section') ['director']?>
          </cite>
        </blockquote>

      </div>
    </div>

  </section>

  <section class="stages stages--advantages section">

    <div class="container">

      <div class="section-heading">
        <h2 class="title">
          <h2 class="title">
            <?php echo get_field('benefits_section')['title']; ?>
          </h2>
        </h2>
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
    </div>
  </section>

  <section class="seo seo--reverse section">
    <div class="container">

      <div class="seo__inner">

        <blockquote class="seo__desc">
          <p>
            <?php echo get_field('seo_section') ['cite']?>
          </p>

          <cite>
            <?php echo get_field('seo_section') ['director']?>
          </cite>
        </blockquote>

        <div class="seo__image">
          <img src="<?php echo get_field('seo_section') ['image']['url'];?>"
            alt="<?php echo get_field('seo_section') ['image']['alt'] ?>" width="390" height="390" loading="lazy">
        </div>

      </div>

    </div>
  </section>

  <section class="section blog blog--about">
    <div class="container">
      <div class="wrapper">
        <div class="section-heading">
          <h2 class="title">
            <?php echo get_field('blog_section')['title']; ?></h2>
          </h2>
        </div>


        <?php echo get_template_part('template-parts/posts-slider'); ?>

        <a class="btn" href="<?php echo get_permalink(get_page_by_path('blog')); ?>">
          View all news
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
                alt="<?php echo get_the_title($portfolio_item); ?>" width="930" height="465" loading="lazy">
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
                <a class="btn btn--transparent" href="<?php echo get_permalink($portfolio_item); ?>">Learn more</a>

                <a class="link" href="<?php echo get_field('project_website', $portfolio_item) ?>" target="_blank">Go to
                  the website</a>
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


  <!-- Ending of the <main> tag in the footer.php -->

  <?php get_footer(); ?>