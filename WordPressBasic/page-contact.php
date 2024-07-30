<?php get_header(); ?>


<main>
    <!-- common 背景 -->
    <?php $id = get_post_thumbnail_id();
    $img = wp_get_attachment_image_src($id, ''); ?>

    <div class="c-common-fv l-common-fv" style="background-image: url('<?php echo $img[0]; ?>')">
        <h2 class="c-section-title"><?php echo ($post->post_name); ?></h2>
        <h2 class="c-section-subtitle"><?php the_title(); ?></h2>
    </div>

    <!-- お問い合わせ -->
    <section class="p-contact l-contact">
        <div class="l-inner">

            <!-- パンくずリスト -->
            <?php get_template_part('template-parts/breadcrumb'); ?>

            <div class="p-contact__inner">
                <p class="p-contact__text">
                    <span class="p-contact__required">必須</span>は記入必須項目です。
                </p>
                <div class="p-contact__form">

                    <?php echo do_shortcode('[mwform_formkey key="109"]'); ?>

                </div>
            </div>
        </div>
    </section>


    <!-- 共通 -->
    <?php get_template_part('template-parts/common', 'parts'); ?>

</main>

<?php get_footer(); ?>