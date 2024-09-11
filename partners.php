<?php
    $fields = get_fields();
    $bg_img = '';
    $title = '';
    $text = '';
    if($fields){
       
        foreach($fields as $key => $field){
            
            if(preg_match('/(title)/', $key)){
                $title = $field;
            }
            if(preg_match('/(text)/', $key)){
                $text = $field;
            }

            if($key == 'banner'){
                $bg_img = $field;
            }
                
        }  
    }   
?>  

<section  id="partners"   <?php if($bg_img) {  echo  'style="background: url('. $bg_img .') no-repeat;"' ; } ?> >
    <div class="sph-10 sph-sm-80"></div>
    <?php 
        $args = array(
                'title' => $title,
                'text' =>  $text,
        );
        get_template_part('title-text-one-col','', $args);  

    ?>   
    <div class="sph-10 sph-sm-80"></div> 
</section>
<section class="partner-info my-3 my-sm-5 py-5 py-sm-5 h_bg ">
    <?php
        $args = array(
            'title' => 'Partners',
            'text' => '"We take nature’s pristine purity and turn it into comfort and beauty"',
        );
        get_template_part('title-text-one-col','', $args);  
    ?>    

   <div class="container mt-3 mt-sm-5">
       <?php
          $args = array(
             array(
                'title' => '<img src="'.get_template_directory_uri() .'/images/logo-masche.svg" class="img-fluid"/>',
                'text'  => ' “GUZ Partners is sending a clear signal for the creation of a new textile platform, linking East and West and combining the cultural heritage of the Silk Road, rich textile tradition and production art with modern technology, innovative strength and sustainable design.”',
                'margin' => '2',
                'sign'   => 'Martina Bandte, President Gesamtmasche',
            ),

             array(
                'title' => '<img src="'.get_template_directory_uri() .'/images/logo-uzbekistan.svg" class="img-fluid"/>',
                'text'  => '“The observance of ecological and social criteria from the cotton field to the ready-made garment, together with advanced production technology, form the backbone of the project’s activities. I am convinced that GUZ Partners considerably contributes to the success of our industries.”' ,
                'margin' => '2',
                'sign' => 'Ilkhom Khaydarov, Chairman Uztekstilprom',
            ),
        );
          get_template_part('flex-stretch-col','', $args);  
        ?>
    </div>
    <div class="container mt-5 pb-5">
        <div class="row">
             <div class="col">
                 <img src="<?= get_template_directory_uri() ?>/images/part_bot.png" class="img-fluid" alt="" />
             </div>
        </div>
    </div>

</section>

<div class="partners_bottom_container">
    <div class="container">
        <div class="lr-15">
            <h4 class="middle_h">GESAMTMASCHE and UZTEKSTILPROM jointly implement the project and inform on progress.</h4>
            <div class="part_find_more"></div>
        </div>
    </div>
</div>