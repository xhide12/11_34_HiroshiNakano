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
    <h2>関東</h2>
    <nav>
      <ul>
        <li class="link-text"><a href="#B1">茨城県</a><span class="count"></span></li>
        <li class="link-text"><a href="#B2">栃木県</a><span class="count"></span></li>
        <li class="link-text"><a href="#B3">群馬県</a><span class="count"></span></li>
        <li class="link-text"><a href="#B4">埼玉県</a><span class="count"></span></li>
        <li class="link-text"><a href="#B5">千葉県</a><span class="count"></span></li>
        <li class="link-text"><a href="area-tokyo1.php">東京都</a><span class="count"></span></li>
        <li class="link-text"><a href="#B7">神奈川県</a><span class="count"></span></li>
        <li class="link-text"><a href="#B8" class="link-off">山梨県</a><span class="count"></span></li>
        <li class="link-text top"><a href="livehouse.php">都道府県一覧へ</a></li>
      </ul>
    </nav>
  </div>
</section>

<div id="livehouse-list">

  <section class="section-wrap" id="B1">
    <div class="inner-wrap">
      <h2>茨城県</h2>
      <div class="clearfix" id="list-B1">

<article class="article-wrap match-height box-shadow" id="B1-001"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-b/B1-001.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>club SONIC mito</h3><div class="twitter"><a href="https://twitter.com/clubSONICmito" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはT-shirt・Long sleeve T-shirt・tote bag・チャリティー缶バッジを販売。</div><p class="price">550</p><div class="link-text"><a href="https://sonicproject.thebase.in/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price">"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow" id="B1-002"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-b/B1-002.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>TSUKUBA PARKDINER</h3><div class="twitter"><a href="https://twitter.com/parkdinertwit" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はHPをチェック。</div><p class="price off"></p><div class="link-text"><a href="https://www.youtube.com/channel/UCod8-pXmWnBJnwVD3UZFuFg" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

      </div>
    </div>
  </section>

  <section class="section-wrap" id="B2">
    <div class="inner-wrap">
      <h2>栃木県</h2>
      <div class="clearfix" id="list-B2">

<article class="article-wrap match-height box-shadow" id="B2-001"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-b/B2-001.jpg" alt="" loading="lazy"></div><section class="project-02"><h3>SOUNDHOUSE PICO</h3><div class="twitter"><a href="https://twitter.com/soundhousepico" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはTシャツ・ジップパーカーを販売。</div><p class="price">2,000</p><div class="link-text"><a href="https://www.soundhousepico.com/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はURLをチェック。</div><p class="price off"></p><div class="link-text"><a href="https://www.youtube.com/channel/UCCGvU-iqKiTw9l6ijEd7-iw/featured" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

      </div>
    </div>
  </section>

  <section class="section-wrap" id="B3">
    <div class="inner-wrap">
      <h2>群馬県</h2>
      <div class="clearfix" id="list-B3">

<article class="article-wrap match-height box-shadow" id="B3-001"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-b/B3-001.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>GUNMA SUNBURST</h3><div class="twitter"><a href="https://twitter.com/GUNMASUNBURST" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>クラウドファンディング</h4><div class="mb-1em">ファンクラブ制度「GUNMA SUNBURST 支援」実施。</div><p class="price">3,000</p><div class="link-text"><a href="https://fanclove.jp/club/gunmasunburst" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price">"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

      </div>
    </div>
  </section>

  <section class="section-wrap" id="B4">
    <div class="inner-wrap">
      <h2>埼玉県</h2>
      <div class="clearfix" id="list-B4">

