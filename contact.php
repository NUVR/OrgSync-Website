<!DOCTYPE html>
<html>
	<?php include 'head.php'; ?>
	<body>
		<?php include 'header.php'; ?>
		<div class="content">
			<div class="valign topic-heading">
				<div class="width">
					<h1>Contact</h1>
					<h2>Send us a contact form, and we'll reply in no time</h2>
				</div>
			</div>
            <div class="width page-body">
                <div class="module" id="module_contact"><div id="contact_module_content">
                    <script src="https://www.google.com/recaptcha/api.js"></script>
                    <form action="/extranet/send_message?org=nuvr" method="post" update="module_contact">
                        <input id="org" name="org" type="hidden" value="nuvr">
                        <input id="a_comment_body" name="a_comment_body" type="hidden">
                        <div class="pod" id="">
                            <table width="100%" cellspacing="0" cellpadding="0" class="pod-header">
                                <tbody>
                                    <tr>
                                        <td class="pod-header-left"><div class="pod-icon-org_contact"></div></td>
                                        <td class="pod-header-middle"><div class="pod-header-text">Contact (Tentative) Northeastern University Virtual Reality&nbsp;</div></td>
                                        <td class="pod-header-right"></td>
                                    </tr>
                                </tbody>
                            </table>
                            <table width="100%" cellspacing="0" cellpadding="0" class="pod-body">
                                <tbody><tr>
                                    <td class="pod-body-left"></td>
                                    <td class="pod-body">
                                        <label>Your Name</label><br>
                                        <input id="name" name="name" placeholder="Anonymous" type="text"><br><br>
                                        <label>Your Email *</label><br>
                                        <input id="email" name="email" placeholder="someone@example.com" type="email"><br><br>
                                        <label>Message Subject</label><br>
                                        <input id="subject" name="subject" type="text"><br><br>
                                        <label>Your Message *</label><br>
                                        <textarea class="size-large" id="message" name="message" rows="8"></textarea><grammarly-btn><div data-reactroot="" class="_e725ae-textarea_btn _e725ae-anonymous _e725ae-not_focused" style="visibility: hidden; z-index: 2;"><div class="_e725ae-transform_wrap"><div title="Protected by Grammarly" class="_e725ae-status">&nbsp;</div></div></div></grammarly-btn><br><br>
                                        <div class="g-recaptcha" data-sitekey="6LcYDBMUAAAAAB25upfHnrmC67lhC8T8kowZmrgD"><div style="width: 304px; height: 78px;"><div><iframe src="https://www.google.com/recaptcha/api2/anchor?k=6LcYDBMUAAAAAB25upfHnrmC67lhC8T8kowZmrgD&amp;co=aHR0cDovL25ldS5vcmdzeW5jLmNvbTo4MA..&amp;hl=en&amp;v=r20170425155801&amp;size=normal&amp;cb=myvrlkbnet2d" title="recaptcha widget" width="304" height="78" frameborder="0" scrolling="no" name="undefined"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid #c1c1c1; margin: 10px 25px; padding: 0px; resize: none;  display: none; "></textarea></div></div><br><br>
                                        <input name="commit" type="submit" value="Send">
                                    </td>
                                    <td class="pod-body-right"></td>
                                </tr>
                                <tr>
                                    <td class="pod-footer-left-short"></td>
                                    <td class="pod-footer-short"></td>
                                    <td class="pod-footer-right-short"></td>
                                </tr>
                            </tbody></table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
