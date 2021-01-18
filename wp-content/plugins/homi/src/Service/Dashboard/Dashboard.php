<?php

namespace Homi\Service\Dashboard;

class Dashboard {

    public function isDashboardPage(){

        global $post;

        if ($post->post_parent)	{
            $ancestors=get_post_ancestors($post->ID);
            $root=count($ancestors)-1;
            $parent = $ancestors[$root];
        }
        else {
            $parent = $post->ID;
        }

        $slug = get_post_field( 'post_name', $parent );

        return $slug === 'dashboard';

    }


    public function header(){

        ?>

        <div class="homi-dashboard-header">

            <div class="brand-logo"><?php the_custom_logo(); ?></div>

            <div class="user-selected-property">

                <div class="heading">
                    My Properties
                    <a href="<?php echo home_url('dashboard/property-objects/edit'); ?>" class="manage-all">
                        Manage All
                    </a>
                </div>

                <div class="flex flex-center select-current-property">

                    <div class="property-photo">

                    </div>

                    <div class="property-object-address">
                        Agias Fotinis 39, Nea Smyrni 17121
                    </div>

                    <div class="icon">
                        <i class="fa fa-caret-down"></i>
                    </div>

                </div>

                <a href="<?php echo home_url('dashboard/property-objects/add'); ?>" class="add-new-property display-block">
                    Add new asset
                </a>

            </div>

            <?php if ( has_nav_menu( 'homi-dashboard' ) ) :

                wp_nav_menu(
                    array(
                        'theme_location' => 'homi-dashboard',
                        'menu_class'     => 'homi-dashboard-menu full-width display-inline-block',
                        'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    )
                );

            endif; ?>

        </div>


        <?php

    }

}
