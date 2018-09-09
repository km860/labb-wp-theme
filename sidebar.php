<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <div style="margin: 10px 0">
              <?php echo get_avatar( get_the_author_meta( 'ID' ) ); ?>
            </div>
            
            <p>
              <?php the_author_meta( 'description' ); ?>
            </p>
          </div>
          <div class="sidebar-module">
            <h4>Posts</h4>
            <ol class="list-unstyled">
              <?php wp_get_archives( array( 'type' => 'postbypost', 'limit' => 12 ) ); ?>
            </ol>
          </div>
          <div class="sidebar-module">
            <h4>Categories</h4>
            <ol class="list-unstyled">
            <?php
              $categories = get_categories( array(
                  'orderby' => 'name',
                  'order'   => 'ASC'
              ) );
              
              foreach( $categories as $category ) {
                  $category_link = sprintf( 
                      '<a href="%1$s" alt="%2$s">%3$s</a>',
                      esc_url( get_category_link( $category->term_id ) ),
                      esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
                      esc_html( $category->name )
                  );
                  
                  echo '<p>' . sprintf( esc_html__( ' %s', 'textdomain' ), $category_link ) . '</p> ';
                
              }; ?>
            </ol>
          </div>
          
        </div><!-- /.blog-sidebar -->
