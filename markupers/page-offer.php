<?php
/*
  Template name: Шаблон для Сторінки Offer
  
*/
get_header();
?>

 <main class="main main--top">

   <section class="offer section">
        <div class="container">
          <div class="wrapper">
            <div class="section-heading wrapper"> 
              <span> 
                <?php echo date('m-d-Y');?>
              </span>

              <h1 class="title"> 
                <?php the_title();?>
                 </h1>
                 
              <p> 
           Agreement (public offer) on the provision of information and consulting services
                </p>
            </div>
             <a class="link link--download" href="<<?php echo esc_attr(get_template_directory_uri()); ?>/doc/1.pdf" target="_blank"> Download PDF </a>

            <p> By this public offer (hereinafter referred to as the Offer), an individual entrepreneur Polusyn Orest,
              acting in accordance with Art. 633 of the Civil Code of Ukraine (hereinafter referred to as the Civil Code
              of Ukraine), hereinafter referred to as the "Contractor", on the one hand, proposes to conclude an
              agreement for the provision of information and consulting Services, a list of which is contained on the
              Site at: <a href="https://markupers/offert">https://markupers/offert</a> library , on the conditions
              below, with any natural person, individual entrepreneur, individual entrepreneur, as well as with any
              legal entity registered and operating in accordance with the laws of any country, which responds and has
              the necessary legal capacity and capacity, hereinafter referred to as the "Customer ”, on the other hand,
              conclude this agreement as follows. </p>

            <h2 class="offer__title title">
               1. General provisions 
              </h2>
          </div>
          
          <ul class="offer__list">
            <li> This Agreement is a public Agreement, and is governed by Art. 633, 634 of the Civil Code of Ukraine.
              The procedure for its conclusion is regulated by Art. 642 of the Civil Code of Ukraine. Placing the text
              of this Agreement on the Internet at the link:<a
                href="https://markupers/offert">https://markupers/offert</a> is a public offer to conclude the Agreement
              on the conditions that are set forth in it. The terms of the Agreement are established by the Contractor.
            </li>
            <li> Acceptance by the Customer of the terms of the Offer (acceptance of the Offer) is possible only in
              full. Only in this case, the proposed Agreement for the provision of information and consulting services
              (hereinafter referred to as the Agreement) is concluded between the Contractor and the Customer
              (hereinafter referred to as the Parties). Partial acceptance of the Offer, as well as acceptance of the
              Offer on other terms are not allowed. The conclusion of the Agreement between the Parties is carried out
              by accepting the Offer by the Customer. Acceptance of the Offer means the conclusion of the Agreement.
            </li>
            <li> In accordance with Art. 642 of the Civil Code of Ukraine, this Agreement is concluded from the moment
              of registration of the Customer on the Site - acceptance of the proposal to conclude the Agreement
              (acceptance). Unconditional acceptance of the offer to conclude this Agreement is the moment of
              registration on the Site. </li>
            <li> The written text of this Agreement can be provided at the request of the Customer, and can also be
              printed by the Customer independently from the official web page of the Contractor at the link: <a
                href="https://markupers/offert">https://markupers/offert</a>, where the Agreement is posted. </li>
            <li> By accepting this Agreement, the Customer confirms that prior to its conclusion, he was fully and
              properly acquainted with all its provisions and accepted them of his own free will without any coercion.
            </li>
            <li> Each Party guarantees to the other Party that it has the necessary legal capacity, as well as all the
              rights and powers necessary and sufficient for the conclusion and execution of the Agreement in accordance
              with its terms. </li>
            <li> The Contractor has the right to involve in the provision of the Services third parties authorized to
              organize and conduct Events, including receiving payment for the Services from the Customer (Authorized
              Person). </li>
            <li> Для принятия оплаты за Услуги за пределами Украины Исполнитель уполномочил Индивидуального
              предпринимателя Васильеву Ию Геннадьевну, действующую в соответствии со ст. 182 ГК РФ, реквизиты которой
              указаны в разделе 14 Договора. </li>
          </ul>
        </div>
      </section>

    </main>

    <?php get_footer('social');?>

