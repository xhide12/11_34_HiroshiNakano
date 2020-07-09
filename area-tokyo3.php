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
    <h2>東京都(新宿)</h2>
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
      <h2>新宿</h2>
      <div class="clearfix">

        <!-- <div id="list"></div> -->

<article class="article-wrap match-height box-shadow new" id="B6-039"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-039.jpg" alt="" loading="lazy"></div><section class="project-02"><h3>新宿red cloth</h3><div class="twitter "><a href="https://twitter.com/red_cloth" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>動画配信</h4><div class="mb-1em">配信の詳しい情報はHPをチェック。</div><p class="price off">0</p><div class="link-text"><a href="https://www.youtube.com/channel/UCdJQDg1P6WygtCoPpCROpWw" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4>物販</h4><div class="mb-1em">グッズはTシャツを販売。</div><p class="price ">3,000</p><div class="link-text"><a href="https://redcloth.thebase.in/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow new" id="B6-032"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-032.jpg" alt="" loading="lazy"></div><section class="project-02"><h3>club SCIENCE</h3><div class="twitter "><a href="https://twitter.com/S_club_SCIENCE" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>クラウドファンディング</h4><div class="mb-1em">クラウドファンディング「最高の遊び場(ライブハウス)を守りたい。 命懸けで作り上げた自分達の居場所【club SCIENCE】を終わらせたくない！」実施。</div><p class="price ">1,000</p><div class="link-text"><a href="https://motion-gallery.net/projects/club_science" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はURLをチェック。</div><p class="price "></p><div class="link-text"><a href="https://www.youtube.com/channel/UC8-NQZlBNTAIarp_H03zRDA" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow new" id="B6-083"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-083.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>新大久保CLUB Voice</h3><div class="twitter"><a href="https://twitter.com/CLUBVoice2002" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>クラウドファンディング「新大久保のライブハウス、CLUB Voiceを存続させたい。」実施。</h4><div class="mb-1em">クラウドファンディング</div><p class="price">2,000</p><div class="link-text"><a href="https://camp-fire.jp/projects/view/257362" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow new" id="B6-086"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-086.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>ライブ&ダイニングバー 音楽室DX</h3><div class="twitter"><a href="https://twitter.com/SatoshiKayama" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはTシャツを販売。</div><p class="price">3,000</p><div class="link-text"><a href="https://ongakushitsu.base.shop/" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow" id="B6-063"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-063.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>新宿Head Power</h3><div class="twitter "><a href="https://twitter.com/HEADPOWER1968" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>その他</h4><div class="mb-1em">無観客配信でのホールレンタルを開始。</div><p class="price off">0</p><div class="link-text"><a href="https://headpower.tokyo/news/#762" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="B6-031"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-031.jpg" alt="" loading="lazy"></div><section class="project-02"><h3>新宿NINE SPICES</h3><div class="twitter "><a href="https://twitter.com/9spices" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はURLをチェック。</div><p class="price off">0</p><div class="link-text"><a href="https://www.youtube.com/watch?v=0Ke0tpPqXYk" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4>物販</h4><div class="mb-1em">グッズはt-shirtsを販売。</div><p class="price ">2,500</p><div class="link-text"><a href="https://rinkylive.thebase.in/items/27721535" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="B6-033"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-033.jpg" alt="" loading="lazy"></div><section class="project-02"><h3>EARTHDOM</h3><div class="twitter "><a href="https://twitter.com/earthdom" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはドリンクチケット・Tシャツ・トートバッグを販売。</div><p class="price ">500</p><div class="link-text"><a href="https://earthdom.thebase.in/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はURLをチェック。</div><p class="price off"></p><div class="link-text"><a href="https://www.youtube.com/channel/UCxytEbTOSH4wjFsrmbUVP7g" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="B6-034"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-034.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>Livehouse WALL</h3><div class="twitter "><a href="https://twitter.com/LIVEHOUSE_WALL" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはTシャツ・手拭い等を販売。</div><p class="price ">500</p><div class="link-text"><a href="https://wallmoonstep.thebase.in/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="B6-035"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-035.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>MELODIA Tokyo</h3><div class="twitter "><a href="https://twitter.com/MELODIATokyo" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはTシャツ・ドリンクチケット等を販売。</div><p class="price ">130</p><div class="link-text"><a href="https://melodiatokyo.base.ec/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="B6-036"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-036.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>NAKED LOFT</h3><div class="twitter "><a href="https://twitter.com/NAKEDLOFT" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはTシャツを販売。</div><p class="price ">2,000</p><div class="link-text"><a href="http://loft.shop-pro.jp/?pid=150597593" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="B6-037"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-037.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>Zirco Tokyo</h3><div class="twitter "><a href="https://twitter.com/ZircoTokyo_Sub" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はHPをチェック。</div><p class="price off">0</p><div class="link-text"><a href="https://www.youtube.com/channel/UCfMlVQEIqwqFZdC8hLgZB8w" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="B6-038"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-038.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>新宿ANTIKNOCK</h3><div class="twitter "><a href="https://twitter.com/antiknock1985" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">Tシャツを販売。</div><p class="price ">4,000</p><div class="link-text"><a href="https://antiknock.official.ec/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

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
      <li><strong>東京都 新宿</strong></li>
    </ul>
    <div class="eplus"><a href="https://eplus.jp/" target="eplus"><img src="https://eplus.jp/s/page/live/images/logo_eplus.png" alt="イープラス"></a></div>
    <p>Copyright eplus inc. All Rights Reserved.</p>
  </div>
</footer>

</body>
</html>