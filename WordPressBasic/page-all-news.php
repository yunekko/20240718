<?php get_header(); ?>

<main>
    <!-- common 背景 -->
    <div class="c-common-fv l-common-fv"
        style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/news__fv.jpg)">
        <h2 class="c-section-title">news</h2>
        <h2 class="c-section-subtitle">お知らせ</h2>
    </div>

    <?php
    // 現在のページ番号を取得
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

    // クエリの設定
    $args = [
        'post_type' => 'post',
        'posts_per_page' => 10,
        'paged' => $paged,
    ];
    $latest_query = new WP_Query($args);

    if ($latest_query->have_posts()) :
    ?>
    <section class="p-news-archive l-news-archive">
        <div class="l-inner">

            <!-- パンくずリスト -->
            <?php get_template_part('template-parts/breadcrumb'); ?>

            <div class="p-news-archive__inner">
                <ul class="p-news-archive__list">
                    <li class="p-news-archive__all-news"><a
                            href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>">すべて</a></li>
                    <?php
                        $args = [
                            'title_li' => '',
                        ];
                        wp_list_categories($args); ?>
                </ul>

                <div class="p-news-archive__contents">
                    <?php
                        while ($latest_query->have_posts()) : $latest_query->the_post(); ?>
                    <a href="<?php the_permalink(); ?>">
                        <div class="p-news-archive__content">
                            <?php
                                    $categories = get_the_category();
                                    if ($categories) :
                                        foreach ($categories as $category) : ?>
                            <span class="c-news-category c-news-category--<?php echo esc_attr($category->slug); ?>">
                                <?php echo esc_html($category->name); ?>
                            </span>
                            <?php endforeach;
                                    endif;
                                    ?>
                            <time class="c-news-date p-news-archive__date"
                                datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                            <p class="c-news-text p-news-archive__text">
                                <?php the_title(); ?>
                            </p>
                        </div>
                    </a>
                    <?php endwhile; ?>
                </div>
            </div>

            <!-- ページネーション -->
            <?php if (function_exists('wp_pagenavi')) : ?>
            <div class="c-pagenation p-news-archive__pagenation">
                <?php wp_pagenavi(['query' => $latest_query]); ?>
            </div>
            <?php endif; ?>

        </div>
    </section>

    <?php endif;
    wp_reset_postdata(); ?>

    <!-- 共通 -->
    <?php get_template_part('template-parts/common', 'parts'); ?>

</main>
<?php get_footer(); ?>