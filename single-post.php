<?php  get_header();?>


<?php
 setup_postdata($post);

 $fileds = get_fields($post->ID);

//short_description news_image date

//ID post_date post_content post_title
 $post_img = $fileds['news_image'];
 $news_date = get_field('date');
 $short_text = get_field('short_description');
 $d = date("d", strtotime($news_date));
 $m = date("m", strtotime($news_date));
 $y = date("Y", strtotime($news_date));

 $left_cont = get_field("left_column");
 $right_cont = get_field("right_column");
?>
<section class="pt-2 pt-sm-5 mb-2 mb-lg-5" id="single-news">
    <div class="container bg-white py-2 py-sm-5 px-2 px-sm-5">
        <div class="row">
                <div class="col">
                        <h1 class="mt-2 mt-sm-3 mb-sm-5"><?php echo the_title() ?> <span id="singl_news_arrow" class="float-none float-sm-end"><a href="/news/">All news<img src="https://www.guz-partners.org/wp-content/themes/gutp/images/news_all_arrow.png"></a></span></h1>
                </div>
        </div>
        <div class="d-flex align-items-top flex-column flex-lg-row mb-4 pb-4 pb-sm-5 pb-xl-0 light_bg">
            <div style="background:url('<?=$post_img;?>') no-repeat ; background-size: cover; min-height: 440px;" class="w-100 mb-3 mb-lg-0">
            
            </div>
            <div class="w-100">
                <div class="half-container float-start ps-2 ps-sm-3">
                    <div class="home_news_date">
                        <span class="home_news_day"><?php echo $d .'.'. $m; ?></span>/<span class="home_news_year"><?= $y ?></span>
                    </div>
                    <div class="clearfix"></div>
                
                    <div class="home_news_short"><?= $short_text ?></div>
                    <div class="home_news_hr"> &nbsp;</div>
                </div>
            </div>
        </div> 
        <div class="row">
            <div class="col-12 col-xl-10 my-2 my-sm-4">
                <?php the_content(); ?>
            </div>
        </div>
        <div class="row">
           <div class="col-12 col-md-5">
                <?php       
                    $prev_post = get_adjacent_post(false, '', true);
                    //post_date
                   
                    if(!empty($prev_post)) {
                        $pr = get_fields($prev_post->ID);
                    ?>
                    
                    <div class="light_bg sph-25 ps-2">
                          <?php echo '<a href="' . get_permalink($prev_post->ID) . '" title="' . $prev_post->post_title . '"><i class="fa-solid fa-arrow-left me-2"></i> previous news</a>'; ?>      
                    </div>
                    <div class="singl_prev_title"><?php  echo $prev_post->post_title; ?></div>
                    <div class="singl_prev_date">
                        <span class="singl_prev_date_day"><?php echo date("d",strtotime($prev_post->post_date)) . '.' . date("m",strtotime($prev_post->post_date)) ?></span>
                        <span class="singl_prev_date_month_year"><?php echo date("Y",strtotime($prev_post->post_date));?></span>
                    </div> 
                    <div class="singl_prev_short">
                        <?php if(!empty($pr['short_description'])) { ?>
                        <p><?php echo $pr['short_description']; ?></p>
                        <?php } ?>
                    </div>
                <?php
                    }
                ?>
           </div>
           <div class="col-12 col-md-6">
               <?php 
                $next_post = get_adjacent_post(false, '', false);
                if(!empty($next_post)) {
                    $pr = get_fields($next_post->ID);
                ?>
                <div class="light_bg sph-25 pe-2 text-end">
                      <?php  echo '<a href="' . get_permalink($next_post->ID) . '" title="' . $next_post->post_title . '">next news <i class="ms-2 fa-solid fa-arrow-right"></i></a>'; ?>
                </div>  
                <div class="singl_prev_title"> <?php echo $next_post->post_title ; ?></div>     
                <div class="singl_prev_date">
                        <span class="singl_prev_date_day"><?php echo date("d",strtotime($next_post->post_date)) . '.' . date("m",strtotime($next_post->post_date)) ?></span>
                        <span class="singl_prev_date_month_year"><?php echo date("Y",strtotime($next_post->post_date));?></span>
                </div> 
                <div class="singl_prev_short">
                        <?php if(!empty($pr['short_description'])) { ?>
                        <p><?php echo $pr['short_description']; ?></p>
                        <?php } ?>
                </div>

                <?php            
                    }
               ?>

           </div>
        </div>
    </div>    
</section>

<?php  get_footer();?>