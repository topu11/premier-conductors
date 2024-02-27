<?php

function add_custom_metabox_repeted_field() {
    add_meta_box(
        'custom_metabox',
        'Custom Metabox',
        'render_custom_metabox_repeted_field',
        'properties_for_sell',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'add_custom_metabox_repeted_field');



// Render the custom metabox
function render_custom_metabox_repeted_field($post) {
    // Retrieve existing values from the database
    $name_of_feature = get_post_meta($post->ID, 'name_of_feature', true);
    $value_of_feature= get_post_meta($post->ID, 'value_of_feature', true);
    $size_name_of_feature=1;
    if(!empty($name_of_feature))
    {

        $size_name_of_feature=sizeof($name_of_feature);
    }
   
    ?>
    
    <div id="repeatable-fields">
        <?php
        if (!$name_of_feature)
        {
            ?>
               <div class="meta-row clone">
                <div class="meta-th">
                    <label for="custom_field" style="margin-left: 50px !important">Name of feature</label>
                    <label for="custom_field" style="margin-left: 60px !important">Value of feature</label>
                </div>
                <div class="meta-td">
                    <input type="text" name="name_of_feature[]" value="" />
                    <input type="text" name="value_of_feature[]" value="" />
                    <span class="remove-row button">Remove</span>
                </div>
                
        </div>
            <?php
        }
        ?>

        <?php
        if ($name_of_feature) :
            foreach ($name_of_feature as $key=>$val) {
                if($key==0)
                {
                    $clone='clone';
                }else
                {
                    $clone='';
                }
                ?>
                <div class="meta-row <?=$clone?>">
                    <div class="meta-th">
                    <label for="custom_field" style="margin-left: 50px !important">Name of feature</label>
                    <label for="custom_field" style="margin-left: 50px !important">Value of feature</label>
                    </div>
                    <div class="meta-td">
                        <input type="text" name="name_of_feature[]" value="<?php echo esc_attr($val); ?>" />
                        <input type="text" name="value_of_feature[]" value="<?php echo esc_attr($value_of_feature[$key]); ?>" />
                        <span class="remove-row button">Remove</span>
                    </div>
                </div>
                <?php
            }
        endif;
        ?>
    </div>
    <div class="add-row button" data-increment="<?=$size_name_of_feature?>">Add features</div>
    <script>
        jQuery(document).ready(function ($) {
            $(document).on('click', '.add-row', function () {
                var row = $('.meta-row.clone').clone(true);
                row.find('input').val('');
                row.removeClass('clone');
                row.insertBefore('.add-row');
                var row_id= $('.add-row').data('increment')+1
                $('.add-row').data('increment',row_id);
                return false;
            });

            $(document).on('click', '.remove-row', function () {
                if($('.add-row').data('increment') == 1)
                {
                    return;
                }
                var row_id= $('.add-row').data('increment')-1
                $('.add-row').data('increment',row_id);
                $(this).closest('.meta-row').remove();
                return false;
            });
        });
    </script>
    <?php
}

// Save metabox data
function save_custom_metabox($post_id) {
	if(!isset( $_POST['post_type']))
	return;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!current_user_can('edit_post', $post_id)) return;
    if ( 'properties_for_sell' != $_POST['post_type'] ) // here you can set the post type name
		return;
    $name_of_feature = $_POST['name_of_feature'];
    $value_of_feature = $_POST['value_of_feature'];
    if(empty($name_of_feature) || empty($value_of_feature) )
    return;
    foreach($name_of_feature as $key=>$value)
    {
        if(empty($value))
        {
            unset($name_of_feature[$key]); 
        }
        if(empty($value_of_feature[$key]))
        {
            unset($value_of_feature[$key]); 
        }
    }
    update_post_meta($post_id, 'name_of_feature', $name_of_feature);
    update_post_meta($post_id, 'value_of_feature', $value_of_feature);
}
add_action('save_post', 'save_custom_metabox');