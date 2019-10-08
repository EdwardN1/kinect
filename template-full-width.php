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
                                    <div class="sub-heading"><?php echo $first_section_sub_heading; ?></div>

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
                                        <div class="content"><?php echo $first_section_content; ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cell auto">
                            <div class="side"></div>
                        </div>
                    </div>
                </div>

                <div class="second-section">
                    <div class="background-image" style="background-image: url(<?php echo $second_section_background_image['url']; ?>)">
                        <div class="gradient-chevron" style="background-image: url(<?php echo $second_section_gradient_chevron['url']; ?>)">
                            <div class="grid-container">
                                <div class="grid-x">
                                    <div class="cell large-6 medium-6 small-6"></div>
                                    <div class="cell large-6 medium-6 small-6">
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
                </div>


                <div class="third-section">
                    <div class="background-image" style="background-image: url(<?php echo $third_section_background_image['url']; ?>)">
                        <div class="chevrons" style="background-image: url(<?php echo $third_section_chevrons['url']; ?>)">
                            <div class="grid-container">
                                <div class="heading">
                                    <?php echo $third_section_heading; ?>
                                </div>
                                <div class="content">
                                    <?php echo $third_section_content; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="forth-section">
                    <div class="background-image" style="background-image: url(<?php echo $forth_section_chevrons['url']; ?>)">

                        <div class="grid-container">
                            <div class="grid-x">
                                <div class="cell shrink">
                                    <div class="left">
                                        <div class="heading">
                                            <?php echo $forth_section_heading; ?>
                                        </div>
                                        <div class="icons">

                                        </div>
                                        <div class="bullets">
                                            <?php echo $forth_section_bullet_content; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class=" cell auto">
                                    <div class="right">
                                        <div class="pizza-box">
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

                    </div>
                </div>

            <?php endwhile;
            endif; ?>

        </main> <!-- end #main -->

    </div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>
