<?php
/*
  Template name: Шаблон для Сторінки FAQ
*/

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
  $faq_count = get_field('faq_count'); 
  $counter = 1; 
  ?>

  <?php while ($counter <= $faq_count): ?> 
    <li class="faq__item faq__item--client"> 
      <a class="faq__link" href="#time<?php echo $counter; ?>">
        <span>
         <?php
                  $current_lang = pll_current_language();
                  if ('ua' === $current_lang): ?>
                  Ти:
                <?php elseif ('ru' === $current_lang): ?>
                Ти:
                <?php else: ?>
                You:
                <?php endif; ?>
      </span>
        <p>
          <?php the_field('faq_question' . $counter); ?>
        </p>
      </a> 
    </li>

    <li class="faq__item faq__item--manager faq__panels" id="time<?php echo $counter; ?>">
      <div> 
        <span> 
          <?php
                  $current_lang = pll_current_language();
                  if ('ua' === $current_lang): ?>
                  Менеджер:
                <?php elseif ('ru' === $current_lang): ?>
                 Менеджер:
                <?php else: ?>
                 Manager
                <?php endif; ?></span>
        <p>  <?php the_field('faq_anwerse' . $counter); ?>
                       
        </p>
      
      </div>
    </li>

     <?php $counter++; ?>
   <?php endwhile; ?>
  </ul>


        </div>
      </section>
    </main>
