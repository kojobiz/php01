<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package test_theme
 */
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <title>test top | test</title>

    <!-- css -->
    <!-- <link rel="stylesheet" href="./style.css"> -->
    <!-- js -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
    <!-- Font Icon -->
    <link rel="icon" href="favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body>
    <!----------------------------------
    header
    ----------------------------------->
    <header class="l-header">
        <div class="l-header-inner">
            <h1 class="l-header-inner__logo">
                <a href="https://lkcodetest.sakura.ne.jp/cms/">
                    <img src="https://lkcodetest.sakura.ne.jp/cms/wp-content/uploads/images/common/logo_pc.png" alt="">
                </a>
            </h1>
            <div class="l-header-inner__menu--pc" id="menu--pc">
                <div class="p-telinfo--header">
                    <div class="c-textcolor--orange c-text--28-0-40 bold"><a href="tel:03-3342-9620">TEL 03-3342-9620</a></div>
                    <div class="c-textcolor--orange c-text--13-046-27 c-mright--minus10 c-x-center">受付時間 10:00~18:00【土日祝定休日】</div>
                </div>
                <nav class="p-nav">
                    <ul class="p-nav-listbox">
                        <li class="p-nav-listbox__title">
                            <a href="https://lkcodetest.sakura.ne.jp/cms#reason">選ばれる理由</a>
                        </li>
                        <li class="p-nav-listbox__title">
                            <a href="https://lkcodetest.sakura.ne.jp/cms#fivefeatures">サービス紹介</a>
                        </li>
                        <li class="p-nav-listbox__title">
                            <a href="https://lkcodetest.sakura.ne.jp/cms#flow">導入までの流れ</a>
                        </li>
                        <li class="p-nav-listbox__title">
                            <a href="https://lkcodetest.sakura.ne.jp/cms#plan">料金プラン</a>
                        </li>
                        <li class="p-nav-listbox__title">
                            <a href="https://lkcodetest.sakura.ne.jp/cms#faq">よくあるご質問</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!----------------------------------
            ハンバーガーメニュー
            ----------------------------------->
            <div class="l-header-inner__menu--sp">
                <img src="https://lkcodetest.sakura.ne.jp/cms/wp-content/uploads/images/home/sp/img_spmenu_open.svg" alt="" id="spnav-open" class="spnav-open">
            </div>
        </div>
        <section class="l-spnav pc--none">
            <div class="l-spnav-contents">
                <div class="l-spnav-contents--left"></div>
                <div class="l-spnav-contents--right">
                    <div class="l-spnav-inner">
                        <img src="https://lkcodetest.sakura.ne.jp/cms/wp-content/uploads/images/home/sp/img_spmenu_close.png" alt="" class="spnav-close" id="spnav-close">
                        <h1 class="l-spnav-inner--logo">
                            <a href="https://lkcodetest.sakura.ne.jp/cms/"><img src="https://lkcodetest.sakura.ne.jp/cms/wp-content/uploads/images/common/logo_pc.png" alt="" srcset=""></a>
                        </h1>
                        <nav class="l-spnav-inner--nav">
                            <ul class="p-spnav-listbox">
                                <li class="p-spnav-listbox__title">
                                    <a href="https://lkcodetest.sakura.ne.jp/cms#reason">選ばれる理由</a>
                                </li>
                                <li class="p-spnav-listbox__title">
                                    <a href="https://lkcodetest.sakura.ne.jp/cms#fivefeatures">サービス紹介</a>
                                </li>
                                <li class="p-spnav-listbox__title">
                                    <a href="https://lkcodetest.sakura.ne.jp/cms#flow">導入までの流れ</a>
                                </li>
                                <li class="p-spnav-listbox__title">
                                    <a href="https://lkcodetest.sakura.ne.jp/cms#plan">料金プラン</a>
                                </li>
                                <li class="p-spnav-listbox__title">
                                    <a href="https://lkcodetest.sakura.ne.jp/cms#faq">よくあるご質問</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="p-telinfo">
                            <div class="c-textcolor--green c-text--36-054-52 bold c-x-center"><a href="tel:03-3342-9620">TEL 03-3342-9620</a></div>
                            <div class="c-textcolor--green c-text--16-096-30 c-x-center">&nbsp;&nbsp;受付時間 10:00~18:00【土日祝定休日】</div>
                        </div>
                        <div class="p-cta--spnav">
                            <a href="https://lkcodetest.sakura.ne.jp/cms/contact/"  class="c-btn-cta--service--round--pc">
                                <svg id="コンポーネント_2_2" data-name="コンポーネント 2 – 2" xmlns="http://www.w3.org/2000/svg" width="467.6" height="134.344" viewBox="0 0 467.6 134.344">
                                    <rect id="長方形_18" data-name="長方形 18" width="467.6" height="134.344" rx="67" fill="#159868"/>
                                    <text id="_1分でカンタン入力_" data-name="1分でカンタン入力！" transform="translate(234 51)" fill="#fff" font-size="23" font-family="NotoSansCJKjp-Bold, Noto Sans CJK JP" font-weight="700"><tspan x="-110" y="0">1分</tspan><tspan y="0">でカンタン</tspan><tspan y="0">入力！</tspan></text>
                                    <text id="サービス資料請求" transform="translate(234 94)" fill="#fff" font-size="32" font-family="NotoSansCJKjp-Bold, Noto Sans CJK JP" font-weight="700"><tspan x="-128" y="0">サービス</tspan><tspan y="0">資料請求</tspan></text>
                                    <g id="長方形_98" data-name="長方形 98" transform="translate(10 10.002)" fill="none" stroke="#fff" stroke-width="3">
                                      <rect width="447.6" height="114.34" rx="57.17" stroke="none"/>
                                      <rect x="1.5" y="1.5" width="444.6" height="111.34" rx="55.67" fill="none"/>
                                    </g>
                                </svg>
                            </a>
                            <a href="https://lkcodetest.sakura.ne.jp/cms/contact/" class="c-btn-cta--trial--round--pc p-cta--firstview-round-trial">
                                <svg id="コンポーネント_3_2" data-name="コンポーネント 3 – 2" xmlns="http://www.w3.org/2000/svg" width="467.6" height="134.344" viewBox="0 0 467.6 134.344">
                                    <rect id="長方形_18" data-name="長方形 18" width="467.6" height="134.344" rx="67" fill="#ff8000"/>
                                    <text id="初めてでも安心_" data-name="初めてでも安心！" transform="translate(234 51)" fill="#fff" font-size="23" font-family="NotoSansCJKjp-Bold, Noto Sans CJK JP" font-weight="700"><tspan x="-92" y="0">初</tspan><tspan y="0">めてでも</tspan><tspan y="0">安心！</tspan></text>
                                    <text id="_1週間無料_トライアル" data-name="&quot;1週間無料&quot;トライアル" transform="translate(234 94)" fill="#fff" font-size="32" font-family="NotoSansCJKjp-Bold, Noto Sans CJK JP" font-weight="700"><tspan x="-171" y="0">&quot;1週間無料&quot;</tspan><tspan y="0">トライアル</tspan></text>
                                    <g id="長方形_99" data-name="長方形 99" transform="translate(10 10.002)" fill="none" stroke="#fff" stroke-width="3">
                                      <rect width="447.6" height="114.34" rx="57.17" stroke="none"/>
                                      <rect x="1.5" y="1.5" width="444.6" height="111.34" rx="55.67" fill="none"/>
                                    </g>
                                </svg> 
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header>


    <!----------------------------------
    main
    ----------------------------------->
    <main class="l-main">