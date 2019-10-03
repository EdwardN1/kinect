<?php
/*
Template Name: Full Width (Home Page)
*/

get_header(); ?>

<div class="content">

    <div class="inner-content grid-x">

        <main class="main small-12 medium-12 large-12 cell" role="main">

            <?php if (have_posts()) : while (have_posts()) :
                the_post(); ?>

                <div id="frame-0">


                    <?php if (have_rows('frame_0')) : ?>
                        <?php while (have_rows('frame_0')) : the_row(); ?>
                            <?php $left_chevron = get_sub_field('left_chevron'); ?>
                            <?php if ($left_chevron) { ?>
                                <div class="left-chevron" style="display:none; background-image: url(<?php echo $left_chevron['url']; ?>)"></div>
                            <?php } ?>
                            <?php $right_chevron = get_sub_field('right_chevron'); ?>
                            <?php if ($right_chevron) { ?>
                                <div class="right-chevron" style="display:none; background-image: url(<?php echo $right_chevron['url']; ?>)"></div>
                            <?php } ?>
                            <?php $logo = get_sub_field('logo'); ?>
                            <?php if ($logo) { ?>
                                <div class="logo" style="display: none;"><img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>"/></div>

                            <?php } ?>
                            <?php $strap_line_image = get_sub_field('strap_line_image'); ?>
                            <?php if ($strap_line_image) { ?>
                                <div class="strap-line-message" style="display: none;"><img src="<?php echo $strap_line_image['url']; ?>" alt="<?php echo $strap_line_image['alt']; ?>"/></div>

                            <?php } ?>




                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>

                <div id="frame-1">

                    <?php if ( have_rows( 'frame_1' ) ) : ?>
                        <?php while ( have_rows( 'frame_1' ) ) : the_row(); ?>
                            <?php the_sub_field( 'heading' ); ?>
                            <?php the_sub_field( 'description' ); ?>
                            <?php $background_image = get_sub_field( 'background_image' ); ?>
                            <?php $foreground_image = get_sub_field( 'foreground_image' ); ?>
                            <?php if ( $foreground_image ) { ?>
                                <img src="<?php echo $foreground_image['url']; ?>" alt="<?php echo $foreground_image['alt']; ?>" />
                            <?php } ?>
                            <?php $icon = get_sub_field( 'icon' ); ?>
                            <?php if ( $icon ) { ?>
                                <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" />
                            <?php } ?>
                            <?php $right_chevron = get_sub_field( 'right_chevron' ); ?>
                            <?php if ( $right_chevron ) { ?>
                                <img src="<?php echo $right_chevron['url']; ?>" alt="<?php echo $right_chevron['alt']; ?>" />
                            <?php } ?>
                            <?php the_sub_field( 'footer_text' ); ?>
                            <div class="background" style="background-image: <?php echo $background_image['url']; ?>">

                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>

            <?php endwhile;
            endif; ?>

        </main> <!-- end #main -->

    </div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>
