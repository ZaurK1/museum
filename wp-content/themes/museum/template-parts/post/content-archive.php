<?php
/**
 * Template part for displaying page content in news.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package 
 */
?>



<div class="col-md-12 post_block margin-bot26 ">		
    <div class="" id="post-<?php the_ID(); ?>">
    <?php
                //$image = "/wp-content/assets/header-mini.png";
                if (get_the_post_thumbnail_url($post->ID, 'large')) {
                    $image = get_the_post_thumbnail_url($post->ID, 'large');
                } ?>
				
	<div class="row ">
	   
	<?php if ($image){ ?>
		<div class="col-md-2">		    
			<img src="<?php echo $image; ?>">
        </div>
        <div class="col-md-10">		
		    <p class="datetime"><?php the_time('j F Y'); ?></p>
			<?php the_title( sprintf( '<h3 class="post-title"><a href="%s" rel="bookmark" class="default-link text-decoration">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
            <div class="entry-summary">
		       <?php the_excerpt(); ?>
	        </div>	    
		</div>
	<?php } else { ?>
	    <div class="col-md-10">		
		    <p class="datetime"><?php the_time('j F Y'); ?></p>
			<?php the_title( sprintf( '<h3 class="post-title"><a href="%s" rel="bookmark" class="default-link text-decoration">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>		
            <div class="entry-summary">
		       <?php the_excerpt(); ?>
	        </div>				
		</div>
	<?php } ?>
	</div>
	<br>

   




    </div>	
	
</div>