<article class="article-wrap match-height box-shadow new" id="B4-005"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-b/B4-005.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>熊谷ブルーフォレスト</h3><div class="twitter off"><a href="https://twitter.com/*TwitterID*" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはTシャツを販売。</div><p class="price">2,500</p><div class="link-text"><a href="https://kumagayablueforest.jimdofree.com/" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow new" id="B4-004"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-b/B4-004.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>ヒソミネ</h3><div class="twitter"><a href="https://twitter.com/hisomine" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはコンピレーションアルバム"Fourth Place" 5枚組CD-R + Tシャツセット、塩キャラメルテリーヌ、音楽機材ケーキなど販売。</div><p class="price off"></p><div class="link-text"><a href="https://kilk.official.ec/" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow new" id="B4-003"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-b/B4-003.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>*浦和ナルシス</h3><div class="twitter"><a href="https://twitter.com/urawanarciss" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>クラウドファンディング</h4><div class="mb-1em">クラウドファンディング「感染拡大で存続危機に直面しているライブハウス【浦和Narciss】を守りたい！」実施。</div><p class="price">1,000</p><div class="link-text"><a href="https://camp-fire.jp/projects/view/254221" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow" id="B4-001"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-b/B4-001.jpg" alt="" loading="lazy"></div><section class="project-02"><h3>ライブハウス鶴ヶ島ハレ</h3><div class="twitter"><a href="https://twitter.com/livehouse_halle" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>その他</h4><div class="mb-1em">お弁当テイクアウト</div><p class="price">550</p><div class="link-text"><a href="https://twitter.com/livehouse_halle/status/1247773590923005954?s=20" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4>物販</h4><div class="mb-1em">グッズはTシャツ・雑貨などを販売。</div><p class="price">385</p><div class="link-text"><a href="https://store.shopping.yahoo.co.jp/halle-store/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow" id="B4-002"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-b/B4-002.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>秩父 ladderladder</h3><div class="twitter"><a href="https://twitter.com/ladderladder_" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはTシャツを販売。</div><p class="price">2,500</p><div class="link-text"><a href="https://ladderladder.theshop.jp/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price">"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

      </div>
    </div>
  </section>

  <section class="section-wrap" id="B5">
    <div class="inner-wrap">
      <h2>千葉県</h2>
      <div class="clearfix" id="list-B5">

<article class="article-wrap match-height box-shadow new" id="B5-009"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-b/B5-009.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>柏Palooza</h3><div class="twitter"><a href="https://twitter.com/palooza_com" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>クラウドファンディング</h4><div class="mb-1em">クラウドファンディング「柏PALOOZA 存続支援PROJECT」を実施。</div><p class="price">1,000</p><div class="link-text"><a href="https://wefan.jp/crowdfunding/projects/palooza" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow new" id="B5-008"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-b/B5-008.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>柏ALIVE</h3><div class="twitter"><a href="https://twitter.com/kashiwa_alive" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>*物販</h4><div class="mb-1em">グッズはTシャツを販売。</div><p class="price">3,500</p><div class="link-text"><a href="https://livehousealive.stores.jp/" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow new" id="B5-004"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-b/B5-004.jpg" alt="" loading="lazy"></div><section class="project-02"><h3>ライブハウス ルート14</h3><div class="twitter"><a href="https://twitter.com/Route14_live" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はHPをチェック</div><p class="price off"></p><div class="link-text"><a href="https://www.youtube.com/channel/UCNgXJxTyGDKSKt0_Xc2mZog?app=desktop" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4>物販</h4><div class="mb-1em">グッズはTシャツ・トートバッグ等を販売。</div><p class="price">2,000</p><div class="link-text"><a href="https://route14.thebase.in/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow" id="B5-001"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-b/B5-001.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>LIVE HOUSE ALIVE</h3><div class="twitter"><a href="https://twitter.com/kashiwa_alive" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはCream Noise CakesにてTシャツ、ステッカー等販売。</div><p class="price">500</p><div class="link-text"><a href="https://cnoisecakes.official.ec/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price">"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow" id="B5-002"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-b/B5-002.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>LIVE HOUSE ANGA</h3><div class="twitter"><a href="https://twitter.com/livehouseanga" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはTシャツ・投げ銭チケット・ドリンクチケット・トートバッグ等販売。</div><p class="price">500</p><div class="link-text"><a href="https://anga1997.official.ec/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price">"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow" id="B5-003"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-b/B5-003.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>Sound Stream sakura</h3><div class="twitter"><a href="https://twitter.com/sound_sakura" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はURLをチェック。</div><p class="price">550</p><div class="link-text"><a href="https://soundstreamsakura.stores.jp/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price">"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow" id="B5-005"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-b/B5-005.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>新松戸FIREBIRD</h3><div class="twitter"><a href="https://twitter.com/firebird_jp" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はURLをチェック。</div><p class="price">2,000</p><div class="link-text"><a href="https://twitter.com/firebird_jp/status/1254349736036823041?s=20" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price">"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow" id="B5-006"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-b/B5-006.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>DOMe柏</h3><div class="twitter"><a href="https://twitter.com/dome_kashiwa" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>クラウドファンディング</h4><div class="mb-1em">クラウドファンディング「≪音楽スタジオ/ライブハウス廃業危機≫コロナで休業中！緊急事態を救ってください！」実施。</div><p class="price">1,000</p><div class="link-text"><a href="https://camp-fire.jp/projects/252831/preview?token=1ra5cd8m" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price">"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow" id="B5-007"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-b/B5-007.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>本八幡サードステージ</h3><div class="twitter"><a href="https://twitter.com/The3rdStage" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはドリンクチケット・スタジオ個人練習カードを販売。</div><p class="price">4,000</p><div class="link-text"><a href="https://the3rdstage.thebase.in/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price">"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

      </div>
    </div>
  </section>

  <section class="section-wrap" id="B7">
    <div class="inner-wrap">
      <h2>神奈川県</h2>
      <div class="clearfix" id="list-B7">

