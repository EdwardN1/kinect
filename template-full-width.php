<?php
/*
Template Name: Full Width (Home Page)
*/

get_header(); ?>

<?php if (have_rows('backgrounds')) : ?>
    <?php while (have_rows('backgrounds')) : the_row(); ?>
        <?php $top_parallax_background_image = get_sub_field('top_parallax_background_image'); ?>
        <?php $first_section_top_chevron_set = get_sub_field('first_section_top_chevron_set'); ?>
        <?php $first_section_fly_in_chevron = get_sub_field('first_section_fly_in_chevron'); ?>
        <?php $first_section_bottom_chevron_set = get_sub_field('first_section_bottom_chevron_set'); ?>
        <?php $first_chevron_set_image = get_sub_field('first_chevron_set_image'); ?>
        <?php $second_section_background_image = get_sub_field('second_section_background_image'); ?>
        <?php $second_section_gradient_chevron = get_sub_field('second_section_gradient_chevron'); ?>
        <?php $third_section_background_image = get_sub_field('third_section_background_image'); ?>
        <?php $third_section_chevrons = get_sub_field('third_section_chevrons'); ?>
        <?php $third_section_fly_in_chevron = get_sub_field('third_section_fly_in_chevron'); ?>
        <?php $forth_section_chevrons = get_sub_field('forth_section_chevrons'); ?>
        <?php $forth_section_chevrons_fly_in = get_sub_field('forth_section_chevrons_fly_in'); ?>
        <?php $fifth_section_background_image = get_sub_field('fifth_section_background_image'); ?>
        <?php $fifth_section_chevron = get_sub_field('fifth_section_chevron'); ?>
        <?php $sixth_section_chevrons = get_sub_field('sixth_section_chevrons'); ?>
        <?php $sixth_section_chevrons_fly_in = get_sub_field('sixth_section_chevrons_fly_in'); ?>
        <?php $seventh_section_chevrons = get_sub_field('seventh_section_chevrons'); ?>
    <?php endwhile; ?>
<?php endif; ?>

<?php if (have_rows('icons')) : ?>
    <?php while (have_rows('icons')) : the_row(); ?>
        <?php $white_menu_arrow = get_sub_field('white_menu_arrow'); ?>
        <?php $blue_menu_arrow = get_sub_field('blue_menu_arrow'); ?>
        <?php $white_down_arrow = get_sub_field('white_down_arrow'); ?>
        <?php $blue_down_arrow = get_sub_field('blue_down_arrow'); ?>
        <?php $first_section_graph = get_sub_field('first_section_graph'); ?>
        <?php $first_section_white_arrow = get_sub_field('first_section_white_arrow'); ?>
        <?php $forth_section_contracts_icons = get_sub_field('forth_section_contracts_icons'); ?>
        <?php $forth_section_consomations_icons = get_sub_field('forth_section_consomations_icons'); ?>
        <?php $forth_section_dommees_icons = get_sub_field('forth_section_dommees_icons'); ?>
        <?php $forth_section_veille_icons = get_sub_field('forth_section_veille_icons'); ?>
        <?php $forth_section_contracts_pizza = get_sub_field('forth_section_contracts_pizza'); ?>
        <?php $forth_section_donnees_pizza = get_sub_field('forth_section_donnees_pizza'); ?>
        <?php $forth_section_consommations_pizza = get_sub_field('forth_section_consommations_pizza_'); ?>
        <?php $forth_section_veille_pizza = get_sub_field('forth_section_veille_pizza'); ?>
        <?php $forth_section_chart_arrow = get_sub_field('forth_section_chart_arrow'); ?>
        <?php $forth_section_chart_panel_1 = get_sub_field('forth_section_chart_panel_1'); ?>
        <?php $forth_section_chart_panel_2 = get_sub_field('forth_section_chart_panel_2'); ?>
        <?php $forth_section_chart_panel_3 = get_sub_field('forth_section_chart_panel_3'); ?>
        <?php $forth_section_chart_panel_4 = get_sub_field('forth_section_chart_panel_4'); ?>
        <?php $forth_section_chart_panel_5 = get_sub_field('forth_section_chart_panel_5'); ?>
        <?php $forth_section_chart_panel_6 = get_sub_field('forth_section_chart_panel_6'); ?>
        <?php $forth_section_chart_panel_7 = get_sub_field('forth_section_chart_panel_7'); ?>
        <?php $forth_section_chart_panel_8 = get_sub_field('forth_section_chart_panel_8'); ?>
        <?php $forth_section_budget_circle = get_sub_field('forth_section_budget_circle'); ?>
        <?php $forth_section_suivant_arrow = get_sub_field('forth_section_suivant_arrow'); ?>
        <?php $forth_section_circular_arrows = get_sub_field('forth_section_circular_arrows'); ?>
        <?php $sixth_section_green_arrow = get_sub_field('sixth_section_green_arrow'); ?>
        <?php $sixth_section_left_blue_arrow = get_sub_field('sixth_section_left_blue_arrow'); ?>
        <?php $sixth_section_right_blue_arrow = get_sub_field('sixth_section_right_blue_arrow'); ?>
        <?php $seventh_section_right_blue_arrow = get_sub_field('seventh_section_right_blue_arrow'); ?>
        <?php $seventh_section_logo = get_sub_field('seventh_section_logo'); ?>
    <?php endwhile; ?>
