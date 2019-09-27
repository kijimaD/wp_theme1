<?php get_header(); ?>
<section id="contents">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-12">
        <header class="page-header">
          <h5 class="page-title my-3">
            「
            <?php the_search_query(); ?>」の検索結果
          </h5>
        </header>

        <div class="card border-0">
          <?php
  if (have_posts() && get_search_query()) :
    while (have_posts()) :
      the_post();
      get_template_part('content-archive');
    endwhile;
    get_template_part('pagination');
  else:
  ?>
          <p>該当する記事が存在しません。</p>
          <?php
endif;
  ?>
        </div>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </div>
</section>
<?php get_footer(); ?>