<article class="article-wrap match-height box-shadow new" id="B7-007"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-b/B7-007.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>横須賀かぼちゃ屋</h3><div class="twitter "><a href="https://twitter.com/pumpkinofficial" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはTシャツを販売。</div><p class="price ">2,750</p><div class="link-text"><a href="https://pumpkinshop.thebase.in/" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.6.2</div></article>

<article class="article-wrap match-height box-shadow" id="B7-005"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-b/B7-005.jpg" alt="" loading="lazy"></div><section class="project-02"><h3>横浜B.B.STREET</h3><div class="twitter"><a href="https://twitter.com/BBSTREET" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>クラウドファンディング</h4><div class="mb-1em">クラウドファンディング【SAVE THE YOKOHAMA B.B.STREET】実施。</div><p class="price">3,000</p><div class="link-text"><a href="https://bbastreet.thebase.in/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はURLをチェック。</div><p class="price off">"></p><div class="link-text"><a href="https://www.bbstreetchannel.com/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.6.2</div></article>

<article class="article-wrap match-height box-shadow new" id="B7-006"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-b/B7-006.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>CLUB CITTA'</h3><div class="twitter"><a href="https://twitter.com/CLUBCITTA_1988" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはあのアーティストも持っている #チッタオル を販売。</div><p class="price">2,000</p><div class="link-text"><a href="https://clubcitta.official.ec" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow" id="B7-001"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-b/B7-001.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>BAYSIS</h3><div class="twitter"><a href="https://twitter.com/BAYSISYOKOHAMA" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはロングTシャツ・ネックストラップ付クージー・ドリンクチケットを販売。</div><p class="price">1,500</p><div class="link-text"><a href="https://baysis.stores.jp/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price">"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow" id="B7-002"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-b/B7-002.jpg" alt="" loading="lazy"></div><section class="project-02"><h3>F.A.D yokohama</h3><div class="twitter"><a href="https://twitter.com/fad_yokohama" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはTシャツ・ロングTシャツ・ショルダートート・ミニサコッシュ・フェイスタオルを販売。</div><p class="price">1,650</p><div class="link-text"><a href="https://grungy-print.shop/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4>クラウドファンディング</h4><div class="mb-1em">クラウドファンディング「F.A.D YOKOHAMA 存続支援プロジェクト」実施。</div><p class="price">3,000</p><div class="link-text"><a href="https://camp-fire.jp/projects/view/261651" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow" id="B7-003"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-b/B7-003.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>LIVE HOUSE 小田原姿麗人</h3><div class="twitter"><a href="https://twitter.com/OdawaraShareido" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはTシャツ・タオル・ドリンクチケット等を販売。</div><p class="price">300</p><div class="link-text"><a href="https://shareido.theshop.jp/categories/2283471" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price">"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow" id="B7-004"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-b/B7-004.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>Thunder Snake ATSUGI</h3><div class="twitter"><a href="https://twitter.com/Thunder_Snake_A" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>クラウドファンディング</h4><div class="mb-1em">クラウドファンディング「ThunderSnakeATSUGI存続の為の支援プロジェクト」実施。</div><p class="price">3,000</p><div class="link-text"><a href="https://camp-fire.jp/projects/253303/preview?token=1n342yh8" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price">"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

      </div>
    </div>
  </section>

  <section class="section-wrap" id="B8">
    <div class="inner-wrap">
      <h2>山梨県</h2>
      <div class="clearfix" id="list-B8">

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