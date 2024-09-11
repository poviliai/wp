<?php
    $page_limit = 4;
    $page_btn_max = 3;                    
    $page_btn_max_marker = false;
    $posts = get_posts($args);
    if(!empty($posts)){
        $chunks = array_chunk($posts,$page_limit); 
        for($s=0; $s< count($chunks ); $s++){
            if($s == 0){
                echo '<button data-slide="'. $s .'"  class="page active" type="button">'. ($s +1)  .'</button>'; 
            }elseif($s < $page_btn_max){
                echo '<button data-slide="'. $s .'"  class="page" type="button">'. ($s +1)  .'</button>'; 
            }else{
                    if(!$page_btn_max_marker){
                    echo '<button id="next_point" type="button">...</button>';
                    $page_btn_max_marker = true;
                }
                echo '<button  data-slide="'. $s .'" style="display:none;"  class="page" type="button">'. ($s+1) .'</button>';
            }
        }
    }
?>     