<?php endif; ?>

<?php if (have_rows('content')) : ?>
    <?php while (have_rows('content')) : the_row(); ?>
        <?php $first_section_heading = get_sub_field('first_section_heading'); ?>
        <?php $first_section_strapline = get_sub_field('first_section_strapline'); ?>
        <?php $first_section_sub_heading = get_sub_field('first_section_sub_heading'); ?>
        <?php $first_section_content = get_sub_field('first_section_content'); ?>
        <?php $second_section_heading = get_sub_field('second_section_heading'); ?>
        <?php $second_section_content = get_sub_field('second_section_content'); ?>
        <?php $third_section_heading = get_sub_field('third_section_heading'); ?>
        <?php $third_section_content = get_sub_field('third_section_content'); ?>
        <?php $forth_section_heading = get_sub_field('forth_section_heading'); ?>
        <?php //$forth_section_bullet_content = get_sub_field( 'forth_section_bullet_content' ); ?>
        <?php $forth_section_bullet_content_contracts = get_sub_field('forth_section_bullet_content_contracts'); ?>
        <?php $forth_section_bullet_content_donnes = get_sub_field('forth_section_bullet_content_donnes'); ?>
        <?php $forth_section_bullet_content_consommations = get_sub_field('forth_section_bullet_content_consommations'); ?>
        <?php $forth_section_bullet_content_veille = get_sub_field('forth_section_bullet_content_veille'); ?>
        <?php $forth_section_checkmark_content = get_sub_field('forth_section_checkmark_content'); ?>
        <?php $fifth_section_heading = get_sub_field('fifth_section_heading'); ?>
        <?php $fifth_section_content = get_sub_field('fifth_section_content'); ?>
        <?php $sixth_section_heading = get_sub_field('sixth_section_heading'); ?>
        <?php $sixth_section_strapline = get_sub_field('sixth_section_strapline'); ?>
        <?php $sixth_section_bullet_points = get_sub_field('sixth_section_bullet_points'); ?>
        <?php $sixth_section_videos = array(); ?>
        <?php
        if (have_rows('sixth_section_videos')) :
            while (have_rows('sixth_section_videos')) : the_row();
                $video_script = get_sub_field('video_script');
                $video_description = get_sub_field('video_description');
                $video = array();
                $video['video_script'] = $video_script;
                $video['video_description'] = $video_description;
                $sixth_section_videos[] = $video;
            endwhile;
        endif; ?>
        <?php $sixth_section_youtube_link = get_sub_field('sixth_section_youtube_link'); ?>
        <?php $sixth_section_gravity_form_id = get_sub_field('sixth_section_gravity_form_id'); ?>
        <?php $seventh_section_line_one = get_sub_field('seventh_section_line_one'); ?>
        <?php $seventh_section_line_two = get_sub_field('seventh_section_line_two'); ?>
        <?php $seventh_section_line_three = get_sub_field('seventh_section_line_three'); ?>
        <?php $seventh_section_link_list = ''; ?>
        <?php
        if (have_rows('seventh_section_link_list')) :
            $seventh_section_link_list = '<ul class="link-list" data-magellan>';
            $seventh_section_mobile_link_list = '<ul class="link-list" data-magellan>';
            /*$seventh_section_link_list .= '<li><a href="#nav-0">retour en haut de la page</a></li>';*/
            while (have_rows('seventh_section_link_list')) : the_row();
                $seventh_section_link_list .= '<li><a href="' . get_sub_field('url') . '">' . get_sub_field('link_name') . '</a></li>';
                $seventh_section_mobile_link_list .= '<li><a href="' . get_sub_field('mobile_url') . '">' . get_sub_field('link_name') . '</a></li>';
            endwhile;
            $seventh_section_link_list .= '</ul>';
            $seventh_section_mobile_link_list .= '</ul>';
        endif;
        ?>
        <?php $seventh_section_footer_text = get_sub_field('seventh_section_footer_text'); ?>
    <?php endwhile; ?>
