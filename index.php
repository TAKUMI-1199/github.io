<?php get_header(); ?>

    <main class="main">
        <div class="mainVisual js-mainVisual">
            <div class="mainVisual__bgImg">
                <div class="mainVisual__inner inner">
                    <div class="mainVisual__wrap">
                        <h1 class="mainVisual__title">ラーメンを食べよう</h1>
                        <p class="mainVisual__text">美味しいラーメン店</p>
                        <div class="mainVisual__btnArea">
                        <a href="<?php echo get_post_type_archive_link('eat'); ?>" class="mainVisual__btn">メニュー一覧を見る</a>
                            <a href="<?php echo get_post_type_archive_link('shop'); ?>" class="mainVisual__btn">お店を見る</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.mainVisual -->
        <div class="news">
            <div class="news__inner inner">
                <div class="news__wrap">
                    <div class="news__heading">お知らせ</div>
                    <ul class="news__list">
                        <?php
                            $args = array(
                                'post_type' => 'news',
                                'order' => 'DESC',
                                'posts_per_page' => -1
                            );
                            $my_query = new WP_Query($args);
                            if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post();
                        ?>
                        <li class="news__item">
                            <div class="news__date"><?php echo get_field('news_date'); ?></div>
                            <div class="news__title">
                                <a href="<?php echo get_field('news_link'); ?>" class="news__link"><?php echo the_title(); ?></a>
                            </div>
                        </li>
                        <?php endwhile; endif; wp_reset_postdata(); ?>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /.news -->

        <section class="findPet">
            <div class="findPet__inner inner">
                <div class="findPets__head">
                    <h2 class="util__title">メニューを探す</h2>
                    <p class="util__subTitle">おすすめメニュー</p>
                    <div class="findPet_wrap">
                        <ul class="findPet__list">
                        <li class="findPet__item">
                            <a href="#" class="findPet__link">
                                <div class="findPet__catImg">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/typeList/4columns/011.png" alt="">
                                </div>
                                <p class="findPet__catName">醤油ラーメン<br></p>
                            </a>
                        </li>
                        <li class="findPet__item">
                            <a href="#" class="findPet__link">
                                <div class="findPet__catImg">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/typeList/4columns/012.png" alt="">
                                </div>
                                <p class="findPet__catName">味噌ラーメン<br></p>
                            </a>
                        </li>
                        <li class="findPet__item">
                            <a href="#" class="findPet__link">
                                <div class="findPet__catImg">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/typeList/4columns/013.png" alt="">
                                </div>
                                <p class="findPet__catName">野菜ラーメン<br></p>
                            </a>
                        </li>
                        <li class="findPet__item">
                            <a href="#" class="findPet__link">
                                <div class="findPet__catImg">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/typeList/4columns/014.png" alt="">
                                </div>
                                <p class="findPet__catName">塩ラーメン<br></p>
                            </a>
                        </li>
                        </ul>
                    </div>
                </div>
                    
                <div class="findPet__more">
                    <a href="<?php echo get_post_type_archive_link('eat'); ?>" class="util__link">その他のメニューを見る</a>
                </div>
            </div>
        </section>
        <!-- /.findPet -->

        <section class="findStore">
            <div class="findStore__inner inner">
                <div class="findStore__head">
                    <h2 class="util__title">お店を探す</h2>
                    <p class="util__subTitle"></p>
                    <ul class="findPet__list">
                        <li class="findPet__item">
                            <a href="#" class="findPet__link">
                                <div class="findPet__catImg">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shop/sinjuku01.png"  alt="">
                                </div>
                                <p class="findPet__catName">新宿店<br></p>
                            </a>
                        </li>
                        <li class="findPet__item">
                            <a href="#" class="findPet__link">
                                <div class="findPet__catImg">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shop/akihabara01.png" alt="">
                                </div>
                                <p class="findPet__catName">秋葉原店<br></p>
                            </a>
                        </li>
                        <li class="findPet__item">
                            <a href="#" class="findPet__link">
                                <div class="findPet__catImg">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shop/sibuya01.png" alt="">
                                </div>
                                <p class="findPet__catName">渋谷店<br></p>
                            </a>
                        </li>
                        <li class="findPet__item">
                            <a href="#" class="findPet__link">
                                <div class="findPet__catImg">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shop/ikebukuro01.png"  alt="">
                                </div>
                                <p class="findPet__catName">池袋店<br></p>
                            </a>
                        </li>
                        </ul>
                        <div class="findStore__more">
                        <a href="<?php echo get_post_type_archive_link('shop'); ?>" class="util__link">店舗一覧を見る</a>
                        </div>
                    </div>
        </div>
        </section>
        <!-- /.store -->
        <section class="blog">
            <div class="blog__inner inner">
                <div class="blog__head">
                    <h2 class="util__title">ブログ</h2>
                    <p class="util__subTitle"></p>
                </div>
                <div class="blog__wrap">
                    <ul class="blog__list">
                    <?php
                        $args = array(
                            'post_type' => 'blog',
                            'order' => 'DESC',
                            'posts_per_page' => 4
                        );
                        $my_query = new WP_Query($args);
                        if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post();
                    ?>
                        <li class="blog__item">
                            <a href="<?php the_permalink(); ?>" class="blog__link">
                                <div class="blog__img">
                                    <img src="<?php echo get_field('blog_img'); ?>" alt="<?php echo get_the_title(); ?>">
                                </div>
                                <div class="blog__info">
                                    <h3 class="blog__title"><?php echo get_the_title(); ?></h3>
                                    <p class="blog__date"><?php the_time('Y.m.d'); ?></p>
                                </div>
                            </a>
                        </li>
                        <?php endwhile; endif; wp_reset_postdata(); ?>
                    </ul>
                </div>
                <div class="blog__more">
                    <a href="<?php echo get_post_type_archive_link('blog'); ?>" class="util__link">ブログ一覧を見る</a>
                </div>
            </div>
        </section>
        <!-- /.blog -->
        <div class="about">
            <div class="about__inner inner">
                <div class="about__head">
                    <h2 class="util__title"></h2>
                    <p class="util__subTitle"></p>
                </div>
                <div class="about__wrap">
                    <div class="about__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/myhome.png" alt="">
                    </div>
                    <div class="about__body">
                        <div class="about__title"></div>
                        <p class="about__text">
                            麺の味、濃さ、硬さなど<br>
                            お客様ににあったラーメンを作り、<br>
                            それらは人々の食事に大切な&quot;笑顔&quot;を<br>
                            もたらすことができます。<br>
                            <br>
                            お客様へご提供することで、笑顔ある未来を創造し、<br>
                            より美味しいメニューを提供いたします。
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.about -->
    </main>
    <?php get_footer(); ?>
</body>

</html>