<?php
$photos_query = get_post_meta( get_the_ID(), 'gallery_data', true );
//$photos_array = unserialize($photos_query);


?>
<div class="propertice__slider__section">
        <!-- Main slider -->
        <div class="propertice__main__slider">
            <?php
            foreach($photos_query['image_url'] as $key=>$value)
            {
                ?>
                <div class="slider_item">
                       <img src="<?=$value;?>" alt="" />
                 </div>
                <?php
            }
            ?>
        </div>
        <!-- Main slider -->

        <!-- slider nav -->
        <div class="propertice__slider__nav">
        <?php
            foreach($photos_query['image_url'] as $key=>$value)
            {
                ?>
                <div class="slider_item">
                       <img src="<?=$value;?>" alt="" />
                 </div>
                <?php
            }
            ?>
        </div>
        <!-- slider nav -->
</div>