<?php get_header(); ?>
<!-- コンテンツ -->
<section id="contents">
  <!-- メイン -->
  <main>
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <?php
        if (have_posts()) :
          while (have_posts()) :
            the_post();
            get_template_part('content');
          endwhile;
          endif;
          ?>
        </div>
        <?php get_sidebar(); ?>
      </div>
    </div>
  </main>
  <!-- /メイン -->
</section>
<!-- /コンテンツ -->

<?php get_footer(); ?>
