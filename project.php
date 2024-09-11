<?php
    $fields = get_fields();
    $bg_img = '';
    $title = '';
    $text = '';
    if($fields){
        foreach($fields as $key => $field){
            
            if(preg_match('/(title)/', $key)){
                $title = $field;
            }
            if(preg_match('/(text)/', $key)){
                $text = $field;
            }

            if($key == 'banner'){
                $bg_img = $field;
            }
                
        }  
    }   
?>  

<section  id="project"   <?php if($bg_img) {  echo  'style="background: url('. $bg_img .') no-repeat;"' ; } ?> >
    <div class="sph-10 sph-sm-80"></div>
    <?php 
        $args = array(
                'title' => $title,
                'text' =>  $text,
        );
        get_template_part('title-text-one-col','', $args);  

    ?>   
    <div class="sph-10 sph-sm-80"></div> 
</section>
<section id="project-1">
    <?php
        $args = array(
                'title' =>'Objectives and measures',
                'text' =>  '',
            );
        get_template_part('title-text-one-col','', $args);
    ?>       
    <div class="container">
    <?php    
        $args = array(
            'numberposts' => 3,
            'category' => 7,
            'post_status' => 'publish',
            'orderby'     => 'date',
            'order'       => 'ASC'
        );
        $posts = get_posts($args);
        if($posts){
            foreach ( $posts as $key => $post ) { 
                $args = array(
                      'img' => get_the_post_thumbnail_url($post->ID),
                      'title' => $post->post_title,
                      'text' => $post->post_content
                );
                if( !($key%2)) {
                    get_template_part('row-img-right-top','', $args);
                }else{
                    get_template_part('row-img-left-top','', $args);
                }
            }
        }
       
        
      ?>
    </div> 
</section>
<div class="project_bottom_container">
    <div class="container">
        <div class="lr-15">
            <h4 class="middle_h">GESAMTMASCHE and UZTEKSTILPROM jointly implement the project and inform on progress.</h4>
            <div class="part_find_more"></div>
        </div>
    </div>
</div>