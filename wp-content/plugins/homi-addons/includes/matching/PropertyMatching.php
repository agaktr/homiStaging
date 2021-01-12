<?php


class PropertyMatching {


    public function getInterestMatchesArgs( $type, $location, $location2, $price_filter, $include_empty_prices, $newPriceFrom, $size_filter, $include_empty_sizes, $newSizeTo ){

        $args = array(
            'post_type'         => Homi_Addons_Interest_Request::POST_TYPE_NAME,
            'posts_per_page'    => -1,
            'meta_query'        => array(
                'relation'  => 'AND',
                array(
                    'relation'  => 'OR',
                    array(
                        'key'     => Homi_Addons_Interest_Request::META_FIELDS_SLUG['area_1'],
                        'value'   => $location,
                        'compare' => 'LIKE'
                    ),
                    array(
                        'key'     => Homi_Addons_Interest_Request::META_FIELDS_SLUG['area_2'],
                        'value'   => $location,
                        'compare' => 'LIKE'
                    ),
                    array(
                        'key'     => Homi_Addons_Interest_Request::META_FIELDS_SLUG['area_3'],
                        'value'   => $location,
                        'compare' => 'LIKE'
                    ),
                    array(
                        'key'     => Homi_Addons_Interest_Request::META_FIELDS_SLUG['area_1'],
                        'value'   => $location2,
                        'compare' => 'LIKE'
                    ),
                    array(
                        'key'     => Homi_Addons_Interest_Request::META_FIELDS_SLUG['area_2'],
                        'value'   => $location2,
                        'compare' => 'LIKE'
                    ),
                    array(
                        'key'     => Homi_Addons_Interest_Request::META_FIELDS_SLUG['area_3'],
                        'value'   => $location2,
                        'compare' => 'LIKE'
                    ),
                ),
                array(
                    'key'     => Homi_Addons_Interest_Request::META_FIELDS_SLUG['type'],
                    'value'   => $type,
                    'compare' => 'LIKE'
                ),
            )
        );


        if( $price_filter ){

            $args['meta_query'][] =   array( //price range
                'relation' => ( $include_empty_prices ? 'OR' : 'AND'),
                array(
                    'key'     => Homi_Addons_Interest_Request::META_FIELDS_SLUG['max_price'],
                    'value'   => $newPriceFrom,
                    'compare' => '>=',
                    'type'    => 'numeric',
                ),
                array(
                    'key'     => Homi_Addons_Interest_Request::META_FIELDS_SLUG['max_price'],
                    'compare' => ( $include_empty_prices ? 'NOT EXISTS' : 'EXISTS'),
                ),
            );


        }

        if( $size_filter ){

            $args['meta_query'][] =  array(//size range
                'relation' => ( $include_empty_sizes ? 'OR' : 'AND'),
                array(
                    'key'     => Homi_Addons_Interest_Request::META_FIELDS_SLUG['min_size'],
                    'value'   => $newSizeTo,
                    'compare' => '<=',
                    'type'    => 'numeric',
                ),
                array(
                    'key'     => Homi_Addons_Interest_Request::META_FIELDS_SLUG['min_size'],
                    'compare' => ( $include_empty_sizes ? 'NOT EXISTS' : 'EXISTS'),
                ),
            );

        }

        return $args;

    }


    public function replace_accents( $string ){

        $accent_letters = array(
            'ά' => 'α',
            'έ' => 'ε',
            'ό' => 'ο',
            'ί' => 'ι',
            'ή' => 'η',
            'ώ' => 'ω',
            'ύ' => 'υ',
        );

        foreach( $accent_letters as $accent => $replace ){

            $string = str_replace( $accent, $replace, $string );

        }

        return $string;

    }


    public function create_english( $string ) {

        $greek   = array('α','β','γ','δ','ε','ζ','η','θ','ι','κ','λ','μ','ν','ξ','ο','π','ρ','σ','ς', 'τ', 'υ','φ','χ','ψ','ω');
        $english = array('a','b','g','d','e','z','h','th','i','k','l','m','n','x','o','p','r','s','s','t','y','f','ch','ps','w');

        $string  = str_replace( $greek, $english, $string);

        return $string;

    }


    public function create_greek( $string ) {

        $english = array('ch','ps','w', 'a','b','g','d','e','z','h','th','i','k','l','m','n','x','o','p','r','s','s','t','y','f');
        $greek   = array('χ','ψ','ω','α','β','γ','δ','ε','ζ','η','θ','ι','κ','λ','μ','ν','ξ','ο','π','ρ','σ','ς', 'τ', 'υ','φ');


        $string  = str_replace( $english, $greek, $string);

        return $string;

    }


