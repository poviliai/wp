<?php

$posts = wp_get_recent_posts($args);
if($posts){
    foreach ( $posts as $key => $post ) { 
        $news_info = get_fields($post['ID']);
        $post_img   = $news_info['news_image'];
        $news_date  = $news_info['date'];
        $short_text = $news_info ['short_description'];
        $d = date("d", strtotime($news_date));
        $m = date("m", strtotime($news_date));
        $y = date("Y", strtotime($news_date));
        ?>
        <?php  if( !($key%2)) { ?>
        <div class="d-flex align-items-stretch flex-column flex-md-row mb-4  light_bg">
            <div style="background:url('<?php echo $post_img; ?>')" class="d-flex align-items-stretch w-100">
                   
            </div>
            <div class="d-flex align-items-stretch flex-column w-100 px-3 pb-3">
                <div class="d-flex mb-2 mb-sm-4">
                           <span class="news-date bg-primary text-white"> <span class="home_news_day"><?= $d ?>.</span><span class="home_news_month"><?= $m ?></span>/<span class="home_news_year"><?= $y ?></span></span>
                </div>    
                <div class="d-flex news-title my-2 my-sm-4"><?php echo $post['post_title']; ?></div>
                <div class="d-flex flex-column news-short mb-3 mb-sm-5"><?= $short_text ?></div>
                <div class="d-flex ms-auto news-more"><a href="<?= get_permalink($post['ID']) ?>">read more >></a></div>
            </div>
        </div>  
       <?php } else { ?>
        <div class="d-flex align-items-stretch flex-column flex-md-row mb-4  light_bg">
            
            <div class="d-flex flex-column w-100 px-3 pb-3">
                <div class="d-flex mb-2 mb-sm-4">
                   <span class="news-date bg-primary text-white"><span class="home_news_day"><?= $d ?>.</span><span class="home_news_month"><?= $m ?></span>/<span class="home_news_year"><?= $y ?></span></span>
                </div>    
                <div class="d-flex news-title my-2 my-sm-4"><?php echo $post['post_title']; ?></div>
                <div class="d-flex flex-column news-short  mb-3 mb-sm-5"><?= $short_text ?></div>
                <div class="d-flex me-auto news-more"><a href="<?= get_permalink($post['ID']) ?>">read more >></a></div>
            </div>
            <div style="background:url('<?php echo $post_img; ?>')" class="d-flex align-items-stretch w-100">
                    
            </div>
        </div>  
<?php  } 
    }
}
?>