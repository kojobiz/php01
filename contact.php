<?php
/*
Template Name: Contact Page
*/
get_header();
?>
<!----------------------------------
form
----------------------------------->
<section class="l-form">
    <h2 class="l-form-contents__title c-h3--50-0-61">お申し込みフォーム</h2>
    <hr class="c-title__hr c-title__hr--white">
</section>
<section class="l-breadcrumb c-padding--x4per c-margin--0auto c-padding-y--contact__breadcrumb">
    <ul>
        <li>TOP</li>
        <li>申し込み</li>
    </ul>
</section>
<section class="l-attention c-margin--0auto c-padding--x50px c-x-center c-margin--y2040px">
    <p class="l-attention--text c-text--27-0-45">資料請求、無料トライアルは以下の電話番号<br>
        または、メールフォームより<br class="pc--none">お気軽にお申し込みください。
    </p>
    <div class="l-attention--info c-padding--x4per c-margin--0auto c-x-center">
        <div class="p-info-titlebox c-padding--y2px">
            <p class="c-info-titlebox__title c-text--27-200-38">電話でのお申し込み</p>
        </div>
        <div class="p-info-numberbox">
            <div class="p-info-numberbox-inner">
                <span class="c-info-numberbox__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="42.393" height="39.346" viewBox="0 0 42.393 39.346">
                <path id="call_FILL1_wght400_GRAD0_opsz24" d="M159.92-800.654a37.672,37.672,0,0,1-14.543-2.978,43.719,43.719,0,0,1-13.071-8.443,40.47,40.47,0,0,1-9.1-12.132A30.841,30.841,0,0,1,120-837.7a2.143,2.143,0,0,1,.707-1.639,2.5,2.5,0,0,1,1.766-.656h9.539a2.29,2.29,0,0,1,1.472.519,1.97,1.97,0,0,1,.765,1.229l1.531,7.651a3.585,3.585,0,0,1-.059,1.476,2.269,2.269,0,0,1-.648,1.038l-5.711,5.355a26.365,26.365,0,0,0,2.8,3.907,39.651,39.651,0,0,0,3.562,3.634,40.647,40.647,0,0,0,3.827,3.142,37.547,37.547,0,0,0,4.239,2.65l5.535-5.137a3.365,3.365,0,0,1,1.384-.738,4.075,4.075,0,0,1,1.678-.136l8.125,1.53a2.761,2.761,0,0,1,1.354.792,1.846,1.846,0,0,1,.53,1.284v8.853a2.144,2.144,0,0,1-.707,1.639A2.5,2.5,0,0,1,159.92-800.654Z" transform="translate(-120 840)" fill="#30554c"/>
                    </svg>
                </span>
                <p class="c-text--47-0-57 c-textcolor--green c-weight--bold">03-3342-9620</p>
            </div>
            <p class="c-info__teltime c-teltime c-textcolor--green"> 受付時間 10:00~18:00【土日祝定休日】</p>
        </div>
    </div>
</section>
<section class="l-formbox">
    <div class="l-formbox-inner c-padding--x20px c-margin--0auto">
        <form class="l-formbox-inner-formitems">
            <!-- form -->
            <div class="p-formitems">
                <dl class="grid-container">
                    <dt class="grid-item grid-item--dt">ご用件</dt>
                    <div class="grid-item grid-item--require"><p class="grid-item--require__text">必須</p></div>
                    <dd class="grid-item grid-item--radio">
                        <label class="p-radio__text">
                            <input type="radio" name="request" value="資料請求" class=""> 資料請求
                        </label>
                        <label class="p-radio__text">
                            <input type="radio" name="request" value="無料トライアルを希望" class=""> 無料トライアルを希望
                        </label>
                        <label class="p-radio__text">
                            <input type="radio" name="request" value="その他" class=""> その他
                        </label>
                    </dd>
                </dl>
            </div>
            <div class="p-formitems">
                <dl class="grid-container">
                    <dt class="grid-item grid-item--dt">会社名</dt>
                    <div class="grid-item grid-item--require"><p class="grid-item--require__text">必須</p></div>
                    <dd class="grid-item grid-item--center">
                        <label for="company"></label>
                        <input type="text" class="p-input-space" id="company" name="company" placeholder="例：株式会社システムサポート">
                    </dd>
                </dl>
            </div>
            <div class="p-formitems">
                <dl class="grid-container">
                    <dt class="grid-item grid-item--dt">氏名</dt>
                    <div class="grid-item grid-item--require"><p class="grid-item--require__text">必須</p></div>
                    <dd class="grid-item grid-item--center">
                        <label for="name"></label>
                        <input type="text" class="p-input-space" id="name" name="name" placeholder="例：シス田サポ郎">
                    </dd>
                </dl>
            </div>
            <div class="p-formitems">
                <dl class="grid-container">
                    <dt class="grid-item grid-item--dt">メールアドレス</dt>
                    <div class="grid-item grid-item--require"><p class="grid-item--require__text">必須</p></div>
                    <dd class="grid-item grid-item--center">
                        <label for="mail"></label>
                        <input type="email" class="p-input-space" id="mail" name="mail" placeholder="例：xxx@xxx.com">
                    </dd>
                </dl>
            </div>
            <div class="p-formitems">
                <dl class="grid-container">
                    <dt class="grid-item grid-item--dt">電話番号</dt>
                    <div class="grid-item grid-item--require"><p class="grid-item--require__text">必須</p></div>
                    <dd class="grid-item grid-item--center">
                        <label for="tel"></label>
                        <input type="tel" class="p-input-space"id="tel" name="tel" placeholder="例：06-xxxx-xxxx">
                    </dd>
                </dl>
            </div>
            <div class="p-formitems p-formitems--last">
                <dl class="grid-container">
                    <dt class="grid-item grid-item--dt-textarea">お申し込み内容</dt>
                    <div class="grid-item"></div>
                    <dd class="grid-item grid-item--center">
                        <label for="textarea"></label>
                        <input type="textarea" class="p-input-space--textarea" id="tel" name="tel" placeholder="ご質問などがあればご記入ください">
                    </dd>
                </dl>
            </div>
        </form>
    </div>
</section>
<section class="l-form-about">
    <div class="l-form-about--link c-padding--x50px c-margin--0auto">
        <a href="https://www.sts-inc.co.jp/privacypolicy/" target="_blank" rel="noopener noreferrer" class="c-text--16 ">個人情報保護方針</a>
        <a href="hhttps://www.sts-inc.co.jp/privacytreatment/" target="_blank" rel="noopener noreferrer" class="c-text--16">個人情報の取り扱いについて</a>
    </div>
    <div class="l-form-about--check c-padding--x50px c-margin--0auto">
        <input type="checkbox" id="agreePrivacyPolicy">
        <label for="agreePrivacyPolicy" class="c-text--21 c-margin--0auto c-x-center">個人情報保護方針に同意する</label>
    </div>
</section>
<section class="l-form-btnarea c-padding--x50px c-margin--0auto c-x-center">
    <a href="./confirm.html">
        <img src="./images/common/btn_confirm.png" alt="" >
    </a>
</section>
<?php get_footer(); ?>