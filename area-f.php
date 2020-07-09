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
    <h2>中国・四国</h2>
    <nav>
      <ul>
        <li class="link-text"><a href="#F1" class="link-off">鳥取県</a><span class="count"></span></li>
        <li class="link-text"><a href="#F2">島根県</a><span class="count"></span></li>
        <li class="link-text"><a href="#F3">岡山県</a><span class="count"></span></li>
        <li class="link-text"><a href="#F4">広島県</a><span class="count"></span></li>
        <li class="link-text"><a href="#F5">山口県</a><span class="count"></span></li>
        <li class="link-text"><a href="#F6" class="link-off">徳島県</a><span class="count"></span></li>
        <li class="link-text"><a href="#F7">香川県</a><span class="count"></span></li>
        <li class="link-text"><a href="#F8">愛媛県</a><span class="count"></span></li>
        <li class="link-text"><a href="#F9">高知県</a><span class="count"></span></li>
        <li class="link-text top"><a href="livehouse.php">都道府県一覧へ</a></li>
      </ul>
    </nav>
  </div>
</section>

<div id="livehouse-list">

  <section class="section-wrap" id="F1">
    <div class="inner-wrap">
      <h2>鳥取県</h2>
      <div class="clearfix" id="list-F1">

      </div>
    </div>
  </section>

  <section class="section-wrap" id="F2">
    <div class="inner-wrap">
      <h2>島根県</h2>
      <div class="clearfix" id="list-F2">

<article class="article-wrap match-height box-shadow" id="F2-001"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-f/F2-001.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>ライブハウス＆スタジオ アポロ</h3><div class="twitter"><a href="https://twitter.com/IZUMO_APOLLO" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはTシャツ・ステッカーを販売。</div><p class="price">1,000</p><div class="link-text"><a href="https://its-time.localinfo.jp/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

      </div>
    </div>
  </section>

  <section class="section-wrap" id="F3">
    <div class="inner-wrap">
      <h2>岡山県</h2>
      <div class="clearfix" id="list-F3">

<article class="article-wrap match-height box-shadow new" id="F3-004"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-f/F3-004.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>LIVEHOUSE image</h3><div class="twitter"><a href="https://twitter.com/image_okayama" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>クラウドファンディング</h4><div class="mb-1em">クラウドファンディング『HOLD ON TO THE MUSIC』を実施。</div><p class="price">2,000</p><div class="link-text"><a href="https://camp-fire.jp/projects/view/272570" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow" id="F3-001"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-f/F3-001.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>YEBISU YA PRO</h3><div class="twitter"><a href="https://twitter.com/YEBISU_YA_PRO" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>クラウドファンディング</h4><div class="mb-1em">クラウドファンディング「岡山 YEBISU YA PRO 支援プロジェクト」実施。</div><p class="price">3,000</p><div class="link-text"><a href="https://camp-fire.jp/projects/view/260864" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow" id="F3-002"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-f/F3-002.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>デスペラード</h3><div class="twitter"><a href="https://twitter.com/Desperado_ok" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはTシャツを販売。</div><p class="price">2,000</p><div class="link-text"><a href="https://twitter.com/Desperado_ok/status/1253644480319590402" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow" id="F3-003"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-f/F3-003.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>倉敷REDBOX</h3><div class="twitter"><a href="https://twitter.com/redbox_ks" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはドリンクチケット付きパスを販売。</div><p class="price">1,000</p><div class="link-text"><a href="https://twitter.com/redbox_ks/status/1251450741257957376?s=20" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

      </div>
    </div>
  </section>

  <section class="section-wrap" id="F4">
    <div class="inner-wrap">
      <h2>広島県</h2>
      <div class="clearfix" id="list-F4">

<article class="article-wrap match-height box-shadow" id="F4-001"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-f/F4-001.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>セカンド・クラッチ</h3><div class="twitter"><a href="https://twitter.com/secondcrutch" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはTシャツを販売。</div><p class="price">3,800</p><div class="link-text"><a href="https://secondcrutch.thebase.in/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow" id="F4-002"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-f/F4-002.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>福山Cable</h3><div class="twitter"><a href="https://twitter.com/ca_ble" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>クラウドファンディング</h4><div class="mb-1em">クラウドファンディング「福山Cable存続ご支援依頼プロジェクト」実施。</div><p class="price">1,500</p><div class="link-text"><a href="https://camp-fire.jp/projects/view/254800" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

      </div>
    </div>
  </section>

  <section class="section-wrap" id="F5">
    <div class="inner-wrap">
      <h2>山口県</h2>
      <div class="clearfix" id="list-F5">

