<?php  get_header();?>
<section id="single-post">
    <?php 
        while ( have_posts() ) {
            the_post();
            if ($post->post_type == "company") {
                get_template_part('company');
            }
        }
    ?>  
</section>
<?php  get_footer();?>