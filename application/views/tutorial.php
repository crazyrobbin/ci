<html>
<head>
	<title>none
	</title>
</head>
<body>
	<h1>Tutorial</h1>

	<?php foreach ($tutorial as $news_item): ?>
<div class="panel radius" style="opacity:0.9;">
    <h3><?php echo $news_item['topic'] ?></h3>
            <?php echo $news_item['description'] ?>
<hr style="margin:0px">
<a href="<?php echo $news_item['link'] ?>" target="_blank">View article</a>
</div>
<?php endforeach ?>
</body>
</html>