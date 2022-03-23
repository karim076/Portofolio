<header>
	<a href="#" class="logo">Portofolio</a>
	<ul>
		<li><a href="" class="active">Home</a></li>
		<li><a href="">About me</a></li>
		<li><a href="">Projects</a></li>
		<li><a href="">Contact</a></li>
	</ul>
</header>
<section>
	<img src="img/stars.png" id="stars">
	<img src="img/moon.png" id="moon">
	<img src="img/mountains_behind.png" id="mountains_behind">
	<h2 id="text">Karim</h2>
	<a href="#sec" id="btn">Adventuur</a>
	<img src="img/mountains_front.png" id="mountains_front">
</section>
<!-- JavaScript -> movement van top naar rechts en links -->
<script type="text/javascript">
	let stars = document.getElementById('stars');
	let moon = document.getElementById('moon'); 
	let mountains_behind = document.getElementById('mountains_behind');
	let text = document.getElementById('text');
	let btn = document.getElementById('btn');
	let mountains_front = document.getElementById('mountains_front');
	let header = document.quarySelector('header');
	
	window.addEventListener('scroll', function(){
		let value = window.scrollY;
		stars.style.left = value + 0.25 + 'px';
		moon.style.top = value + 1.05 + 'px';
		mountains_behind.style.top = value + 0.05 + 'px';
		text.style.marginRight = value + 8 + 'px';
		text.style.marginTop = value + 1.5 + 'px';
		btn.style.marginTop = value + 1.5 + 'px';
		header.style.style.top = value + 0.05 + 'px';		
	}); 
</script>