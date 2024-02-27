<?php



// $size=get_field('size');
// $bedrooms=get_field('bedrooms');
// $bathrooms=get_field('bathrooms');
// $ceiling_height=get_field('ceiling_height');
// $construction_year=get_field('construction_year');
// $renovation_year=get_field('renovation_year');
// $garage=get_field('garage');
// $garden=get_field('garden');
// $swimming_pool=get_field('swimming_pool');
// $fence=get_field('fence');
$name_of_feature = get_post_meta($post->ID, 'name_of_feature', true);
$value_of_feature= get_post_meta($post->ID, 'value_of_feature', true);
if($name_of_feature)
{
  $chunk_data=ceil(sizeof($name_of_feature)/2);
 
  $slied_by_name_of_feature=array_chunk($name_of_feature,$chunk_data);
}
if($value_of_feature)
{
  $slied_by_value_of_feature=array_chunk($value_of_feature,$chunk_data);
}


?>
<div class="features_table">
              <div class="_left_col">
                <?php
                if(!empty($slied_by_name_of_feature[0]))
                {
                  foreach($slied_by_name_of_feature[0] as $key=>$value)
                  {
                    ?>
                      <div class="item d-flex align-items-stretch">
                       <div class="left_item"><?=$value?></div>
                       <div class="right_item"><?=$slied_by_value_of_feature[0][$key]?></div>
                     </div>
                    <?php
                  }
                }
                ?>
              </div>
              <div class="_right_col">
               <?php
               if(!empty($slied_by_name_of_feature[1]))
               {
                foreach($slied_by_name_of_feature[1] as $key1=>$value1)
                {
                 ?>
                  <div class="item d-flex align-items-stretch">
                   <div class="left_item"><?=$value1?></div>
                   <div class="right_item"><?=$slied_by_value_of_feature[1][$key1]?></div>
                 </div>
                 <?php
                }
               }
               ?>
              </div>
            </div>