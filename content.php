<div class="col-sm blog-post">
  <h2 class="blog-post-title">
    <a href="<?php the_permalink(); ?>">
      <?php the_title(); ?>
    </a>
  </h2>
  <p class="blog-post-meta">
    <?php the_date(); ?> by 
    <a href="#">
      <?php the_author(); ?>
    </a>
  </p>
  <?php the_content( $more_link_text , $strip_teaser ); ?>
  
</div><!-- /.blog-post -->