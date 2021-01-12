<?php


class RequestStatsController{


    public function get_free_val_stats(){

        return $this->get_stats_object( Homi_Addons_Valuation_Request::POST_TYPE_NAME );

    }

    public function get_rent_stats(){

        return $this->get_stats_object( Homi_Addons_Rent_Request::POST_TYPE_NAME );

    }

    private function get_stats_object( $post_type ){

        $total = $abandoned = $completed = array();

        $args = array(
            'post_type' => $post_type,
            'posts_per_page'=> -1,
        );

        $query = new WP_Query( $args );

        if( $query->have_posts() ){

            while ( $query->have_posts() ) {
                $query->the_post();

                $id = get_the_ID();
                $total[] = $id;

                if (strpos( get_the_title(), 'ABANDONED') !== false ) {
                    $abandoned[] = $id;
                }
                else {
                    $completed[] = $id;
                }

            }

        }

        $statsObject = new StatsObject();
        $statsObject->setTotal( count( $total ) );
        $statsObject->setAbandoned( count( $abandoned ) );
        $statsObject->setCompleted( count( $completed ) );

        return $statsObject;

    }


}
