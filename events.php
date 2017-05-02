<!DOCTYPE html>
<html>
	<?php include 'head.php'; ?>
	<body>
		<?php include 'header.php'; ?>
		<div class="content">
			<div class="valign topic-heading">
				<div class="width">
					<h1>Upcoming Events</h1>
					<h2>Events scheduled by NUVR for the future</h2>
				</div>
			</div>
			<section class="width">
				<script type="text/javascript">
                    var rss = 'https://api.orgsync.com/api/v3/portals/152063/events.rss?key=7ar2s361PubC_l3_CsGs-jDMUT4fcQTWktRK4dqvRMA&per_page=100&upcoming=true';
                </script>
			</section>
			<div id="rss"></div>
		</div>
		<?php include 'footer.php'; ?>
	</body>
	<script type="text/javascript">
	// Queries the RSS feed url
	function eventFeed() {
		var xmlhttp;
		if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
		    xmlhttp = new XMLHttpRequest();
		}
		else { // code for IE6, IE5
		    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		// Request to make, calls parser and restructures HTML
		xmlhttp.onreadystatechange = function() {
		    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
		        // response = xmlhttp.responseText;
				var http = xmlhttp.responseXML;
				var items = http.querySelectorAll('item');
				items.forEach(function(e) {
					document.getElementById("rss").innerHTML += e.outerHTML;
				})
		    }
		}
		xmlhttp.open("GET", rss, true);
		xmlhttp.send();
	}

	// Pull the RSS feed
	eventFeed();

	// Parses the HTML of the given item, restructures item
	function itemParser(item) {
		// TODO: Build parser, but first get a cup of coffee
	}
	</script>
</html>
