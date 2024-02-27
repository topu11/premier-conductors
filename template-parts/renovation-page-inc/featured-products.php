<?php
global $wpdb;
$termtable=$wpdb->prefix.'terms';
$termtaxonomy=$wpdb->prefix.'term_taxonomy';
$termrelationship=$wpdb->prefix.'term_relationships';
$posttable=$wpdb->prefix.'posts';

 $featured_products_category = $wpdb->get_results("select wp_terms.name , wp_terms.term_id from $termtable as  wp_terms inner join $termtaxonomy as  wp_term_taxonomy on  wp_terms.term_id=wp_term_taxonomy.term_id and wp_term_taxonomy.taxonomy='featured_products_category'");

//var_dump($featured_products_category);

// $featured_products = $wpdb->get_results("SELECT * from $posttable as wp_posts LEFT JOIN $termrelationship as wp_term_relationships 
// ON (wp_posts.ID = wp_term_relationships.object_id) WHERE (wp_term_relationships.term_taxonomy_id IN ('2')) 
// AND wp_posts.post_type = 'projects' AND wp_posts.post_status = 'publish' GROUP BY wp_posts.ID ORDER BY wp_posts.menu_order, wp_posts.post_date desc;");



//var_dump($featured_products);
?>


<section class="featured__section properties__section section__padding section__bg__black">
    <div class="container">
      <div class="section__width">
        <div class="text-center heading__column">
          <h3 class="heading_35 text-uppercase">Featured projects</h3>
        </div>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <?php
            foreach($featured_products_category as $key=>$value)
            {
                if($key==0)
                {
                     $active='active';
                }else
                {
                    $active='';
                }
                 ?>
                  <li class="nav-item" role="presentation">
            <button class="nav-link <?=$active?> heading_20" id="<?=$value->name?>__tab" data-bs-toggle="tab" data-bs-target="#<?=$value->name?>__tab__pane" type="button" role="tab" aria-controls="kitchen__tab__pane" aria-selected="true">
            <?=$value->name?>
            </button>
          </li>
                 <?php
            }
            ?>
         
        
        </ul>
        <div class="tab-content" id="myTabContent">
           <?php
            foreach($featured_products_category as $key=>$value)
            {
                if($key == 0)
                {
                     $active_show='active show';
                }else
                {
                    $active_show='';
                }
               ?>
                      <div class="tab-pane fade <?=$active_show?>" id="<?=$value->name?>__tab__pane" role="tabpanel" aria-labelledby="<?=$value->name?>__tab" tabindex="0" >
            <div class="row_d justify-content-center">
            <?php
                $getPostIDs=getPostIDbyTermID($value->term_id);
                
                foreach($getPostIDs as $val)
                {
                    ?>
                    <div class="card__column">
                        <div class="card__inner">
                        <div class="img">
                            <img src="<?=get_the_post_thumbnail_url($val->ID)?>" alt="" />
                        </div>
                    </div>
                    </div>
                    <?php
                }
                ?>
            </div>
                      </div>
            <?php    
            }
            ?>
            <div class="properties__browse__btn text-center">
              <a href="<?=site_url('/project-gallery')?>" class="_btn"
                >view more<img src="<?=PREMIER_CONTRACTORS_THEME_ASSETS_URI.'images/view-more-right.png'?>" alt=""
              /></a>
            </div>
          </div>
               
        </div>
      </div>
    </div>
  </section>