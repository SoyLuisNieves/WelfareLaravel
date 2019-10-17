<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>List of users</title>
</head>
<body>
	<h1><?= $title ?></h1>
	<ul>
		<?php foreach ($users as $user): ?>
			<li><?= e($user) ?></li>
		<?php endforeach; ?>
	</ul>
</body>
</html>