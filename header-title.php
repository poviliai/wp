<nav class="top-line light_bg px-3  px-sm-2  px-mg-1  py-sm-2 py-2  py-md-1">
   <div class="container">
        <div class="d-flex justify-content-between  align-items-center flex-column flex-md-row bg-blue-100">
      
            <div class="text-center text-sm-start">GUZ Partners |  German-Uzbek Textile Partners</div>
                    
            <div class="d-none d-sm-flex"><a href="mailto:info@guz-partners.org" style="color:#000">Email: info[@]guz-partners.org</a></div>
        </div>  
   </div>
</nav>
<div class="header-logos d-flex justify-content-center  align-items-center flex-column flex-md-row py-md-3 mt-md-5">
        <div class="logo_1 d-flex align-items-center my-4 my-sm-0  me-sm-4">
            <a href="<?php echo home_url(); ?>" >
            <img class="img-fluid" src= "<?php echo  esc_url( get_template_directory_uri()); ?>/images/logo-masche.svg" alt=""/>
            </a>
        </div>
        <div class="logo_2 d-flex align-items-center  ms-sm-4">
            <a href="<?php echo home_url(); ?>" >
               <img class="img-fluid" src= " <?php echo esc_url( get_template_directory_uri()); ?>/images/logo-uzbekistan.svg" alt="" />
            </a>
        </div>
</div> 
<nav id="top-menu" class="bg-primary mt-5">
  <?php echo  wp_nav_menu( array( 'menu' => 'main_menu','container_class' => 'container-top-menu text-lg-center') ) ?>
</nav> 
  