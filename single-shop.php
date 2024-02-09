<?php get_header(); ?>
<section class="page-shopDetail">
  <div class="mainvisual">
    <div class="mainvisual__img inner">
      <nav>
        <ol class="breadcrumbs">
            <li class="breadcrumbs__item"><a href="index.html" class="breadcrumbs__link">ホーム</a></li>
            <li class="breadcrumbs__item"><a href="#" class="breadcrumbs__link">お店を探す</a></li>
            <li class="breadcrumbs__item">ショップ詳細</li>
        </ol>
      </nav>
      <!-- breadcrumb__inner inner -->
        <img src="<?php echo get_field('shop_img'); ?>" alt="<?php echo the_title(); ?>">
    </div>
  </div><!-- mainvisual -->
  <section class="access">
    <div class="inner">
      <h2 class="section__title"><?php echo the_title(); ?>の基本情報</h2>
      <div class="access__inner">
        <div class="access__text">
          <dl>
            <dt>住所</dt>
            <dd><?php echo get_field('shop_address'); ?></dd>
            <dt>TEL</dt>
            <dd><?php echo get_field('shop_tel'); ?></dd>
            <dt>営業時間</dt>
            <dd><?php echo get_field('shop_hours'); ?></dd>
            <dt>アクセス</dt>
            <dd><?php echo get_field('shop_access'); ?></dd>
          </dl>
        </div><!-- access__text -->
        <div class="access__map">
          <?php echo get_field('shop_map'); ?>
        </div><!-- access__map -->
      </div><!-- access__inner -->
    </div><!-- inner -->
  </section><!-- access -->
 
    
  </section><!-- blog -->
</section>
<?php get_footer(); ?>
</body>
</html>