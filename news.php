<section id="news-section" class="py-2 py-sm-5">
    <div class="container bg-white p-2 p-sm-5">
        <div class="row">
            <div class="col text-center"><h1 class="my-2 my-sm-5">News</h1></div>
        </div>
        <!--// start carusel //-->
        <div class="row">
            <div class="col-12 col-lg-7 col-xl-8 mb-3 mb-xl-0">
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">
                         <?php get_template_part('news-slider','', $args);  ?>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-5 col-xl-4">
                <div class="news_all_right_inside">
                    <div id="carouselExample1" class="carousel-fade">
                        <div class="carousel-inner">
                        <?php get_template_part('news-title-slider','', $args);  ?>
                        </div>
                    </div>

                    <div  class="text-start text-md-end w-100" id="pagingControls">
                        <button  class="prev" type="button">&lt;</button>
                        <?php get_template_part('news-titile-slider-pagination','', $args);  ?>
                        <button class="next"  type="button">&gt;</button>
                    </div>


                </div>    
            </div>    
        </div>
        <!--// end carousel //-->
    </div>
</section>
<script>
    const myCarouselElement = document.querySelector('#carouselExample');
    const carousel = new bootstrap.Carousel(myCarouselElement, {
        interval: 10000,
        touch: false
    });
    const myCarouselElement1 = document.querySelector('#carouselExample1');
    const carousel1 = new bootstrap.Carousel(myCarouselElement1, {
        interval: 100000,
        touch: false
    });

    jQuery('#pagingControls .page').on('click',function(){
        jQuery('#pagingControls .page').removeClass('active');
        jQuery(this).addClass('active');
        carousel1.to(jQuery(this).attr('data-slide'));

    })

    jQuery('#pagingControls .prev').on('click',function(){
        let current = jQuery('#carouselExample1 .carousel-item.active').index();
        if(current != 0 ){
            carousel1.to(current - 1);
            jQuery('#pagingControls .page').removeClass('active');
            if(jQuery('#pagingControls .page[data-slide="'+ (current - 1) +'"]').is(':hidden')){
                jQuery('#pagingControls button.page').filter(':visible').first().hide();
                jQuery('#pagingControls .page[data-slide="'+ (current - 1) +'"]').show();
            }
            jQuery('#pagingControls .page[data-slide="'+ (current - 1) +'"]').addClass('active');
        }
    });

    jQuery('#pagingControls .next').on('click',function(){
        let last = jQuery('#carouselExample1 .carousel-item').last().index();
        let current = jQuery('#carouselExample1 .carousel-item.active').index();
        if(current != last){
            carousel1.to(current + 1);
            jQuery('#pagingControls .page').removeClass('active');
            if( jQuery('#pagingControls .page[data-slide="'+ (current + 1) +'"]').is(':hidden')){
                jQuery('#pagingControls button.page').filter(':visible').last().hide();
                jQuery('#pagingControls .page[data-slide="'+ (current + 1) +'"]').show();
            }
            jQuery('#pagingControls .page[data-slide="'+ (current + 1) +'"]').addClass('active');
        }
    });

    jQuery('#next_point').on('click',function(){
        let first = jQuery('#carouselExample1 .carousel-item').first().index();
        let last = jQuery('#carouselExample1 .carousel-item').last().index();
        let current = jQuery('#carouselExample1 .carousel-item.active').index();


        if(current != last){
            carousel1.to(current + 1);
            jQuery('#pagingControls .page').removeClass('active');
            if( jQuery('#pagingControls .page[data-slide="'+ (current + 1) +'"]').is(':hidden')){
                jQuery('#pagingControls button.page').filter(':visible').last().hide();
                jQuery('#pagingControls .page[data-slide="'+ (current + 1) +'"]').show();
            }
            jQuery('#pagingControls .page[data-slide="'+ (current + 1) +'"]').addClass('active');
        }else{
            carousel1.to(0);
            jQuery('#pagingControls .page').removeClass('active');
            jQuery('#pagingControls .page[data-slide="0"]').show();
        }
    });
    
</script>
<section class="news_bottom_container">
    <?php
        $args = array(
            'title' => 'About project GUZ Partners',
            'text' => 'German-Uzbek Textile Partnership - GUZ Partners - is a project intended to bring together German and Uzbek actors at all stages of the textile chain, inform about business conditions and open the doors for a deeper association and industry cooperation.',
        );
        get_template_part('title-text-one-col','', $args);  
    ?>    
</section>
