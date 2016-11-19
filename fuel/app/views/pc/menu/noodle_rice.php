<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>麺類・ご飯類 - タンタンメン本舗</title>
	<meta name="description" content="麺類、ご飯類メニューの一覧です。タンタンメン本舗は神奈川県横浜市坂東橋近くのタンタンメン専門店です。">
	<meta name="keywords" content="タンタンメン本舗,メニュー,麺類,ご飯類,麺類 ご飯類">
	<link rel="canonical" href="http://tantanmen-honpo.jp/menu/noodle_rice/">
	<?php echo Asset::css('pc/common.css'); ?>
	<?php echo Asset::css('pc/menu.css'); ?>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
	<?php echo Asset::js('pc/common.js'); ?>
</head>
<body class="body-common">
	<?php echo $header; ?>
	<div class="body-area">
		<div class="main-area">
			<div class="main-image"><?php echo Asset::img('menu/banner/banner-tantanmen.jpg');?></a></div>
			<div class="main-article">
				<div class="main-article-title">麺類</div>
				<div class="main-article-subtitle">タンタンメン</div>
				<div>
					<ul class="list-noodle_rice">
						<?php foreach ($tantanmen_list as $tantanmen) : ?>
						<li>
							<div class="div-img">
								<?php 
									try {
										echo Asset::img('menu/product/img_p' . $tantanmen->id . '.jpg');
									} catch(Exception $e) {
										echo Asset::img('system/img_product_nofound.jpg');
									}
								?>
							</div>
							<div class="div-info">
								<div class="div-title"><?php echo $tantanmen->name; ?></div>
								<div class="div-price"><span class="price"><?php echo $tantanmen->price; ?></span>円</div>
							</div>
						</li>
						<?php endforeach; ?>
					</ul>
				</div>
				<div class="div-kara-select">
					<div class="div-title">お好みの辛さもご指定できます</div>
					<ul class="list-select">
						<li class="honnori">ほんのり</li>
						<li class="futsu">普通</li>
						<li class="chukara">中辛</li>
						<li class="okara">大辛</li>
						<li class="mechakara">メッチャ辛</li>
					</ul>
				</div>
				<div class="main-article-subtitle">その他の麺類</div>
				<div>
					<ul class="list-noodle_rice">
						<?php foreach ($noodle_list as $noodle) : ?>
						<li>
							<div class="div-img">
								<?php 
									try {
										echo Asset::img('menu/product/img_p' . $noodle->id . '.jpg');
									} catch(Exception $e) {
										echo Asset::img('system/img_product_nofound.jpg');
									}
								?>
							</div>
							<div class="div-info">
								<div class="div-title"><?php echo $noodle->name; ?></div>
								<div class="div-price"><span class="price"><?php echo $noodle->price; ?></span>円</div>
							</div>
						</li>
						<?php endforeach; ?>
					</ul>
				</div>
				<div class="main-article-subtitle">トッピング メニュー</div>
				<div>
					<ul class="list-topping">
						<?php foreach ($topping_list as $topping) : ?>
						<li>
							<div>
								<table>
									<tr>
										<td class="td-title"><?php echo $topping->name; ?></td>
										<td class="td-price"><span class="price"><?php echo $topping->price; ?></span>円</td>
									</tr>
								</table>
							</div>
						</li>
						<?php endforeach; ?>
					</ul>
				</div>
				<div class="main-article-title">ご飯類</div>
					<ul class="list-noodle_rice">
						<?php foreach ($rice_list as $rice) : ?>
						<li>
							<div class="div-img">
								<?php 
									try {
										echo Asset::img('menu/product/img_p' . $rice->id . '.jpg');
									} catch(Exception $e) {
										echo Asset::img('system/img_product_nofound.jpg');
									}
								?>
							</div>
							<div class="div-info">
								<div class="div-title"><?php echo $rice->name; ?></div>
								<div class="div-price"><span class="price"><?php echo $rice->price; ?></span>円</div>
							</div>
						</li>
						<?php endforeach; ?>
					</ul>
				<div>
				</div>
			</div>
		</div>
		<?php echo $sidebar; ?>
	</div>
	<?php echo $footer; ?>
</body>
</html>