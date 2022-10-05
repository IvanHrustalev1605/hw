<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?=$title?></title>
	<link rel="stylesheet" href="<?=BASE_URL?>/bootstrap.min.css">
	<link href="<?=BASE_URL?>/main.css" rel="stylesheet">
</head>
<body>
	<header>
	<div class="container">
			<div class="logo">
				<div class="logo__title h3">My site</div>
				<div class="logo__subtitle h6">About some themes</div>
			</div>
		</div>
	
	<nav class="site-nav">
		<div class="container">
			<ul class="nav">
				<li class="nav-item">
					<a class="nav-link" href="index.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="index.php?c=edit">Edit</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="index.php?c=cat">Categories</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="index.php?c=contacts">Contacts</a>
				</li>
			</ul>
		</div>
	</nav>
	</header>
	
	<div class="site-content">
		<div class="container">
			<?=$content?>
		</div>
	</div>
	<footer class="site-footer">
		<div class="container">
			&copy; site about all
		</div>
	</footer>
</body>
</html>