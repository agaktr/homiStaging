<?php


class SpitogatosAutocomplete {


    public function autocomplete_source(){

        $s = $_REQUEST[ 'term' ];
        $response = array();

        if( strlen( $s ) > 2 ) {

            foreach ( SpitogatosLocations::LOCATIONS as $location) {

                $location_name  = $location['name_gr'] . '('. $location['name_en'] .')';
                $location_name  = mb_strtolower( $location_name, 'UTF-8');
                $location_name  = $this->replace_accents( $location_name );
                $s              = mb_strtolower( $s, 'UTF-8' );

                if ( strpos( $location_name, $s ) !== false ) {

                    $response[] = array(
                        'value' => $location['geographyid'],
                        'label' => $location['name_gr'] . ' ('. $location['name_en'] .') - ' . $location['parent_name_gr'] . ' ('. $location['parent_name_en'] .')',
                    );

                }

            }

        }

        echo wp_json_encode( $response );
        die;

    }


    private function replace_accents( $string ){

        $accent_letters = array(
            'ά' => 'α',
            'έ' => 'ε',
            'ό' => 'ο',
            'ί' => 'ι',
            'ή' => 'η',
            'ώ' => 'ω',
        );

        foreach( $accent_letters as $accent => $replace ){

            $string = str_replace( $accent, $replace, $string );

        }

        return $string;

    }


    private function create_english( $string ) {

        $greek   = array('α','β','γ','δ','ε','ζ','η','θ','ι','κ','λ','μ','ν','ξ','ο','π','ρ','σ','ς', 'τ', 'υ','φ','χ','ψ','ω');
        $english = array('a','b','g','d','e','z','h','th','i','k','l','m','n','x','o','p','r','s','s','t','y','f','ch','ps','w');

        $string  = str_replace( $greek, $english, $string);

        return $string;

    }

}
