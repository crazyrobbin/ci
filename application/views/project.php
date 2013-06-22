<html>
<head>
	<title>none
	</title>
</head>
<body>
	<h1>Project</h1>

	<?php foreach ($project as $news_item): ?>
<div class="panel radius" style="opacity:0.9;">
    <h3><?php echo $news_item['name'] ?></h3>
<hr style="margin:0px">
<a href="http://<?php echo $news_item['link'] ?>" target="_blank">View project</a>
</div>
<?php endforeach ?>
</body>
</html>