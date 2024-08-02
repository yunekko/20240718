<?php get_header(); ?>

<main>
    <!-- common 背景 -->
    <div class="c-common-fv l-common-fv "
        style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/products__fv.jpg)">
        <h2 class="c-section-title">product</h2>
        <h2 class="c-section-subtitle">製品情報</h2>
    </div>

    <!-- Product 個別 -->
    <section class="p-product-post l-product-post">
        <div class="l-inner">

            <!-- パンくずリスト -->
            <?php get_template_part('template-parts/breadcrumb'); ?>

            <div class="p-product-post__inner">
                <div class="p-product-post__item">
                    <p class="p-product-post__title"><?php the_title(); ?></p>
                    <div class="p-product-post__info">
                        <span class="c-product-category c-product-category2">
                            <?php
                            $term = get_the_terms($post->ID, 'product_series');
                            echo $term[0]->name;
                            ?></span>
                        <span
                            class="c-product-year c-product-year2 p-product-post__year"><?php the_field('year'); ?></span>
                    </div>

                    <!-- スライダー -->
                    <div class="swiper2 slider p-product-post__main-image">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="p-product-post__image">
                                    <?php
                                    $pic = get_field('image1');
                                    $pic_url = $pic['url']; ?>
                                    <img src="<?php echo $pic_url; ?>" alt="" />
                                </div>
                            </div>

                            <!-- 画像2枚目以降 -->
                            <div class="swiper-slide">
                                <div class="p-product-post__image">
                                    <?php
                                    $pic = get_field('image2');
                                    $pic_url = $pic ? $pic['url'] : get_template_directory_uri() . '/assets/images/no-image.png';
                                    ?>
                                    <img src="<?php echo esc_url($pic_url); ?>" alt="画像無し" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="p-product-post__image">
                                    <?php
                                    $pic = get_field('image3');
                                    $pic_url = $pic ? $pic['url'] : get_template_directory_uri() . '/assets/images/no-image.png';
                                    ?>
                                    <img src="<?php echo esc_url($pic_url); ?>" alt="画像無し" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="p-product-post__image">
                                    <?php
                                    $pic = get_field('image4');
                                    $pic_url = $pic ? $pic['url'] : get_template_directory_uri() . '/assets/images/no-image.png';
                                    ?>
                                    <img src="<?php echo esc_url($pic_url); ?>" alt="画像無し" />
                                </div>
                            </div>

                        </div>
                        <!-- 前後の矢印 -->
                        <div class="swiper-button-next slider-button-next"></div>
                        <div class="swiper-button-prev slider-button-prev"></div>
                    </div>

                    <!-- サムネイル -->
                    <div class="swiper2 slider-thumbnail p-product-post__sub-image">
                        <div class="swiper-wrapper p-product-post__wrapper">
                            <div class="swiper-slide">
                                <div class="p-product-post__thumbnail">
                                    <?php
                                    $pic = get_field('image1');
                                    $pic_url = $pic['url']; ?>
                                    <img src="<?php echo $pic_url; ?>" alt="" />
                                </div>
                            </div>

                            <!-- 画像2枚目以降 -->
                            <div class="swiper-slide">
                                <div class="p-product-post__thumbnail">
                                    <?php
                                    $pic = get_field('image2');
                                    $pic_url = $pic ? $pic['url'] : get_template_directory_uri() . '/assets/images/no-image.png';
                                    ?>
                                    <img src="<?php echo esc_url($pic_url); ?>" alt="画像無し" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="p-product-post__thumbnail">
                                    <?php
                                    $pic = get_field('image3');
                                    $pic_url = $pic ? $pic['url'] : get_template_directory_uri() . '/assets/images/no-image.png';
                                    ?>
                                    <img src="<?php echo esc_url($pic_url); ?>" alt="画像無し" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="p-product-post__thumbnail">
                                    <?php
                                    $pic = get_field('image4');
                                    $pic_url = $pic ? $pic['url'] : get_template_directory_uri() . '/assets/images/no-image.png';
                                    ?>
                                    <img src="<?php echo esc_url($pic_url); ?>" alt="画像無し" />
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="p-product-table p-product-post__table">
                        <table>
                            <tr class="p-product-table__row">
                                <th class="p-product-table__header">製造年</th>
                                <td class="p-product-table__data"><?php the_field('year'); ?>年</td>
                            </tr>

                            <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : the_post(); ?>
                            <tr class="p-product-table__row">
                                <th class="p-product-table__header">スペック</th>
                                <td class="p-product-table__data">
                                    <?php the_field('spec1'); ?>
                                </td>
                            </tr>
                            <?php endwhile; ?>
                            <?php endif; ?>


                            <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : the_post(); ?>
                            <tr class="p-product-table__row">
                                <th class="p-product-table__header">スペック</th>
                                <td class="p-product-table__data">
                                    <?php the_field('spec2'); ?>
                                </td>
                            </tr>
                            <?php endwhile; ?>
                            <?php endif; ?>


                            <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : the_post(); ?>
                            <tr class="p-product-table__row">
                                <th class="p-product-table__header">スペック</th>
                                <td class="p-product-table__data">
                                    <?php the_field('spec3'); ?>
                                </td>
                            </tr>
                            <?php endwhile; ?>
                            <?php endif; ?>
                        </table>
                    </div>

                    <div class="p-product-post__contents">
                        <?php the_content(); ?>
                    </div>
                </div>

                <div class="p-product-post__btn">
                    <a class="c-btn" href="<?php echo esc_url(home_url('/product/')); ?>">一覧へ戻る</a>
                </div>

                <!-- 関連記事 -->
                <div class="p-product-post__relation">
                    <p class="p-product-post__relation-title">関連記事</p>

                    <?php
                    $terms = get_the_terms($post->ID, 'product_series'); // 表示している記事のタクソノミーを取得
                    $term_ID = [];

                    foreach ((array) $terms as $term) :
                        array_push($term_ID, $term->term_id); // タクソノミーのIDを格納
                    endforeach;

                    $args = [
                        'post_type' => 'product', //カスタム投稿タイプ名
                        'post__not_in' => [$post->ID], // 今読んでいる記事を除く
                        'posts_per_page' => 3, // 表示させたい記事数
                        'orderby' => 'desc', // ランダムに表示、降順の場合は'desc'
                        'tax_query' => [ // タクソノミーに関連付けられた投稿を表示
                            [
                                'taxonomy' => 'product_series', // タクソノミー名
                                'terms' => $term_ID, // タクソノミーターム
                            ],
                        ],
                    ];
                    $wp_query = new WP_Query($args);
                    if ($wp_query->have_posts()) : ?>

                    <ul class="p-product-post__relation-list">
                        <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                        <li class="c-card2">
                            <a href="<?php the_permalink(); ?>">
                                <div class="c-card2__image">
                                    <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail(''); ?>
                                    <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/no-image.png"
                                        alt="画像無し">
                                    <?php endif; ?>
                                </div>
                                <div class="p-news-post__relation-info">
                                    <?php $terms = get_the_terms($post->ID, 'product_series'); // 関連記事が属するカテゴリーを取得 
                                            ?>
                                    <?php foreach ($terms as $term) : ?>
                                    <span class="c-product-category"><?php echo esc_html($term->name); // 関連記事のカテゴリー名を表示 
                                                                                    ?></span>
                                    <?php endforeach; ?>
                                    <span
                                        class="c-product-year p-product-post__relation-year"><?php the_field('year'); ?></span>
                                </div>
                                <div class="p-product-post__relation-contents">
                                    <?php the_title(); ?>
                                </div>
                            </a>
                        </li>

                        <?php endwhile; ?>
                    </ul>
                    <?php else : ?>
                    <p>関連記事はありません。</p>
                    <?php
                    endif;
                    wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </section>

    <!-- 共通 -->
    <?php get_template_part('template-parts/common', 'parts'); ?>

</main>

<?php get_footer(); ?>