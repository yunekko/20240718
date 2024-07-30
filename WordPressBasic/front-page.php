<?php get_header(); ?>

<main>

    <!-- fv -->
    <?php if (is_home()) : ?>
    <div class="p-fv l-fv">
        <div class="swiper1">
            <div class="swiper-wrapper swiper1-wrapper">
                <div class="swiper-slide">
                    <div class="p-fv__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fv1.jpg" alt="ビルの写真" />
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="p-fv__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fv2.jpg" alt="ビルの写真" />
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="p-fv__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fv3.jpg"
                            alt="ヘルメットを被った男性が上を見上げている写真" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <!-- top news -->
    <?php
    $args = [
        'post_type' => 'post',
        'posts_per_page' => 3,
    ];
    $latest_query = new WP_Query($args);
    if ($latest_query->have_posts()) :
    ?>
    <section class="p-top-news l-top-news">
        <div class="p-top-news__wrapper">
            <div class="p-top-news__inner">
                <div class="p-top-news__titles">
                    <h2 class="c-section-title">news</h2>
                    <h2 class="c-section-subtitle">お知らせ</h2>
                </div>

                <ul class="p-top-news__list">
                    <?php while ($latest_query->have_posts()) : $latest_query->the_post(); ?>
                    <li id="post-<?php the_ID(); ?>" <?php post_class('p-top-news__item'); ?>>
                        <a href="<?php the_permalink(); ?>">
                            <div class="p-top-news__info">

                                <?php
                                        $categories = get_the_category();

                                        if ($categories) : ?>

                                <?php foreach ($categories as $category) : ?>
                                <p class="c-news-category c-news-category--<?php echo esc_attr($category->slug); ?>">
                                    <?php echo esc_html($category->name); ?>
                                </p>
                                <?php endforeach; ?>
                                <?php endif; ?>

                                <time class="c-news-date p-top-news__date"
                                    datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                            </div>
                            <p class="c-news-text p-top-news__text"><?php the_title(); ?></p>
                        </a>
                    </li>
                    <?php endwhile; ?>
                </ul>
                <?php wp_reset_postdata(); ?>
            </div>
            <div class="p-top-news__btn">
                <a class="c-btn" href="<?php echo esc_url(home_url('/all-news/')); ?>">more</a>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- top product -->
    <?php
    $args = [
        'post_type' => 'product',
        'posts_per_page' => 3
    ];
    $latest_query = new WP_Query($args);
    if ($latest_query->have_posts()) :
    ?>
    <section class="p-top-product l-top-product">
        <div class="l-inner">
            <div class="p-top-product__inner">
                <h2 class="c-section-title p-top-product__title">products</h2>
                <h2 class="c-section-subtitle p-top-product__subtitle">製品情報</h2>
                <ul class="p-top-product__list">
                    <?php while ($latest_query->have_posts()) : $latest_query->the_post(); ?>

                    <li class="c-card">
                        <a href="<?php the_permalink(); ?>">
                            <div class="c-card__image">
                                <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail(''); ?>
                                <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/no-image.png"
                                    alt="画像無し">
                                <?php endif; ?>
                            </div>
                            <p class="c-card__title"><?php the_title(); ?></p>

                            <div class="c-card__contents">
                                <?php the_content(); ?>
                            </div>

                            <span class="c-product-category">種類</span>
                            <span class="c-product-year c-card__year"><?php the_field('year'); ?>年</span>
                        </a>
                    </li>

                    <?php endwhile; ?>

                </ul>
                <?php wp_reset_postdata(); ?>


                <div class="p-top-product__btn">
                    <a class="c-btn" href="<?php echo esc_url(home_url('/product/')); ?>">more</a>
                </div>
            </div>
        </div>

    </section>
    <?php endif; ?>

    <!-- common 会社 -->
    <section class="p-common-company l-common-company">
        <div class="p-common-company__inner">
            <h2 class="c-section-title p-common-company__title">company</h2>
            <h2 class="c-section-subtitle p-common-company__subtitle">
                我々について
            </h2>
            <p class="p-common-company__catch">
                世界を「アッ！」と驚かせる<br />
                当たり前を
            </p>
            <p class="p-common-company__text">
                お客様の「アッ！」を楽しみに。<br />
                それが我々が目指す製品コンセプトです。<br />
                だからこそ面白く、そして遊びごごろを大切にします。<br />
                お客様の笑顔を見たい。<br />
                アッと驚く体験をぜひ手に取ってみてください。
            </p>
            <div class="p-common-company__btn">
                <a class="c-btn c-btn--white" href="<?php echo esc_url(home_url('/company/')); ?>">more</a>
            </div>
        </div>
    </section>

    <!-- 共通 -->
    <?php get_template_part('template-parts/common', 'parts'); ?>

</main>

<?php get_footer(); ?>