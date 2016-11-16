<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>当店案内 - タンタンメン本舗</title>
	<?php echo Asset::css('pc/common.css'); ?>
	<?php echo Asset::css('pc/guide.css'); ?>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDNec7O3yCFpIdsHK5rOVU4HRqiwikjrwU&callback=initMap&language=ja"></script>
	<?php echo Asset::js('pc/common.js'); ?>
	<?php echo Asset::js('pc/guide.js'); ?>
</script>
</head>
<body class="body-common">
	<?php echo $header; ?>
	<div class="body-area">
		<div class="main-area">
			<div class="main-article">
				<h2>当店案内</h2>
				<table class="main-article-table" padding="0">
					<tr>
						<th>店名</th>
						<td>タンタンメン本舗</td>
					</tr>
					<tr>
						<th>電話番号</th>
						<td>045-294-9045</td>
					</tr>
					<tr>
						<th>住所</th>
						<td>〒231-0057<br/>神奈川県横浜市中区曙町3丁目44-2<br/><a id="map-link" href="#map">地図で確認</a></td>
					</tr>
					<tr>
						<th>アクセス</th>
						<td>
							京浜急行黄金町駅から　徒歩6分<br/>
							横浜市営地下鉄阪東橋駅から　徒歩５分<br/>
							鎌倉街道沿い、横浜橋バス停近く<br/>
							阪東橋から 260 米<br/>
						</td>
					</tr>
					<tr>
						<th>営業時間</th>
						<td></td>
					</tr>
					<tr>
						<th>定休日</th>
						<td>無定休</td>
					</tr>
				</table>
				<div id="map"></div>
			</div>
		</div>
		<?php echo $sidebar; ?>
	</div>
</body>
</html>