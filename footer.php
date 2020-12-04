   
 <!--
   
   <div class="column-container clearfix">
			<div class="container-box">
            
        
			</div>
		

        <p>a </p>

        </div>
    -->
    


    <footer>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
        <div class="footer-wrapper">
                <div class="footer-nav">
                    <?php dynamic_sidebar( 'sidebar-1' ); ?>
                </div>
                <div class="services-banner">
                    <?php dynamic_sidebar( 'sidebar-2' ); ?>
                </div>
                <div class="socials-banner">
                     <?php dynamic_sidebar( 'sidebar-3' ); ?>
                     <div class="connectws">
                         <h3 class="connectws">CONNECT WITH SIFTER</h3>
                    </div>

                     
        <div class="icons">
        <a href="https://www.facebook.com/sifter.hu/">
        <i class="fab fa-facebook-square"></i>

        </a>
        
        <a href="contact-us">
        <i class="fas fa-envelope"></i>
         </a>
        </div>

                </div>
        </div>
    </footer>


<?php if(get_field('image')): ?>
        </div>
<?php endif; ?>

<?php wp_footer(); ?>

</body>
</html>