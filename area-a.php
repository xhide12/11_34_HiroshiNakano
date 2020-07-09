<?php
require 'password.php';   // password_verfy()はphp 5.5.0以降の関数のため、バージョンが古くて使えない場合に使用

// セッション開始
session_start();

// ログイン状態チェック
require "functions.php";
loginCheck();

$pdo = connectDB();


?>

<!DOCTYPE html>
<html lang="ja">
<head  prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

<meta charset="UTF-8">
<title>ライブハウス大作戦～ライブハウスの取り組み～</title>

<meta content="app-id=465887673" name="apple-itunes-app">
<meta property="fb:app_id" content="465887673">
<link rel="apple-touch-icon" href="https://eplus.jp/s/eplus/img/webclip.png">

<link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@900&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://eplus.jp/s/page/live/livehouse_support/data/css/style.css">
<script src="https://eplus.jp/s/page/live/js/jquery-3.1.1.min.js"></script>
<script src="https://eplus.jp/s/page/live/js/jquery-migrate-1.4.1.min.js"></script>
<script src="https://eplus.jp/s/page/live/js/jquery.easing.1.3.js"></script>
<script src="https://eplus.jp/s/page/live/js/jquery.colorbox-min.js"></script>
<script src="https://eplus.jp/s/page/live/js/jquery.inview.min.js"></script>
<script src="https://eplus.jp/s/page/live/js/jquery.matchHeight.js"></script>
<script src="https://eplus.jp/s/eplus/js/jquery.cookie.js"></script>
<script src="https://eplus.jp/s/eplus/js/cloud.js"></script>
<script src="https://eplus.jp/s/eplus/js/ui.js"></script>
<script src="https://eplus.jp/s/page/live/livehouse_support/data/js/script.js"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<style>
      .jumbotron {
        background-image: url("img/top00.jpg");
        background-size: cover;
        background-position: center 60%;
      }

      .youser {
        padding-top:10px;
      }

      .youser01 {
        padding-top:50px;
      }

    </style>

</head>
<body style="padding-top:4.5rem;">

<nav class="navbar navbar-dark bg-dark text-white fixed-top">
      <div class="container youser">
      <!-- ユーザーIDにHTMLタグが含まれても良いようにエスケープする -->
          <strong><p>ようこそ <u><?php echo htmlspecialchars($_SESSION["NAME"], ENT_QUOTES); ?></u> さん</p></strong>  <!-- ユーザー名をechoで表示 -->
          <strong><p>ログアウトは<a href="Logout.php">こちら</a>から</p></strong>
      </div>
  </nav>

<div id="livehouse">

<div class="container text-center mt-5">
        <!-- <div class="text-center bg-dark h-100 pt-4 pb-4 jumbotron jumbotron-extend">
            <p class="display-3 center-block text-white">ライブハウス大作戦</p>
            <p class="display-4 text-white">with コロナ</p>
        </div> -->
<img src="img/top.jpg" alt="">

</div>

<div class="container youser01">

<section class="section-wrap" id="area-top">
  <div class="inner-wrap">
    <h2>北海道・東北</h2>
    <nav>
      <ul>
        <li class="link-text"><a href="#A1">北海道</a><span class="count">5</span></li>
        <li class="link-text"><a href="#A2">青森県</a><span class="count">1</span></li>
        <li class="link-text"><a href="#A3">岩手県</a><span class="count">1</span></li>
        <li class="link-text"><a href="#A4">宮城県</a><span class="count">3</span></li>
        <li class="link-text"><a href="#A5" class="link-off">秋田県</a><span class="count">0</span></li>
        <li class="link-text"><a href="#A6">山形県</a><span class="count">2</span></li>
        <li class="link-text"><a href="#A7">福島県</a><span class="count">3</span></li>
        <li class="link-text top"><a href="livehouse.php">都道府県一覧へ</a></li>
      </ul>
    </nav>
  </div>
</section>

<div id="livehouse-list">

  <section class="section-wrap" id="A1">
    <div class="inner-wrap">
      <h2>北海道</h2>
      <div class="clearfix" id="list-A1">

<article class="article-wrap match-height box-shadow new" id="A1-006"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-a/A1-006.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>ライブバー ホットタイム</h3><div class="twitter off"><a href="*Twitter*" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>クラウドファンディング</h4><div class="mb-1em">セカンドドリンク サービス 他</div><p class="price ">698</p><div class="link-text"><a href="https://community.camp-fire.jp/projects/view/152687" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.22</div></article>

