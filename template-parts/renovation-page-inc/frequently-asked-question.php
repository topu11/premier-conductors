<?php

global $wpdb;
$posttable=$wpdb->prefix.'posts';
$premier_faqs = $wpdb->get_results("SELECT * from $posttable as wp_posts where wp_posts.post_type='premier_faqs' and wp_posts.post_status = 'publish'  ORDER BY wp_posts.menu_order, wp_posts.post_date desc;");

?>

<section class="service__faq">
  <div class="container">
    <div class="section__width">
      <div class="text-center heading__column">
        <h2 class="heading_35 text-uppercase">Frequently Asked Questions</h2>
      </div>
      <div class="faq__content">
        <div class="accordion" id="accordionExample">
        <?php
        foreach($premier_faqs as $key=>$value)
        {
         if($key == 0)
         {
           $show='show';
         }else
         {
           $show='';
         }
           ?>
           <div class="accordion-item">
            <h2 class="accordion-header">
              <button
                class="accordion-button"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collaps_<?=$value->ID?>"
                aria-expanded="true"
                aria-controls="collaps_<?=$value->ID?>"
              >
                <?=$value->post_title;?>
              </button>
            </h2>
            <div
              id="collaps_<?=$value->ID?>"
              class="accordion-collapse collapse <?=$show?>"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
                <p>
                <?=$value->post_content;?>
                </p>
              </div>
            </div>
          </div>
           <?php

        }
        ?>


          
          
        </div>
      </div>
    
    </div>
  </div>
</section>
