<section class="default-page py-5 py-sm-5">
<?php
while ( have_posts() ) {
        the_post();
        $content = get_the_content();
       //var_dump($content);
        
?>    

<section class="d-none for-rework">
<?php echo $content; ?>
</section>

<div class="container p-2 p-sm-5  my-2 my-sm-5 bg-white">
    <div class="row">
        <div class="col text-center"><h1 class="mt-2 mt-sm-5 mb-2 mb-sm-5"><?php the_title(); ?></h1></div>
    </div>
    <div  class="d-flex flex-column flex-lg-row align-items-start justify-content-between justify-content-md-between   imprint_top_table"></div>
    <hr>
    <div  class="d-flex flex-column flex-lg-row align-items-start align-items-lg-center  justify-content-between    imprint_middle_table"></div>
     <hr>
    <div class="row">
      <div  class="col imprint_content">         
      </div>
    </div>
        
</div>
     
       
<?php 
 }
?>
</section>
<script>
    jQuery(document).ready(function(){

       jQuery('.for-rework .imprint_top_table td div').each(function(){
              jQuery('.imprint_top_table').append(`<div class="d-flex flex-column w-100 justify-content-between  my-3">${jQuery(this).html()}</div>`);
       });

       jQuery('.for-rework .imprint_middle_table td').each(function(){
         let img = jQuery('<div class="flex"></div>');
         jQuery(this).find('img').each(function(i,e){
              jQuery(e).attr('style','width:171px;');
              img.append(jQuery(e));
         });

         let text = `<div>${jQuery(this).html()}</div>`;
         jQuery(text).find('img').remove();

         let wrap = `<div class="d-flex flex-column w-100 justify-content-center "><div class="d-flex flex-column flex-md-row justify-content-center align-items-center my-3 sph-lg-150">${img.html()}</div><div  class="sph-lg-200 pe-3 my-3 text-center">${ jQuery(text).html()}</div></div>`;
        jQuery('.imprint_middle_table').append(`${wrap}`);
       
        jQuery('.imprint_middle_table').find('a').wrap('<p style="margin:0;"></p>');
         
       });
    
       jQuery('.imprint_content').append(jQuery('.for-rework .twelve').eq(2))
       jQuery('.imprint_content').find('strong').wrap('<p class="pt-1 pt-sm-4"></p>');
     
       
  });
</script>




