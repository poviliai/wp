

<section id="download" class="pt-sm-5">
   <div class="container pt-5 pb-5">
        <div class="bg-white">
            <div class="row">
                <div class="col p-md-5">
                    <h1 class="text-center mt-5 mb-5"><?php echo the_title();?></h1>
                    <?php
                    echo do_shortcode('[wpdm_packages author="0" login="0" paging="1" orderby="publish_date" order="asc" items_per_page="10" template="link-template-default-nl" cols=1 colspad=1 colsphone=1]');
                    ?>
                </div>
            </div>    
        </div>    
    </div> 
</section>
    
<script>
    if (window.matchMedia("(max-width: 400px)").matches) {
        jQuery('.wpdm-download-link.btn.btn-primary').html('<i class="fa-solid fa-download m-auto"></i>');
    }else{
        jQuery('.wpdm-download-link.btn.btn-primary').html('Download');
    }
</script>
