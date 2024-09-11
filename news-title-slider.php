<?php
    $page_limit = 4;
    $page_btn_max = 3;
    $posts = get_posts($args);
    if(!empty($posts)){
        $chunks = array_chunk($posts,$page_limit); 
        foreach($chunks as $n => $chunk){ ?>
            <div  class="carousel-item <?php if(!$n) echo 'active';?>">
                <ul data-page-number="<?php echo $n + 1;?>" class="listPage">
                <?php    foreach ( $chunk as $post ) {
                        setup_postdata($post);

                        $news_date  = get_field("date", $post->ID );

                        $d = date("d", strtotime($news_date));
                        $m = date("m", strtotime($news_date));
                        $y = date("Y", strtotime($news_date));
                        ?>
                        <li>
                            <div class="news_list">
                                <div class="news_list_item_date">
                                    <div class="news_list_item_date_inside bg-primary text-white">
                                        <span class="news_list_item_day"><?= $d ?>.</span>
                                        <span class="news_list_item_day"><?= $m ?>/</span>
                                        <span class="news_list_item_year"><?= $y ?></span>
                                    </div>
                                </div>
                                <div class="news_list_item_title f17 w600"><?= the_title(); ?> </div>
                                <div class="news_list_item_more"><a href="<?= the_permalink() ?>">Find out more ></a></div>
                            </div>
                        </li>
                    <?php
                } ?>
                </ul>
            </div>    
    <?php        
        }
    }

    wp_reset_postdata();
?>