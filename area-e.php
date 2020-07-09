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
    <h2>関西</h2>
    <nav>
      <ul>
          <li class="link-text"><a href="#E1" class="link-off">滋賀県</a><span class="count"></span></li>
          <li class="link-text"><a href="#E2">京都府</a><span class="count"></span></li>
          <li class="link-text"><a href="area-osaka.php">大阪府</a><span class="count"></span></li>
          <li class="link-text"><a href="#E4">兵庫県</a><span class="count"></span></li>
          <li class="link-text"><a href="#E5">奈良県</a><span class="count"></span></li>
          <li class="link-text"><a href="#E6">和歌山県</a><span class="count"></span></li>
          <li class="link-text top"><a href="livehouse.php">都道府県一覧へ</a></li>
      </ul>
    </nav>
  </div>
</section>

<div id="livehouse-list">

  <section class="section-wrap" id="E1">
    <div class="inner-wrap">
      <h2>滋賀県</h2>
      <div class="clearfix" id="list-E1">

      </div>
    </div>
  </section>

  <section class="section-wrap" id="E2">
    <div class="inner-wrap">
      <h2>京都府</h2>
      <div class="clearfix" id="list-E2">

<article class="article-wrap match-height box-shadow new" id="E2-010"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-e/E2-010.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>外</h3><div class="twitter "><a href="https://twitter.com/sotokyoto" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">Tシャツ・各種チケットの販売、ドネーションを受け付けています</div><p class="price ">500</p><div class="link-text"><a href="https://soto-kyoto.stores.jp/" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.26</div></article>

<article class="article-wrap match-height box-shadow" id="E2-006"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-e/E2-006.jpg" alt="" loading="lazy"></div><section class="project-02"><h3>祇園SILVER WINGS</h3><div class="twitter"><a href="https://twitter.com/silverwings_822" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はURLをチェック。</div><p class="price">1,000</p><div class="link-text"><a href="https://www.youtube.com/channel/UCZP4gIEmjIVjV60Bphd4K6g" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4>クラウドファンディング</h4><div class="mb-1em">クラウドファンディング「京都祇園SILVER WINGS 存続プロジェクト」実施。</div><p class="price">1,500</p><div class="link-text"><a href="https://camp-fire.jp/projects/view/270792" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.19</div></article>

<article class="article-wrap match-height box-shadow" id="E2-008"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-e/E2-008.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>OCTAVE KYOTO</h3><div class="twitter"><a href="https://twitter.com/octavekyoto" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>クラウドファンディング</h4><div class="mb-1em">クラウドファンディング「ONE LOVE OCTAVE」実施。</div><p class="price">1,000</p><div class="link-text"><a href="https://camp-fire.jp/projects/view/254803" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.12</div></article>

<article class="article-wrap match-height box-shadow" id="E2-009"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-e/E2-009.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>都雅都雅</h3><div class="twitter"><a href="https://twitter.com/h2labo" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>クラウドファンディング</h4><div class="mb-1em">クラウドファンディング「京都　都雅都雅　支援プロジェクト」実施。</div><p class="price">2,000</p><div class="link-text"><a href="https://camp-fire.jp/projects/view/265155" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.12</div></article>

<article class="article-wrap match-height box-shadow" id="E2-001"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-e/E2-001.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>LIVE HOUSE ARCDEUX</h3><div class="twitter"><a href="https://twitter.com/KYOTO_ARCDEUX" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>その他</h4><div class="mb-1em">ARCDEUX存続の為、寄付を募っています。</div><p class="price">5,000</p><div class="link-text"><a href="http://arcdeux.net/onegai/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="E2-002"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-e/E2-002.jpg" alt="" loading="lazy"></div><section class="project-03"><h3>live house nano</h3><div class="twitter"><a href="https://twitter.com/mogura_nano" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはTシャツ・ドリンクチケット等を販売。</div><p class="price">500</p><div class="link-text"><a href="https://livehouse.thebase.in/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はURLをチェック。</div><p class="price off"></p><div class="link-text"><a href="https://www.youtube.com/channel/UCV904VJscUg3jr9guSXf_-w" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4>その他</h4><div class="mb-1em">専用サイト、スマホアプリを利用した投げ銭しシステム実施。</div><p class="price">1</p><div class="link-text"><a href="http://livehouse-nano.com/streaming.html" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="E2-003"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-e/E2-003.jpg" alt="" loading="lazy"></div><section class="project-02"><h3>someno kyoto</h3><div class="twitter"><a href="https://twitter.com/somenokyoto" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>クラウドファンディング</h4><div class="mb-1em">クラウドファンディング「アコースティック専門ライブハウス「someno kyoto」存続支援プロジェクト」実施。</div><p class="price">1,100</p><div class="link-text"><a href="https://camp-fire.jp/projects/259156/preview?token=2k5g603r" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はURLをチェック。</div><p class="price off"></p><div class="link-text"><a href="https://www.youtube.com/channel/UCXsJQNeQnzdVdi3nFSpxo1g?view_as=subscriber" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="E2-004"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-e/E2-004.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>WORLD KYOTO</h3><div class="twitter off" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>クラウドファンディング</h4><div class="mb-1em">クラウドファンディング「SAVE THE WORLD KYOTO [ワールド京都 営業活動支援] WORLD KYOTO 音楽」実施。</div><p class="price">2,000</p><div class="link-text"><a href="https://camp-fire.jp/projects/view/254601" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="E2-005"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-e/E2-005.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>ライブハウス磔磔</h3><div class="twitter"><a href="https://twitter.com/kyoto_takutaku" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはドリンクチケット・Tシャツ・トートバッグを販売。</div><p class="price">3,500</p><div class="link-text"><a href="https://takutaku1974.thebase.in/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="E2-007"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-e/E2-007.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>京都CLUB METRO</h3><div class="twitter"><a href="https://twitter.com/metro_kyoto" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>クラウドファンディング</h4><div class="mb-1em">クラウドファンディング「【SAVE THE METRO】 京都クラブメトロの存続の為の支援プロジェクト」実施。</div><p class="price">2,000</p><div class="link-text"><a href="https://camp-fire.jp/projects/view/255131" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

      </div>
    </div>
  </section>

  <section class="section-wrap" id="E4">
    <div class="inner-wrap">
      <h2>兵庫県</h2>
      <div class="clearfix" id="list-E4">

