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
			<div class="width page-body" id="rss"></div>
		</div>
		<?php include 'footer.php'; ?>
	</body>
	<script type="text/javascript">
		var rss = 'https://api.orgsync.com/api/v3/portals/152063/events.rss?key=7ar2s361PubC_l3_CsGs-jDMUT4fcQTWktRK4dqvRMA&per_page=100&upcoming=true';
	</script>
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
				// If there are no upcoming events
				if (items.length === 0) {
					var noitems = document.createElement('div');
					noitems.innerHTML = 'There are no events to display';
					noitems.style.textAlign = 'center';
					document.getElementById("rss").className += ' valign';
					document.getElementById("rss").appendChild(noitems);
				}
				items.forEach(function(e) {
				  document.getElementById("rss").appendChild(itemParser(e));
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
		var title = item.querySelector('title').innerHTML;
		var link = regEx(item, 'link')[1];
		var desc = item.querySelector('description').innerHTML;;
		var startdate = new Date(regEx(item, 'event:startdate')[1]);
		var enddate = new Date(regEx(item, 'event:enddate')[1]);
		var location = regEx(item, 'event:location')[1];
		var image = item.innerHTML.match(/url="(.*)"\/>/)[1];

		var months = [ "January", "February", "March", "April", "May", "June",
		    "July", "August", "September", "October", "November", "December" ];
		console.log(item.innerHTML);

		// Left side
		var dateinfo = document.createElement('div');
		dateinfo.className = 'date-info';
		// Month/Day block
		var dateday = document.createElement('div');
		dateday.className = 'date-day valign';
		dateday.style.backgroundImage = image;
		var month = document.createElement('h4');
		month.innerHTML = months[parseInt(startdate.getMonth())];
		var day = document.createElement('h5');
		day.innerHTML = startdate.getDay();
		dateday.appendChild(month);
		dateday.appendChild(day);
		// Time and location spans
		var time = document.createElement('span');
		time.innerHTML = getTime(startdate) + ' to ' + getTime(enddate);
		var locSpan = document.createElement('span');
		locSpan.innerHTML = location;
		// Append to dateinfo
		dateinfo.appendChild(dateday);
		dateinfo.appendChild(time);
		dateinfo.appendChild(locSpan);

		// Right side
		var eventinfo = document.createElement('div');
		eventinfo.className = 'event-info'
		var titleH3 = document.createElement('h3');
		titleH3.innerHTML = title;
		var description = document.createElement('p');
		description.innerHTML = desc;
		// Append to eventinfo
		eventinfo.appendChild(titleH3);
		eventinfo.appendChild(description);

		// Full div
		var finalDiv = document.createElement('div');
		finalDiv.className = 'item';
		finalDiv.appendChild(dateinfo);
		finalDiv.appendChild(eventinfo);
		var output = document.createElement('a');
		output.appendChild(finalDiv);
		output.setAttribute('href', link);

		return output;
	}

	function getTime(date) {
		var hour = date.getHours();
		var minute = date.getMinutes();

		if (minute < 10) {
			minute = '0' + minute;
		}
		if (hour > 12) {
			return (hour - 12) + ':' + minute + 'pm';
		} else if (hour === 12) {
			return hour + ':' + minute + 'pm';
		} else {
			return hour + ':' + minute + 'am';
		}
	}

	function regEx(item, tag) {
		var html = item.innerHTML;
		return html.match('<' + tag + '\s*.*\>(.*)<\/' + tag + '>');
	}
	</script>
</html>
