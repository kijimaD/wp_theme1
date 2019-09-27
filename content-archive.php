<article <?php post_class(); ?>>
  <div class="row no-gutters">
    <div class="col-md-3">
      <a class="post-link" href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail(
    'small_thumbnail',
    array('alt' => the_title_attribute('echo=0'),
          'title' => the_title_attribute('echo=0'),
          'class' => 'card-img my-3',
        )
);
 ?>
      </a>
    </div>
    <div class="col-lg-9 col-sm-12">
      <div class="card-body">
        <h5 class="entry-title card-title">
          <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
          </a>
        </h5>
        <div class="card-text">
          <section class="entry-content">
            <?php the_excerpt(); ?>
          </section>
        </div>
        <div class="card-text">
          <small class="text-muted">
            <time pubdate="pubdate" datetime="<?the_time('Y-m-d'); ?>" class="entry-date">
              <?php the_time(get_option('date_format')); ?>
          </small>
          <?php
          if (!is_search()):
          ?>
          <small class="mr-3 text-muted">
            <?php the_author_posts_link(); ?>
            <?php
          endif;
            ?>
          </small>
        </div>
        </time>
      </div>
    </div>
  </div>
</article>
