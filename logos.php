<?php
   if(empty($args)){
     $args = array();
   }
   if($args){?>
    <div class="d-flex justify-content-between  align-items-center flex-column flex-md-row">
        <?php 
        $n=1; foreach ( $args as $post ) { 
            switch($n){
                case $n == 1 :  
                $p = 'pe-2 py-2 ps-2 ps-sm-0';
                break;   
                case  $n == count($args) :
                $p = 'ps-2 py-2 pe-2 pe-sm-0';
                break;
                default: 
                $p = 'p-2';    
            }

            switch($post['max-width']){
                case !empty($post['max-width']) :
                    $mw = 'mw-50 mw-md-'.  $post['max-width'];
                    break;
                default:
                     $mw = '';    
            }
        ?>

            <div class="mb-3 <?php echo $p; ?> <?php echo $mw;?>"><a href="<?php echo $post['href']; ?>" target="_blank"><img class="img-fluid" src="<?php echo $post['src']; ?>" alt="" /></a></div>
                    
        <?php $n++; }?>
    </div> 
<?php } ?>