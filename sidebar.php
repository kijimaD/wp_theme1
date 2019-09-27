<div class="col-md-4 shadow rounded">
  <!-- サイドバー -->
  <!-- primary -->
  <div id="primary" class="widget-area">
    <?php dynamic_sidebar('primary-widget-area'); ?>
    <?php
            $sidebar_cat_list = array(
              'information' => 2,
              'column' => 2,
            );

            foreach ($sidebar_cat_list as $sidebar_cat_name => $sidebar_cat_num) :
              $sidebar_posts = new WP_Query('posts_per_page=' . $sidebar_cat_num . '&category_name=' . $sidebar_cat_name);
            ?>
    <aside id="<?php echo $sidebar_cat_name; ?>-info" class="news-list">
      <h5 class="my-3 text-left" style="border:none;border-bottom:solid 1px #E5E5E5">
        <?php echo esc_html(get_category_by_slug($sidebar_cat_name)->name); ?>
      </h5>
      <?php
if ($sidebar_posts->have_posts()):
  while ($sidebar_posts->have_posts()):
    $sidebar_posts->the_post();
?>
      <div class="card border-0">
        <div class="row">
          <div class="col-12">
            <a href="<?php the_permalink(); ?>" class="post-link">
              <?php the_post_thumbnail(
    'large_thumbnail',
    array(
      'alt' => the_title_attribute('echo=0'),
      'title' => the_title_attribute('echo=0'),
      'class' => 'card-img',
    )
      ); ?>
            </a>
          </div>
          <div class="col-12">
            <div class="card-body">
              <time class="entry-date" datetime="<?php the_time('Y-m-d'); ?>">
                <?php the_time(get_option('date_format')); ?>
              </time>
              <h5 class="card-title"><a href="<?php the_permalink(); ?>">
                  <?php the_title(); ?></a>
              </h5>
              <div class="card-text">
                <?php the_pickup_excerpt(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php
          endwhile;
        endif;
            ?>
      <div class="col-md-12 mb-5">
        <a href="<?php echo get_term_link($sidebar_cat_name, 'category'); ?>" class="btn btn-outline-secondary btn-block my-0">
          <?php echo esc_html(get_category_by_slug($sidebar_cat_name)->name); ?>一覧
        </a>
      </div>
    </aside>
    <?php
      wp_reset_postdata();
    endforeach;
      ?>
  </div>
  <!-- /primary -->
  <div id="secondary" class="widget-area">
    <!-- facebook like box -->
  </div>
  <!-- /サイドバー -->
</div>
