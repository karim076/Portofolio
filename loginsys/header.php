<?php require_once '../backend/conn.php' ?>
	<nav class="navbar navbar-expand-lg navbar-light">
		<a class="navbar-brand text-white" href="<?php echo $base_url?>">Portofolio</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav text-white">
				<li class="nav-item active">
					<a class="nav-link text-white rounded-bottom bg-warning" href="#">Admin panel <span class="sr-only text-white">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-white" href="#">Features</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-white" href="#">Pricing</a>
				</li>
			</ul>
		</div>
	</nav>