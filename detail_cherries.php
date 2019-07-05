<html lang="ja">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>Yamagata Goodsのショップサイト【楽天市場】</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">

<link rel="stylesheet" href="css/common.css" media="all">
<link rel="stylesheet" href="css/detail.css">
<link rel="stylesheet" type="text/css" href="slick/slick.css"/>

<style media="screen">

</style>
</head>
<body>

<?php include("header.html") ?>

<!-- Pictures under the top nav -->
<div class="detail_osusume">
	<img src="images/detail/1.jpg" alt="cherries">
	<img src="images/detail/2-1.jpg" alt="cantalope">
	<img src="images/detail/2.jpg" alt="edamame">
	<img src="images/detail/3.jpg" alt="peaches">
</div>

<!-- 楽天イベントバナーここから -->
<!-- <div id="event_bnr">
	<ul class="event_slider">
		<li><a href="#" target="_blank"><img src="https://image.rakuten.co.jp/auc-r1093-kbs/cabinet/06953356/coupon/coupon2.jpg" alt=""></a></li>
		<li><a href="#" target="_blank"><img src="https://image.rakuten.co.jp/auc-r1093-kbs/cabinet/06953356/coupon/coupon1.jpg" alt=""></a></li>
    <li><a href="#" target="_blank"><img src="https://image.rakuten.co.jp/auc-r1093-kbs/cabinet/06953356/coupon/coupon3.jpg" alt=""></a></li>
	</ul>
</div> -->
<!-- 楽天イベントバナーここまで -->

<!-- #contents -->
<div id="contents">

<!-- #main -->
<div id="main">
	<p class="detail_main">フルーツ王国やまがたから初夏の味覚をお届けします！<br>
	<span style="color:red;">山形県東根産さくらんぼ(佐藤錦)<br>
	手並べ(鏡詰め)　500g</span></p>

	<!-- Detailed Informationー -->
	<div class="detail_banner">

		<img src="images/detail/cherry/cherry_banner.jpg">

		<p>手並べ(鏡詰め)とは・・・<br>
			鏡詰めは、通常の手詰めとは異なり、化粧箱の中に間仕切りなしの状態で、さくらんぼの粒の大きさと色も均一の厳選した物だけを使用し形が崩れないよう、一つ一つ手作業にて化粧箱に詰めていきますので、通常よりも手間暇が掛かります。<br>
			この作業には、熟練の技を要し、近年ではごく一部の農家さんでしか作れないとされているため希少価値もあり、しかも贈答用に詰めるさくらんぼの中では一番見栄えがする詰め方になります。
			</p>

		<p><img src="images/detail/cherry/info.jpg"></p>

		<p>●産地直送のため、他の商品との同梱は出来ません。　●配送日指定不可　●発送は６月下旬頃からご予約順で配送となります。(天候・気温・収穫状況により発送が前後する場合がございます)　●翌日配達可能地域でも、お届け希望時間帯によっては、、翌々日のお届けとなる場合もございます。　(特にご指定の無いお客様に関しましては、最短でお届けできるようご手配をしております)　●発送形態は、クール便になります。　●お客様のご都合や長期ご不在による配達センターでの保存によって傷みが発生した場合の返品・交換の対応は出来かねますのでご了承ください。　●発送間近のご注文のキャンセル、配送のご変更は承れない場合がございます。よくご確認のうえご利用いただきますよう、よろしくお願い致します。　●お届け後はすぐにサクランボの商品状態をご確認下さい。食べられない程の潰れや傷みがある場合にはすぐにメール、お電話にてご連絡下さい。生ものとなっておりますので、商品の保管期間はお届け日当日までとさせて頂きます。それ以降にご連絡いただいた場合の保証は致しかねます。</p>
	</div>

	<div class="item_description">
		<table>
			<tr>
				<td>
					<div class="item_description_images">
						<img src="images/detail/cherry/cherry1.jpg">
						<img src="images/detail/cherry/cherry2.jpg">
						<img src="images/detail/cherry/cherry3.jpg">
					</div>
				</td>
				<td>
					<div class="item_description_text">
						<h5>果樹農家直送！<br>
							さくらんぼ(佐藤錦)手並べ(鏡詰め) 500g 山形県東根産 送料無料【 山形県産 産地直送 朝取り 贈答用 贈り物 ギフト お中元 東根さくらんぼ GI認定 】
						</h5>
						<img src="images/detail/cherry/buying.jpg">
					</div>
				</td>
			</tr>
		</table>



	</div>

	<div class="detail_cherry_ichiran">
		<p>山形県東根産さくらんぼ一覧</p>
		<img src="images/detail/cherry/ichiran.jpg">
	</div>

	<div class="">
		<img src="images/detail/cherry/recommend.jpg">
		<img src="images/index/ranking.jpg">
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
