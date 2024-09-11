<?php
    if(empty($args)){
        $args = array(
            'img' => '',
            'title' => '',
            'text' => ''
        );
    }
?>
<div class="row">
    <div class="col-12 col-lg-6 mb-2 mb-lg-0">
      <img  class="img-fluid" src="<?php echo $args['img'] ?>" alt=""/>
   </div>
   <div class="col-12 col-lg-6">
        <h4 class="mb-2 mb-sm-4"><?php echo $args['title']; ?></h4>
        <div class="projects_content"><?php echo $args['text']; ?></div>
   </div>
   <div class="sph-50 sph-sm-50"></div>
</div>