<article class="article-wrap match-height box-shadow new" id="F5-003"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-f/F5-003.jpg" alt="" loading="lazy"></div><section class="project-02"><h3>岩国ロックカントリー</h3><div class="twitter"><a href="https://twitter.com/Iwakuni_RC" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはトートバック・Tシャツを販売。</div><p class="price">2,000</p><div class="link-text"><a href="https://rockcountry.thebase.in/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はURLをチェック。</div><p class="price off"></p><div class="link-text"><a href="https://www.youtube.com/channel/UCD_gBYOH_YWtnJMn_quhKYQ" target="_blank">詳細はこちら</a></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow" id="F5-001"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-f/F5-001.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>RISING HALL / LIVE rise</h3><div class="twitter off" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズは【SPECIAL CREW】パス型ステッカー＆バッジ セット・RISINGHALL × LIVE rise充電タオル・RISINGHALL × LIVE rise スタッフステッカーを販売。</div><p class="price">500</p><div class="link-text"><a href="https://riserising.base.shop/" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow" id="F5-002"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-f/F5-002.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>RISING HALL / LIVE rise</h3><div class="twitter off" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はURLをチェック。</div><p class="price off"></p><div class="link-text"><a href="https://www.youtube.com/channel/UCzjTjkDrNPVHQHbYRtTuJLg" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

      </div>
    </div>
  </section>

  <section class="section-wrap" id="F6">
    <div class="inner-wrap">
      <h2>徳島県</h2>
      <div class="clearfix" id="list-F6">

      </div>
    </div>
  </section>

  <section class="section-wrap" id="F7">
    <div class="inner-wrap">
      <h2>香川県</h2>
      <div class="clearfix" id="list-F7">

<article class="article-wrap match-height box-shadow" id="F7-001"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-f/F7-001.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>高松MONSTER</h3><div class="twitter"><a href="https://twitter.com/tkmt_MONSTER" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>クラウドファンディング</h4><div class="mb-1em">クラウドファンディング「ライブハウス 高松MONSTER 存続支援プロジェクト」実施。</div><p class="price">2,000</p><div class="link-text"><a href="https://camp-fire.jp/projects/view/256644" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow" id="F7-002"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-f/F7-002.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>高松TOONICE</h3><div class="twitter"><a href="https://twitter.com/Impulserecords" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはステッカー・缶バッジ・トートバック・Tシャツを販売。</div><p class="price">200</p><div class="link-text"><a href="https://ikawa005.stores.jp/" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

      </div>
    </div>
  </section>

  <section class="section-wrap" id="F8">
    <div class="inner-wrap">
      <h2>愛媛県</h2>
      <div class="clearfix" id="list-F8">

<article class="article-wrap match-height box-shadow" id="F8-001"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-f/F8-001.jpg" alt="" loading="lazy"></div><section class="project-02"><h3>松山SALONKITTY</h3><div class="twitter"><a href="https://twitter.com/salonkitty_myc" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>クラウドファンディング</h4><div class="mb-1em">クラウドファンディング「松山サロンキティ経営支援プロジェクト「プリーズヘルプミー」」実施。</div><p class="price">1,000</p><div class="link-text"><a href="https://camp-fire.jp/projects/view/260659" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4>動画配信</h4><div class="mb-1em">配信の詳しい情報はHPをチェック。</div><p class="price off"></p><div class="link-text"><a href="https://www.youtube.com/channel/UCdn51clBNBgzc1OgoaSRnbw" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

      </div>
    </div>
  </section>

  <section class="section-wrap" id="F9">
    <div class="inner-wrap">
      <h2>高知県</h2>
      <div class="clearfix" id="list-F9">

<article class="article-wrap match-height box-shadow new" id="F9-001"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-f/F9-001.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>Cafe' de Blue</h3><div class="twitter"><a href="https://twitter.com/bluenozzy" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>クラウドファンディング</h4><div class="mb-1em">クラウドファンディング「高知Cafe'de Blue支援プロジェクト」を実施</div><p class="price">2,000</p><div class="link-text"><a href="https://camp-fire.jp/projects/view/274278" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

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
      <li><strong>中国・四国</strong></li>
    </ul>
    <div class="eplus"><a href="https://eplus.jp/" target="eplus"><img src="https://eplus.jp/s/page/live/images/logo_eplus.png" alt="イープラス"></a></div>
    <p>Copyright eplus inc. All Rights Reserved.</p>
  </div>
</footer>

</body>
</html>