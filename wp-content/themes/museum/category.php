<?php
/**
* The template for displaying category
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package 
*/
get_header(); ?>

    <div class="row mdl-shadow--4dp">
	    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
		<?php $args = array(
	'show_option_all'    => '',
	'show_option_none'   => __('No categories'),
	'orderby'            => 'name',
	'order'              => 'DESC',
	'show_last_update'   => 0,
	'style'              => 'list_cat',
	'show_count'         => 0,
	'hide_empty'         => 1,
	'use_desc_for_title' => 1,
	'child_of'           => 0,
	'feed'               => '',
	'feed_type'          => '',
	'feed_image'         => '',
	'exclude'            => '',
	'exclude_tree'       => '',
	'include'            => '',
	'hierarchical'       => true,
	'title_li'           => __( 'Categories' ),
	'number'             => NULL,
	'echo'               => 1,
	'depth'              => 8,
	'current_category'   => 0,
	'pad_counts'         => 0,
	'taxonomy'           => 'category',
	'walker'             => 'Walker_Category',
	'hide_title_if_empty' => false,
	'separator'          => '',
);

?>
            <br><span class="list-option">                            					
	                           <?php wp_list_categories( $args ); ?>
            </span>
		</div>
	</div>

<br>
<section class="section category-section">
    <div class="container">
        <div class="archive-container">
            <div class="row">
                <?php
                    if ( have_posts() ) : ?>
                <div class="col-md-12">
                    <div class="page-title text-center" style="margin-bottom:30px;">
                       
                    </div>
                    <div class="drawer-separator"></div>

                    <div class="row">
                        <div class="col-md-12">
                            <?php $cat = get_the_category(); $slug = $cat[0]->slug;?>
                            <?php
                                if (is_category( 'news' ) ) :?>
                                    <?php
                                    while ( have_posts() ) : the_post(); ?>
                                        <?php get_template_part( 'template-parts/post/content', 'news' ); ?>
                                    <?endwhile;?>

                                <?php elseif (is_category( 'video' ) ) :?>
                                    <?php
                                    while (have_posts()) : the_post(); ?>
                                        <?php get_template_part( 'template-parts/post/content', 'video'); ?>

                                    <?endwhile;?>

                                <?php elseif (is_category( 'photo' ) ) :?>

                                    <?php
                                        while (have_posts()) : the_post(); ?>
                                  
                                        <?php get_template_part( 'template-parts/post/content', 'gallery'); ?>                               

                                     <?endwhile;?>

                                <?php elseif (is_category( 'mediaaboutus' ) ) :?>

                                    <?php
                                        while (have_posts()) : the_post(); ?>
                                            <?php get_template_part( 'template-parts/post/content', 'media'); ?>
                                            <?endwhile;?>

                                <?php else :?>
                                    <?php
                                        while (have_posts()) : the_post(); ?>
                                            <?php get_template_part( 'template-parts/post/content', 'archive'); ?>
                                            <?endwhile;?>
                            <?php
                            endif;?>

                        </div>
                    </div>
					<div class="row text-center">
                    <?php if (wpbeginner_numeric_posts_nav()): ?>
                        <div class="row text-center">
                            <?php wpbeginner_numeric_posts_nav(); ?>
                        </div>
                    <?php else: endif; ?>
					</div>
					
                </div>
                
                <?php
                else :
                    get_template_part( 'template-parts/post/content', 'none' );
                endif; ?>
            </div>
        </div>
    </div>
</section>


<?php
get_footer();