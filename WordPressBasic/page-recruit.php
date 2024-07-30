<?php get_header(); ?>


<main>
    <!-- common 背景 -->
    <?php $id = get_post_thumbnail_id();
    $img = wp_get_attachment_image_src($id, ''); ?>
    <div class="c-common-fv c-common-fv--recruit l-common-fv" style="background-image: url('<?php echo $img[0]; ?>')">
        <h2 class="c-section-title"><?php echo ($post->post_name); ?></h2>
        <h2 class="c-section-subtitle"><?php the_title(); ?></h2>
    </div>

    <!-- 採用 -->
    <section class="p-recruit l-recruit">
        <div class="l-inner">

            <!-- パンくずリスト -->
            <?php get_template_part('template-parts/breadcrumb'); ?>

            <div class="p-recruit__inner">
                <ul class="p-recruit__list">
                    <li class="p-recruit__item">
                        <p class="p-recruit__item-title">採用職種</p>
                        <dl>
                            <dt class="p-recruit__definition-title">製造スタッフ</dt>
                            <dd class="p-recruit__definition-data">
                                ここにテキスト入れるここにテキスト入れるここにテキスト入れるここにテキスト入れる<br />
                                ここにテキスト入れるここにテキスト入れるここにテキスト入れる<br />
                                ここにテキスト入れるここにテキスト入れるここにテキスト入れるここにテキスト入れる<br />
                                ここにテキスト入れるここにテキスト入れるここにテキスト入れる
                            </dd>
                            <dt class="p-recruit__definition-title p-recruit__definition-title2">
                                製造スタッフ
                            </dt>
                            <dd class="p-recruit__definition-data">
                                ここにテキスト入れるここにテキスト入れるここにテキスト入れるここにテキスト入れる
                                ここにテキスト入れるここにテキスト入れるここにテキスト入れる<br />
                                ここにテキスト入れるここにテキスト入れるここにテキスト入れるここにテキスト入れる
                                ここにテキスト入れるここにテキスト入れるここにテキスト入れる
                            </dd>
                        </dl>
                    </li>
                    <li class="p-recruit__item">
                        <p class="p-recruit__item-title">応募資格</p>
                        <dl>
                            <dt class="p-recruit__definition-title">
                                資格名称を入れます
                            </dt>
                            <dt class="p-recruit__definition-title">
                                資格名称を入れます
                            </dt>
                            <dt class="p-recruit__definition-title">
                                資格名称を入れます
                            </dt>
                            <dd class="p-recruit__definition-data p-recruit__definition-data2">
                                ここにテキスト入れるここにテキスト入れるここにテキスト入れるここにテキスト入れる
                                ここにテキスト入れるここにテキスト入れるここにテキスト入れる<br />
                                ここにテキスト入れるここにテキスト入れるここにテキスト入れるここにテキスト入れる
                                ここにテキスト入れるここにテキスト入れるここにテキスト入れる
                            </dd>
                        </dl>
                    </li>
                    <li class="p-recruit__item">
                        <p class="p-recruit__item-title">勤務地</p>
                        <dl>
                            <dt class="p-recruit__definition-title">東京都</dt>
                            <dt class="p-recruit__definition-title">大阪府</dt>
                            <dd></dd>
                        </dl>
                    </li>
                    <li class="p-recruit__item">
                        <p class="p-recruit__item-title">雇用条件</p>
                        <dl>
                            <dt class="p-recruit__definition-title">給与</dt>
                            <dt class="p-recruit__definition-title">昇給</dt>
                            <dt class="p-recruit__definition-title">勤務時間</dt>
                            <dd class="p-recruit__definition-data p-recruit__definition-data2">
                                ここにテキスト入れるここにテキスト入れるここにテキスト入れるここにテキスト入れる
                                ここにテキスト入れるここにテキスト入れるここにテキスト入れる<br />
                                ここにテキスト入れるここにテキスト入れるここにテキスト入れるここにテキスト入れる
                                ここにテキスト入れるここにテキスト入れるここにテキスト入れる
                            </dd>
                        </dl>
                    </li>
                </ul>

                <div class="p-recruit__images">
                    <div class="p-recruit__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruite1.jpg"
                            alt="外で設計図を見ている作業中の男性 /">
                    </div>
                    <div class=" p-recruit__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruite2.jpg"
                            alt="パソコンの画面を見ている3人の男女" />
                    </div>
                    <div class="p-recruit__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruite3.jpg"
                            alt="ヘルメットを被った作業員の男性" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 共通 -->
    <?php get_template_part('template-parts/common', 'parts'); ?>

</main>

<?php get_footer(); ?>