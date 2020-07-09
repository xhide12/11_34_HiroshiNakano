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
<body style="padding-top:3rem;">

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
    <h2>北信越・東海</h2>
    <nav>
      <ul>
        <li class="link-text"><a href="#C1">新潟県</a><span class="count"></span></li>
        <li class="link-text"><a href="#C2" class="link-off">富山県</a><span class="count"></span></li>
        <li class="link-text"><a href="#C3">石川県</a><span class="count"></span></li>
        <li class="link-text"><a href="#C4" class="link-off">福井県</a><span class="count"></span></li>
        <li class="link-text"><a href="#C5">長野県</a><span class="count"></span></li>
        <li class="link-text"><a href="#D1">岐阜県</a><span class="count"></span></li>
        <li class="link-text"><a href="#D2">静岡県</a><span class="count"></span></li>
        <li class="link-text"><a href="#D3">愛知県</a><span class="count"></span></li>
        <li class="link-text"><a href="#D4">三重県</a><span class="count"></span></li>
        <li class="link-text top"><a href="livehouse.php">都道府県一覧へ</a></li>
      </ul>
    </nav>
  </div>
</section>

<div id="livehouse-list">

  <section class="section-wrap" id="C1">
    <div class="inner-wrap">
      <h2>新潟県</h2>
      <div class="clearfix" id="list-C1">

<article class="article-wrap match-height box-shadow" id="C1-001"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-c/C1-001.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>LIVEHOUSE EARTH</h3><div class="twitter"><a href="https://twitter.com/jyouetsuEARTH" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはTシャツ・サコッシュ・ドリンクチケット等を販売。</div><p class="price">1,000</p><div class="link-text"><a href="https://yujiearth.base.shop/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

      </div>
    </div>
  </section>

  <section class="section-wrap" id="C2">
    <div class="inner-wrap">
      <h2>富山県</h2>
      <div class="clearfix" id="list-C2">

      </div>
    </div>
  </section>

  <section class="section-wrap" id="C3">
    <div class="inner-wrap">
      <h2>石川県</h2>
      <div class="clearfix" id="list-C3">

<article class="article-wrap match-height box-shadow" id="C3-001"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-c/C3-001.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>金沢vanvanV4</h3><div class="twitter"><a href="https://twitter.com/LIVE_vanvanV4" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>クラウドファンディング</h4><div class="mb-1em">クラウドファンディング「Save The vanvanV4」実施。</div><p class="price">500</p><div class="link-text"><a href="https://savethev4.thebase.in/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

      </div>
    </div>
  </section>

  <section class="section-wrap" id="C4">
    <div class="inner-wrap">
      <h2>福井県</h2>
      <div class="clearfix" id="list-C4">

      </div>
    </div>
  </section>

  <section class="section-wrap" id="C5">
    <div class="inner-wrap">
      <h2>長野県</h2>
      <div class="clearfix" id="list-C5">

<article class="article-wrap match-height box-shadow" id="C6-001"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-c/C6-001.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>GRAMHOUSE</h3><div class="twitter"><a href="https://twitter.com/ina_gramhouse" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはTシャツ・トートバッグ・ドリンクチケットを販売。</div><p class="price">2,500</p><div class="link-text"><a href="https://gramhouse.thebase.in/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow" id="C6-002"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-c/C6-002.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>Live&Bar Radius</h3><div class="twitter"><a href="https://twitter.com/ueda_radius" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>クラウドファンディング</h4><div class="mb-1em">クラウドファンディング「上田Radiusを残したい！」実施。</div><p class="price">500</p><div class="link-text"><a href="https://camp-fire.jp/projects/view/252094" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow" id="C6-003"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-c/C6-003.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>NAGANO CLUB JUNK BOX</h3><div class="twitter"><a href="https://twitter.com/junkboxnagano" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはTシャツ・缶バッチ等を販売。</div><p class="price">100</p><div class="link-text"><a href="https://junkbox026.thebase.in/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow" id="C6-004"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-c/C6-004.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>上諏訪CLUBROCKHEARTS</h3><div class="twitter"><a href="https://twitter.com/CLUBROCKHEARTS" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">「なんでも使える券」を販売。</div><p class="price">1,000</p><div class="link-text"><a href="https://t.co/FrAaVBKNJ1?amp=1" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow" id="C6-005"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-c/C6-005.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>上諏訪ドアーズ</h3><div class="twitter"><a href="https://twitter.com/kamisuwadoors" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">ステッカー・Tシャツ・なんでもご利用券を販売。</div><p class="price">300</p><div class="link-text"><a href="https://kmdoors.base.shop/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow" id="C6-007"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-c/C6-007.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>長野ライブハウスJ</h3><div class="twitter"><a href="https://twitter.com/livehousej" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>クラウドファンディング</h4><div class="mb-1em">クラウドファンディング「長野ライブハウスJを存続させたい」実施。</div><p class="price">1,000</p><div class="link-text"><a href="https://camp-fire.jp/projects/view/256565" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

      </div>
    </div>
  </section>

  <section class="section-wrap" id="D1">
    <div class="inner-wrap">
      <h2>岐阜県</h2>
      <div class="clearfix" id="list-D1">

