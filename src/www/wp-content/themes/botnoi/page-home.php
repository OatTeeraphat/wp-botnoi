<?php 
    /* 
    Template Name: Home Page
    */
    get_header();

    $blog_response = file_get_contents('https://api.rss2json.com/v1/api.json?rss_url=https%3A%2F%2Fmedium.com%2Ffeed%2Fbotnoi-classroom&api_key=zu9i6ayibkcmm8xwrclonghbacezgpvzirzv7uso&order_by=pubDate&count=6');
    $blog_response = json_decode($blog_response, true);

    $case_response = file_get_contents('https://api.rss2json.com/v1/api.json?rss_url=https%3A%2F%2Fmedium.com%2Ffeed%2Fbotnoi-classroom&api_key=zu9i6ayibkcmm8xwrclonghbacezgpvzirzv7uso&order_by=pubDate&count=6');
    $case_response = json_decode($case_response, true);
    
    $our_client = get_field('home_our_client');
	$our_partner = get_field('home_our_partner');

    
?>

        <!-- Hero -->
        <section class="home_hero" id="hero">
            
            <div class="container">

                <div class="row">
                    <div class="col-12 home_hero-content">
                        <div class="row">
                            <div class="col-12 col-lg-7 mt-5 pt-3 mb-5 pt-md-5 mt-md-5">
                                <?php the_field('hero_content'); ?>
                                <?php if ( get_field('hero_btn') ) :?>
                                    <a class="btn btn-primary text-dark btn-lg mt-3" href="<?php echo get_field('hero_btn')['hero_btn_link'] ?>" ><?php echo get_field('hero_btn')['hero_btn_title'] ?></a>
                                <?php endif;?>
                            </div>
                            <img class="home_hero-image d-none d-lg-flex" src="<?php the_field('hero_image'); ?>" alt="">
                        </div>
                    </div>
                </div>

            </div>

            
        </section>
        <!-- .Hero -->

        <!-- Service -->

        <section class="home_service">

            <div class="container">

                <div class="row text-white justify-content-center">
                    <h2>
                        OUR SERVICES
                    </h2>
                </div>
    
                <div class="row px-3 px-md-0 home_service-container">
                    
                    <?php 
                    while( have_rows('home_service') ) : the_row();
                    ?>

                    <div class="col-12 col-md-4 home_service-card-container">
    
                        <div class="card card-gradient home_service-card">
                            <div class="card-body">
                                <img class="" src="<?php echo get_sub_field('home_service_image')['sizes']['medium']; ?>" alt="">
                                <h3 class="mb-3">
                                    <?php echo get_sub_field('home_service_title'); ?>
                                </h3>
                                <p class="mb-3">
                                    <?php echo get_sub_field('home_service_desc'); ?>
                                </p>
                            </div>
                            <div class="card-button">
                                <a href="<?php echo get_sub_field('home_service_btn')['home_service_btn_link']; ?>" class="btn btn-link" target="_blank"><?php echo get_sub_field('home_service_btn')['home_service_btn_title']; ?> →</a>
                            </div>
                        </div>
                    
                    </div>

                    <?php 
                    endwhile;
                    ?>

                </div>

            </div>

        </section>

        <!-- .Service -->

        <!-- Hilight -->

        <section class="home_hilight" style="background-image: url('<?php echo get_template_directory_uri(); ?>/src/images/botnoi_wave-hilight.png');">

            <div class="container">

                <div class="row text-white justify-content-center">
                    <h2>
                        Our Highlights
                    </h2>
                </div>
    
                <div class="row justify-content-center">
                    
                    <div class="col-12 col-md-10">

                        <div class="row owl-carousel img-carousel">

                        <?php
                        $post = array_slice($case_response['items'], 0, 6);
                        foreach ($post as $key => $value) :
                        ?>  
                            <div class="col-12 mb-4 mb-md-0 img-carousel-item">

                                <a href="<?php echo $value['link'];?>" class="line-none" target="_blank">
                                    <div class="card card-gradient home_hilight-card" style="background-image: url('<?php echo $value['thumbnail']; ?>');">
                                        <div class="card-body">
                                            <p class="mb-5 home_hilight-title">
                                                <?php echo $value['title']; ?>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            
                            </div>

                        <?php 
                        endforeach; 
                        ?>
                            
                        
                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!-- .Hilight -->

        <!-- Partner -->
        
        <section class="home_partner">

            <div class="container">
				
				<?php if( $our_partner ):?>
                <div class="row text-white justify-content-center">
                    <h2>
                        PARTNERS
                    </h2>
                </div>

                <div class="row mb-4 justify-content-around home_partner-logo">
                    <?php foreach( $our_partner as $partner ):?>
						<div class="col-5 mb-5 col-md-3 px-4 d-flex align-items-center">
							<img src="<?php echo $partner['sizes']['medium']?>" alt="">
						</div>
					<?php endforeach;?>
                </div>
				<?php endif; ?>

                <div class="row mb-4 text-white justify-content-center">
                    <h4>
                        <strong>CLIENTS</strong>
                    </h4>
                </div>


                <?php
                if( $our_client ):
                ?>

                
					
					<?php if (wp_is_mobile()) : ?>
				
					<div class="row justify-content-center owl-carousel img-carousel2 m-0">
						
						<?php $card_per_page = 3;?>
						<?php for ($i = 0; $i <= floor(count($our_client)/$card_per_page); $i++) :?>
							<div class="col-12">
								<div class="row justify-content-center">
									<?php for ($j = 0; $j <= $card_per_page - 1; $j++) :
									$card_page = $card_per_page * $i;
									$_img = esc_url($our_client[$card_page + $j]['sizes']['medium']);
									?>
									<div class="col-12 px-3 img-carousel-item">
										<div class='home_partner-client <?php echo empty($_img) ? "opacity-0" : ""; ?>'>
											<img src="<?php echo $_img; ?>" alt="">
										</div>
									</div>
									<?php endfor;?>
								</div>
							</div>
						<?php endfor;?>
						
					</div>
				
					<?php else :?>
				
					<div class="row justify-content-around">
						<?php foreach( $our_client as $image ):?>
							<div class="col-6 col-md-3">
								<div class="home_partner-client">
									<img src="<?php echo esc_url($image['sizes']['medium']); ?>" alt="">
								</div>
							</div>
						<?php endforeach;?>
					</div>
				
					<?php endif; ?>                
                
                <?php endif; ?>

            </div>  

        </section>

        <!-- .Partner -->


        <!-- News -->
        
        <section class="home_news" style="background-image: url('<?php echo get_template_directory_uri(); ?>/src/images/botnoi_wave-news.png');">

            <div class="container">

                <div class="row text-white justify-content-center">
                    <h2>
                        Latest Articles
                    </h2>
                </div>

                <div class="row justify-content-around owl-carousel img-carousel">

                    <?php
                        $post = array_slice($blog_response['items'], 0, 6);
                        foreach ($post as $key => $value) :
                    ?>  
                        <div class="col-12 text-white mb-5 mb-md-0 px-3 px-md-3 img-carousel-item">

                            <div class="card card-gradient home_news-card mb-3" style="background-image: url('<?php echo $value['thumbnail']; ?>');">
                                <div class="card-body">
                                </div>
                            </div>
                            <h3 class="mb-3">
                                <?php echo $value['title']; ?>
                            </h3>
                            <p class="mb-3">
                            <?php
                                echo substr(strip_tags($value['description']), 0, 600);
                            ?>
                            </p>
                            <a class="btn btn-primary text-dark" href="<?php echo $value['link']; ?>" target="_blank" role="button">
                                Read More
                            </a>

                        </div>
                    <?php     
                        endforeach;
                    ?>
                    

                </div>

            </div>

        </section>


        <!-- .News -->

        <script>
        jQuery(document).ready(function(){
            jQuery('.img-carousel').owlCarousel({
                items: 3,
                loop: true,
                autoplay: true,
                dots: true,
                nav: false,
                responsive:{
                    0   : { items: 1 },
                    600 : { items: 3 }
                }
            });
        })
			
		jQuery(document).ready(function(){
            jQuery('.img-carousel2').owlCarousel({
                items: 1,
                loop: true,
                autoplay: true,
                dots: true,
                nav: false,
				responsive:{
                    0   : { items: 1 },
                    600 : { items: 2 },
					1200 : { items: 3 }
                }
            });
        })

        </script>

    <?php
    get_footer();
    ?>