<article class="article-wrap match-height box-shadow" id="A1-005"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-a/A1-005.jpg" alt="" loading="lazy"></div><section class="project-02"><h3>札幌SPiCE </h3><div class="twitter"><a href="https://twitter.com/SPiCE_SAPPORO " target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>クラウドファンディング </h4><div class="mb-1em">クラウドファンディング「”STAY STRONG” 【札幌SPiCE】支援プロジェクト」実施。 </div><p class="price">2,000</p><div class="link-text"><a href="https://camp-fire.jp/projects/view/261780 " target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4>クラウドファンディング</h4><div class="mb-1em">クラウドファンディング「ハイブリッド型ライブハウス【札幌SPiCE】存続救済プロジェクト」実施。</div><p class="price">2,000</p><div class="link-text"><a href="https://motion-gallery.net/projects/spice-sapporo" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href=" " target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.19</div></article>

<article class="article-wrap match-height box-shadow" id="A1-001"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-a/A1-001.jpg" alt="" loading="lazy"></div><section class="project-02"><h3>BESSIE HALL </h3><div class="twitter"><a href="https://twitter.com/bessie_sapporo" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはTshirts・Tote bag・badgeを販売。</div><p class="price">500 </p><div class="link-text"><a href="https://rockagain.thebase.in/?fbclid=IwAR2kd-wLYgK_hXeG_Xw1vLy3s8M35mLu89xa2TCY0dcvzL7Z7lieHxPFOqs" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はURLをチェック。</div><p class="price off">0</p><div class="link-text"><a href="https://www.youtube.com/channel/UCOUUbRxzdOksxUltBZgpm_w" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="A1-002"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-a/A1-002.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>CASINO DRIVE</h3><div class="twitter"><a href="https://twitter.com/CASINODRIVEinfo " target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はURLをチェック。</div><p class="price off"></p><div class="link-text"><a href="https://www.youtube.com/channel/UC6s30bnFecECibMH6s0hs4g?app=desktop" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href=" " target="_blank">細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="A1-003"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-a/A1-003.jpg" alt="" loading="lazy"></div><section class="project-02"><h3>KLUB COUNTER ACTION </h3><div class="twitter"><a href="https://twitter.com/kcasapporo" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">ライブ視聴URLを販売。</div><p class="price">538</p><div class="link-text"><a href="https://kcasapporo.thebase.in/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4>その他 </h4><div class="mb-1em">ドネーションを募集中。 </div><p class="price off"></p><div class="link-text"><a href="https://www.paypal.com/pools/c/8ozcyI3KEn " target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href=" " target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="A1-004"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-a/A1-004.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>SUSUKINO810 </h3><div class="twitter"><a href="https://twitter.com/SUSUKINO810 " target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはドリンクチケット・Tシャツ・ステッカー等を販売。</div><p class="price">600</p><div class="link-text"><a href="https://susukino810.thebase.in/ " target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href=" " target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href=" " target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

      </div>
    </div>
  </section>

  <section class="section-wrap" id="A2">
    <div class="inner-wrap">
      <h2>青森県</h2>
      <div class="clearfix" id="list-A2">

<article class="article-wrap match-height box-shadow new" id="A2-001"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-a/A2-001.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>LIVE HOUSE FOR ME</h3><div class="twitter"><a href="https://twitter.com/FORME_STORE" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>*物販</h4><div class="mb-1em">グッズは支援CD・Tシャツを販売。</div><p class="price">1,100</p><div class="link-text"><a href="https://forme-foryou.stores.jp/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.12</div></article>

      </div>
    </div>
  </section>

  <section class="section-wrap" id="A3">
    <div class="inner-wrap">
      <h2>岩手県</h2>
      <div class="clearfix" id="list-A3">

<article class="article-wrap match-height box-shadow" id="A3-001"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-a/A3-001.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>クラブカウンターアクション宮古 </h3><div class="twitter"><a href="https://twitter.com/kcamiyako " target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはTシャツ・マスクなどを販売。</div><p class="price">5,000</p><div class="link-text"><a href="http://kcamiyako.s2.weblife.me/ " target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

      </div>
    </div>
  </section>

  <section class="section-wrap" id="A4">
    <div class="inner-wrap">
      <h2>宮城県</h2>
      <div class="clearfix" id="list-A4">

