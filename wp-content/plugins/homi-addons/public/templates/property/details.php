<?php
/**
 * Created by PhpStorm.
 * User: waqasriaz
 * Date: 08/01/16
 * Time: 4:23 PM
 */
global $post_meta_data;

$prop_id = get_post_meta( get_the_ID(), 'fave_property_id', true );
$prop_price = get_post_meta( get_the_ID(), 'fave_property_price', true );
$prop_size = get_post_meta( get_the_ID(), 'fave_property_size', true );
$land_area = get_post_meta( get_the_ID(), 'fave_property_land', true );
$bedrooms = get_post_meta( get_the_ID(), 'fave_property_bedrooms', true );
$bathrooms = get_post_meta( get_the_ID(), 'fave_property_bathrooms', true );
$year_built = get_post_meta( get_the_ID(), 'fave_property_year', true );
$garage = get_post_meta( get_the_ID(), 'fave_property_garage', true );
$property_status = houzez_taxonomy_simple('property_status');
$property_type = houzez_taxonomy_simple('property_type');
$garage_size = get_post_meta( get_the_ID(), 'fave_property_garage_size', true );
$additional_features_enable = get_post_meta( get_the_ID(), 'fave_additional_features_enable', true );
$additional_features = get_post_meta( get_the_ID(), 'additional_features', true );
$prop_details = false;

if( !empty( $prop_id ) ||
    !empty( $prop_price ) ||
    !empty( $prop_size ) ||
    !empty( $land_area ) ||
    !empty( $bedrooms ) ||
    !empty( $bathrooms ) ||
    !empty( $year_built ) ||
    !empty( $property_status ) ||
    !empty( $property_type ) ||
    !empty( $garage )
) {
    $prop_details = true;
}

$hide_detail_prop_fields = houzez_option('hide_detail_prop_fields');

$homiProperty = new HomiProperty();
$homiProperty->display_custom_fields( get_the_ID() );

if( $prop_details ) {
    ?>



        <?php if( $additional_features_enable != 'disable' && !empty( $additional_features[0]['fave_additional_feature_title'] ) && $hide_detail_prop_fields['additional_details'] != 1 ) { ?>
        <div id="detail" class="detail-list detail-block target-block">

            <div class="detail-title-inner">
                <h4 class="title-inner"><?php esc_html_e( 'Additional details', 'houzez' ); ?></h4>
            </div>
            <ul class="list-three-col">
                <?php
                foreach( $additional_features as $ad_del ):
                    echo '<li><strong>'.esc_attr( $ad_del['fave_additional_feature_title'] ).':</strong> '.esc_attr( $ad_del['fave_additional_feature_value'] ).'</li>';
                endforeach;
                ?>
            </ul>

        </div>
        <?php } ?>



<?php } ?>