<?php endif; ?>

<?php if (have_rows('mobile')) : ?>
    <?php while (have_rows('mobile')) : the_row(); ?>
        <?php $mobile_first_section_image = get_sub_field('first_section_image'); ?>
        <?php $mobile_first_section_chevron = get_sub_field('first_section_chevron'); ?>
        <?php $mobile_second_section_chevron = get_sub_field('mobile_second_section_chevron'); ?>
        <?php $mobile_third_section_image = get_sub_field('mobile_third_section_image'); ?>
        <?php $mobile_third_section_chevron = get_sub_field('mobile_third_section_chevron'); ?>
        <?php $mobile_third_section_frame = get_sub_field('mobile_third_section_frame'); ?>
        <?php $mobile_third_section_content = get_sub_field('mobile_third_section_content'); ?>
        <?php $mobile_forth_section_image = get_sub_field('mobile_forth_section_image'); ?>
        <?php $mobile_forth_section_chevron = get_sub_field('mobile_forth_section_chevron'); ?>
        <?php $mobile_fifth_section_image = get_sub_field('mobile_fifth_section_image'); ?>
        <?php $mobile_sixth_section_chevrons = get_sub_field('mobile-sixth-section-chevrons'); ?>
        <?php $mobile_sixth_section_suivant = get_sub_field('mobile_sixth_section_suivant'); ?>
        <?php $mobile_sixth_section_chart_arrow = get_sub_field('mobile_sixth_section_chart_arrow'); ?>
        <?php $mobile_seventh_section_image = get_sub_field('mobile_seventh_section_image'); ?>
        <?php $mobile_eighth_section_chevrons = get_sub_field('mobile_eighth_section_chevrons'); ?>
        <?php $mobile_tenth_section_chevrons = get_sub_field('mobile_tenth_section_chevrons'); ?>
    <?php endwhile; ?>
<?php endif; ?>

<style>
    body::after {
        position: absolute;
        width: 0;
        height: 0;
        overflow: hidden;
        z-index: -1;
    / / hide images content: url(<?php echo $first_section_fly_in_chevron['url'];?>);
    / / load images
    }
</style>