<article class="article-wrap match-height box-shadow new" id="A4-001"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-a/A4-001.jpg" alt="" loading="lazy"></div><section class="project-02"><h3>MusicSpace BARTAKE</h3><div class="twitter"><a href="https://twitter.com/sendaibartake" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズは先払いドリンクチケット等を販売。</div><p class="price">3,000</p><div class="link-text"><a href="https://bartake.thebase.in/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はURLをチェック。</div><p class="price off">*金額2*</p><div class="link-text"><a href="https://twitcasting.tv/sendaibartake" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.19</div></article>

<article class="article-wrap match-height box-shadow" id="A4-002"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-a/A4-002.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>Space Zero</h3><div class="twitter"><a href="https://twitter.com/spaceZero_022 " target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>クラウドファンディング</h4><div class="mb-1em">クラウドファンディング「spaceZeroクラウドファンディング」実施。</div><p class="price off"></p><div class="link-text"><a href="https://spacezero567.thebase.in/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price off"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="A4-003"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-a/A4-003.jpg" alt="" loading="lazy"></div><section class="project-02"><h3>仙台MACANA</h3><div class="twitter"><a href="https://twitter.com/SENDAI_MACANA " target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはTシャツ・トートバックを販売。 </div><p class="price">2,500</p><div class="link-text"><a href="https://mcn.theshop.jp/ " target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はURLをチェック。</div><p class="price off"></p><div class="link-text"><a href="https://www.youtube.com/channel/UCxhwBIUnpdUqeWfhs-buvlg?app=desktop" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price off"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

      </div>
    </div>
  </section>

  <section class="section-wrap" id="A5">
    <div class="inner-wrap">
      <h2>秋田県</h2>
      <div class="clearfix" id="list-A5">

      </div>
    </div>
  </section>

  <section class="section-wrap" id="A6">
    <div class="inner-wrap">
      <h2>山形県</h2>
      <div class="clearfix" id="list-A6">

<article class="article-wrap match-height box-shadow" id="A6-001"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-a/A6-001.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>Live ARB</h3><div class="twitter"><a href="https://twitter.com/livearb " target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはプリペイドチケットを販売。 </div><p class="price">2,000</p><div class="link-text"><a href="https://livearb.thebase.in/ " target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="A6-002"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-a/A6-002.jpg" alt="" loading="lazy"></div><section class="project-02"><h3>酒田hope</h3><div class="twitter"><a href="https://twitter.com/sakata_hope " target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">ドリンクチケット・CD・Tシャツ を販売。</div><p class="price">500</p><div class="link-text"><a href="https://hoperecords.thebase.in/ " target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4>物販</h4><div class="mb-1em">ドネーションマスク・Tシャツ・Sweatshirt・Hoodie・を販売。</div><p class="price">1,500</p><div class="link-text"><a href="http://amarume.thebase.in/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

      </div>
    </div>
  </section>

  <section class="section-wrap" id="A7">
    <div class="inner-wrap">
      <h2>福島県</h2>
      <div class="clearfix" id="list-A7">

<article class="article-wrap match-height box-shadow" id="A7-001"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-a/A7-001.jpg" alt="" loading="lazy"></div><section class="project-02"><h3>Live Space C-moon </h3><div class="twitter"><a href="https://twitter.com/livespacecmoon" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">カリグラ(オリジナルカレーパン)を販売。</div><p class="price">1,200</p><div class="link-text"><a href="https://minne.com/items/20775019" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はURLをチェック。</div><p class="price off"></p><div class="link-text"><a href="https://www.youtube.com/channel/UCC910ws7L8LBhjfUZGmDtBA?app=desktop" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="A7-002"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-a/A7-002.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>Out Line</h3><div class="twitter"><a href="https://twitter.com/outline1" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはTシャツ・布マスク等を販売。</div><p class="price">330</p><div class="link-text"><a href="https://uonemusic.thebase.in/ " target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="A7-003"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-a/A7-003.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>ピークアクション</h3><div class="twitter"><a href="https://twitter.com/PEAKACTION1 " target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはTシャツ・ステッカー・トートバッグなどを販売。</div><p class="price">100</p><div class="link-text"><a href="https://peakaction.base.shop/ " target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

      </div>
    </div>
  </section>

  <div id="clone"></div>

</div>
</div>
<!-- <div class="link-button"><a href="post.html">掲載希望はこちら</a></div> -->
<div class="page_top"><a href="#top" class="square">ページTOP</a></div>



</body>
</html>