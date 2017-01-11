<?php include 'head.php'; ?>
<body>
    <?php include 'header.php'; ?>
    <div id="wrapper">
        <div class="width">
            <div class="content">
                <h2>Welcome</h2>

                <hr />
                <p>Welcome to your public website hosted by OrgSync! The layout, design, and content of the website can be customized and updated from within your organization&#39;s portal. To access the Website Manager, it must first be turned on under Settings -&gt; Group Permissions by your group administrator.</p>

                <p>This is the default template. It is meant to be simple so that you can get a website up and running quickly. If you would like to customize this template to match your own site, or do something more creative feel free, please be aware though that some HTML and CSS knowledge is required if you really want to make major changes. Otherwise, content updates and maintenance can be done via the page editor by someone with little to no HTML experience. Your website can always be reset back to its default state (what you see before you) by accessing the settings page and pressing the reset button. Please be aware you lose all data, images, and files in the website builder when you do this.</p>

                <h4>Customizing This Website for Your Organization</h4>

                <p>First off, you most likely want to change the name in the header portion of the site where it says &quot;Organization Name&quot;. This is actually an image, so if you have a logo or banner you would like to fit there please go to the images tab of the website builder and find the image titled &#39;logo&#39;. You can simply replace this image using the tools to the right of the name. This image is currently 712 x 52. You can add an image in a different size but it is liable to mess with the displaying of the page.</p>

                <p>You can also change the background colors of the header. Access the files/css tab in the website builder and the only file (upon default setup of the site) is a stylesheet. Click edit to the right of stylesheet and a dropdown will show up with the CSS file. The first declaration is for body. The second is #header and the third is #navigation . Each of these controls the header and the navigation portions, respectively. The colors are defined on the lines beginning background, and can be changed simply by changing the six values between the &quot;#&quot; and &quot;;&quot; . There is a color chart on this page with many hex code examples :&nbsp;http://en.wikipedia.org/wiki/Web_colors&nbsp;</p>

                <p>For a further tutorial on CSS :&nbsp;http://www.w3schools.com/css/&nbsp;</p>

                <h4>Editing Individual Pages</h4>

                <p>Pages are maintained in the pages tab of the website builder. There are defaults established for you on creation of your website. This page, the index, has the title of home. The rest should be self explanatory. To edit a current page simply click the edit button and you will access an editor with content editing tools, along with the ability to add OrgSync modules and access the source code directly. There is more information about this in the help links at the bottom of this page and in the sidebar.&nbsp;</p>

                <p>You can also create new pages, and the name you give them will be the quick url used for linking purposes. After creation of a page it needs to be added to the navigation so access the header section under the template elements tab and add a link to the navigation using that quick url you just generated.&nbsp;</p>

                <p>To edit the images on this page scroll down to Images in your website manager. Name and upload your image. Copy the image Quick URL. Scroll up to Content Pages and click edit next to the content page entitled home. Find and replace http://s3.amazonaws.com/os_extranet_images/35667_original.gif by pasting your image Quick URL. Re-position image placement as necessary.</p>

                <h4>Website Builder Help</h4>

                <p>There is a great reference for the website builder <a href="http://help.orgsync.com/category/organization-administrators/website-builder">here</a> and another video walkthrough <a href="https://video.orgsync.com/video_walkthroughs/website_builder_tutorial/website_building_tutorial.html"> here</a>&nbsp;if you need any more information.&nbsp;</p>
            </div>
        </div>
    </div>
    <!-- close content area -->
    <?php include 'footer.php'; ?>
</body>
