<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
	<?php echo Asset::css('bootstrap.css'); ?>
	<?php echo Asset::css('small-business.css'); ?>
	<style>
		body { margin: 0px; }
	</style>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<il><a href="/">TopPage</a></il>
				<il><a href="#">Request</a></il>
				<il><a href="#">About</a></il>
			</ul>
		</div>
	</div>
	</nav>
	<div class="container">
		<div class="col-md-12">
			<h1><?php echo $title; ?></h1>
		</div>
		<div class="col-md-12">
			<?php echo $content; ?>
		</div>
	</div>
</body>
</html>
