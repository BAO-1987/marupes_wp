<!DOCTYPE html>
<html <?php language_attributes(); ?> class="page">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="color-scheme" content="dark light">
<meta charset="<?php bloginfo('charset'); ?>">

<style>.page{scroll-padding-top:calc(var(--header-height))}</style>
<script>document.documentElement.setAttribute("data-theme",localStorage.getItem("theme")||"dark");</script>

  <?php wp_head(); ?>
</head>

<body class="page__body"><svg aria-hidden="true" width="0" height="0" style="position:absolute"></svg> <div class="site-container"> <header class="header header--simple"> <div class="container"> <nav class="nav"> 
  
  <a class="logo" href="<?php echo  get_home_url(); ?>">
        <?php
        $logo_img = '';
        if ($custom_logo_id = get_theme_mod('custom_logo')) {
          $logo_img = wp_get_attachment_image($custom_logo_id, 'full', false, array(
            'class' => 'logo__image',
            'width' => '181',
            'height' => '21'
          ));
        }
        echo $logo_img;
        ?>
      </a>
  
     <ul class="social"> 
        <?php
          if (is_active_sidebar('social')) {
         dynamic_sidebar('social');
         }
          ?>
       </ul>
 

</nav> </div> </header> <script>const startHeightValue=()=>{let e=1*window.innerHeight;document.querySelector(":root").style.setProperty("--vh",`${e}px`);const t=document.querySelector(".header"),r=t?t.offsetHeight:0;document.documentElement.style.setProperty("--header-height",`${r}px`)};window.addEventListener("resize",startHeightValue),window.addEventListener("scroll",startHeightValue),startHeightValue();</script>
