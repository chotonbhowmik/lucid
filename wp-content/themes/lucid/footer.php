<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Lucid
 */

?>

<div class="bottom-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="social-media">
                <ul>
                    <?php

                        global $redux_demo;
                        if (!empty($redux_demo['facebook-icon'])) { ?>
                            <li>
                        <a href="<?php echo $redux_demo['facebook-icon'];?>" target='_blank'>
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                     <?php   }

                    ?>
                     <?php

                        global $redux_demo;
                        if (!empty($redux_demo['twitter-icon'])) { ?>
                            <li>
                        <a href="<?php echo $redux_demo['twitter-icon'];?>"target='_blank'>
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                     <?php   }

                    ?>
                      <?php

                        global $redux_demo;
                        if (!empty($redux_demo['linkedin-icon'])) { ?>
                            <li>
                        <a href="<?php echo $redux_demo['linkedin-icon'];?>"target='_blank'>
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </li>
                     <?php   }

                    ?>

                     <?php

                        global $redux_demo;
                        if (!empty($redux_demo['youtube-icon'])) { ?>
                            <li>
                        <a href="<?php echo $redux_demo['youtube-icon'];?>"target='_blank'>
                            <i class="fa fa-youtube"></i>
                        </a>
                    </li>
                     <?php   }

                    ?>

                     <?php

                        global $redux_demo;
                        if (!empty($redux_demo['dribbble-icon'])) { ?>
                            <li>
                        <a href="<?php echo $redux_demo['dribbble-icon'];?>"target='_blank'>
                            <i class="fa fa-dribbble"></i>
                        </a>
                    </li>
                     <?php   }

                    ?>
                    
                   
                   
                    
                </ul>
            </div>
            <?php
            global $redux_demo;
            if (!empty($redux_demo['copyright-content'])) { ?>
               <p><?php echo $redux_demo['copyright-content']; ?></p>
           <?php  }
           else{ ?>

            <p>set your copyright content</p>

          <?php }


            ?>

            
            </div>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="<?php bloginfo('template_directory');?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_directory');?>/assets/js/owl.carousel.min.js"></script>
    <!-- Counter Up JS -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="<?php bloginfo('template_directory');?>/assets/js/jquery.counterup.min.js"></script>

    <script src="<?php bloginfo('template_directory');?>/assets/js/main.js"></script>


<?php wp_footer(); ?>

</body>
</html>
