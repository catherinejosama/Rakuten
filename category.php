<html lang="ja">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>Yamagata Goodsのショップサイト【楽天市場】</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">

<link rel="stylesheet" href="css/common.css" media="all">
<link rel="stylesheet" type="text/css" href="slick/slick.css"/>

<style media="screen">

</style>
</head>
<body>

<?php include("header.html") ?>

<!-- 楽天イベントバナーここから -->
<div id="event_bnr">
	<ul class="event_slider">
		<li><a href="#" target="_blank"><img src="https://image.rakuten.co.jp/auc-r1093-kbs/cabinet/06953356/coupon/coupon2.jpg" alt=""></a></li>
		<li><a href="#" target="_blank"><img src="https://image.rakuten.co.jp/auc-r1093-kbs/cabinet/06953356/coupon/coupon1.jpg" alt=""></a></li>
    <li><a href="#" target="_blank"><img src="https://image.rakuten.co.jp/auc-r1093-kbs/cabinet/06953356/coupon/coupon3.jpg" alt=""></a></li>
	</ul>
</div>
<!-- 楽天イベントバナーここまで -->

<!-- #contents -->
<div id="contents">

<!-- #main -->
<div id="main">
	<p><a href="top.html">カテゴリトップ</a> > <a href="#">フルーツ</a> > <a href="#">山形県産「さくらんぼ」</a></p>

	<!-- バナー -->
	<div class="category_banner">

		<!-- Category Bannersー(幅100%) -->
		<ul class="">
			<li><img src="https://image.rakuten.co.jp/auc-r1093-kbs/cabinet/06953356/category/cherries/cherry_banner_1.jpg"></li>
			<li><img src="https://image.rakuten.co.jp/auc-r1093-kbs/cabinet/06953356/category/cherries/cherry_banner_2.jpg"></li>
			<li><img src="https://image.rakuten.co.jp/auc-r1093-kbs/cabinet/06953356/category/cherries/cherry_banner_3.jpg"></li>
		</ul>

		<p>山形の初夏を代表する味覚“さくらんぼ”。<br>
			さくらんぼの生産量日本一を誇る山形から<br>
			さくらんぼの高級品種である“佐藤錦”をお届け致します。<br>
			贈答用からご自宅用まで、様々なタイプをご用意致しました</p>

		<!-- 小さいバナー(横3列) -->
		<ul class="mini">
			<img src="images/categories/cherries/searchresults.jpg">
			<img src="images/categories/cherries/recomend.jpg">
			<img src="https://image.rakuten.co.jp/auc-r1093-kbs/cabinet/06953356/main/ranking.jpg" alt="ranking">
		</ul>

	</div>

</div>
<!-- /#main -->

<?php include("sideNav.html") ?>

</div>
<!-- /#contents -->

<?php include("footer.html") ?>



<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>

<script>
$("document").ready(function(){
  $('.slider').slick({
    autoplay: true,
    autoplaySpeed: 3000,
    speed: 1500,
	centerMode: true,
	variableWidth: true,

	responsive: [{
      breakpoint: 640,
      settings: {
		variableWidth: false,
		centerPadding: '5%'
      }
    }]
  });
});
$("document").ready(function(){
  $('.event_slider').slick({
    autoplay: true,
    autoplaySpeed: 3000,
    speed: 1000,
	centerMode: true,
	variableWidth: true,

	responsive: [{
      breakpoint: 640,
      settings: {
		variableWidth: false,
		centerPadding: '10%'
      }
    }]
  });
});
</script>
</body>
</html>