    public function getPropertyMatches( $requestID, $price_filter = true, $size_filter = true, $price_percentage = 15, $size_percentage = 15, $include_empty_prices = false, $include_empty_sizes = false, $location2 = null ){

        $uploadRequest  = new UploadRequest( $requestID );
        $property_price = $uploadRequest->price;
        $property_size  = $uploadRequest->size;
        $location       = $uploadRequest->suburb;

        $type = ( $uploadRequest->list_type === 'sale' ? 'buy' : 'rent');

        if( empty( $location2 ) ){

            $detect = preg_match("/^[a-zA-Z\p{Cyrillic}0-9\s\-]+$/u", $location );

            if( $detect === 0 ){

                $location2 = $this->replace_accents( $location );
                $location2 = $this->create_english( $location2 );

            }
            else {

                if( $location === 'Athens' || $location === 'Athina' ){
                    $location2 = 'Aθήνα';
                }
                else {
                    $location2 = $this->create_greek( strtolower( $location ) );
                }

            }

        }

       $priceMargin = ( $property_price * $price_percentage / 100 );
       $newPriceFrom = $property_price - $priceMargin;
//       $newPriceTo = $property_price + $priceMargin;

       $sizeMargin = ( $property_size * $size_percentage / 100 );
//       $newSizeFrom = $property_size - $sizeMargin;
       $newSizeTo = $property_size + $sizeMargin;


       ?>

        <h3>Filters applied:</h3>

        <div class="filter-item">
            Property Location:
            <strong>
                <?php echo $location; ?> /
                <?php echo $location2; ?>
            </strong>
        </div>

        <div class="filter-item">
            Property Price:
            <strong>
                <?php echo $property_price; ?> €
            </strong>
        </div>

        <div class="filter-item">
            Property Price:
            <strong>
                <?php echo $property_size; ?> sqm
            </strong>
        </div>

        <div class="filter-item">
            Price Filter:
            <strong>
                <?php echo ( !$price_filter ? 'Not applied' : "Greater than $newPriceFrom €"); ?>
            </strong>
        </div>

        <div class="filter-item">
            Size Filter:
            <strong>
                <?php echo ( !$size_filter ? 'Not applied' : "Less than $newSizeTo sqm"); ?>
            </strong>
        </div>


        <?php

        $args = $this->getInterestMatchesArgs( $type, $location, $location2, $price_filter, $include_empty_prices, $newPriceFrom, $size_filter, $include_empty_sizes, $newSizeTo );

//        print("<pre>".print_r($args,true)."</pre>");

        $query = new WP_Query( $args );

        if( $query->have_posts() ): ?>

            <h3>Found <?php echo $query->found_posts; ?> interest requests matches:</h3>

            <table class="wp-list-table widefat fixed striped posts">
                <thead>
                    <tr>
                        <th>
                            Interest Request
                        </th>
                        <th>
                            Areas of interest
                        </th>
                        <th>
                            Max Price
                        </th>
                        <th>
                            Min Size
                        </th>
                        <th>
                           User Name
                        </th>
                        <th>
                           User Email
                        </th>
                    </tr>
                </thead>
                <tbody>

                <?php while ( $query->have_posts() ):  $query->the_post();  $interestRequest = new RentInterest( get_the_ID() ); ?>

                    <tr>
                        <td>
                            <a href=" <?php echo get_edit_post_link( get_the_ID() ); ?>">
                                <?php echo get_the_title(); ?>
                            </a>
                        </td>
                        <td>
                            <?php echo $interestRequest->areas_of_interest; ?>
                        </td>
                        <td>
                            <?php echo $interestRequest->max_price; ?>€
                        </td>
                        <td>
                            <?php echo $interestRequest->min_size; ?> sqm
                        </td>
                        <td>
                            <a href="<?php echo get_edit_user_link( $interestRequest->user->ID ); ?>" target="_blank">
                                <?php echo $interestRequest->user->first_name . ' ' . $interestRequest->user->last_name; ?>
                            </a>
                        </td>
                        <td>
                            <?php echo $interestRequest->user->user_email; ?>
                        </td>
                    </tr>

                <?php endwhile; wp_reset_query(); ?>

                </tbody>
            </table>

        <?php else: ?>

        <h3>
           There are no interest requests matching the property in combination with the filters you set.
            Try different filters to view more results.
        </h3>

        <?php endif;

    }


}
