<?php get_header(); ?>

<!-- メイン -->
<main>
  <!-- メインビジュアル -->
  <div class="py-4">
    <div class="container">
      <!-- カルーセル外枠 -->
      <div id="main_visual" class="carousel slide" data-ride="carousel">
        <!-- インジケーター -->
        <ol class="carousel-indicators">
          <li data-target="#main_visual" data-slide-to="0" class="active"></li>
          <li data-target="#main_visual" data-slide-to="1"></li>
          <li data-target="#main_visual" data-slide-to="2"></li>
        </ol>
        <!-- /インジケーター -->
        <!-- カルーセル内枠 -->
        <div class="carousel-inner">
          <!-- スライド01 -->
          <div class="carousel-item active">
            <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/slide_01.jpg" alt="コーヒー写真" />
            <div class="carousel-caption d-none d-md-block">
              <h2>X COFFEEのこだわり</h2>
              <p>店主が世界中のコーヒー豆を厳選し、コーヒー豆の種類にあわせ、心を込めて焙煎、抽出しております。</p>
            </div>
          </div>
          <!-- /スライド01 -->
          <!-- スライド02 -->
          <div class="carousel-item">
            <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/slide_02.jpg" alt="ランチ写真" />
            <div class="carousel-caption d-none d-md-block">
              <h2>X COFFEEのメニュー</h2>
              <p>各種コーヒーはもちろん、モーニングやワンプレートランチ、季節のスイーツといったメニューもご好評いただいております。</p>
            </div>
          </div>
          <!-- /スライド02 -->
          <!-- スライド03 -->
          <div class="carousel-item">
            <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/slide_03.jpg" alt="店内写真" />
            <div class="carousel-caption d-none d-md-block">
              <h2>X COFFEEの空間</h2>
              <p>座り心地の良いソファと丁度良い高さのテーブル。くつろぎの空間を満喫してください。</p>
            </div>
          </div>
          <!-- /スライド03 -->
        </div>
        <!-- /カルーセル内枠 -->
        <!-- コントローラー -->
        <a class="carousel-control-prev" href="#main_visual" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">前に戻る</span>
        </a>
        <a class="carousel-control-next" href="#main_visual" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">次に進む</span>
        </a>
        <!-- /コントローラー -->
      </div>
      <!-- /カルーセル -->
    </div>
  </div>
  <!-- /メインビジュアル -->

  <!-- コンテンツ01（店概要） -->
  <div class="py-4 bg-light">
    <section id="about">
      <div class="container">
        <!-- 上段 -->
        <div class="row mb-4">
          <div class="col-md-8 mb-3">
            <h3 class="mb-3">X COFFEEについて</h3>
            <p>X COFFEEは、店主が焙煎したこだわりのコーヒーを最高の空間とおもてなしで提供する自家焙煎のカフェです。店主が世界中のコーヒー豆を焙煎し、コーヒー豆の種類にあわせ、心を込めて焙煎、抽出しております。また、女性に丁度良いボリュームのワンプレートランチ、季節のスイーツなどもご好評いただいております。</p>
            <p>最高においしい一杯のコーヒーを、最高に心地よい空間で。美味しいコーヒーを飲みながら、ゆったりとした素敵な空間を過ごしに、ぜひX COFFEEにお越しください。</p>
            <a href="#menu" class="btn btn-secondary">メニューを見る</a>
            <a href="#shop" class="btn btn-secondary">店舗情報を見る</a>
          </div>
          <div class="col-md-4">
            <img src="<?php bloginfo('template_url'); ?>/images/about01.jpg" alt="店主が厳選したこだわりのコーヒー" class="img-fluid rounded" />
          </div>
        </div>
      </section>
    </div>
        <!-- /上段 -->
  <!-- /コンテンツ01 -->

  <!-- コンテンツ02（新着記事） -->
  <div class="py-4">
    <section id="news">
      <div class="container shadow">
        <div class="row">

          <!-- whileバージョン -->
          <?php

    $article_cat_list = array(
      'information' => 2,
      'column' => 2,
    );

    foreach ($article_cat_list as $article_cat_name => $article_cat_num) :
      $article_posts = new WP_Query('posts_per_page=' . $article_cat_num . '&category_name=' . $article_cat_name);
    ?>
          <div class="col-lg-6 my-3">
            <aside id="<?php echo $article_cat_name; ?>-info" class="news-list">
              <h3 class="my-3">
                <?php echo esc_html(get_category_by_slug($article_cat_name)->name); ?>
              </h3>
              <hr>
              <div class="row">
                <?php
                  if ($article_posts->have_posts()):
                    while ($article_posts->have_posts()):
                      $article_posts->the_post();
                  ?>
                <!-- コンテンツ繰り返し部分 -->
                <div class="card border-0 my-3 px-3">
                  <div class="row">
                    <div class="col-12">
                      <a href="<?php the_permalink(); ?>" class="post-link">
                        <?php the_post_thumbnail(
                      'medium',
                      array(
                              'alt' => the_title_attribute('echo=0'),
                              'title' =>
                              the_title_attribute('echo=0'),
                              'class' =>
                              'card-img',
                            )
                          ); ?>
                      </a>
                    </div>
                    <div class="col-12">
                      <div class="card-body">
                        <h5>
                          <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?></a>
                        </h5>
                        <small>
                          <time class="entry-date" datetime="<?php the_time('Y-m-d'); ?>">
                            <?php the_time(get_option('date_format')); ?>
                          </time>
                        </small>
                        <hr>
                        <h5 class="card-title"><a href="<?php the_permalink(); ?>"></a>
                        </h5>
                        <div class="card-text">
                          <?php the_pickup_excerpt(); ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- コンテンツ繰り返し部分 -->
                <?php
                endwhile;
              endif;
              ?>
                <div class="col-12">
                  <a href="<?php echo get_term_link($article_cat_name, 'category'); ?>" class="btn btn-secondary btn-block my-3">
                    <?php echo esc_html(get_category_by_slug($article_cat_name)->name); ?>一覧</a>
                </div>
              </div>
          </div>
          <?php
            endforeach;
              ?>
        </div>
      </div>
    </section>
  </div>
  <!-- / whileバージョン -->

  <!-- /コンテンツ02 -->

  <!-- コンテンツ03 -->
  <div class="py-4 bg-light">
    <section id="menu">
      <div class="container">
        <h3 class="mb-3">メニュー</h3>
        <p>
          カフェ X COFFEEのメニューです。掲載していない季節限定メニューはX COFFEEの<a href="#">ブログ</a>にて紹介しています。
        </p>

        <!-- タブ型ナビゲーション -->
        <div class="nav nav-tabs" id="tab-menus" role="tablist">
          <!-- タブ01 -->
          <a class="nav-item nav-link active" id="tab-menu01" data-toggle="tab" href="#panel-menu01" role="tab" aria-controls="panel-menu01" aria-selected="true">コーヒー</a>
          <!-- タブ02 -->
          <a class="nav-item nav-link" id="tab-menu02" data-toggle="tab" href="#panel-menu02" role="tab" aria-controls="panel-menu02" aria-selected="false">モーニング</a>
          <!-- タブ03 -->
          <a class="nav-item nav-link" id="tab-menu03" data-toggle="tab" href="#panel-menu03" role="tab" aria-controls="panel-menu03" aria-selected="false">ランチ</a>
          <!-- タブ04 -->
          <a class="nav-item nav-link" id="tab-menu04" data-toggle="tab" href="#panel-menu04" role="tab" aria-controls="panel-menu04" aria-selected="false">ケーキ</a>
        </div>
        <!-- /タブ型ナビゲーション -->

        <!-- タブパネル -->
        <div class="tab-content" id="panel-menus">
          <!-- パネル01 -->
          <div class="tab-pane fade show active border border-top-0" id="panel-menu01" role="tabpanel" aria-labelledby="tab-menu01">
            <div class="row p-3">
              <div class="col-md-7 order-md-2">
                <h4>コーヒー</h4>
                <table class="table table-striped">
                  <tbody>
                    <tr>
                      <th>S ブレンド</th>
                      <td>390円（税別）</td>
                    </tr>
                    <tr>
                      <th>M ブレンド</th>
                      <td>450円（税別）</td>
                    </tr>
                    <tr>
                      <th>L ブレンド</th>
                      <td>500円（税別）</td>
                    </tr>
                    <tr>
                      <th>XL ブレンド</th>
                      <td>600円（税別）</td>
                    </tr>
                    <tr>
                      <th>アイスコーヒー</th>
                      <td>430円（税別）</td>
                    </tr>
                    <tr>
                      <th>ブラジルシングル</th>
                      <td>430円（税別）</td>
                    </tr>
                    <tr>
                      <th>エスプレッソ</th>
                      <td>390円（税別）</td>
                    </tr>
                    <tr>
                      <th>カプチーノ</th>
                      <td>430円（税別）</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="col-md-5">
                <img src="<?php bloginfo('template_url'); ?>/images/coffee.jpg" alt"コーヒー" class="img-fluid rounded" />
              </div>
            </div>
          </div>
          <!-- パネル02 -->
          <div class="tab-pane fade border border-top-0" id="panel-menu02" role="tabpanel" aria-labelledby="tab-menu02">
            <div class="row p-3">
              <div class="col-md-7 order-md-2">
                <h4>モーニング</h4>
                <table class="table table-striped">
                  <tbody>
                    <tr>
                      <th>ハムトーストセット</th>
                      <td>450円</td>
                    <tr>
                      <th>トーストゆで卵セット</th>
                      <td>500円（税別）</td>
                    </tr>
                    <tr>
                      <th>ピザトーストセット</th>
                      <td>600円（税別）</td>
                    </tr>
                    <tr>
                      <th>野菜たっぷりスープセット</th>
                      <td>390円（税別）</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="col-md-5">
                <img src="<?php bloginfo('template_url'); ?>/images/morning.jpg" alt"モーニング" class="img-fluid rounded" />
              </div>
            </div>
          </div>
          <!-- パネル03 -->
          <div class="tab-pane fade border border-top-0" id="panel-menu03" role="tabpanel" aria-labelledby="tab-menu03">
            <div class="row p-3">
              <div class="col-md-7 order-md-2">
                <h4>ランチ</h4>
                <table class="table table-striped">
                  <tbody>
                    <tr>
                      <th>ワンプレートランチ</th>
                      <td>1000円（税別）</td>
                    <tr>
                      <th>Mix サンド</th>
                      <td>650円（税別）</td>
                    </tr>
                    <tr>
                      <th>BLTサンド</th>
                      <td>750円（税別）</td>
                    </tr>
                    <tr>
                      <th>ミックス野菜スープ</th>
                      <td>650円（税別）</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="col-md-5">
                <img src="<?php bloginfo('template_url'); ?>/images/lunch.jpg" alt"ランチ" class="img-fluid rounded" />
              </div>
            </div>
          </div>
          <!-- パネル04 -->
          <div class="tab-pane fade border border-top-0" id="panel-menu04" role="tabpanel" aria-labelledby="tab-menu04">
            <div class="row p-3">
              <div class="col-md-7 order-md-2">
                <h4>ケーキ</h4>
                <table class="table table-striped">
                  <tbody>
                    <tr>
                      <th>ザッハトルテ</th>
                      <td>400円（税別）</td>
                    <tr>
                      <th>チーズケーキ</th>
                      <td>350円（税別）</td>
                    </tr>
                    <tr>
                      <th>日替わりケーキ</th>
                      <td>400円（税別）</td>
                    </tr>
                    <tr>
                      <th>季節のパウンドケーキ</th>
                      <td>450円（税別）</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="col-md-5">
                <img src="<?php bloginfo('template_url'); ?>/images/cake.jpg" alt"ケーキ" class="img-fluid rounded" />
              </div>
            </div>
          </div>
        </div>
        <!-- /タブパネル -->
      </div>
    </section>
  </div>

  <!-- /コンテンツ03 -->

  <!-- コンテンツ04（クーポン） -->
  <div class="py-4">
    <section id="coupen">
      <div class="container">
        <h3 class="text-center mb-3">クーポン</h3>
        <!-- カード -->
        <div class="card text-center text-dark w-75 mx-auto">
          <div class="card-header bg-success text-white">
            X COFFEE ランチコーヒークーポン
          </div>
          <div class="card-body">
            <h5 class="card-title">ランチコーヒーを一杯サービス！</h5>
            <p class="card-text text-justify">ワンプレートランチ（限定数20食）ご注文のお客様に、食後のコーヒー（Sサイズ）をご提供。注文の際にこの画面をスタッフに見せてください。
          </div>
          <div class="card-footer bg-success text-white">
            CODE : 201909L
          </div>
        </div>
        <!-- /カード -->
      </div>
    </section>
  </div>
  <!-- /コンテンツ04 -->

  <!-- コンテンツ05 -->
  <div class="py-4 bg-light">
    <section id="information">
      <div class="container">
        <h3 class="mb-3">情報</h3>
        <p>
          カフェ X COFFEEは、おしゃれな町並みのなかにあります。駅チカで、立ち寄りやすくなっています。
          <div class="row">
            <!-- 左側セクション -->
            <div class="col-md-6">
              <section id="shop">
                <h4 class="mb-3">店舗情報</h4>
                <!-- 店舗情報の表 -->
                <table class="table table-hover">
                  <tbody>
                    <tr>
                      <th>店名</th>
                      <td>X COFFEE</td>
                    </tr>
                    <tr>
                      <th>住所</th>
                      <td>〒000-0000　〇〇県〇〇市〇〇町1-2-3</td>
                    </tr>
                    <tr>
                      <th>電話番号</th>
                      <td>000-0000-0000</td>
                    </tr>
                    <tr>
                      <th>営業時間</th>
                      <td>8:00~18:00</td>
                    </tr>
                    <tr>
                      <th>モーニング</th>
                      <td>8:00~11:00</td>
                    </tr>
                    <tr>
                      <th>ランチタイム</th>
                      <td>11:30~14:00</td>
                    </tr>
                    <tr>
                      <th>ラストオーダー</th>
                      <td>17:30</td>
                    </tr>
                    <tr>
                      <th>定休日</th>
                      <td>水曜日、不定休</td>
                    </tr>
                    <tr>
                      <th>クレジットカード</th>
                      <td>利用不可</td>
                    </tr>
                    <tr>
                      <th>禁煙席</th>
                      <td>喫煙席あり</td>
                    </tr>
                    <tr>
                      <th>駐車場</th>
                      <td>駐車場あり</td>
                    </tr>
                  </tbody>
                </table>
                <!-- /店舗情報の表 -->
              </section>
            </div>
            <!-- /左側セクション -->
            <!-- 右側セクション -->
            <div class="col-md-6">
              <section id="access">
                <h4 class="mb-3">Access</h4>
                <!-- アクセスマップ -->
                <div class="embed-responsive embed-responsive-4by3">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2736.687167806293!2d130.5559203458897!3d31.59066576319231!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x353e5e01909d0c0f%3A0xefdf24b70c3fbad5!2z44GE44Gl44KN6YCa6aeF!5e0!3m2!1sja!2sjp!4v1568207518024!5m2!1sja!2sjp"
                    width="800" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
                <!-- /アクセスマップ -->
                <p>〇〇駅から徒歩12分（950m）、駐車場あり</p>
              </section>
            </div>
            <!-- /右側セクション -->
          </div>
        </p>
      </div>
    </section>
  </div>
  <!-- /コンテンツ05 -->
</main>
<!-- /メイン -->

<?php get_footer(); ?>
