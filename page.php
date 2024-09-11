<?php get_header(); ?>
<?php
    switch (basename(get_permalink())){
        case "project" : 
            get_template_part('project');
            break;
        case "partners" : 
            get_template_part('partners');
            break;  
        case "news" : 
            $args = array(
                'numberposts'      => -1,
                'category'         => '6',
                'post_type'        => 'post',
                'meta_key'		   => 'date',
                'orderby'		   => 'meta_value',
                'order'            => 'DESC',
                'post_status'      => 'publish'
            );
            get_template_part('news','', $args);
            break;  
        case    "downloads": 
            get_template_part('downloads');  
            break;
        case "contact":
            get_template_part('contact'); 
            break;      
        case "imprint":
            get_template_part('imprint'); 
            break;  
        default :
            get_template_part('default-page');  
    }
?>
<?php get_footer(); ?>