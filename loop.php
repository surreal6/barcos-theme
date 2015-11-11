<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article class="article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="container loop-article">
			<!-- /loop-article container -->
			<div class="row">
				<div class="ten columns title-div">
					<!-- post title -->
					<h2>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
					</h2>
					<!-- /post title -->
				</div>
		    <div class="two columns thumbnail-div">
					<!-- post thumbnail -->
					<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
						</a>
					<?php endif; ?>
					<!-- /post thumbnail -->
				</div>
			</div>
		  <div class="row">
		    <div class="twelve columns">
					<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
				</div>
			</div>
			<div class="row">
		    <div class="six columns date-div">
					<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
		    </div>
		    <div class="three columns post-edit-link-div">
					<?php edit_post_link(); ?>
		    </div>
		    <div class="three columns comments-div">
					<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
		    </div>
			</div>	
		<!-- /loop-container -->
		</div>

	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
