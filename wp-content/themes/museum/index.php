<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<div class="row">
<div class="col-md-12">
<?php 
echo do_shortcode('[smartslider3 slider=2]');
?>

</div>
</div>
<div class="row">
		      <div class="col-md-12">			      
			          <img src="<?php echo get_stylesheet_directory_uri()?>/img/welcome.jpg">
		      </div>
		  </div>
		  <div class="row container">
		      <div class="col-md-12 ">
			      <div class="row background1 inform"><br><br>
			          <h2 class="text-left">ИНФОРМАЦИЯ</h2>
				  </div>
		      </div>
		  </div>
		  <div class="row conbackground-color: #e8e5da;tainer">
		  <div class="container">
			  <div class="column_left">
			      <div class="row background1">
				      <div class="imgrow">
					      <a href="http://mkrf.ru" target="_blank"><img src="<?php echo get_stylesheet_directory_uri()?>/img/mkrf.jpg"></a>
					      <a href="http://mkkbr.ru" target="_blank"><img src="<?php echo get_stylesheet_directory_uri()?>/img/mkkbr.jpg"></a>
					  </div>
				  </div>
		      </div>
			  <div class="column_right">
			      <div class="row background1">
				      <div class="">
					      <img src="<?php echo get_stylesheet_directory_uri()?>/img/sayt-5_14.jpg">
                         <?php
							$args1 = array( 'category_name' => 'anons', 'posts_per_page' => '1', 'orderby' => 'post_date', 'post_status' => 'publish');
							$the_query = new WP_Query( $args1 );
							 if ($the_query->have_posts()) {
                                    while ($the_query-> have_posts() ) : $the_query->the_post(); ?>
                                        <?php get_template_part( 'template-parts/post/content', 'newsmain' ); ?>
                                    <?endwhile;?>
       
                            <?php
                  } else {
                  }
                ?>
					  </div>
				  </div>
		      </div>
		  </div>
		  </div>
		   <div class="row container">
		      <div class="col-md-12 ">
			      <div class="row background1 inform"><br><br>
				  <div class="row text-center">
				      <a href="http://bus.gov.ru/pub/independentRating/list">
				      <img src="http://museum.loc/wp-content/uploads/2018/05/busgov-300x230.jpg" >
					  </a><br>
					  <a href="http://bus.gov.ru/pub/independentRating/list">Результаты независимой оценки</a>
				  </div>
			          <h2 class="text-left">НОВОСТИ</h2>
					   <?php
							$args = array( 'cat'=>'-4', 'posts_per_page' => '5', 'orderby' => 'post_date', 'post_status' => 'publish');
							$the_query = new WP_Query( $args );
							 if ($the_query->have_posts()) {
                                    while ($the_query-> have_posts() ) : $the_query->the_post(); ?>
                                        <?php get_template_part( 'template-parts/post/content', 'newsmain' ); ?>
                                    <?endwhile;?>
       
                            <?php
                  } else {
                  }
                ?>
				  </div>
		      </div>
		  </div>

<?php get_footer();
