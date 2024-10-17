<?php
/*
  Template name: Шаблон для Сторінки Single-services

*/
get_header();
?>

 <main class="main main--top">
      <section class="section services services--article">
        <div class="container">
          <div class="wrapper"> <a class="link" href="<?php echo esc_url(get_field('services_back')['url']); ?>">Go back</a>
            <div class="services__inner">
              <div class="section-heading">
                <h1 class="title"> 
                  <?php the_title(); ?>
                </h1>
                <p> 
                  <?php the_field('services_subtext'); ?>
                </p>
              </div> 
              <span>
                  <?php the_field('services_price'); ?>
              </span>
            </div>
            <h2 class="title">
                <?php the_field('services_subtitle'); ?>
            </h2>
            <ul class="services__list">

          <?php 
       $service_count = get_field('service_count'); 
           $counter = 1; 
         ?>

        <?php while ($counter <= $service_count): ?> 
        <li class="services__item">
        <article class="service-card">
        <h3><?php the_field('service_title' . $counter); ?></h3>
        <p><?php the_field('service_desc' . $counter); ?></p>
        </article>
        </li>

      <?php $counter++; ?>
      <?php endwhile; ?>

            </ul>
          </div>
        </div>
      </section>

   <section class="section stages stages--services">
  <div class="container">
    <div class="section-heading">
      <h2 class="title"> 
        <?php the_field('services_stages'); ?>
      </h2>
    </div>
    <ul class="stages__list stages__list--services">
      <?php $stages_list = get_field('stages_list'); ?>
      <?php foreach ($stages_list as $stages_id): ?>
        <li class="<?php echo get_field('stages_card', $stages_id); ?>">
          <h3><?php echo get_the_title($stages_id); ?></h3>
          <p><?php the_field('stages_desc', $stages_id); ?></p> 
          <span><?php the_field('stages_hours', $stages_id); ?></span>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
  
<script>
document.addEventListener('DOMContentLoaded', function() {
    const stagesItems = document.querySelectorAll('.stages__item');
    const count = stagesItems.length;

    if (count % 2 !== 0) {
        const lastItem = stagesItems[count - 1];
        lastItem.classList.add('last-odd'); //  'last-odd'
    }
});
</script>

</section>
      <?php get_template_part('tmp/team'); ?>

      <?php get_template_part('tmp/portfolio'); ?>
      
      <?php get_template_part('tmp/contacts'); ?>
    </main>

    <?php get_footer();?>

