<?php
/*
Template Name: Full Width (Home Page)
*/

get_header(); ?>

<?php if (have_rows('backgrounds')) : ?>
    <?php while (have_rows('backgrounds')) : the_row(); ?>
        <?php $top_parallax_background_image = get_sub_field('top_parallax_background_image'); ?>
        <?php $first_section_top_chevron_set = get_sub_field('first_section_top_chevron_set'); ?>
        <?php $first_section_bottom_chevron_set = get_sub_field('first_section_bottom_chevron_set'); ?>
        <?php $first_chevron_set_image = get_sub_field('first_chevron_set_image'); ?>
        <?php $second_section_background_image = get_sub_field('second_section_background_image'); ?>
        <?php $second_section_gradient_chevron = get_sub_field('second_section_gradient_chevron'); ?>
        <?php $third_section_background_image = get_sub_field('third_section_background_image'); ?>
        <?php $third_section_chevrons = get_sub_field('third_section_chevrons'); ?>
        <?php $forth_section_chevrons = get_sub_field('forth_section_chevrons'); ?>
        <?php $fifth_section_background_image = get_sub_field('fifth_section_background_image'); ?>
        <?php $fifth_section_chevron = get_sub_field('fifth_section_chevron'); ?>
        <?php $sixth_section_chevrons = get_sub_field('sixth_section_chevrons'); ?>
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
        <?php $forth_section_consommations_pizza_ = get_sub_field('forth_section_consommations_pizza_'); ?>
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
        <?php $forth_section_bullet_content = get_sub_field('forth_section_bullet_content'); ?>
        <?php $forth_section_checkmark_content = get_sub_field('forth_section_checkmark_content'); ?>
        <?php $fifth_section_heading = get_sub_field('fifth_section_heading'); ?>
        <?php $fifth_section_content = get_sub_field('fifth_section_content'); ?>
        <?php $sixth_section_heading = get_sub_field('sixth_section_heading'); ?>
        <?php $sixth_section_strapline = get_sub_field('sixth_section_strapline'); ?>
        <?php $sixth_section_bullet_points = get_sub_field('sixth_section_bullet_points'); ?>
        <?php $sixth_section_youtube_link = get_sub_field('sixth_section_youtube_link'); ?>
        <?php $sixth_section_gravity_form_id = get_sub_field('sixth_section_gravity_form_id'); ?>
        <?php $seventh_section_line_one = get_sub_field('seventh_section_line_one'); ?>
        <?php $seventh_section_line_two = get_sub_field('seventh_section_line_two'); ?>
        <?php $seventh_section_line_three = get_sub_field('seventh_section_line_three'); ?>
        <?php if (have_rows('seventh_section_link_list')) : ?>
            <?php while (have_rows('seventh_section_link_list')) : the_row(); ?>
                <?php //the_sub_field( 'link_name' ); ?>
                <?php //the_sub_field( 'url' ); ?>
            <?php endwhile; ?>
        <?php else : ?>
            <?php // no rows found ?>
        <?php endif; ?>
        <?php $seventh_section_footer_text = get_sub_field('seventh_section_footer_text'); ?>
    <?php endwhile; ?>
<?php endif; ?>