<article class="article-wrap match-height box-shadow" id="D1-001"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-c/D1-001.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>柳ヶ瀬アンツ</h3><div class="twitter"><a href="https://twitter.com/ants_staff" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはTシャツ・ステッカー・ドリンクチケット・パーカーを販売。</div><p class="price">1,000</p><div class="link-text"><a href="http://twisted.shop-pro.jp/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

      </div>
    </div>
  </section>

  <section class="section-wrap" id="D2">
    <div class="inner-wrap">
      <h2>静岡県</h2>
      <div class="clearfix" id="list-D2">

<article class="article-wrap match-height box-shadow new" id="D2-004"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-c/D2-004.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>ライブハウス浜松FORCE</h3><div class="twitter "><a href="https://twitter.com/force_qm" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>クラウドファンディング</h4><div class="mb-1em">クラウドファンディング「ライブハウス浜松FORCE 存続支援プロジェクト」を実施。</div><p class="price ">2,000</p><div class="link-text"><a href="https://camp-fire.jp/projects/view/278668" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow" id="D2-001"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-c/D2-001.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>ライブハウス藤枝ココペリ</h3><div class="twitter"><a href="https://twitter.com/livehousekokop1" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはTシャツを販売。</div><p class="price">3,000</p><div class="link-text"><a href="https://rockcityfujieda.myshopify.com/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow" id="D2-002"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-c/D2-002.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>静岡UMBER</h3><div class="twitter"><a href="https://twitter.com/LiveHouse_UMBER" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはTシャツを販売。</div><p class="price">2,500</p><div class="link-text"><a href="https://shizuoka-umber.stores.jp/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow" id="D2-003"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-c/D2-003.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>浜松窓枠</h3><div class="twitter"><a href="https://twitter.com/Aw_one_kikaku" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>クラウドファンディング</h4><div class="mb-1em">クラウドファンディング「SAVE OUR HOME FOR MADOWAKU」実施。</div><p class="price">6,800</p><div class="link-text"><a href="https://www.unitedmusic.jp/soh" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

      </div>
    </div>
  </section>

  <section class="section-wrap" id="D3">
    <div class="inner-wrap">
      <h2>愛知県</h2>
      <div class="clearfix" id="list-D3">

