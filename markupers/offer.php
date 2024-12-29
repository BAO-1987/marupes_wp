<?php
/*
Template Name: offer
*/
?>

<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header();

?>

<main class="main main--top">

  <section class="offer section">
   
    <div class="container">

     <div class="wrapper">

      <div class="section-heading">

       <span>
           <?php echo get_the_date('d.m.y');?>
        </span>

        <h1 class="title">
          <?php the_title();?>
        </h1>

        <p>
          <?php echo get_field('description'); ?>
        </p>
      </div>
     
    <a class="link link--download" href="<?php the_field('pdf'); ?>" download="">
        <?php the_field('button_content'); ?>
    </a>

      <?php the_content(); ?>

    </div>

    </div>

  </section>



  <!-- Ending of the <main> tag in the footer.php -->
  <?php get_footer('social'); ?>