<div class="content">

    <div class="inner-content grid-x">

        <main class="main small-12 medium-12 large-12 cell" role="main">

            <?php if (have_posts()) : while (have_posts()) :
                the_post();
                ?>
                <div class="backdrop_parallax_background_image" style="background-image: url(<?php echo $top_parallax_background_image['url']; ?>)">
                </div>
                <div class="first-section">
                    <div class="grid-x">
                        <div class="cell auto">
                            <div class="top"></div>
                            <div class="bottom"></div>
                        </div>
                        <div class="cell shrink">
                            <div class="top-chevrons" style="background-image: url(<?php echo $first_section_top_chevron_set['url']; ?>)">
                                <div class="grid-container">
                                    <div class="first-section-container">
                                        <div class="graph">
                                            <img src="<?php echo $first_section_graph['url']; ?>" alt="<?php echo $first_section_graph['alt']; ?>"/>
                                        </div>
                                        <!--<div class="graph-image" style="background-image: url(<?php /*echo $first_section_graph['url']; */ ?>)"></div>-->
                                        <div class="heading"><?php echo $first_section_heading; ?></div>
                                        <div class="strap-line"><?php echo $first_section_strapline; ?></div>
                                        <div class="white-chevron"><img class="right-arrow" src="<?php echo $first_section_white_arrow['url']; ?>"
                                                                        alt="<?php echo $first_section_white_arrow['alt']; ?>"/></div>
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
                                </div>
                            </div>
                        </div>
                        <div class="cell auto">
                            <div class="side"></div>
                        </div>
                    </div>
                </div>

                <?php if (have_rows('backgrounds')) : ?>
                <?php while (have_rows('backgrounds')) : the_row(); ?>


                    <?php $top_parallax_background_image = get_sub_field('top_parallax_background_image'); ?>
                    <?php if ($top_parallax_background_image) { ?>

                        <div class="top_parallax_background_image" style="background-image: url(<?php //echo $top_parallax_background_image['url']; ?>)">
                            <?php $first_chevron_set = get_sub_field('first_chevron_set'); ?>
                            <?php if ($first_chevron_set) { ?>
                                <?php $first_chevron_set_image = get_sub_field('first_chevron_set_image'); ?>
                                <?php if ($first_chevron_set_image) { ?>
                                    <div class="chevron-background-image" style="background-image: url(<?php echo $first_chevron_set_image['url']; ?>)"></div>
                                <?php } ?>
                                <div class="grid-x">
                                    <div class="cell auto">
                                        <div class="top"></div>
                                        <div class="bottom"></div>
                                    </div>
                                    <div class="cell shrink">
                                        <div class="first_chevron_set" style="background-image: url(<?php echo $first_chevron_set['url']; ?>)">
                                            <?php if ($first_section_graph) { ?>
                                                <img class="graph" src="<?php echo $first_section_graph['url']; ?>" alt="<?php echo $first_section_graph['alt']; ?>"/>
                                            <?php } ?>
                                            <?php if ($first_section_white_arrow) { ?>
                                                <img class="right-arrow" src="<?php echo $first_section_white_arrow['url']; ?>" alt="<?php echo $first_section_white_arrow['alt']; ?>"/>
                                            <?php } ?>
                                            <div class="grid-container"><?php echo $first_section_heading; ?></div>
                                            <div class="grid-container"><?php echo $first_section_strapline; ?></div>
                                            <div class="grid-container"><?php echo $first_section_sub_heading; ?></div>
                                            <div class="grid-container"><?php echo $first_section_content; ?></div>
                                        </div>
                                    </div>
                                    <div class="cell auto">
                                        <div class="top"></div>
                                        <div class="bottom"></div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <?php $second_section_background_image = get_sub_field('second_section_background_image'); ?>
                        <?php if ($second_section_background_image) { ?>
                            <div class="second-section" style="background-image: url(<?php echo $second_section_background_image['url']; ?>)">
                                <?php $second_section_gradient_chevron = get_sub_field('second_section_gradient_chevron'); ?>
                                <?php if ($second_section_gradient_chevron) { ?>
                                    <div class="second_section_gradient_chevron" style="background-image: url(<?php echo $second_section_gradient_chevron['url']; ?>)">
                                        <div class="grid-container"><?php echo $second_section_heading; ?></div>
                                        <div class="grid-container"><?php echo $second_section_content; ?></div>
                                    </div>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    <?php } ?>

                    <?php $third_section_background_image = get_sub_field('third_section_background_image'); ?>
                    <?php if ($third_section_background_image) { ?>
                        <div class="third-section" style="background-image: url(<?php echo $third_section_background_image['url']; ?>)">
                            <?php $third_section_chevrons = get_sub_field('third_section_chevrons'); ?>
                            <?php if ($third_section_chevrons) { ?>
                                <div class="third_section_chevrons" style="background-image: url(<?php echo $third_section_chevrons['url']; ?>)">
                                    <div class="grid-container"><?php echo $third_section_heading; ?></div>
                                    <div class="grid-container"><?php echo $third_section_content; ?></div>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>

                    <?php $forth_section_chevrons = get_sub_field('forth_section_chevrons'); ?>
                    <?php if ($forth_section_chevrons) { ?>
                        <div class="forth-section" style="background-image: url(<?php echo $forth_section_chevrons['url']; ?>)">
                            <div class="grid-container"><?php echo $forth_section_heading; ?></div>
                            <div class="grid-container"><?php echo $forth_section_bullet_content; ?></div>
                            <div class="grid-container"><?php echo $forth_section_checkmark_content; ?></div>

                            <?php if ($forth_section_contracts_icons) { ?>
                                <img src="<?php echo $forth_section_contracts_icons['url']; ?>" alt="<?php echo $forth_section_contracts_icons['alt']; ?>"/>
                            <?php } ?>
                            <?php if ($forth_section_consomations_icons) { ?>
                                <img src="<?php echo $forth_section_consomations_icons['url']; ?>" alt="<?php echo $forth_section_consomations_icons['alt']; ?>"/>
                            <?php } ?>
                            <?php if ($forth_section_dommees_icons) { ?>
                                <img src="<?php echo $forth_section_dommees_icons['url']; ?>" alt="<?php echo $forth_section_dommees_icons['alt']; ?>"/>
                            <?php } ?>
                            <?php if ($forth_section_veille_icons) { ?>
                                <img src="<?php echo $forth_section_veille_icons['url']; ?>" alt="<?php echo $forth_section_veille_icons['alt']; ?>"/>
                            <?php } ?>
                            <?php if ($forth_section_contracts_pizza) { ?>
                                <img src="<?php echo $forth_section_contracts_pizza['url']; ?>" alt="<?php echo $forth_section_contracts_pizza['alt']; ?>"/>
                            <?php } ?>
                            <?php if ($forth_section_donnees_pizza) { ?>
                                <img src="<?php echo $forth_section_donnees_pizza['url']; ?>" alt="<?php echo $forth_section_donnees_pizza['alt']; ?>"/>
                            <?php } ?>
                            <?php if ($forth_section_consommations_pizza_) { ?>
                                <img src="<?php echo $forth_section_consommations_pizza_['url']; ?>" alt="<?php echo $forth_section_consommations_pizza_['alt']; ?>"/>
                            <?php } ?>
                            <?php if ($forth_section_veille_pizza) { ?>
                                <img src="<?php echo $forth_section_veille_pizza['url']; ?>" alt="<?php echo $forth_section_veille_pizza['alt']; ?>"/>
                            <?php } ?>
                            <?php if ($forth_section_chart_arrow) { ?>
                                <img src="<?php echo $forth_section_chart_arrow['url']; ?>" alt="<?php echo $forth_section_chart_arrow['alt']; ?>"/>
                            <?php } ?>
                            <?php if ($forth_section_chart_panel_1) { ?>
                                <img src="<?php echo $forth_section_chart_panel_1['url']; ?>" alt="<?php echo $forth_section_chart_panel_1['alt']; ?>"/>
                            <?php } ?>
                            <?php if ($forth_section_chart_panel_2) { ?>
                                <img src="<?php echo $forth_section_chart_panel_2['url']; ?>" alt="<?php echo $forth_section_chart_panel_2['alt']; ?>"/>
                            <?php } ?>
                            <?php if ($forth_section_chart_panel_3) { ?>
                                <img src="<?php echo $forth_section_chart_panel_3['url']; ?>" alt="<?php echo $forth_section_chart_panel_3['alt']; ?>"/>
                            <?php } ?>
                            <?php if ($forth_section_chart_panel_4) { ?>
                                <img src="<?php echo $forth_section_chart_panel_4['url']; ?>" alt="<?php echo $forth_section_chart_panel_4['alt']; ?>"/>
                            <?php } ?>
                            <?php if ($forth_section_chart_panel_5) { ?>
                                <img src="<?php echo $forth_section_chart_panel_5['url']; ?>" alt="<?php echo $forth_section_chart_panel_5['alt']; ?>"/>
                            <?php } ?>
                            <?php if ($forth_section_chart_panel_6) { ?>
                                <img src="<?php echo $forth_section_chart_panel_6['url']; ?>" alt="<?php echo $forth_section_chart_panel_6['alt']; ?>"/>
                            <?php } ?>
                            <?php if ($forth_section_chart_panel_7) { ?>
                                <img src="<?php echo $forth_section_chart_panel_7['url']; ?>" alt="<?php echo $forth_section_chart_panel_7['alt']; ?>"/>
                            <?php } ?>
                            <?php if ($forth_section_chart_panel_8) { ?>
                                <img src="<?php echo $forth_section_chart_panel_8['url']; ?>" alt="<?php echo $forth_section_chart_panel_8['alt']; ?>"/>
                            <?php } ?>
                            <?php if ($forth_section_budget_circle) { ?>
                                <img src="<?php echo $forth_section_budget_circle['url']; ?>" alt="<?php echo $forth_section_budget_circle['alt']; ?>"/>
                            <?php } ?>
                            <?php if ($forth_section_suivant_arrow) { ?>
                                <img src="<?php echo $forth_section_suivant_arrow['url']; ?>" alt="<?php echo $forth_section_suivant_arrow['alt']; ?>"/>
                            <?php } ?>
                            <?php if ($forth_section_circular_arrows) { ?>
                                <img src="<?php echo $forth_section_circular_arrows['url']; ?>" alt="<?php echo $forth_section_circular_arrows['alt']; ?>"/>
                            <?php } ?>

                        </div>
                    <?php } ?>

                    <?php $fifth_section_background_image = get_sub_field('fifth_section_background_image'); ?>
                    <?php if ($fifth_section_background_image) { ?>
                        <div class="fifth-section" style="background-image: url(<?php echo $fifth_section_background_image['url']; ?>)">
                            <?php $fifth_section_chevron = get_sub_field('fifth_section_chevron'); ?>
                            <?php if ($fifth_section_chevron) { ?>
                                <div class="fifth-section-cheveron" style="background-image: url(<?php echo $fifth_section_chevron['url']; ?>)">

                                    <div class="grid-container"><?php echo $fifth_section_heading; ?></div>
                                    <div class="grid-container"><?php echo $fifth_section_content; ?></div>

                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>

                    <?php $sixth_section_chevrons = get_sub_field('sixth_section_chevrons'); ?>
                    <?php if ($sixth_section_chevrons) { ?>
                        <div class="sixth-section" style="background-image: url(<?php echo $sixth_section_chevrons['url']; ?>)">

                            <div class="grid-container"><?php echo $sixth_section_heading; ?></div>
                            <div class="grid-container"><?php echo $sixth_section_strapline; ?></div>
                            <div class="grid-container"><?php echo $sixth_section_bullet_points; ?></div>
                            <div class="grid-container"><?php echo $sixth_section_youtube_link; ?></div>
                            <div class="grid-container"><?php echo $sixth_section_gravity_form_id; ?></div>

                            <?php if ($sixth_section_green_arrow) { ?>
                                <img src="<?php echo $sixth_section_green_arrow['url']; ?>" alt="<?php echo $sixth_section_green_arrow['alt']; ?>"/>
                            <?php } ?>
                            <?php if ($sixth_section_left_blue_arrow) { ?>
                                <img src="<?php echo $sixth_section_left_blue_arrow['url']; ?>" alt="<?php echo $sixth_section_left_blue_arrow['alt']; ?>"/>
                            <?php } ?>
                            <?php if ($sixth_section_right_blue_arrow) { ?>
                                <img src="<?php echo $sixth_section_right_blue_arrow['url']; ?>" alt="<?php echo $sixth_section_right_blue_arrow['alt']; ?>"/>
                            <?php } ?>
                        </div>
                    <?php } ?>

                    <?php $seventh_section_chevrons = get_sub_field('seventh_section_chevrons'); ?>
                    <?php if ($seventh_section_chevrons) { ?>
                        <div class="seventh-section" style="background-image: url(<?php echo $seventh_section_chevrons['url']; ?>)">

                            <div class="grid-container"><?php echo $seventh_section_line_one; ?></div>
                            <div class="grid-container"><?php echo $seventh_section_line_two; ?></div>
                            <div class="grid-container"><?php echo $seventh_section_line_three; ?></div>
                            <div class="grid-container"><?php echo 'Link List'; ?></div>
                            <div class="grid-container"><?php echo $seventh_section_footer_text; ?></div>

                            <?php if ($seventh_section_right_blue_arrow) { ?>
                                <img src="<?php echo $seventh_section_right_blue_arrow['url']; ?>" alt="<?php echo $seventh_section_right_blue_arrow['alt']; ?>"/>
                            <?php } ?>
                            <?php if ($seventh_section_logo) { ?>
                                <img src="<?php echo $seventh_section_logo['url']; ?>" alt="<?php echo $seventh_section_logo['alt']; ?>"/>
                            <?php } ?>
                        </div>
                    <?php } ?>
                    <!--<div style="height: 1000px; width: 100%;"></div>-->
                <?php endwhile; ?>
            <?php endif; ?>

            <?php endwhile;
            endif; ?>

        </main> <!-- end #main -->

    </div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>
