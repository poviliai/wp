    <footer>
        <!--//  logos  //-->
        <div class="container my-5">
            <?php
                $args = array(
                    array(
                        'src' => get_template_directory_uri().'/images/GUZ_Blue_logo.svg',
                        'href' => '',
                        'title' => '',
                        'max-width' => '20',
                    ),
                    array(
                        'src' => get_template_directory_uri().'/images/logo_Ministry.svg',
                        'href' => 'https://www.bmz.de/de',
                        'title' => '',
                        'max-width' => '20',
                    ),
                    array(
                        'src' => get_template_directory_uri().'/images/logo_sequa.jpg',
                        'href' => 'https://www.sequa.de',
                        'title' => '',
                        'max-width' => '20',
                    ),
                    array(
                        'src' =>  get_template_directory_uri().'/images/logo-masche.svg',
                        'href' => 'https://www.gesamtmasche.de',
                        'title' => '',
                        'max-width' => '20',
                    ),
                    array(
                        'src' => get_template_directory_uri().'/images/logo-uzbekistan.svg',
                        'href' => 'https://uzts.uz/en/',
                        'title' => '',
                        'max-width' => '20',
                    ),
                );
                get_template_part('logos','', $args); 
            ?>
        </div>
        <!-- menu //-->
        <div class="container">
            <div class="row">
                <div class="col-12 offset-md-none col-lg-8 offset-lg-4 col-xl-6 offset-xl-6">
                    <?php
                            $args =   array('menu'=>'Footer_bottom_right','item_class'=>'item-footer-menu','position_mo' => 'center');
                            get_template_part('flex-menu','', $args);  
                    ?> 

                </div>
            </div>
        </div>
        <!-- // bottom rights info //-->
        <nav class="bg-primary py-3">
             <div class="container">
                <div class="d-flex justify-content-center justify-content-lg-between align-items-center flex-column flex-lg-row">
                    <div class="d-flex justify-content-center justify-content-md-start align-items-center text-center text-lg-start"><?php echo date("Y"); ?>  ©  Copyright  GESAMTMASCHE  |  UZTEKSTILPROM </div>
                    <div class="d-flex ms-lg-auto justify-content-sm-between my-3 my-sm-0">
                        <div class="ms-4"><a href="/privacy/">Privacy Policy</a></div>
					    <div class="ms-4"><a href="/imprint/">Imprint</a></div>    
                        <div class="ms-4"><a href="/contact/">Contact</a></div> 
                    </div>
                </div>
             </div>
        </nav>
    </footer>
    <?php wp_footer(); ?>    
</body>
</html>