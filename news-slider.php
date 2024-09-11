<?php
    $posts = get_posts($args);
  
    $i=0;
    foreach ( $posts as $post ) {

        setup_postdata($post);

        $if_first  = get_field("if_first", $post->ID );
        $large_image_url1  = get_field("news_image", $post->ID );
        //var_dump($large_image_url1);

        $news_date  = get_field("date", $post->ID );
        $short_text  = get_field("short_description", $post->ID );
        $news_title  =  $post->post_title;
      
        $day_month = date("d.m",  strtotime($news_date));
        $year = date("Y", strtotime($news_date));

        $d = date("d", strtotime($news_date));
        $m = date("m", strtotime($news_date));
        $y = date("Y", strtotime($news_date));
      
        if(!empty($large_image_url1)){
            $arr = explode(site_url() ."/",$large_image_url1);
            if(!empty($arr[1] && file_exists($arr[1]))) { ?>
                <div  class="carousel-item <?php if(!$i) echo 'active';?> light_bg">
                    <div class="news_one_date">
                        <div class="news_one_date_inside" rel="<?= $if_first ?>">
                            <span class="news_one_day"><?= $d ?>.</span><span class="news_one_day"><?= $m ?>/</span><span class="news_one_year"><?= $y ?></span>
                        </div>
                    </div>
                    <div class="news_one_image" style="background-image:url(<?php echo $large_image_url1; ?>)"></div>
                    <div class="news_one_title mainred f21  "><?= the_title() ?></div>
                    <div class="news_one_short  f17  "><?= $short_text ?></div>
                    <div class="news_one_more  f17 maingray  "><a href="<?= the_permalink() ?>">Find out more >></a></div>
                </div>  
        <?php  
            }  
        }
        $i++;
    }
    wp_reset_postdata();
?>   