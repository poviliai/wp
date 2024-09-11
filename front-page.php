<?php get_header(); ?>
<?php 
    $args = array(
            'bg-img' => 'background:url(/wp-content/uploads/2022/03/banner_home.jpg) no-repeat center center',
            'max-width' => '1920px',
            'height' => '600px',
            'text' => 'is a project to promote and strengthen German-Uzbek textile business partnership and cooperation throughout the textile production chain, from fibre to fashion. The textile associations GESAMTMASCHE and UZTEKSTILPROM jointly implement the project and inform the public on its progress. The project is financed by the German Federal Ministry of Economic Cooperation and Development and supported by sequa gGmbH.',
            'title' => '<img class="img-fluid" src="/wp-content/uploads/2022/03/GUZ_Blue.png" alt="">',
            'link' => '/project/',
            'font-size' => '18px',
        );

    get_template_part('banner','', $args);  
?>
<section class="text-section py-2 py-sm-5">
    <?php
        $args = array(
            'title' => 'Pioneering Partnership on the Silk Road',
            'text' => 'Uzbekistan increasingly moves into the focus of international procurement interest. Over the past decade, the international textile sector has experienced enormous shifts in global economic power and international trade flows. The corona crisis has further accelerated this development and made the structural changes clearly visible. Since Uzbekistan has focused on sustainability in cotton cultivation and promotes state-of-the-art processing in its own country, contacts between German and Uzbek companies have noticeably intensified. Opportunely located on the Silk Road, Uzbekistan is open to trade and has good conditions to become an industry platform for the entire region. Against the background of the vast German consumer market, the German textile and clothing industry with its worldwide leading role in textile technology is predestined as Uzbekistan’s preferred cooperation partner in Europe.',
        );
        get_template_part('title-text-one-col','', $args);  
    ?>    
    
    <div class="container pb-sm-5">
        <?php
        
            $args = array(
                array(
                    'img' => get_template_directory_uri() . '/images/home1.jpg',
                    'margin' => '1',
                    'link' => '',
                ),
                array(
                    'img' => get_template_directory_uri() .'/images/home2.jpg',
                    'margin' => '1',
                    'link' => '',
                ),
                array(
                    'img' => get_template_directory_uri(). '/images/home3.jpg',
                    'margin' => '1',
                    'link' => '',
                ),
           );
        
           get_template_part('flex-baner','', $args);  
        ?>
    </div>
</section>
<section class="partner-info my-3 my-sm-5 py-3 py-sm-5">
    <?php
        $args = array(
            'title' => 'Partners',
            'text' => '"We take nature’s pristine purity and turn it into comfort and beauty"',
        );
        get_template_part('title-text-one-col','', $args);  
    ?>    
    <div class="container mt-3 mt-sm-5">
       <?php
          $args = array(
             array(
                'title' => '<img src="'.get_template_directory_uri() .'/images/logo-masche.svg" class="img-fluid"/>',
                'text'  => 'Founded in 1916, the Confederation of the German Knitting Industry – GESAMTMASCHE – is the leading national trade association representing German producers of knitted fashion, bodywear and knitted fabrics for fashion and technical applications. German knitwear brands are internationally successful and hold a prominent market share in Europe. German knits have always been more than just fashion, they incorporate social trends, technical innovation, new materials and fashion culture. Unique design, the use of superior yarns and state-of-the-art technology form the basis of their international success. About 250 companies belong to the sector, this represents 7.8 billion Euros of exports per year.' ,
                'margin' => '2',
            ),

             array(
                'title' => '<img src="'.get_template_directory_uri() .'/images/logo-uzbekistan.svg" class="img-fluid"/>',
                'text'  => 'The Uzbekistan Textile and Garment Industry Association – UZTEKSTILPROM – is the national association of the Uzbek textile and clothing industry based in Tashkent. The entire value chain from spinning to knitting, weaving, finishing and ready-to-wear comprises around 2,000 companies of various sizes. UTEKSTILPROM as the industry’s representation defines as its core tasks consulting, connections to important markets and the mouthpiece function vis-à-vis politics. The main objective is to strengthen the textile and clothing sector as a key sector for growth and development of the manufacturing industry in Uzbekistan, up to the development of Uzbekistan into a leading textile and clothing platform. ' ,
                'margin' => '2',
            ),
        );
          get_template_part('flex-stretch-col','', $args);  
        ?>
    </div>
</section>
<section class="last-news pb-3 pb-sm-5">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2 class="mb-4 mb-sm-5">Our latest news</h2>
            </div>
        </div>
     </div>
     <div class="container mt-2 mt-sm-5 pb-2 pb-sm-5">
            <?php
                $args = array(
                    'numberposts' => 2,
                    'category' => 6,
                    'post_status' => 'publish',
                );
                get_template_part('news-two-col','',$args);     
            ?>
     </div>
</section>


<?php get_footer(); ?>

