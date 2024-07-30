<?php get_header(); ?>


<main>
    <!-- common 背景 -->
    <?php $id = get_post_thumbnail_id();
    $img = wp_get_attachment_image_src($id, ''); ?>

    <div class="c-common-fv l-common-fv" style="background-image: url('<?php echo $img[0]; ?>')">
        <h2 class="c-section-title"><?php echo ($post->post_name); ?></h2>
        <h2 class="c-section-subtitle"><?php the_title(); ?></h2>
    </div>

    <!-- 我々について -->
    <section class="p-common-company l-common-company">
        <div class="l-inner">

            <!-- パンくずリスト -->
            <?php get_template_part('template-parts/breadcrumb'); ?>

            <div class="p-common-company__inner p-common-company__inner--company">
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
            </div>
        </div>
    </section>

    <!-- 会社概要 -->
    <section class="p-company l-company">
        <div class="l-inner">
            <div class="p-company__inner">
                <h2 class="p-company__title">会社概要</h2>

                <div class="p-company-table p-company__about">
                    <table>
                        <tr class="p-company-table__row">
                            <th class="p-company-table__header">会社名</th>
                            <td class="p-company-table__data">CODO製造</td>
                        </tr>
                        <tr class="p-company-table__row">
                            <th class="p-company-table__header">代表取締役</th>
                            <td class="p-company-table__data">田中　太郎</td>
                        </tr>
                        <tr class="p-company-table__row">
                            <th class="p-company-table__header">事業内容</th>
                            <td class="p-company-table__data">製造販売</td>
                        </tr>
                        <tr class="p-company-table__row">
                            <th class="p-company-table__header">ホームページURL</th>
                            <td class="p-company-table__data">XXXXXX.com</td>
                        </tr>
                        <tr class="p-company-table__row">
                            <th class="p-company-table__header">資本金</th>
                            <td class="p-company-table__data">100万円</td>
                        </tr>
                        <tr class="p-company-table__row">
                            <th class="p-company-table__header">所在地</th>
                            <td class="p-company-table__data">東京都品川区XXXXXXXXX</td>
                        </tr>
                        <tr class="p-company-table__row">
                            <th class="p-company-table__header">電話番号</th>
                            <td class="p-company-table__data p-company-table__data--tel">
                                <a href="tel:0300000000"> 03-0000-0000</a>
                            </td>
                        </tr>
                        <tr class="p-company-table__row">
                            <th class="p-company-table__header">メール</th>
                            <td class="p-company-table__data p-company-table__data--mail">
                                <a href="mailto:XXXX@XXXXXX.jp"> XXXX@XXXXXX.jp</a>
                            </td>
                        </tr>
                        <tr class="p-company-table__row">
                            <th class="p-company-table__header">取引先一覧</th>
                            <td class="p-company-table__data">
                                ○○○○○株式会社、○○○○○株式会社、○○○○○株式会社
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- 共通 -->
    <?php get_template_part('template-parts/common', 'parts'); ?>
</main>

<?php get_footer(); ?>