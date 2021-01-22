 <!-- footer -->
    <footer>
        <div id="contact" class="footer">
            <div class="container">
                <div class="row pdn-top-30">
                    <div class="col-md-12 ">
                        <div class="footer-box">
                            
                            <?php if (is_active_sidebar('address_widget')): ?>
                            <?php dynamic_sidebar('address_widget');?>
                            <?php endif;?>
                            
                            <ul class="location_icon">
                            <?php
                                if(get_option('dripdeals_facebook_icon')){?>
                                    <li> <a href="<?php echo get_option('dripdeals_facebook_icon')  ?>"><i class="fa fa-facebook-f"></i></a></li>
                               <?php }

                               if (get_option('dripdeals_twitter_icon')) {?>
                                    <li> <a href="<?php echo get_option('dripdeals_twitter_icon') ?>"><i class="fa fa-twitter"></i></a></li>
                               <?php }

                               if (get_option('dripdeals_instagram_icon')) {?>
                                    <li> <a href="<?php echo get_option('dripdeals_instagram_icon') ?>"><i class="fa fa-instagram"></i></a></li>
                               <?php }

                            ?>
                                
                                
                                

                            </ul>
                            <div class="menu-bottom">

                                <?php

                                    wp_nav_menu(
                                        [
                                            'theme_location' => 'mainMenu',
                                            'menu_class' => 'link',
                                            'container' => false,

                                        ]
                                    )

                                ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                            <?php if (is_active_sidebar('copyrignt_widget')): ?>
                            <?php dynamic_sidebar('copyrignt_widget');?>
                            <?php endif;?>
                
            </div>
        </div>
    </footer>
    <!-- end footer -->
   
 
    
    <!-- javascript -->
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function() {

                $(this).addClass('transition');
            }, function() {

                $(this).removeClass('transition');
            });
        });
    </script>

    <?php wp_footer(); ?>

</body>

</html>