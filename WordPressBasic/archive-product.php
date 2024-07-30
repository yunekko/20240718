<?php get_header(); ?>

<main>
    <!-- common 背景 -->
    <div class="c-common-fv l-common-fv "
        style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/products__fv.jpg)">
        <h2 class="c-section-title">product</h2>
        <h2 class="c-section-subtitle">製品情報</h2>
    </div>

    <!-- 製品情報 一覧 -->
    <section class="p-product-archive l-product-archive">
        <div class="l-inner">

            <!-- パンくずリスト -->
            <?php get_template_part('template-parts/breadcrumb'); ?>

            <div class="p-product-archive__inner">
                <ul class="p-product-archive__list">
                    <li class="p-product-archive__all-news"><a
                            href="<?php echo esc_url(home_url('/product/')); ?>">すべて</a></li>
                    <?php
                    $terms = get_terms('product_series');
                    foreach ($terms as $term) {
                        echo '<li><a href="' . esc_url(get_term_link($term)) . '">' . esc_html($term->name) . '</a></li>';
                    }
                    ?>

                </ul>

                <?php
                // 現在のページ番号を取得
                $paged = get_query_var('paged') ? get_query_var('paged') : 1;

                $args = [
                    'post_type' => 'product',
                    'posts_per_page' => 9,
                    'paged' => $paged
                ];
                $latest_query = new WP_Query($args);

                if ($latest_query->have_posts()) :
                ?>
                <div class="p-product-archive__contents">
                    <?php while ($latest_query->have_posts()) : $latest_query->the_post(); ?>

                    <div class="c-card">
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

                            <span class="c-product-category"> <?php
                                                                        $term = get_the_terms($post->ID, 'product_series');
                                                                        echo $term[0]->name;
                                                                        ?></span>
                            <span class="c-product-year c-card__year"><?php the_field('year'); ?>年</span>
                        </a>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>

            <!-- ページネーション -->
            <?php if (function_exists('wp_pagenavi')) : ?>
            <div class="c-pagenation p-product-archive__pagenation">
                <?php wp_pagenavi(array('query' => $latest_query)); ?>
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