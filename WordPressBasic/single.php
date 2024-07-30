<?php get_header(); ?>

<main>
    <!-- common 背景 -->
    <div class="c-common-fv l-common-fv "
        style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/news__fv.jpg)">
        <h2 class="c-section-title">news</h2>
        <h2 class="c-section-subtitle">お知らせ</h2>
    </div>

    <!-- News  個別-->
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <section class="p-news-post l-news-post">
        <div class="l-inner">

            <!-- パンくずリスト -->
            <?php get_template_part('template-parts/breadcrumb'); ?>

            <div class="p-news-post__inner">

                <div id="post-<?php the_ID(); ?>" <?php post_class('p-news-post__item'); ?>>

                    <p class="p-news-post__title"><?php the_title(); ?></p>

                    <div class="p-news-post__info">
                        <?php
                                $categories = get_the_category();

                                if ($categories) : ?>
                        <?php foreach ($categories as $category) : ?>
                        <span class="c-news-category c-news-category--<?php echo $category->slug; ?>">
                            <?php echo $category->name; ?>
                        </span>
                        <?php endforeach; ?>
                        <?php endif; ?>
                        <time class="c-news-date p-news-post__date"
                            datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                    </div>
                    <div class="p-news-post__image">
                        <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail(''); ?>
                        <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/no-image.png" alt="画像無し">
                        <?php endif; ?>
                    </div>
                    <div class="c-news-text p-news-post__text">
                        <?php the_content(); ?>
                    </div>

                </div>

                <div class="p-news-post__btn">
                    <a class="c-btn" href="<?php echo esc_url(home_url('/all-news/')); ?>">一覧へ戻る</a>
                </div>

                <!-- 関連記事 -->
                <div class="news-post__relation">
                    <p class="p-news-post__relation-title">関連記事</p>

                    <?php
                            $post_id = get_the_ID(); // 投稿のIDを取得
                            $categories = get_the_category($post_id); // 投稿のカテゴリーを取得
                            $cat_ids = []; // カテゴリーIDを格納するための空の配列を用意

                            foreach ($categories as $category) :
                                array_push($cat_ids, $category->term_id); // 用意した空配列にカテゴリーIDを格納
                            endforeach;

                            $args = [
                                'post_type' => 'post', // 投稿タイプを指定
                                'posts_per_page' => '3', // 表示する記事数を指定
                                'category__in' => $cat_ids, // カテゴリーIDを指定
                                'post__not_in' => [$post_id] // 現在の投稿を除外
                            ];

                            $related_cats_query = new WP_Query($args);
                            ?>

                    <div class="related-posts">
                        <?php if ($related_cats_query->have_posts()) : ?>
                        <ul class="p-news-post__relation-list">
                            <?php while ($related_cats_query->have_posts()) : $related_cats_query->the_post(); ?>

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
                                        <?php $categories = get_the_category();
                                                        if ($categories) : ?>
                                        <?php foreach ($categories as $category) : ?>
                                        <span
                                            class="c-news-category c-news_category3 c-news-category--<?php echo $category->slug; ?>">
                                            <?php echo $category->name; ?>
                                        </span>
                                        <?php endforeach; ?>
                                        <?php endif; ?>
                                        <time class="c-news-date p-news-post__date"
                                            datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                                    </div>
                                    <div class="c-news-text p-news-post__relation-text">
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
        </div>
    </section>

    <?php endwhile; ?>
    <?php endif; ?>


    <!-- 共通 -->
    <?php get_template_part('template-parts/common', 'parts'); ?>

</main>

<?php get_footer(); ?>