<article class="article-wrap match-height box-shadow new" id="E4-004"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-e/E4-004.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>神戸VARIT.</h3><div class="twitter "><a href="https://twitter.com/kobe_varit" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>その他</h4><div class="mb-1em">オムニバスアルバム『さいきん、どうよう？』を配信。</div><p class="price off"></p><div class="link-text"><a href="https://linkco.re/VCMYmfaR" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.6.2</div></article>

<article class="article-wrap match-height box-shadow" id="E4-003"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-e/E4-003.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>KOBE LIVE SPOT BIG APPLE</h3><div class="twitter off"><a href="https://twitter.com/*TwitterID*" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>クラウドファンディング</h4><div class="mb-1em">グッズはオリジナルバッグ、Tシャツを販売。30年間、唯一無二の音楽が生まれ続けたBIGAPPLEを応援するプロジェクト。</div><p class="price">1,500</p><div class="link-text"><a href="https://pinkumix.net/bigapple/" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.12</div></article>

<article class="article-wrap match-height box-shadow" id="E4-001"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-e/E4-001.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>尼崎Scope</h3><div class="twitter"><a href="https://twitter.com/amagasaki_scope" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>クラウドファンディング</h4><div class="mb-1em">クラウドファンディング「イベント自粛要請で運営危機に陥っているライブハウス『尼崎Scope』を守りたい」実施。</div><p class="price">1,000</p><div class="link-text"><a href="https://camp-fire.jp/projects/view/243649" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="E4-002"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-e/E4-002.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>尼崎tora</h3><div class="twitter"><a href="https://twitter.com/ProjectSannwa" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>その他</h4><div class="mb-1em">好評のtoraカレーや豚キムチにSABOTENMUSICのコンピCDを付けて、家庭まで宅配！</div><p class="price">850</p><div class="link-text"><a href="http://live-tora.com/delivery" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

      </div>
    </div>
  </section>

  <section class="section-wrap" id="E5">
    <div class="inner-wrap">
      <h2>奈良県</h2>
      <div class="clearfix" id="list-E5">

<article class="article-wrap match-height box-shadow new" id="E5-001"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-e/E5-001.jpg" alt="" loading="lazy"></div><section class="project-02"><h3>ビバリーヒルズ</h3><div class="twitter"><a href="https://twitter.com/narabeverly" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>その他</h4><div class="mb-1em">ランチテイクアウト</div><p class="price">800</p><div class="link-text"><a href="https://twitter.com/narabeverly/status/1252396819545337856?s=20" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4>物販</h4><div class="mb-1em">「義援Tシャツ」</div><p class="price">5,000</p><div class="link-text"><a href="https://flower6.jp/gien/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="E5-002"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-e/E5-002.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>奈良ネバーランド</h3><div class="twitter"><a href="https://twitter.com/NARANEVERLAND" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはドリンクチケット・ラグランTシャツ等を販売。</div><p class="price">200</p><div class="link-text"><a href="https://lhneverland.thebase.in/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

      </div>
    </div>
  </section>

  <section class="section-wrap" id="E6">
    <div class="inner-wrap">
      <h2>和歌山県</h2>
      <div class="clearfix" id="list-E6">

<article class="article-wrap match-height box-shadow" id="E6-001"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-e/E6-001.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>和歌山 CLUB GATE</h3><div class="twitter"><a href="https://twitter.com/GATE_WAKAYAMA" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はURLをチェック。</div><p class="price off"></p><div class="link-text"><a href="https://www.youtube.com/channel/UCMaTyGKvoAktSkkKmu3RS1w" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

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