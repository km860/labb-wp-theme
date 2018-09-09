<?php get_header(); ?>

	<div class="row singlepost">
		<div class="col-sm-8" style="margin-top: 20px;">

			<?php 
				if ( have_posts() ) : while ( have_posts() ) : the_post();
					get_template_part( 'content-single', get_post_format() );
				endwhile; endif; 
			?>

    </div> <!-- /.col -->
      <?php get_sidebar(); ?>
	</div> <!-- /.row -->
<?php get_footer(); ?>