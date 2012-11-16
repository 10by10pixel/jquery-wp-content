<?php
/*
* Template Name: Home
*/
get_header(); ?>

  <!-- body -->
  <div id="body" class="clearfix">

    <!-- inner -->
    <div class="inner">

	<?php the_post(); ?>

	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php the_content(); ?>

		<div id="home-features">
			<aside id="chapter-list">
				<h3><?php _e( 'Chapters', 'twentyeleven' ); ?></h3>
				<ul>
					<?php wp_list_pages("depth=1&title_li=&sort_column=menu_order"); ?>
				</ul>
			</aside>

			<aside id="recent-updates">
				<h3><?php _e( 'Recently Updated', 'twentyeleven' ); ?></h3>
				<?php
				$recent_updates = new WP_Query( array(
					'post_type' => 'page',
					'post_limits' => 10,
				));
				?>
				<ul>
					<?php while ( $recent_updates->have_posts() ) : $recent_updates->the_post(); ?>
						<li>
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</li>
					<?php endwhile; wp_reset_postdata(); ?>
				</ul>
			</aside>

			<aside id="open-source-content">
				<h3><?php _e( 'Open Source Content', 'twentyeleven' ); ?></h3>
				<p>
				 All of the content in this site is completely open source, and we welcome your contribution.
				Whether you notice a small improvement that should be made, or want to write entirely new articles, this is one area where feature requests are encouraged!
				</p>
				<a class="btn" href="http://github.com/jquery/learn.jquery.com"><i class="icon-github"></i>  Open an Issue or Submit a Pull Request</a>
				<p class="clearfix">Each of our articles has a link to the raw content on GitHub, and we urge everyone to fork, edit, and help improve this community resource!</p>
			</aside>
		</div>
	</div><!-- #post-<?php the_ID(); ?> -->

    </div>
    <!-- /inner -->

  </div>
  <!-- /body -->

<?php get_footer(); ?>
