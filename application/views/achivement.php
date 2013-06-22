<html>
<head>
	<title>none
	</title>
</head>
<body>
	<h1>Achivements</h1>

	<?php foreach ($achivement as $news_item): ?>
<div class="panel radius" style="opacity:0.9;">
    <h3><?php echo $news_item['topic'] ?></h3>
<hr style="margin:0px">
<?php echo $news_item['description'] ?>
</div>
<?php endforeach ?>
</body>
</html>