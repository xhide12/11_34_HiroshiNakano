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
    <h2>東京都(下北沢)</h2>
    <nav>
      <ul>
        <li class="link-text"><a href="area-tokyo1.php">下北沢</a><span class="count"></span></li>
        <li class="link-text"><a href="area-tokyo2.php">渋谷</a><span class="count"></span></li>
        <li class="link-text"><a href="area-tokyo3.php">新宿</a><span class="count"></span></li>
        <li class="link-text"><a href="area-tokyo4.php">池袋</a><span class="count"></span></li>
        <li class="link-text"><a href="area-tokyo5.php">吉祥寺</a><span class="count"></span></li>
        <li class="link-text"><a href="area-tokyo6.php">その他エリア</a><span class="count"></span></li>
        <li class="link-text top"><a href="livehouse.php">都道府県一覧へ</a></li>
      </ul>
    </nav>
  </div>
</section>

<div id="livehouse-list">

  <section class="section-wrap">
    <div class="inner-wrap">
      <h2>下北沢</h2>
      <div class="clearfix">

        <!-- <div id="list"></div> -->

<article class="article-wrap match-height box-shadow new" id="B6-097"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-097.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>LIVE HAUS</h3><div class="twitter "><a href="https://twitter.com/LIVEHAUS_" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>クラウドファンディング</h4><div class="mb-1em">クラウドファンディング「開かずのライブハウス LIVEHAUSを救え。救済者の名前を刻むプロジェクト」実施。</div><p class="price ">5,000</p><div class="link-text"><a href="https://camp-fire.jp/projects/view/279747" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.6.2</div></article>

<article class="article-wrap match-height box-shadow new" id="B6-011"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-011.jpg" alt="" loading="lazy"></div><section class="project-03"><h3>下北沢MOSAiC</h3><div class="twitter "><a href="https://twitter.com/LiveHouseMOSAiC" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no3"><h4>クラウドファンディング</h4><div class="mb-1em">クラウドファンディング「下北沢MOSAiC存続プロジェクト - リベンジフェスに向かって -」実施。</div><p class="price">1,500</p><div class="link-text"><a href="https://camp-fire.jp/projects/view/275689" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4>物販</h4><div class="mb-1em">グッズはMOSAiCオリジナルデザインTシャツ20種類以上を販売。</div><p class="price ">2,580</p><div class="link-text"><a href="https://suzuri.jp/shimokitazawa_mosaic" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4>物販</h4><div class="mb-1em">グッズはドリンクチケットを販売。</div><p class="price ">900</p><div class="link-text"><a href="https://mosaic.base.shop/" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow new" id="B6-095"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-095.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>Com.cafe音倉</h3><div class="twitter "><a href="https://twitter.com/comcafeotokura" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>クラウドファンディング</h4><div class="mb-1em">クラウドファンディング「アーティストの未来をひらく ～下北沢のコミュニティ＆ライブカフェ音倉を再生したい！」を実施中（5/29まで）</div><p class="price ">1,000</p><div class="link-text"><a href="https://motion-gallery.net/projects/otokura_phoenix" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.22</div></article>

<article class="article-wrap match-height box-shadow new" id="B6-007"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-007.jpg" alt="" loading="lazy"></div><section class="project-02"><h3>下北沢DaisyBar</h3><div class="twitter "><a href="https://twitter.com/daisybar_Tokyo" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はURLをチェック。</div><p class="price off">*金額1*</p><div class="link-text"><a href="https://www.youtube.com/channel/UCPP1fVecDVVl5Vp8kqtVq-A" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4>物販</h4><div class="mb-1em">グッズはTシャツ・ラバーバンドを販売。</div><p class="price ">1,000</p><div class="link-text"><a href="https://daisybar.stores.jp" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.19</div></article>

<article class="article-wrap match-height box-shadow new" id="B6-012"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-012.jpg" alt="" loading="lazy"></div><section class="project-02"><h3>下北沢RéG</h3><div class="twitter "><a href="https://twitter.com/skz_reg" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズは支援ステッカーを販売。</div><p class="price ">1,000</p><div class="link-text"><a href="https://skzreg.official.ec/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はURLをチェック。</div><p class="price off"></p><div class="link-text"><a href="https://www.youtube.com/channel/UC9ZYdLK8qxh8K4SKWzmU-0g?app=desktop" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.19</div></article>

