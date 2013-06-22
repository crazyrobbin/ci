<html>
<head>
	<title>none
	</title>
</head>
<body>
	<h2>Coordinators</h2>

	<?php foreach ($cordi as $news_item): ?>
<div class="panel radius" style="opacity:0.9;">
    <h3><?php echo $news_item['name'] ?></h3>
<hr style="margin:0px">
<?php echo $news_item['address'] ?>
</div>


<?php endforeach ?>
<h3>Seceretary</h3>
	<?php foreach ($seci as $news_item): ?>
<div class="panel radius" style="opacity:0.9;">
    <h3><?php echo $news_item['name'] ?></h3>
<hr style="margin:0px">
<?php echo $news_item['address'] ?>
</div>
<?php endforeach ?>
</body>
</html>