<article class="article-wrap match-height box-shadow new" id="D3-011"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-c/D3-011.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>Club Zion</h3><div class="twitter"><a href="https://twitter.com/club_zion" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはTシャツ等を販売。</div><p class="price">3,000</p><div class="link-text"><a href="https://coal.thebase.in/" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow new" id="D3-010"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-c/D3-010.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>CLUB UPSET</h3><div class="twitter"><a href="https://twitter.com/clubupset" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはト゛ネイションシンク゛ル・Tシャツ・パーカー・トートバッグなどを販売。</div><p class="price">500</p><div class="link-text"><a href="https://clubupset.base.shop/" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow" id="D3-001"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-c/D3-001.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>CLUB 3STAR IMAIKE</h3><div class="twitter"><a href="https://twitter.com/3star_imaike" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>クラウドファンディング</h4><div class="mb-1em">クラウドファンディング「今池3STAR存続支援プロジェクト SAVE OUR 3STAR」実施。</div><p class="price">2,000</p><div class="link-text"><a href="https://camp-fire.jp/projects/view/257676#main" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow" id="D3-002"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-c/D3-002.jpg" alt="" loading="lazy"></div><section class="project-02"><h3>club KNOT</h3><div class="twitter"><a href="https://twitter.com/club_KNOT_" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>クラウドファンディング</h4><div class="mb-1em">クラウドファンディング「田舎なのに音楽が盛んな街「豊橋」全国から様々なジャンルのアーティストが集まる場所「club?KNOT」を守りたい」実施。</div><p class="price">2,000</p><div class="link-text"><a href="https://motion-gallery.net/projects/club_knot" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はURLをチェック。</div><p class="price off"></p><div class="link-text"><a href="https://www.youtube.com/channel/UCauGNiJ-GUulz244tWAwN4A" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow" id="D3-003"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-c/D3-003.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>CLUB ROCK'N'ROLL</h3><div class="twitter"><a href="https://twitter.com/club_rocknroll" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはt-shirtsを販売。</div><p class="price">3,190</p><div class="link-text"><a href="https://server53.joeswebhosting.net/~go18550/ecshop3/products/detail.php?product_id=193" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow" id="D3-005"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-c/D3-005.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>NAGOYA JAMMIN'</h3><div class="twitter"><a href="https://twitter.com/jammin_nagoya" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはTシャツ・サコッシュ等を販売。</div><p class="price">1,000</p><div class="link-text"><a href="https://coal.thebase.in/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow" id="D3-006"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-c/D3-006.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>TOKUZO</h3><div class="twitter"><a href="https://twitter.com/ImaikeTokuzo" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはTシャツ・ポスターなどを販売。</div><p class="price">500</p><div class="link-text"><a href="https://tokuzoshop.jimdofree.com/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow" id="D3-007"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-c/D3-007.jpg" alt="" loading="lazy"></div><section class="project-02"><h3>大須Dt.BLD</h3><div class="twitter"><a href="https://twitter.com/Dt_osu" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはドリンクチケット・ステッカー 等を販売。</div><p class="price">500</p><div class="link-text"><a href="https://dtb.base.shop/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4>その他</h4><div class="mb-1em">1円からできる寄付を開始。</div><p class="price">1</p><div class="link-text"><a href="https://twitter.com/daytrip_nagoya/status/1248108904426262529?s=20" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow" id="D3-008"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-c/D3-008.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>名古屋DAYTRIVE</h3><div class="twitter"><a href="https://twitter.com/daytrive" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはドリンクチケット・ステッカー・直筆ハガキ・ホールレンタル券を販売。</div><p class="price">500</p><div class="link-text"><a href="https://dtb.base.shop/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow" id="D3-009"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-c/D3-009.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>名古屋栄TIGHT ROPE</h3><div class="twitter"><a href="https://twitter.com/tightrope2001" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はURLをチェック。</div><p class="price off"></p><div class="link-text"><a href="https://www.youtube.com/user/ambmusic77" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

      </div>
    </div>
  </section>

  <section class="section-wrap" id="D4">
    <div class="inner-wrap">
      <h2>三重県</h2>
      <div class="clearfix" id="list-D4">

<article class="article-wrap match-height box-shadow" id="D4-001"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-c/D4-001.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>ROCKERS CLUB</h3><div class="twitter"><a href="https://twitter.com/rcmc696" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはTシャツを販売。</div><p class="price">3,000</p><div class="link-text"><a href="http://rockersclub.jp/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow" id="D4-002"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-c/D4-002.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>松阪マクサ</h3><div class="twitter"><a href="https://twitter.com/maxamaxamaxa" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">支援Tシャツを販売。</div><p class="price">4,000</p><div class="link-text"><a href="https://www.maxa.jp/schedule/%e3%80%8emaxa%e6%94%af%e6%8f%b4t-shirt%e3%80%8f/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

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