<article class="article-wrap match-height box-shadow new" id="B6-013"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-013.jpg" alt="" loading="lazy"></div><section class="project-02"><h3>下北沢WAVER</h3><div class="twitter "><a href="https://twitter.com/livehousewaver" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はURLをチェック。</div><p class="price off">0</p><div class="link-text"><a href="https://www.youtube.com/channel/UCdhlkR1GpFy6r3TKlc4VwZQ" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4>クラウドファンディング</h4><div class="mb-1em">クラウドファンディング「下北沢WAVER存続支援プロジェクト～火の車からの脱出～」を実施。</div><p class="price ">500</p><div class="link-text"><a href="https://camp-fire.jp/projects/view/270649" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.19</div></article>

<article class="article-wrap match-height box-shadow" id="B6-001"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-001.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>Flowers Loft</h3><div class="twitter "><a href="https://twitter.com/Flowers_Loft" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">Rooftop休刊号（2020年4月号）＋選べるバックナンバー2冊＋ドリンクチケット販売。</div><p class="price ">1000</p><div class="link-text"><a href="http://loft.shop-pro.jp/?pid=150291849" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="B6-002"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-002.jpg" alt="" loading="lazy"></div><section class="project-02"><h3>LIVE HOUSE FEVER</h3><div class="twitter "><a href="https://twitter.com/livehouse_fever" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はURLをチェック。</div><p class="price off">0</p><div class="link-text"><a href="https://www.youtube.com/user/LIVEHOUSEFEVER?app=desktop" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4>物販</h4><div class="mb-1em">グッズはTシャツ・LONG Tシャツ・Cotton バッグ・Drip Bagを販売。</div><p class="price ">2,500</p><div class="link-text"><a href="https://fever.base.shop/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="B6-003"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-003.jpg" alt="" loading="lazy"></div><section class="project-02"><h3>shimokitazawa THREE</h3><div class="twitter "><a href="https://twitter.com/shimokita_THREE" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>その他</h4><div class="mb-1em">DIGITAL CONTENTSを取扱っている。</div><p class="price ">500</p><div class="link-text"><a href="https://store.toos.co.jp/collections/basementbar-three" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4>物販</h4><div class="mb-1em">グッズは缶バッジ4個セット・HREE T shirt 2020version・shimokitazawa THREE 1st anniversary Tシャツ復刻版・STAY MUSIC ロックグラスを販売。</div><p class="price ">1,200</p><div class="link-text"><a href="https://store.toos.co.jp/collections/three" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="B6-004"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-004.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>下北沢440</h3><div class="twitter "><a href="https://twitter.com/440_17th" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはドリンクチケット・Tシャツ を販売。</div><p class="price ">2,800</p><div class="link-text"><a href="https://cotocshop.base.shop/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="B6-005"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-005.jpg" alt="" loading="lazy"></div><section class="project-02"><h3>下北沢BASEMENTBAR</h3><div class="twitter "><a href="https://twitter.com/BASEMENTxBAR" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはTシャツ/ポーチ・キーホルダー・グラスを販売。</div><p class="price ">800</p><div class="link-text"><a href="https://store.toos.co.jp/collections/basementbar" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4>その他</h4><div class="mb-1em">DIGITAL CONTENTSを取扱っている。</div><p class="price">500</p><div class="link-text"><a href="https://store.toos.co.jp/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="B6-006"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-006.jpg" alt="" loading="lazy"></div><section class="project-02"><h3>下北沢CLUB251</h3><div class="twitter "><a href="https://twitter.com/CLUB251official" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はURLをチェック。</div><p class="price off">0</p><div class="link-text"><a href="https://www.youtube.com/channel/UCCdpBEfUpfJFiTms8sKeaxg" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4>物販</h4><div class="mb-1em">グッズはドリンクチケット・Tシャツを販売。</div><p class="price ">2,800</p><div class="link-text"><a href="https://cotocshop.base.shop/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>
<!-- 
<article class="article-wrap match-height box-shadow" id="B6-007"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-007.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>下北沢Daisybar</h3><div class="twitter "><a href="https://twitter.com/daisybar_Tokyo" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはTシャツを販売。</div><p class="price ">2,200</p><div class="link-text"><a href="https://2dkrecords.thebase.in/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>
 -->
