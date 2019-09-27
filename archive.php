<?php get_header(); ?>
<!-- content -->
<section id="contents">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-12">
        <header class="page-header">
          <h5 class="page-title">
            <?php
            if (is_author()) :
              echo esc_html(get_the_author_meta('display_name', get_query_var('author')));
            else:
             single_cat_title();
           endif;
            ?>
          </h5>
        </header>

        <div class="card border-0">
          <?php
  if (have_posts()) :
    while (have_posts()) :
      the_post();
      get_template_part('content-archive');
    endwhile;
    get_template_part('pagination');
  endif;
  ?>
        </div>
      </div>
      <!-- /contents section -->
      <?php get_sidebar(); ?>
    </div>
  </div>
</section>
<?php get_footer(); ?>
