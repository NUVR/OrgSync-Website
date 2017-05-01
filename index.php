<!DOCTYPE html>
<html>
	<?php include 'head.php'; ?>
	<body>
		<?php include 'header.php'; ?>
		<div class="content">
			<div class="valign" id="top">
				<div class="video"></div>
				<div class="width">
					<div id="playbutton" class="playbutton"></div>
					<h1>Northeastern VR</h1>
					<h2>Northeastern’s first and only virtual reality and augmented reality organization</h2>
				</div>
			</div>
			<!-- end header -->
			<div class="logos">
				<div class="width">
					<div class="flex-img"><img src="img/Google.png" alt="Google"></div>
					<div class="flex-img"><img src="img/Microsoft.png" alt="Microsoft"></div>
					<div class="flex-img"><img src="img/Oculus.png" alt="Oculus"></div>
					<div class="flex-img"><img src="img/Vive.png" alt="Vive"></div>
				</div>
			</div>
			<div id="about">
				<div class="width">
					<left>
						<img src="img/hololens.png" alt="Microsoft HoloLens">
					</left><right>
						<h3>What is NUVR?</h3>
						<p>The beautiful world of virtual and augmented reality is desperate for developers and engineers. Northeastern University Virtual Reality, or NUVR, is where students from all over campus can come together to research and develop with the newest technologies. <span style="display:none;">From the Microsoft Hololens to Google Glass, NUVR’s wide array of devices offers any curious mind the chance to express themselves.</span> Our mission is to bridge the gap that exists between the virtual developer and real world consumers. Assist us in our efforts to receive official recognition on campus, so that we may purchase the devices necessary to pursue free VR and AR experiences. Join our organization today!</p>
						<a href="https://orgsync.com/152063/chapter" target="_blank"><button class="btn">Join OrgSync</button></a>
					</right>
				</div>
			</div>
			<!-- end above-fold content -->
		</div>
		<?php include 'footer.php'; ?>
	</body>
</html>
<script>
	document.querySelector('#playbutton').addEventListener('click', function() {
		var iframe = '<iframe width="853" height="480" src="https://www.youtube.com/embed/VzAwdBZ3KCQ?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>';
		var video = document.querySelector('.video');
		video.innerHTML = iframe;
		video.className += ' video-playing';
	});
</script>
