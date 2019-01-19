      <?php get_header(); ?>

      <section id="primary" class="content-area">
        <main id="main" class="site-main">

          <div class="row">
            <div class="col-sm-8 blog-main">

              <?php
              if ( have_posts() ) {

                // Load posts loop.
                while ( have_posts() ) {
                  the_post();
                  get_template_part( 'template-parts/content/content' );
                }

              } else {

                // If no content, include the "No posts found" template.
                get_template_part( 'template-parts/content/content', 'none' );
              }
              ?>
            </div><!-- /.blog-main -->

            <?php get_sidebar(); ?>
          
          </div><!-- /.row -->

        </main>
      </section>
      <?php get_footer(); ?>