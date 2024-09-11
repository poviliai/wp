<?php
/**
 * The template for displaying 404 pages (Not Found).
 */

get_header(); ?>
<section style="background:url('<?=get_template_directory_uri()?>/images/404.jpg') no-repeat;" class="not-found pt-2 pt-sm-5">
    <div class="container bg-white">
		<div class="row">
             <div class="col text-center px-2 px-sm-5 py-2 py-sm-5">
                  <h1 class="mb-2 mb-5">404</h1>
				  <p class="mb-2 mb-5"> Page you are looking for doesn't exist or another error occured.</p>
				  <p class="mb-2 mb-5">Go to <a href="/" class="">Home Page</a>, or <a href="/contact/" class="">Contact us</a></p>
			 </div>
		</div>
	</div>

</div>
</section>
<?php get_footer(); ?>