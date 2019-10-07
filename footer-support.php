<div class="supportFooter footer-logoes ct-u-marginTop20">
    <div class="container">
        <div class="row">            
            <div class=" col-md-12 content">
                <?php echo get_field('support_section1_content3'); ?>
            </div>                       
        </div>
        <div class="row">   
            <?php echo get_field('support_section1_partners'); ?>
<!--            <div class="col-md-12">
                <h3 class="title">PARTNERS</h3>
                <ul class="logoes">
                    <li><img src="<?php bloginfo('template_directory'); ?>/images/logoes/1-eulogo.png" /></li>
                    <li><img src="<?php bloginfo('template_directory'); ?>/images/logoes/2-agbu.png" /></li>
                    <li><img src="<?php bloginfo('template_directory'); ?>/images/logoes/3-epf.png" /></li>
                    <li><img src="<?php bloginfo('template_directory'); ?>/images/logoes/4-ballet2021.jpg" /></li>                    
                </ul>
            </div> 
            <div class="col-md-12">                
                <ul class="logoes">
                    <li><img class="mR50" src="<?php bloginfo('template_directory'); ?>/images/logoes/7-impact.png" /></li>
                    <li><img class="mR50" src="<?php bloginfo('template_directory'); ?>/images/logoes/5-adwise.png" /></li>
                    <li><img src="<?php bloginfo('template_directory'); ?>/images/logoes/6-emiliAregak.jpg" /></li>                    
                </ul>
            </div>            -->
        </div>
        <div class="row">            
            <div class="col-md-12 supporters">
                <?php echo get_field('support_section1_supporters'); ?>
<!--                 <h3 class="title">SUPPORTERS</h3>
               <ul class="names">
                    <li>Names</li>                    
                </ul>-->
            </div>            
        </div>
    </div>
</div>

<?php include (TEMPLATEPATH . '/inc/donateSection.php' ); ?>
<div class="row footer-contact">
        <div class="row footerRow footer-bordered">
            <div class="col-md-6 paddLeft0">
                <div class="phone">
                    <p>
                        <a class="web" href="http://artscentergyumri.org">www.artscentergyumri.org</a><br>
                        <a class="tel" href="tel:+37493452472">+374 93 452 472</a>
                    </p>
                </div>
            </div>
            <div class="col-md-6 text-right paddRight0">
                <div class="email">
                    <h5>For all other inquiries, email us directly at</h5>
                    <p class="email">
                    <a href="mailto:info@artscentergyumri.org">info@artscentergyumri.org</a>.
                    </p>
                </div>
            </div> 
        </div>
        <div class="row footerRow">
            <div class="col-md-6 copyright paddLeft0">
                &copy;<?php echo date("Y"); echo " "; //bloginfo('name'); ?>
                The Kharatian Arts Center Gyumri
            </div>
            <div class="col-md-6 text-right paddRight0">
                <div class="social">
                    <a href="https://www.facebook.com/#" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/#" target="_blank"><i class="fa fa-instagram"></i></a>
                    <a href="https://twitter.com/#" target="_blank"><i class="fa fa-twitter"></i></a>
                </div>
            </div>
        </div>       
    
</div>

    <!-- Move top button-->
    <a href="#" id="toTop"><i class="fa fa-chevron-up"></i></a><!-- Back to Top -->
</div><!-- ct-pageWrapper [End] -->
<!-- JavaScripts -->
<script src="<?php bloginfo('template_directory'); ?>/assets/js/externals.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>


<script src="<?php bloginfo('template_directory'); ?>/assets/plugins/ct-mediaSection/js/jquery.stellar.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/plugins/ct-mediaSection/js/init.js"></script>


<script src="<?php bloginfo('template_directory'); ?>/assets/plugins/ct-mainMenu/headroom.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/plugins/ct-mainMenu/jQuery.headroom.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/plugins/ct-mainMenu/init.js"></script>


<script src="<?php bloginfo('template_directory'); ?>/assets/plugins/owl/owl.carousel.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/plugins/owl/init.js"></script>


<script src="<?php bloginfo('template_directory'); ?>/assets/plugins/magnificPopup/jquery.magnific-popup.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/plugins/magnificPopup/init.js"></script>


<script src="<?php bloginfo('template_directory'); ?>/assets/plugins/grayscale-jQuery/jquery.gray.js"></script>

<!-- Style chooser -->
</body>
</html>
    <?php wp_footer(); ?>	
    <!-- Don't forget analytics -->
</body>
</html>
