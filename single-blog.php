<?php get_header(); ?>

<!-- main -->
    <main class="main cntInner inner">
    <?php get_template_part('_inc/breadcrumb'); ?>
    <!-- top -->
        <section>
				<div class="top__img">
			<img src="<?php echo get_field('blog_img'); ?>" alt="<?php echo get_the_title(); ?>">
            </div>
        </section>
	<!-- /top -->
	
    <!-- content -->
        <section class="content">
            <div class="blogs">
				<span class="date"><?php the_time('Y.m.d'); ?></span>
				<h2 class="blog__ttl"><?php echo get_the_title(); ?></h2>
				<div class="blog__wrapper">
					<?php echo the_content();?>
				</div>
				<div class="blog__tagItems">
					<?php the_tags('<div class="tag top__tag">','</div><div class="tag top__tag">','</div>'); ?>
				</div>

				<!-- 画像IDの出力 -->
			
				
			<?php get_template_part('_inc/sidebar'); ?>
        </section>
    <!-- /content -->
    </main>
<!-- /main -->

<?php get_footer(); ?>

<!-- WordPress用テンプレートタグ -->
<!-- <?php wp_footer(); ?> -->
</body>
</html>