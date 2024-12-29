<?php
/*
Template Name: faq
*/
?>

<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header();

?>


<main class="main main--top">
  <section class="faq faq--main section">
    <div class="container">
      <div class="section-heading">
        <h1 class="title">
          <?php the_title();?>
        </h1>
      </div>

      <ul class="faq__list">

        <?php 
            $faq_count = get_field('faq_section')['count'];  
            $counter = 1; 
            ?>

        <?php while ($counter <= $faq_count): ?>
        <li class="faq__item faq__item--client">
          <a class="faq__link" href="#time<?php echo $counter; ?>">
            <span>
              You:
            </span>
            <p>
              <?php  echo (get_field('faq_section')['question' . $counter]); ?>
            </p>
          </a>
        </li>

        <li class="faq__item faq__item--manager faq__panels" id="time<?php echo $counter; ?>">
          <div>
            <span>
              Manager:
            </span>
            <p>
              <?php echo (get_field('faq_section')['answer' . $counter]); ?>
              <?php
          if ($counter === 2) {
            $link = get_field('faq_section')['link'];
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
          </div>
        </li>

        <?php $counter++; ?>
        <?php endwhile; ?>
      </ul>

    </div>
  </section>


  <!-- Ending of the <main> tag in the footer.php -->

  <?php get_footer(); ?>