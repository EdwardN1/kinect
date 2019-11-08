<?php
/**
 * The template part for displaying offcanvas content
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

<div class="off-canvas position-left" id="off-canvas" data-off-canvas data-off-canvas data-transition="overlap" data-content-overlay="false">
    <?php /*joints_off_canvas_nav(); */ ?><!--

	<?php /*if ( is_active_sidebar( 'offcanvas' ) ) : */ ?>

		<?php /*dynamic_sidebar( 'offcanvas' ); */ ?>

	--><?php /*endif; */ ?>
    <?php
    $linkPrefix = '/';
    if (is_front_page()) {
        $linkPrefix = '';
    }
    ?>
    <div class="nav-menu">
        <ul data-magellan>
            <?php if (is_front_page()) {
                ?>

                <li>
                    <a href="#nav-0" data-toggle="off-canvas">
                        retour en haut de la page
                    </a>
                </li>
                <?php
            } else {
                ?>
                <li>
                    <a href="/" data-toggle="off-canvas">
                        page d’accueil
                    </a>
                </li>
                <?php
            }
            ?>
            <li class="show-for-large">
                <a href="<?php echo $linkPrefix; ?>#nav-1" data-toggle="off-canvas">
                    ON VOUS AIDE À ACHETER<br>
                    MIEUX ET OPTIMISER VOS<br>
                    DEPENSES ENERGETIQUES<br>
                </a>
            </li>
            <li class="hide-for-large">
                <a href="<?php echo $linkPrefix; ?>#nav-1-m" data-toggle="off-canvas">
                    ON VOUS AIDE À ACHETER<br>
                    MIEUX ET OPTIMISER VOS<br>
                    DEPENSES ENERGETIQUES<br>
                </a>
            </li>
            <li class="show-for-large">
                <a href="<?php echo $linkPrefix; ?>#nav-2" data-toggle="off-canvas">
                    COMMENT VOUS GARANTIR LA<br>
                    MEILLEURE OFFRE ?
                </a>
            </li>
            <li class="hide-for-large">
                <a href="<?php echo $linkPrefix; ?>#nav-2-m" data-toggle="off-canvas">
                    COMMENT VOUS GARANTIR LA<br>
                    MEILLEURE OFFRE ?
                </a>
            </li>
            <li class="show-for-large">
                <a href="<?php echo $linkPrefix; ?>#nav-3" data-toggle="off-canvas">
                    LORSQUE VOUS COMPRENEZ<br> QUI,
                    VOUS COMPRENEZ POURQUO
                </a>
            </li>
            <li class="hide-for-large">
                <a href="<?php echo $linkPrefix; ?>#nav-3-m" data-toggle="off-canvas">
                    LORSQUE VOUS COMPRENEZ<br> QUI,
                    VOUS COMPRENEZ POURQUO
                </a>
            </li>
            <li>
                <a href="<?php echo $linkPrefix; ?>#nav-4" data-toggle="off-canvas">
                    VOTRE COURTIER
                    EN ÉNERGIES
                </a>
            </li>
            <li>
                <a href="<?php echo $linkPrefix; ?>#nav-5" data-toggle="off-canvas">
                    NOUS POUVONS FAIRE <br>
                    ENCORE PLUS !
                </a>
            </li>
            <li>
                <a href="<?php echo $linkPrefix; ?>#nav-6" data-toggle="off-canvas">
                    QUESTIONS FRÉQUEMMENT POSÉES
                </a>
            </li>
            <li>
                <a href="/posts-page/" data-toggle="off-canvas">
                    NEWSROOM
                </a>
            </li>
            <li class="show-for-large">
                <a href="<?php echo $linkPrefix; ?>#nav-8" data-toggle="off-canvas">
                    CONTACTEZ NOUS
                </a>
            </li>
            <li class="hide-for-large">
                <a href="<?php echo $linkPrefix; ?>#nav-8-m" data-toggle="off-canvas">
                    CONTACTEZ NOUS
                </a>
            </li>
            <li>
                <a href="/conditions-generales/" data-toggle="off-canvas">
                    CONDITIONS GÉNÉRALES
                </a>
            </li>
            <li>
                <a href="/principes-de-confidentialite/" data-toggle="off-canvas">
                    PRINCIPES DE CONFIDENTIALITÉ
                </a>
            </li>
            <li>
                <a href="/avis-de-confidentialite/" data-toggle="off-canvas">
                    AVIS DE CONFIDENTIALITÉ
                </a>
            </li>
        </ul>
        <div class="menu-logo">
            <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu-logo.png"/></a>
        </div>
        <div class="menu-close" data-toggle="off-canvas"></div>
    </div>

</div>
