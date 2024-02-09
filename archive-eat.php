<?php get_header(); ?>
  
  <section class="shoplist inner page-shopList">
  <?php get_template_part('_inc/breadcrumb'); ?>

    <div class="findPet__head">
      <h2 class="util__title">メニュー一覧を見る</h2>
      <p class="util__subTitle"></p>
    </div>

    <ul class="shoplist__items">
    <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <li class="cast__list__img ">
        <a href="#">
          <img src="<?php echo get_field('eat_img'); ?>" alt="<?php echo get_the_title(); ?>">
          <h3 class="shoplist__item__title"><?php echo get_the_title(); ?></h3>
          <dl>
            <dt>価格</dt>
            <dd><?php echo get_field('eat_price'); ?></dd>
            <dt>商品説明</dt>
            <dd><?php echo get_field('eat_detail'); ?></dd>
          </dl>
        </a>
      </li>
    <?php endwhile; endif; wp_reset_postdata(); ?>
    </ul>
    
    <?php get_template_part('_inc/pager'); ?>

  </section>

  <?php get_footer(); ?>
  
</body>
</html>