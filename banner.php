<?php
if(empty($args)){
    $args = array(
        'bg-img' => '',
        'max-width' => '1920px',
        'height' => '600px',
        'text' => '',
        'title' => '',
        'link' => '',
        'font-size' => '16px',

    );
}
$style = 'margin:auto;max-width:'.$args['max-width'] .';height:'.$args['height'].';';
   if($args['bg-img']){
      $style .= $args['bg-img'];
   } 
?>

<section  style="<?php echo $style ;?>"  class="full-width-banner">
    <div class="container"> 
        <div class="row">
           <div class="col-12 col-md-8 col-lg-6 col-xl-5 col-xxl-5 bg-white p-3 p-sm-5 opacity-75">
                <div class="mb-3  pe-1 pe-sm-5">
                    <?php echo $args['title']  ?>
                </div>
                <div class="mb-3 pe-1 pe-sm-4">
                    <p style="font-size:<?php echo $args['font-size']; ?>;"><?php echo $args['text'] ?></p>
                </div> 
                <div class="text-center my-2">
                    <a href="<?php echo $args['link']; ?>" style="border-radius:50px;padding: 7px 25px; color:white;font-size:<?php echo $args['font-size']; ?>;" class="btn btn-primary">Find out more</a>
                </div>  
                  
           </div>
        </div>
    </div>
</section>