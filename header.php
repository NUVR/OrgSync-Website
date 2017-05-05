<div id="header">
	<div id="navigation">
		<div class="width">
			<div class="logo">
				<img src="img/logo.png" alt="Logo">
			</div>
			<i aria-hidden="true" class="fa fa-bars"></i>
			<ul>
				<i aria-hidden="true" class="fa fa-times menu-close"></i>
				<li><a href="[[page:home]]">Home</a></li>
				<li><a href="[[page:About]]">About</a></li>
				<li><a href="[[page:Events]]">Events</a></li>
				<li><a href="[[page:News]]">News</a></li>
				<li><a href="[[page:ContactUs]]">Contact Us</a></li>
			</ul>
		</div>
	</div>
</div>
<script type="text/javascript">
var menuButton = document.querySelector('#navigation i');
menuButton.addEventListener('click', function () {
	document.querySelector('#navigation ul').className = 'active';
})
var menuClose = document.querySelector('#navigation .menu-close');
menuClose.addEventListener('click', function () {
	document.querySelector('#navigation ul').className = '';
})
</script>
