<?php 
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 */

$homePageID = get_option('page_on_front');



get_header(); ?>
<?php if (have_rows('backgrounds',$homePageID)) : ?>
    <?php while (have_rows('backgrounds',$homePageID)) : the_row(); ?>
        <?php $seventh_section_chevrons = get_sub_field('seventh_section_chevrons'); ?>
    <?php endwhile; ?>
<?php endif; ?>

<?php if (have_rows('icons',$homePageID)) : ?>
    <?php while (have_rows('icons',$homePageID)) : the_row(); ?>
        <?php $seventh_section_right_blue_arrow = get_sub_field('seventh_section_right_blue_arrow'); ?>
        <?php $seventh_section_logo = get_sub_field('seventh_section_logo'); ?>
    <?php endwhile; ?>
<?php endif; ?>

<?php if (have_rows('content',$homePageID)) : ?>
    <?php while (have_rows('content',$homePageID)) : the_row(); ?>
        <?php $seventh_section_line_one = get_sub_field('seventh_section_line_one'); ?>
        <?php $seventh_section_line_two = get_sub_field('seventh_section_line_two'); ?>
        <?php $seventh_section_line_three = get_sub_field('seventh_section_line_three'); ?>
        <?php $seventh_section_link_list = ''; ?>
        <?php
        if (have_rows('seventh_section_link_list')) :
            $seventh_section_link_list = '<ul class="link-list data-magellan">';
            $seventh_section_mobile_link_list ='<ul class="link-list data-magellan">';
            while (have_rows('seventh_section_link_list')) : the_row();
                $seventh_section_link_list .= '<li><a href="/' . get_sub_field('url') . '">' . get_sub_field('link_name') . '</a></li>';
                $seventh_section_mobile_link_list .= '<li><a href="/' . get_sub_field('mobile_url') . '">' . get_sub_field('link_name') . '</a></li>';
            endwhile;
            $seventh_section_link_list .= '</ul>';
            $seventh_section_mobile_link_list .= '</ul>';
        endif;
        ?>
        <?php $seventh_section_footer_text = get_sub_field('seventh_section_footer_text'); ?>
    <?php endwhile; ?>
<?php endif; ?>

<?php if (have_rows('mobile',$homePageID)) : ?>
    <?php while (have_rows('mobile',$homePageID)) : the_row(); ?>
        <?php $mobile_tenth_section_chevrons = get_sub_field('mobile_tenth_section_chevrons'); ?>
    <?php endwhile; ?>
<?php endif; ?>
    <div class="content">

        <div class="inner-content">

            <main class="main" role="main">

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <?php //get_template_part( 'parts/loop', 'single' ); ?>

                    <div class="menu-button" data-toggle="off-canvas">
                        <div class="grid-container">
                            <div class="grid-x">
                                <div class="cell shrink menu-arrow"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu.png"></div>
                                <div class="cell auto"></div>
                                <div class="cell shrink menu-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu-logo.png"></div>
                            </div>
                        </div>
                    </div>

                    <div class="content main page">

                        <section class="entry-content white-background" itemprop="text">
                            <header class="single-header">
                                <div class="grid-container">
                                    <div class="newsroom"><?php the_title(); ?></div>
                                    <div class="kinect-procure"><span class="underline">KINECT-PROCURE™</span></div>
                                </div>
                            </header>
                            <div class="featured-image" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>)">

                            </div>
                            <div class="grid-container">
                                <div class="post-content">
                                    <?php the_content(); ?>
                                </div>
                            </div>
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
                                                <?php echo $seventh_section_link_list; ?>
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
                                    <div class="frame" >
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
                        </section> <!-- end article section -->
                    </div>



                <?php endwhile; else : ?>

                    <?php //get_template_part( 'parts/content', 'missing' ); ?>

                <?php endif; ?>

            </main> <!-- end #main -->


        </div> <!-- end #inner-content -->

    </div> <!-- end #content -->

<?php get_footer(); ?>