<article class="article-wrap match-height box-shadow" id="B6-008"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-008.jpg" alt="" loading="lazy"></div><section class="project-02"><h3>下北沢ERA</h3><div class="twitter "><a href="https://twitter.com/RDS_ERA" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はURLをチェック。</div><p class="price off">1,200</p><div class="link-text"><a href="https://www.youtube.com/channel/UCGfiLFQKX34Ea50_P6xUzBA" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4>物販</h4><div class="mb-1em">グッズはドリンクチケットを販売。</div><p class="price ">2,500</p><div class="link-text"><a href="https://rinkylive.thebase.in/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="B6-009"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-009.jpg" alt="" loading="lazy"></div><section class="project-02"><h3>下北沢HALF</h3><div class="twitter "><a href="https://twitter.com/HALF_toos" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはTシャツ・ハンカチを販売</div><p class="price ">1,500</p><div class="link-text"><a href="https://store.toos.co.jp/collections/half" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はURLをチェック。</div><p class="price off"></p><div class="link-text"><a href="https://www.youtube.com/channel/UCzAtz8axCQ7Qvcyl6HfzvXw" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="B6-010"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-010.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>下北沢Laguna</h3><div class="twitter "><a href="https://twitter.com/Lagunashimokita" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はURLをチェック。</div><p class="price off">0</p><div class="link-text"><a href="https://twitcasting.tv/c:laguna_shimokita/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="B6-014"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-014.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>下北沢ろくでもない夜</h3><div class="twitter "><a href="https://twitter.com/69demonai46" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはコースター・Tシャツを販売。</div><p class="price ">500</p><div class="link-text"><a href="https://69demonai46.thebase.in/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="B6-015"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-015.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>下北沢 近松</h3><div class="twitter "><a href="https://twitter.com/chikamatsu527" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはコースター・Tシャツ・ロンTを販売。</div><p class="price ">400</p><div class="link-text"><a href="https://chikamatsush.thebase.in/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="B6-016"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-016.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>新代田crossing</h3><div class="twitter "><a href="https://twitter.com/LiveBarcrossing" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はURLをチェック。</div><p class="price off">0</p><div class="link-text"><a href="https://www.youtube.com/channel/UCd5bj_nFL1WhP_wdFojf67Q" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

      </div>
    </div>
  </section>

  <div id="clone"></div>

</div>

<div class="link-button"><a href="post.html">掲載希望はこちら</a></div>
<div class="page_top"><a href="#top" class="square">ページTOP</a></div>

<footer class="section-wrap" id="footer">
  <div class="inner-wrap">
    <ul class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
      <li itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem"><a href="https://eplus.jp/" itemprop="item"><span itemprop="name">TOP</span><meta itemprop="position" content="1"></a></li>
      <li itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem"><a href="https://eplus.jp/sf/live" itemprop="item"><span itemprop="name">ライブ・コンサート</span><meta itemprop="position" content="2"></a></li>
      <li itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem"><a href="https://eplus.jp/sf/live/livehouse_support" itemprop="item"><span itemprop="name">ライブハウス支援まとめ</span><meta itemprop="position" content="3"></a></li>
      <li itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem"><a href="livehouse.html" itemprop="item"><span itemprop="name">ライブハウス個別の取り組み</span><meta itemprop="position" content="4"></a></li>
      <li><strong>東京都 下北沢</strong></li>
    </ul>
    <div class="eplus"><a href="https://eplus.jp/" target="eplus"><img src="https://eplus.jp/s/page/live/images/logo_eplus.png" alt="イープラス"></a></div>
    <p>Copyright eplus inc. All Rights Reserved.</p>
  </div>
</footer>

</body>
</html>