<div class="content main">

    <div class="inner-content grid-x">

        <main class="main small-12 medium-12 large-12 cell" role="main">

            <?php if (have_posts()) : while (have_posts()) :
                the_post();
                ?>
                <div id="nav-0" data-magellan-target="nav-0"></div>
                <div class="backdrop_parallax_background_image show-for-large" style="background-image: url(<?php echo $top_parallax_background_image['url']; ?>)">
                </div>
                <div class="menu-button" data-toggle="off-canvas">
                    <div class="grid-container">
                        <div class="grid-x">
                            <div class="cell shrink menu-arrow"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu.png"></div>
                            <div class="cell auto"></div>
                            <div class="cell shrink menu-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu-logo.png"></div>
                        </div>
                    </div>
                </div>

                <div id="nav-0-m" class="first-section-mobile hide-for-large" data-magellan-target="nav-0-m">
                    <div class="background-image" style="background-image: url(<?php echo $mobile_first_section_image['url']; ?>)">
                        <div class="chevrons" style="background-image: url(<?php echo $mobile_first_section_chevron['url']; ?>)">
                            <div class="graph">
                                <img src="<?php echo $first_section_graph['url']; ?>" alt="<?php echo $first_section_graph['alt']; ?>"/>
                            </div>
                            <!--<div class="graph-image" style="background-image: url(<?php /*echo $first_section_graph['url']; */ ?>)"></div>-->
                            <div class="heading"><?php echo $first_section_heading; ?></div>
                            <div class="strap-line"><?php echo strip_tags($first_section_strapline); ?></div>
                            <div class="white-chevron"><img class="right-arrow" src="<?php echo $first_section_white_arrow['url']; ?>"
                                                            alt="<?php echo $first_section_white_arrow['alt']; ?>"/></div>
                        </div>
                    </div>
                </div>

                <div class="first-section show-for-large">
                    <div class="grid-x">
                        <div class="cell auto">
                            <div class="top"></div>
                            <div class="bottom"></div>
                        </div>
                        <div class="cell shrink">
                            <div class="top-chevrons" style="background-image: url(<?php echo $first_section_top_chevron_set['url']; ?>)">
                                <div class="fly-in-chevron" style="background-image: url(<?php echo $first_section_fly_in_chevron['url']; ?>)"></div>
                                <div class="grid-container">
                                    <div class="first-section-container">

                                        <div style="min-height: 126px">
                                            <div class="frame-animation">
                                                <div class="graph">
                                                    <img src="<?php echo $first_section_graph['url']; ?>" alt="<?php echo $first_section_graph['alt']; ?>"/>
                                                </div>
                                                <div class="heading"><?php echo $first_section_heading; ?></div>
                                                <div class="strap-line"><?php echo $first_section_strapline; ?></div>
                                                <div class="white-chevron"><img class="right-arrow" src="<?php echo $first_section_white_arrow['url']; ?>"
                                                                                alt="<?php echo $first_section_white_arrow['alt']; ?>"/></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="first-section-waypoint-1">
                                        <div id="nav-1" data-magellan-target="nav-1"></div>
                                        <div class="sub-heading animate"><?php echo $first_section_sub_heading; ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cell auto">
                            <div class="top"></div>
                            <div class="bottom"></div>
                        </div>
                    </div>
                    <div class="grid-x light-blue-background">
                        <div class="cell auto">
                            <div class="side"></div>
                        </div>
                        <div class="cell shrink light-blue-background">
                            <div class="bottom-image" style="background-image: url(<?php echo $first_chevron_set_image['url']; ?>)">
                                <div class="bottom-chevrons" style="background-image: url(<?php echo $first_section_bottom_chevron_set ['url']; ?>)">
                                    <div class="grid-container">
                                        <div class="content animate"><?php echo $first_section_content; ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cell auto">
                            <div class="side"></div>
                        </div>
                    </div>
                </div>
                <div id="nav-1-m" data-magellan-target="nav-1-m"></div>
                <div class="mobile-second-section hide-for-large">
                    <div class="chevrons" style="background-image: url(<?php echo $mobile_second_section_chevron['url']; ?>)">
                        <div class="heading">
                            <?php echo strip_tags($first_section_sub_heading); ?>
                        </div>
                        <div class="content">
                            <?php echo $mobile_third_section_content; ?>
                        </div>
                    </div>
                </div>

                <div class="mobile-third-section hide-for-large white-background">
                    <div class="background-image" style="background-image: url(<?php echo $mobile_third_section_image['url']; ?>)">
                        <div class="chevrons" style="background-image: url(<?php echo $mobile_third_section_chevron['url']; ?>)">
                            <div id="nav-2-m" data-magellan-target="nav-2-m"></div>
                            <div class="white-background">
                                <div class="frame" style="background-image: url(<?php echo $mobile_third_section_frame['url']; ?>)">
                                    <div class="heading">
                                        <?php echo $second_section_heading; ?>
                                    </div>
                                    <div class="content">
                                        <?php echo $second_section_content; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="nav-2" data-magellan-target="nav-2"></div>
                <div class="second-section show-for-large">
                    <div class="background-image" style="background-image: url(<?php echo $second_section_background_image['url']; ?>)">
                        <div class="gradient-chevron" style="background-image: url(<?php echo $second_section_gradient_chevron['url']; ?>)">
                            <div class="grid-container">
                                <div class="grid-x">
                                    <div class="cell large-6 medium-6 small-6"></div>
                                    <div class="cell large-6 medium-6 small-6">
                                        <div id="second-section-waypoint-1">

                                            <div class="heading animate">
                                                <?php echo $second_section_heading; ?>
                                            </div>
                                            <div class="content animate">
                                                <?php echo $second_section_content; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mobile-forth-section hide-for-large">
                    <div class="background-image" style="background-image: url(<?php echo $mobile_forth_section_image['url']; ?>)">
                        <div class="chevrons" style="background-image: url(<?php echo $mobile_forth_section_chevron['url']; ?>)">
                            <div id="nav-3-m" data-magellan-target="nav-3-m"></div>
                            <div class="heading">
                                <?php echo $third_section_heading; ?>
                            </div>
                            <div class="content">
                                <?php echo $third_section_content; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="nav-3" data-magellan-target="nav-3"></div>
                <div class="third-section show-for-large">
                    <div class="background-image" style="background-image: url(<?php echo $third_section_background_image['url']; ?>)">
                        <div class="chevrons" style="background-image: url(<?php echo $third_section_chevrons['url']; ?>)">
                            <div class="fly-in-chevron animate" style="background-image: url(<?php echo $third_section_fly_in_chevron['url']; ?>)"></div>
                            <div class="grid-container">
                                <div id="third-section-waypoint-1">
                                    <div class="heading animate">
                                        <?php echo $third_section_heading; ?>
                                    </div>
                                    <div class="content animate">
                                        <?php echo $third_section_content; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="isMobile" class="mobile-fifth-section hide-for-large">
                    <div class="background-image" style="background-image: url(<?php echo $mobile_fifth_section_image['url']; ?>)">

                    </div>
                </div>
                <div id="nav-4" data-magellan-target="nav-4"></div>
                <div class="forth-section">
                    <style>
                        .forth-section .background-image {
                            background-image: url(<?php echo $mobile_sixth_section_chevrons['url']; ?>);
                        }

                        .forth-section .background-image .fly-in-chevron {
                            background-image: none;
                        }

                        @media print, screen and (min-width: 875px) {
                            .forth-section .background-image {
                                background-image: url(<?php echo $forth_section_chevrons['url']; ?>);
                            }

                            .forth-section .background-image .fly-in-chevron {
                                background-image: url(<?php echo $forth_section_chevrons_fly_in ['url']; ?>);
                            }

                        }
                    </style>
                    <div class="background-image">
                        <div class="fly-in-chevron animate"></div>

                        <div class="grid-container">
                            <div class="grid-x">
                                <div class="cell large-shrink medium-12 small-12">
                                    <div class="left">
                                        <div class="heading animate">
                                            <?php echo $forth_section_heading; ?>
                                        </div>
                                        <div class="frame-4-fade-in-box animate">
                                            <div class="icons">
                                                <div class="contrats active icon"><img src="<?php echo $forth_section_contracts_icons['url']; ?>"/></div>
                                                <div class="veille faded icon"><img src="<?php echo $forth_section_veille_icons['url']; ?>"/></div>
                                                <div class="consommations faded icon"><img src="<?php echo $forth_section_consomations_icons['url']; ?>"/></div>
                                                <div class="donnees faded icon"><img src="<?php echo $forth_section_dommees_icons['url']; ?>"/></div>
                                            </div>
                                            <div class="contrats active bullets">
                                                <?php echo $forth_section_bullet_content_contracts; ?>
                                            </div>
                                            <div class="veille faded bullets">
                                                <?php echo $forth_section_bullet_content_veille; ?>
                                            </div>
                                            <div class="consommations faded bullets">
                                                <?php echo $forth_section_bullet_content_consommations; ?>
                                            </div>
                                            <div class="donnees faded bullets">
                                                <?php echo $forth_section_bullet_content_donnes; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" cell large-auto medium-12 small-12">
                                    <div class="right">
                                        <div class="suivant hide-for-large" style="background-image: url(<?php echo $mobile_sixth_section_suivant['url']; ?>)"></div>
                                        <div class="pizza-box animate">
                                            <div class="pizza">
                                                <div class="contrats slice"><img src="<?php echo $forth_section_contracts_pizza['url']; ?>"/></div>
                                                <div class="donnees slice"><img src="<?php echo $forth_section_donnees_pizza['url']; ?>"/></div>
                                                <div class="consommations slice"><img src="<?php echo $forth_section_consommations_pizza['url']; ?>"/></div>
                                                <div class="veille slice"><img src="<?php echo $forth_section_veille_pizza['url']; ?>"/></div>
                                            </div>
                                            <div class="budget"><img src="<?php echo $forth_section_budget_circle['url']; ?>"/></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="suivant show-for-large animate" style="max-height: 91px; background-image: url(<?php echo $forth_section_suivant_arrow['url']; ?>)"></div>

                        <div class="chart">
                            <div class="chart-circle animate"><img src="<?php echo $forth_section_circular_arrows['url'] ?>"></div>
                            <div class="a-panel panel-1 animate"><img src="<?php echo $forth_section_chart_panel_1['url'] ?>"></div>
                            <div class="panel-arrow-1 animate show-for-large"><img src="<?php echo $forth_section_chart_arrow['url'] ?>"></div>
                            <div class="panel-arrow-1 hide-for-large"><img src="<?php echo $mobile_sixth_section_chart_arrow['url'] ?>"></div>
                            <div class="a-panel panel-2 animate"><img src="<?php echo $forth_section_chart_panel_2['url'] ?>"></div>
                            <div class="panel-arrow-2 animate show-for-large"><img src="<?php echo $forth_section_chart_arrow['url'] ?>"></div>
                            <div class="panel-arrow-2 hide-for-large"><img src="<?php echo $mobile_sixth_section_chart_arrow['url'] ?>"></div>
                            <div class="a-panel panel-3 animate"><img src="<?php echo $forth_section_chart_panel_3['url'] ?>"></div>
                            <div class="a-panel panel-4 animate"><img src="<?php echo $forth_section_chart_panel_4['url'] ?>"></div>
                            <div class="a-panel panel-5 animate"><img src="<?php echo $forth_section_chart_panel_5['url'] ?>"></div>
                            <div class="a-panel panel-6 animate"><img src="<?php echo $forth_section_chart_panel_6['url'] ?>"></div>
                            <div class="a-panel panel-7 animate"><img src="<?php echo $forth_section_chart_panel_7['url'] ?>"></div>
                            <div class="a-panel panel-8 animate"><img src="<?php echo $forth_section_chart_panel_8['url'] ?>"></div>
                            <div class="content animate">
                                <?php echo $forth_section_checkmark_content; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="nav-5" data-magellan-target="nav-5"></div>
                <div class="fifth-section show-for-large">
                    <div class="background-image" style="background-image: url(<?php echo $fifth_section_background_image['url']; ?>)">
                        <div class="grid-x">
                            <div class="cell auto"></div>
                            <div class="cell shrink">
                                <div class="chevrons" style="background-image: url(<?php echo $fifth_section_chevron['url']; ?>)">
                                    <div class="heading animate"><?php echo $fifth_section_heading; ?></div>
                                    <div class="content animate"><?php echo $fifth_section_content; ?></div>
                                </div>
                            </div>
                            <div class="cell auto" style="background-color: #bfebfb;"></div>
                        </div>
                    </div>
                </div>


                <div class="mobile-seventh-section hide-for-large">
                    <div class="background-image" style="background-image: url(<?php echo $mobile_seventh_section_image['url']; ?>)">
                    </div>
                    <div class="frame">
                        <div class="heading"><?php echo $fifth_section_heading; ?></div>
                        <div class="content"><?php echo $fifth_section_content; ?></div>
                    </div>
                </div>
                <div id="nav-6" data-magellan-target="nav-6"></div>
                <div class="sixth-section show-for-large">
                    <div class="chevrons" style="background-image: url(<?php echo $sixth_section_chevrons['url']; ?>)">
                        <div class="fly-in-chevron animate" style="background-image: url(<?php echo $sixth_section_chevrons_fly_in['url']; ?>)"></div>
                        <div class="top">


                            <div class="grid-container">
                                <div style="min-height: 180px;">
                                    <div class="heading animate">
                                        <?php echo $sixth_section_heading; ?>
                                    </div>
                                </div>
                                <div class="grid-x">
                                    <div class="cell large-4 medium-4">
                                        <div style="min-height: 100px;">
                                            <div class="sub-heading animate">
                                                <?php echo $sixth_section_strapline; ?>
                                            </div>
                                        </div>
                                        <div class="bullets animate">
                                            <ul>
                                                <?php
                                                /*$video['video_script'] = $video_script;
                                                $video['video_description'] = $video_description;*/
                                                foreach ($sixth_section_videos as $video) {
                                                    echo('<li>' . $video['video_description'] . '</li>');
                                                }
                                                ?>
                                            </ul>
                                            <?php //echo $sixth_section_bullet_points;
                                            ?>
                                        </div>

                                    </div>
                                    <div class="cell large-8 medium-8">
                                        <?php
                                        $counter = 1;
                                        $activeClass = ' active';
                                        foreach ($sixth_section_videos

                                                 as $video) {
                                            ?>
                                            <div class="video vid-<?php echo $counter . $activeClass; ?>">
                                                <div class="shadow">
                                                    <?php
                                                    echo $video['video_script'];
                                                    $counter++;
                                                    $activeClass = '';
                                                    ?>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                        <!--<div class="video vid-1 active">
                                            <div class="shadow">
                                                <iframe src="https://player.vimeo.com/video/189937619?color=ffffff&title=0&byline=0&portrait=0" width="542" height="305" frameborder="0"
                                                        allow="autoplay; fullscreen"
                                                        allowfullscreen></iframe>
                                            </div>
                                        </div>
                                        <div class="video vid-2">
                                            <div class="shadow">
                                                <iframe src="https://player.vimeo.com/video/189937619?color=ffffff&title=0&byline=0&portrait=0" width="542" height="305" frameborder="0"
                                                        allow="autoplay; fullscreen"
                                                        allowfullscreen></iframe>
                                            </div>
                                        </div>
                                        <div class="video vid-3">
                                            <div class="shadow">
                                                <iframe src="https://player.vimeo.com/video/189937619?color=ffffff&title=0&byline=0&portrait=0" width="542" height="305" frameborder="0"
                                                        allow="autoplay; fullscreen"
                                                        allowfullscreen></iframe>
                                            </div>
                                        </div>-->
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div id="nav-7" data-magellan-target="nav-7"></div>
                        <div class="middle">
                            <div class="newsroom">

                                <div class="grid-container">
                                    <div class="heading">
                                        NEWSROOM
                                    </div>
                                    <div class="archive-content">

                                        <?php
                                        $args = array(
                                            'post_type' => 'post'
                                        );

                                        $post_query = new WP_Query($args);
                                        if ($post_query->have_posts()) { ?>
                                            <div class="grid-x archive-grid">
                                                <?php
                                                while ($post_query->have_posts()) {
                                                    $post_query->the_post();
                                                    ?>
                                                    <div class="small-12 medium-6 large-4 cell panel">

                                                        <div class="grid-post">

                                                            <section class="featured-image" itemprop="text" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full') ?>)">

                                                            </section> <!-- end article section -->

                                                            <header class="article-header">
                                                                <h3 class="title"><a href="<?php the_permalink() ?>" rel="bookmark"
                                                                                     title="<?php the_title_attribute(); ?>"><?php echo wp_trim_words(get_the_title(), 12); ?></a></h3>
                                                                <?php get_template_part('parts/content', 'byline'); ?>
                                                            </header>


                                                        </div>

                                                    </div>
                                                    <?php
                                                }
                                                ?>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="more text-center"><a href="/posts-page/" class="button">Voir l'Archive</a></div>

                            </div>
                        </div>
                        <div id="nav-8" data-magellan-target="nav-8"></div>
                        <div class="bottom">
                            <div class="grid-container">
                                <div class="form">
                                    <?php gravity_form(1, true, true, true, '', true, 12); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mobile-eighth-section hide-for-large">
                    <div class="background-image" style="background-image: url(<?php echo $mobile_eighth_section_chevrons['url']; ?>)">
                        <div class="frame">
                            <div class="heading">
                                <?php echo $sixth_section_heading; ?>
                            </div>
                            <div class="sub-heading">
                                <?php echo $sixth_section_strapline; ?>
                            </div>
                            <div class="videos">
                                <?php
                                foreach ($sixth_section_videos as $video) {
                                    ?>
                                    <div class="video">
                                        <?php echo $video['video_script']; ?>
                                    </div>
                                    <div class="description">
                                        <?php echo strip_tags($video['video_description']); ?>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                            <div class="newsroom">

                                <div class="grid-container-x">
                                    <div class="heading">
                                        NEWSROOM
                                    </div>
                                    <div class="archive-content">

                                        <?php
                                        $args = array(
                                            'post_type' => 'post'
                                        );

                                        $post_query = new WP_Query($args);
                                        if ($post_query->have_posts()) {
                                        $postCount = 0;
                                        ?>
                                        <div class="grid-x archive-grid">
                                            <?php
                                            while ($post_query->have_posts()) {
                                            $post_query->the_post();
                                            if ($postCount == 0) {
                                            ?>
                                            <div class="small-12 medium-6 large-4 cell panel">
                                                <?php
                                                } else {
                                                ?>
                                                <div class="small-12 medium-6 large-4 cell panel show-for-medium">
                                                    <?php
                                                    }
                                                    ?>

                                                    <div class="grid-post">

                                                        <section class="featured-image" itemprop="text" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full') ?>)">

                                                        </section> <!-- end article section -->

                                                        <header class="article-header">
                                                            <h3 class="title"><a href="<?php the_permalink() ?>" rel="bookmark"
                                                                                 title="<?php the_title_attribute(); ?>">
                                                                    <?php
                                                                    if($postCount==0) {
                                                                        echo wp_trim_words(get_the_title(), 6);
                                                                    } else {
                                                                        echo wp_trim_words(get_the_title(), 6);
                                                                    }
                                                                    ?>
                                                                </a></h3>
                                                            <?php //get_template_part('parts/content', 'byline'); ?>
                                                        </header>


                                                    </div>

                                                </div>
                                                <?php

                                                $postCount++;
                                                }
                                                ?>
                                            </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="more text-center"><a href="/posts-page/" class="button">Voir l'Archive</a></div>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <div id="nav-8-m" data-magellan-target="nav-8-m"></div>
                <div class="mobile-ninth-section hide-for-large">
                    <div class="frame">
                        <div class="form">
                            <div class="heading">Contactez<br>Nous</div>
                            <?php gravity_form(2, false, true, true, '', true, 12); ?>
                        </div>
                    </div>
                </div>
                <div id="nav-9" data-magellan-target="nav-9"></div>
                <div class="seventh-section show-for-large">
                    <div class="chevrons" style="background-image: url(<?php echo $seventh_section_chevrons['url']; ?>)">
                        <div class="grid-container">
                            <div class="grid-x">
                                <div class="cell shrink">
                                    <div class="left-line active">
                                        <?php echo $seventh_section_line_one; ?>
                                    </div>
                                    <div class="left-line">
                                        <?php echo $seventh_section_line_two; ?>
                                    </div>
                                    <div class="left-line">
                                        <?php echo $seventh_section_line_three; ?>
                                    </div>
                                </div>
                                <div class="cell shrink">
                                    <?php echo $seventh_section_link_list;
                                    ?>
                                    <!-- <ul class="link-list" data-magellan>
                                         <li>
                                             <a href="#nav-0" data-toggle="off-canvas" aria-expanded="true" aria-controls="off-canvas">
                                                 retour en haut de la page
                                             </a>
                                         </li>
                                         <li><a href="/conditions-generales/">CONDITIONS GÉNÉRALES</a></li>
                                         <li><a href="/principes-de-confidentialite/">PRINCIPES DE CONFIDENTIALITÉ</a></li>
                                         <li><a href="/avis-de-confidentialite/">AVIS DE CONFIDENTIALITÉ</a></li>
                                     </ul>-->
                                </div>
                            </div>
                        </div>
                        <div class="grid-container">
                            <div class="grid-x">
                                <div class="cell shrink">
                                    <div class="logo">
                                        <img src="<?php echo $seventh_section_logo['url']; ?>"/>
                                    </div>
                                </div>
                                <div class="cell shrink">
                                    <div class="footer-text">
                                        <?php echo $seventh_section_footer_text; ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="mobile-tenth-section hide-for-large">
                    <div class="background-image" style="background-image: url(<?php echo $mobile_tenth_section_chevrons['url']; ?>)">
                        <div class="frame">
                            <div class="left-line active">
                                <?php echo $seventh_section_line_one; ?>
                            </div>
                            <div class="left-line">
                                <?php echo $seventh_section_line_two; ?>
                            </div>
                            <div class="left-line border-bottom">
                                <?php echo $seventh_section_line_three; ?>
                            </div>
                            <div class="logo">
                                <img src="<?php echo $seventh_section_logo['url']; ?>"/>
                            </div>
                            <div class="footer-text">
                                <?php echo strip_tags($seventh_section_footer_text); ?>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endwhile;
            endif; ?>

        </main> <!-- end #main -->

    </div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>
