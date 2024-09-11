<?php
    $fields = get_fields();
    $keys ='banner,banner_left_title,banner_left_text,banner_right_title,banner_right_text';
    //define
    foreach (explode(",",$keys) as $expr){
        ${$expr} = '';
    }
    //get if exist 
    if($fields){
        foreach($fields as $key => $val){
            if(str_contains($keys,$key)){
                ${$key} = $val;
            }
        }
    }   
        
?> 
   
   <section <?php if($banner) {  echo  'style="background: url('. $banner .') no-repeat;"' ; } ?> class="own_contact   py-3 py-sm-5">
        <div class="container bg-white  px-sm-5">
            <div class="row">
                <div class="col-12">
                    <h1 class="mt-5 mb-5 text-center">Contact us</h1>
                </div>
                <div class="col-12 col-md-6 col-xxl-8 mb-3 mb-sm-0">
                    <h2 class="mb-3"><?php echo $banner_left_title; ?></h2>
                    <p><?php echo $banner_left_text;  ?></p>

                </div>
                <div class="col-12 col-md-6 col-xxl-4 mb-3 mb-sm-0">
                    <h2 class="mb-3"><?php echo $banner_right_title; ?></h2>
                    <p><?php echo $banner_right_text; ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center mt-sm-5 mb-sm-5 pt-0 pt-sm-4 pb-4">
                    <div class=" pb-5 pt-5">
                        <div class="form-wrapper">
                            <?php echo do_shortcode('[contact-form-7 id="aa0518d" title="Contact form 1"]'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
   