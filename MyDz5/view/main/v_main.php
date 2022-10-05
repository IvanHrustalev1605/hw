<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?=$title?></title>
	<link rel="stylesheet" href="<?=BASE_URL?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=BASE_URL?>css/main.css" >
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
					<a class="nav-link" href="<?=BASE_URL?>">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?=BASE_URL?>edit">Edit</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?=BASE_URL?>cat">Categories</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?=BASE_URL?>contacts">Contacts</a>
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