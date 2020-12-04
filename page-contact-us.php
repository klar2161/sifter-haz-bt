<?php get_header(); ?>





        <section class="about-info">

                <?php if(have_posts()): ?>
                
                                        <?php while(have_posts()) : the_post() ?>
                                        <h1 class="title-about"><?php the_title() ?></h1>
                                                <div class="post">
                                                
                                                <p><?php the_content() ?></p>
                                                </div>

                                        <?php endwhile; ?>
                                        <?php endif; ?> 

                                        

        </section>


        
        
        <div class="contact-us-title">


</div>

 </div> 
        <h2 class="contact-us-text">
                PLEASE IF YOU HAVE ANY QUESTION 
        DO NOT HESITATE TO SEND US A MESSAGE.
                </h2>
 <div class="contactcontainer">
  <form action="action_page.php"></label>
    <input type="text" id="fullname" name="fullname" placeholder="Your  Full  Name..">

    <label for="phonenumber"></label>
    <input type="text" id="phonemuber" name="phonenumber" placeholder="Your Phone Number..">

    <label for="country"></label>
    <input type="text" id="emailaddress" name="emailaddress" placeholder="Your E-mail Address..">

    </select>

    <label for="Message"></label>
    <textarea id="message" name="message" placeholder="Write a message.." style="height:200px"></textarea>

    <input name="send" id="send" type="send" value="Send" onclick="">

    

  </form>



  <div class="space-between1"></div>

</div>

 <div class="contactus-wrapper">
                <div class="phone">
                <i2 class="fas fa-mobile-alt"></i2>
                <h3>
                         + 36 70 948 6745
                </h3>
                <h3>
                        + 36 70 941 6744

                </h3>
                </div>

                <div class="location">
                <i2 class="fas fa-map-marker-alt"></i2>
                <h3>
                Office: 2510 Dorog, Mária út 1. fszt. 17.
                </h3>
                <h3>
                2517 Kesztölc, Klastrompuszta 0142 hrsz.
                </h3>


                </div>

                <div class="email">
                <i2 class="fas fa-envelope"></i2>
                <h3>
                sifterhazbt@gmail.com
                </h3>
                 </div>
 

</div>
<div class="space-between1"></div>


<div class="mapouter">
        <div class="gmap_canvas">
                <iframe width="100%" height="500px" id="gmap_canvas" src="https://maps.google.com/maps?q=Klastrompuszta%20Keszt%C3%B6lc%2C%202517%20Hungary&t=k&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                </iframe>
                <a href="https://embedgooglemap.net/mapv2/"></a>
        </div>
        <style>.mapouter{position:relative;text-align:right;height:500px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style>
</div>

                    <?php get_footer()?>


?> 