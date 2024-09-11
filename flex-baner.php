
<div class="d-flex justify-content-between align-items-center flex-column flex-md-row mt-5" >
    <?php  
      $n=0;
     foreach($args as $img){ 
        if(!empty($img['img']) && !empty($img['margin'])) { 
    ?>
            <div class="d-flex-inline <?php if($n) echo "ms-".$img['margin']; ?> mb-2">
                <?php  if(!empty($img['link'])) { ?>
                <a href="<?php echo $img['link']; ?>" title=""><img src="<?php echo $img['img']; ?>" class="img-fluid"/></a>   
                <?php } else { ?>
                 <img src="<?php echo $img['img']; ?>" class="img-fluid"/>   
                <?php } ?>   
                
            </div>
    <?php  
         $n++; } 
       }
    ?>
</div>    