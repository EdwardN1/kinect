<?php
/*
Template Name: Full Width (Home Page)
*/

get_header(); ?>

<div class="content">

    <div class="inner-content grid-x">

        <main class="main small-12 medium-12 large-12 cell" role="main">

            <?php if (have_posts()) : while (have_posts()) :
                the_post();
            ?>
                <?php if ( have_rows( 'backgrounds' ) ) : ?>
                <?php while ( have_rows( 'backgrounds' ) ) : the_row(); ?>

                    <?php $top_parallax_background_image = get_sub_field( 'top_parallax_background_image' ); ?>
                    <?php if ( $top_parallax_background_image ) { ?>
                        <div class="top_parallax_background_image" style="background-image: url(<?php echo $top_parallax_background_image['url']; ?>)">
                            <?php $first_chevron_set = get_sub_field( 'first_chevron_set' ); ?>
                            <?php if ( $first_chevron_set ) { ?>
                                <?php $first_chevron_set_image = get_sub_field( 'first_chevron_set_image' ); ?>
                                <?php if ( $first_chevron_set_image ) { ?>
                                    <div class="chevron-background-image" style="background-image: url(<?php echo $first_chevron_set_image['url']; ?>)"></div>
                                <?php } ?>
                                <div class="first_chevron_set" style="background-image: url(<?php echo $first_chevron_set['url']; ?>)"></div>
                            <?php } ?>
                        </div>
                        <?php $second_section_background_image = get_sub_field( 'second_section_background_image' ); ?>
                        <?php if ( $second_section_background_image ) { ?>
                            <div class="second-section" style="background-image: url(<?php echo $second_section_background_image['url']; ?>)">
                                <?php $second_section_gradient_chevron = get_sub_field( 'second_section_gradient_chevron' ); ?>
                                <?php if ( $second_section_gradient_chevron ) { ?>
                                    <div class="second_section_gradient_chevron" style="background-image: url(<?php echo $second_section_gradient_chevron['url']; ?>)"></div>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    <?php } ?>

                    <?php $third_section_background_image = get_sub_field( 'third_section_background_image' ); ?>
                    <?php if ( $third_section_background_image ) { ?>
                        <div class="third-section" style="background-image: url(<?php echo $third_section_background_image['url']; ?>)">
                            <?php $third_section_chevrons = get_sub_field( 'third_section_chevrons' ); ?>
                            <?php if ( $third_section_chevrons ) { ?>
                                <div class="third_section_chevrons" style="background-image: url(<?php echo $third_section_chevrons['url']; ?>)"></div>
                            <?php } ?>
                        </div>
                    <?php } ?>

                    <?php $forth_section_chevrons = get_sub_field( 'forth_section_chevrons' ); ?>
                    <?php if ( $forth_section_chevrons ) { ?>
                        <div class="forth-section" style="background-image: url(<?php echo $forth_section_chevrons['url']; ?>)">

                        </div>
                    <?php } ?>

                    <?php $fifth_section_background_image = get_sub_field( 'fifth_section_background_image' ); ?>
                    <?php if ( $fifth_section_background_image ) { ?>
                        <div class="fifth-section" style="background-image: url(<?php echo $fifth_section_background_image['url']; ?>)">
                            <?php $fifth_section_chevron = get_sub_field( 'fifth_section_chevron' ); ?>
                            <?php if ( $fifth_section_chevron ) { ?>
                                <div class="fifth-section-cheveron" style="background-image: url(<?php echo $fifth_section_chevron['url']; ?>)">

                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>

                    <?php $sixth_section_chevrons = get_sub_field( 'sixth_section_chevrons' ); ?>
                    <?php if ( $sixth_section_chevrons ) { ?>
                        <div class="sixth-section" style="background-image: url(<?php echo $sixth_section_chevrons['url']; ?>)">

                        </div>
                    <?php } ?>

                    <?php $seventh_section_chevrons = get_sub_field( 'seventh_section_chevrons' ); ?>
                    <?php if ( $seventh_section_chevrons ) { ?>
                        <div class="seventh-section" style="background-image: url(<?php echo $seventh_section_chevrons['url']; ?>)">

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
