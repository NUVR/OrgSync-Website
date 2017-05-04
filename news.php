<!DOCTYPE html>
<html>
	<?php include 'head.php'; ?>
	<body>
		<?php include 'header.php'; ?>
		<div class="content">
			<div class="valign topic-heading">
				<div class="width">
					<h1>News</h1>
					<h2>Posts made on OrgSync</h2>
				</div>
			</div>
            <div class="width page-body">
                <div class="module" id="module_news">
                    <ul>
                        <li id="post_220571" class="post_entry">
                            <p class="news_info">
                                <span class="new-tag">NEW</span>
                                <strong>05-04-2017</strong>: <a href="#" onclick="$j('#news_post_body_220571').toggle(); return false;">Test News Post</a>
                            </p>
                            <div class="news_post_body" id="news_post_body_220571" style="display: block;">
                                <p></p><p>This is a test news post for the website we are building. You may ignore this message, and it will be deleted soon.</p>
                                <p></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
		</div>
		<?php include 'footer.php'; ?>
	</body>
    <script type="text/javascript">
    function showDates() {
        var posts = document.querySelectorAll('.post_entry');
        posts.forEach(function(e) {
            // Get date from post
            var date = new Date(e.querySelector('.news_info strong').innerHTML);
            var months = [ "January", "February", "March", "April", "May", "June",
    		    "July", "August", "September", "October", "November", "December" ];
            // Create element with date of post
            var dateday = document.createElement('div');
    		dateday.className = 'date-day valign';
    		var month = document.createElement('h4');
    		month.innerHTML = months[parseInt(date.getMonth())];
    		var day = document.createElement('h5');
    		day.innerHTML = date.getDay();
            var insideDiv = document.createElement('div');
            insideDiv.appendChild(month);
            insideDiv.appendChild(day);
    		dateday.appendChild(insideDiv);
            // Get anchor link
            var link = e.querySelector('.news_info a');
            // Remove all content from the news info
            var info = e.querySelector('.news_info');
            info.innerHTML = "";
            // Re-append everything
            info.appendChild(dateday);
            info.appendChild(link);


        })
    }
    showDates();
    </script>
</html>
