<?php if(!empty($args)){ ?>
<div class="d-flex justify-content-between align-items-stretch flex-column flex-lg-row mb-3">
    <?php $n=1; foreach($args as $item) {
            if(!empty($item['title']) && !empty($item['text'])) {    
    ?>
        <div class="d-flex-inline flex-column <?php if($n != count($args)){ echo "me-lg-".$item['margin']; }else{ echo "ms-lg-".$item['margin'];} ?> me-lg-2 mb-3 c-info p-2 p-sm-5">
            <div class="d-flex justify-content-center align-items-center mb-3 mb-sm-5 logo">
                <?php echo $item['title'] ;?>
            </div> 
            <div class="d-flex">
               <?php echo $item['text'] ;?>
            </div>
            <?php if (!empty($item['sign'])) { ?>
                <div class="d-flex mt-5 mb-3">
                    <?php echo  $item['sign'] ;?>
                </div>
            <?php } ?>
        </div>
    <?php 
         $n++;
        }
     } 
    ?>       
</div>
<?php } ?>