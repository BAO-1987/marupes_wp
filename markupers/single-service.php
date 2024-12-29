<?php
/*
Template Name: single-service
*/
?>

<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header();

?>

<main class="main main--top">

  <section class="section services services--article">
    <div class="container">
      <div class="wrapper">
        <?php

       if ( $return_url = wp_get_referer() ) : ?>
        <a class="link" href="<?php echo esc_url( $return_url ); ?>">
          Back
        </a>
        <?php endif; ?>


        <div class="services__inner">
          <div class="section-heading">
            <h1 class="title">
              <?php the_title();?>
            </h1>

            <p>
              <?php echo get_field('description'); ?>
            </p>
          </div>

          <span>
            <?php echo get_field('price'); ?>
          </span>
        </div>

        <h2 class="title">
          <?php echo get_field('why_section')['title']; ?>
        </h2>

        <ul class="services__list">

          <li class="services__item">
            <article class="service-card">
              <h3>
                <?php echo get_field('why_section')['first']['subtitle']; ?>
              </h3>

              <p>
                <?php echo get_field('why_section')['first']['description']; ?>
              </p>
            </article>
          </li>

          <li class="services__item">
            <article class="service-card">
              <h3>
                <?php echo get_field('why_section')['second']['subtitle']; ?>
              </h3>

              <p>
                <?php echo get_field('why_section')['second']['description']; ?>
              </p>
            </article>
          </li>

          <li class="services__item">
            <article class="service-card">
              <h3>
                <?php echo get_field('why_section')['third']['subtitle']; ?>
              </h3>

              <p>
                <?php echo get_field('why_section')['third']['description']; ?>
              </p>
            </article>
          </li>

          <li class="services__item">
            <article class="service-card">
              <h3>
                <?php echo get_field('why_section')['fourth']['subtitle']; ?>
              </h3>

              <p>
                <?php echo get_field('why_section')['fourth']['description']; ?>
              </p>
            </article>
          </li>
        </ul>

      </div>
    </div>
  </section>

  <section class="section stages stages--services">

    <div class="container">


      <div class="section-heading">
        <h2 class="title">
          <?php echo get_field('stages_section')['title']; ?>
        </h2>

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

    </div>

  </section>

  <section class="section team team--reduced">

    <div class="container">
      <div class="section-heading">
        <h2 class="title">
          <?php echo get_field('team_section')['title']; ?>
        </h2>
      </div>

      <div class="team__slider">
        <ul class="team__list swiper-wrapper">
          <?php $team_members = get_field('team_section')['specialists'];
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

  <section class="portfolio section">
  <div class="container">
    <?php 
   
    $portfolio_section = get_field('portfolio_section');

    if ($portfolio_section && $portfolio_section['title'] && $portfolio_section['projects_list']):
    ?>
      <div class="portfolio__inner">
        <div class="section-heading">
          <h2 class="title">
            <?php echo esc_html($portfolio_section['title']); ?>
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
          $portfolio_items = $portfolio_section['projects_list'];

          if ($portfolio_items):
            foreach ($portfolio_items as $portfolio_item):
          ?>
          <li class="portfolio__item swiper-slide">
            <div class="portfolio__image">
              <img src="<?php echo get_the_post_thumbnail_url($portfolio_item, 'full'); ?>"
                alt="<?php echo esc_attr(get_the_title($portfolio_item)); ?>" width="930" height="465" loading="lazy">
            </div>

            <div class="portfolio__content">
              <h3><?php echo esc_html(get_the_title($portfolio_item)); ?></h3>

              <dl class="portfolio__details">
                <?php
                $project_details = get_field_object('project_details', $portfolio_item)['value'];
                if ($project_details):
                  foreach ($project_details as $key => $project_detail):
                    if ($project_detail !== ""):
                ?>
                <div class="portfolio__detail">
                  <dt><?php echo esc_html(str_replace('_', ' ', $key)); ?></dt>
                  <span></span>
                  <dd><?php echo esc_html($project_detail); ?></dd>
                </div>
                <?php
                    endif;
                  endforeach;
                endif;
                ?>
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
                <a class="btn btn--transparent" href="<?php echo esc_url(get_permalink($portfolio_item)); ?>">
                  Learn more
                </a>
                <a class="link" href="<?php echo esc_url(get_field('project_website', $portfolio_item)); ?>" target="_blank">
                  Go to the website
                </a>
              </div>
            </div>
          </li>
          <?php endforeach; ?>
          <?php endif; ?>
        </ul>
      </div>
    </div>
    <?php endif; ?>
  </div>
</section>


</main>


<!-- Ending of the <main> tag in the footer.php -->
<?php get_footer(); ?>