<?php 
    /* 
    Template Name: Privacy Page
    */
    get_header();

?>

	<div class="container mb-5">
		
		<h1 class="mt-5 pt-5">
			Privacy <span style="color:#00ffff">Policy</span>
		</h1>
		
		<div class="row my-5">
			<div class="col">
				<?php the_field('privacy_content'); ?>
			</div>
		</div>

		
	</div>
	<style>
		h2{
			margin-top : 60px
		}
		h3{
			margin-top : 45px
			margin-bottom : 15px
		}
		h4{
			margin-top: 30px;
		}
		p{
			margin: 10px 0;
		}
	</style>



<?php
get_footer();