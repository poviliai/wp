<?php  
    if(empty($args)){
        $args = array(
            'title' =>'',
            'text' =>  '',
        );
    }
?>

<div class="container">
        <div class="row">
             <div class="col">
                    <h2 class="text-center my-5"><?php echo $args['title'];  ?></h2>
                    <p><?php echo $args['text']; ?> </p>
             </div>
        </div>
    </div>
