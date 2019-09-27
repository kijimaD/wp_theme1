<!-- ペジネーション -->
<nav class="mx-auto">
  <?php
    if (function_exists('page_navi')) :
      page_navi('edge_type=link&elm_class=pagination&li_class=page-item&current_class=active&current_format=<a class="page-link"><span class=sr-only"">%d</span></a>');
    endif;
    ?>
</nav>
<!-- /ペジネーション -->
