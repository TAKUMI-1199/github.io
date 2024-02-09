<?php get_header(); ?>
  <section class="single__cat">
    <div class="single__cat__inner inner">
      <!-- breadcrumb -->
      <nav>
        <ol class="breadcrumbs">
            
        </ol>
      </nav>
      <!-- /breadcrumb -->
      <div class="single__cat__wrap">
        <div class="single__cat__img">
          <!-- 変更ここから -->
          <img src="<?php echo get_field('eat_img'); ?>">
         
        </div>
        <div class="single__cat__body">
          <h2><a href="#" class="single__cat__title"><?php echo the_title(); ?></a></h2>
          <dl class="single__cat__content">
            <dt>価格</dt>
            <dd><?php echo get_field('eat_price'); ?></dd>
            <dt>説明</dt>
            <dd>
              <?php echo get_field('eat_detail'); ?>
            </dd>
          
          </dl>
          <!-- 変更ここから -->
        
      </div><!-- /.about__store -->
      <!-- 変更ここまで -->
     
      <!-- /.anotherPet__wrap -->
    </div>
  </section>
  <?php get_footer(); ?>
  
  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- slick -->
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.min.js"></script>
  <!-- original -->
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>
  <script>
    $(".your-class").slick({
        slidesToShow: 1,
        arrows: false,
        fade: true,
        asNavFor: ".slider-nav",
      });
      $(".slider-nav").slick({
        slidesToShow: 4,
        asNavFor: ".your-class",
        centerMode: true,
        focusOnSelect: true,
        responsive: [
          {
            breakpoint: 384,
            settings: {
              swipe: true,
              arrows: false,
              slidesToShow: 3,
              slidesToScroll: 1,
            },
          },
        ],
      });
  </script>
</body>
</html>
 