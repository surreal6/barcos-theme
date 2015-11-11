<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<div class="container single-div">

				<div class="row">
					
					<!-- /date and comments details -->
					<div class="six columns date-div">
						<span class="six"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
					</div>

					<div class="six columns comments-div">
						<span class="comments">
							<?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?>
						</span>
						<div class="comments-template-div">
							<?php comments_template(); ?>						
						</div>
					</div>
				</div>
					
				
				<div class="row">

					<!-- /title and thumbnail -->
					<div class="eight columns title-div">
						<!-- post title -->
						<h1>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
						</h1>
						<!-- /post title -->
					</div>
					<div class="four columns thumbnail-div">
						<!-- post thumbnail -->
						<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_post_thumbnail(); // Fullsize image for the single post ?>
							</a>
						<?php endif; ?>
						<!-- /post thumbnail -->
					</div>
				</div>
						
				<div class="row">
				<!-- dynamic content -->
					<div class="twelve columns">
						<?php the_content(); // Dynamic Content ?>						
					</div>
				</div>

				<div class="row">
				<!-- categories, tags and edit link -->
					<div class="four columns categories-div">
						<p><?php _e( 'Categorised in: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>
					</div>
					<div class="four columns tags-div">
						<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>
					</div>
					<div class="four columns post-edit-link-div">
						<?php edit_post_link(); // Always handy to have Edit Post Links available ?>
					</div>
				</div>

				

			</div>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>

<div class="sidebar-div">
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
