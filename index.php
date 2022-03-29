<?php get_header(); ?>

<!-- トピック -->
<div class="topic">
    <div class="topic_title">Topics</div>
    <div class="topic_text">
        <div class="topic_text_box">
            <time class="postdate" datetime="2022.01.26"></time>
            <p class="topic_text_main">HPをリニューアルしました</p>
        </div>
        <div class="topic_text_box">
            <time class="postdate" datetime="2022.01.26"></time>
            <p class="topic_text_main">HPをリニューアルしました</p>
        </div>
    </div>
</div>

<!-- 会社概要 -->
<div class="introduce">
    <img src="<?= get_template_directory_uri(); ?>/image/building.jpg" alt="会社の画像" class="intorduce_image">
    <div class="introduce_text_area">
        <p class="introduce_title">お客様と一緒に60年</p>
        <p class="introduce_text">私達についての文章私達についての文章私達についての文章私達についての文章私達についての文章私達についての文章私達についての文章私達についての文章私達についての文章私達についての文章私達についての文章私達についての文章</p>
    </div>

    <div class="button">
        <div class="button_round"></div>
        <p class="button_text">会社概要をみる</p>
    </div>
</div>

<!-- 事業紹介 -->
<div class="casestady">
    <div class="casestady_inner">
        <div class="casestady_text_area">
            <h2 class="section_title">事業紹介</h2>
            <p class="casestady_text">
                製造から加工まで一貫して行うことが、私たちの強みです。
                <br>納品までのスピードとコストパフォーマンスを実現できています。
            </p>
        </div>
        <div class="casestady_image_box">
            <img src="<?= get_template_directory_uri(); ?>/image/welder.jpg" alt="溶接の画像" class="casestady_image welder">
            <img src="<?= get_template_directory_uri(); ?>/image/processing.jpg" alt="加工の画像" class="casestady_image processing">
            <img src="<?= get_template_directory_uri(); ?>/image/gear.jpg" alt="ギアの画像" class="casestady_image gear">
        </div>
    </div>
</div>

<!-- エリアマップ -->
<div class="areamap">
    <div class="areamap_text_area">
        <p class="areamap_title">全国で対応可能です</p>
        <p class="areamap_text">全国対応の文言が入ります全国対応の文言が入ります全国対応の文言が入ります全国対応の文言が入ります全国対応の文言が入ります全国対応の文言が入ります全国対応の文言が入ります全国対応の文言が入ります全国対応の文言が入ります全国対応の文言が入ります全国対応の文言が入ります全国対応の文言が入ります</p>
        <div class="button">
            <div class="button_round"></div>
            <p class="button_text">会社概要をみる</p>
        </div>
    </div>
</div>

<!-- リンクボックスエリア -->
<div class="linkbox_area">
    <div class="linkbox_ptoducct">
        <p class="linkbox_title">製品情報</p>
        <p class="linkbox_text">テキストテキストテキストテキストテキストテキストテキストテキスト</p>
    </div>

    <div class="linkbox_casestudy">
        <p class="linkbox_title">施工事例</p>
        <p class="linkbox_text">テキストテキストテキストテキストテキストテキストテキストテキスト</p>
    </div>

    <div class="linkbox_flow">
        <p class="linkbox_title">ご依頼の流れ</p>
        <p class="linkbox_text">テキストテキストテキストテキストテキストテキストテキストテキスト</p>
    </div>
</div>

<!-- 採用情報 -->
<div class="recruit">
    <div class="recruit_text_area">
        <h2 class="section_title">採用情報</h2>
        <p class="recruit_text">テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
        <div class="button">
            <div class="button_round"></div>
            <p class="button_text">採用情報はこちら</p>
        </div>
    </div>
    <div class="recruit_image_area">
        <img src="<?= get_template_directory_uri(); ?>/image/recruit01.png" alt="従業員の画像" class="recruit_image">
        <img src="<?= get_template_directory_uri(); ?>/image/recruit02.png" alt="従業員の画像" class="recruit_image">
    </div>
</div>


<?php get_footer(); ?>