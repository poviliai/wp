
<section class="default-page py-5 py-sm-5">
<?php
while ( have_posts() ) {
        the_post();
        $content = get_the_content();
       
        
?>      

<div class="container p-2 p-sm-5  my-2 my-sm-5 bg-white">
  <div class="row">
     <div class="col text-center"><h1 class="mt-2 mt-sm-5 mb-2 mb-sm-5"><?php the_title(); ?></h1></div>
  </div>
  <div class="row">
         <div class="col"> 
          
         <?php  the_content(); ?> 
        
        </div>
  </div>
</div>      
       
<?php 
 }
?>
</section>
<script>
  jQuery(document).ready(function(){
        jQuery('table.ctab').addClass('table').wrap('<div class="table-responsive"></div>');
  });
</script>
