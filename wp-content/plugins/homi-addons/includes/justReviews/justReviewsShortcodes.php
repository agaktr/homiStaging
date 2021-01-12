<?php


class justReviewsShortcodes
{

    public function registerShortcodes(){

        add_shortcode('just-reviews', array( $this, 'justReviews') );

    }


    public function justReviews( $atts ) {


        ob_start();

        ?>

        <div id="justreview-testimonials"></div>


        <script>
            document.addEventListener('DOMContentLoaded', function() {
                JustReview.initTestimonials('WlZXZlRVRmd3VjNpVzJ5YzhmS0dXUT09', {
                    styles: {
                        backgroundColor: 'rgba(255, 255, 255, 1)',
                        color: 'rgba(0, 0, 0, 1)',
                        secondaryColor: 'rgba(154, 154, 154, 1)',
                        arrowsColor: 'rgba(0, 0, 0, 1)',
                        slideBorderRadius: '20px'
                    },
                    config: {
                        displayHeader: false,
                        displayJrLogo: true,
                        displayDate: true,
                        limit: 10,
                        autoplay: true,
                        infinity: false,
                        arrows: true,
                        visibleSlides: 1,
                        displayTopRatingsFirst: true,
                        sortByDate: false,
                        filterByPageLang: false,
                        includeEng: false,
                        logo: {
                            isVisible: true,
                            setColors: false,
                            logosColor: 'rgba(0, 0, 0, 1)'
                        }
                    },
                    services: ['facebook','google']
                });
            });
        </script>



        <?php
        return ob_get_clean();

    }

}
