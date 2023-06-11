<div class="footer_section layout_padding">
    <div class="container">
        <div class="location_main">
            <?php
            $footer = get_field('footer_section');
            ?>
            <div class="call_text"><img src="<?php bloginfo('template_directory'); ?>/images/call-icon.png" /></div>
            <div class="call_text"><a href="#"><?php echo $footer['phone_number']; ?></a></div>
            <div class="call_text"><img src="<?php bloginfo('template_directory'); ?>/images/mail-icon.png" /></div>
            <div class="call_text"><a href="#"><?php echo $footer['email_address']; ?></a></div>
        </div>
        <div class="social_icon">
            <ul>
                <li>
                    <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/fb-icon.png" /></a>
                </li>
                <li>
                    <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/twitter-icon.png" /></a>
                </li>
                <li>
                    <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/linkedin-icon.png" /></a>
                </li>
                <li>
                    <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/instagram-icon.png" /></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- footer section end -->
<!-- copyright section start -->
<div class="copyright_section">
    <div class="container">
        <p class="copyright_text">
            2023 All Rights Reserved. Design by
            <a href="https://www.linkedin.com/in/kasih-budi-prabowo-7a7976b1/">kbprabowo</a>
        </p>
    </div>
</div>
<!-- copyright section end -->

<?php wp_footer(); ?>

</body>

</html>
