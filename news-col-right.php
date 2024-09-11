<div class="d-flex align-items-top flex-column flex-md-row mb-4">
    <div class="d-flex-inline">
        <img class="img-fluid" src="<?php echo $post_img; ?>" alt=""/>
    </div>
    <div class="d-flex-inline flex-column">
        <div class="d-flex news-date">
                <span class="home_news_day"><?= $d ?>.</span><span class="home_news_month"><?= $m ?></span>/<span class="home_news_year"><?= $y ?></span>
        </div>    
        <div class="d-flex news-title"><?php echo the_title() ?></div>
        <div class="d-flex news-short"><?= $short_text ?></div>
        <div class="d-flex news-more"><a href="<?= get_permalink() ?>">find out more ></a></div>
    </div>
</div>  