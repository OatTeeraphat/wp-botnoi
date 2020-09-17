<?php 
    /* 
    Template Name: AI & Data Page
    */
    get_header();
?>

        <!-- Hero -->
        <section class="home_hero" id="hero">
            
            <div class="container">

                <div class="row">
                    <div class="col-12 home_hero-content">
                        <div class="row">
                                <div class="col-12 col-lg-7 pt-5 mt-5">
                                <?php the_field('hero_content'); ?>
                                <?php if ( get_field('hero_btn') ) :?>
                                    <a class="btn btn-primary text-dark btn-lg mt-3" href="<?php echo get_field('hero_btn')['hero_btn_link'] ?>" ><?php echo get_field('hero_btn')['hero_btn_title'] ?></a>
                                <?php endif;?>
                                <div class="row d-none">
                                    <div class="col-12 mt-3 mb-3">
                                        <img style="max-width: 63px;" src="<?php echo get_template_directory_uri(); ?>/src/images/botnoi_social-line.png" /><img class="ml-5 mr-5" style="max-width: 63px;" src="<?php echo get_template_directory_uri(); ?>/src/images/botnoi_social-fb.png" /><img style="max-width: 63px;" src="<?php echo get_template_directory_uri(); ?>/src/images/botnoi_social-web.png" />
                                    </div>
                                </div>
                            </div>
                            <img class="industry_hero-image d-none d-lg-block pl-5" src="<?php the_field('hero_image'); ?>" alt="">
                        </div>
                    </div>
                </div>

            </div>
            
        </section>
        <!-- .Hero -->

        <!-- Data Service -->

        <section class="industry_data_service">
            <div class="container">
                <div class="row">
                    <div class="col-5 d-none d-lg-block">
                        <img src="<?php echo get_template_directory_uri();?>/src/images/botnoi-wave-hand.png" class="left-cover" />
                    </div>
                    <div class="col-12 col-lg-7 col-md-12">
                        <?php the_field('datasci_description'); ?>
                    </div>
                </div>
            </div>
        </section>

        <!-- .Data Service -->

        <!-- Service -->
        <section class="industry_service">
            <div class="container">
                <div class="row text-white justify-content-center">
                    <h2>OUR SERVICES</h2>
                </div>

                <div class="row mb-5">
                    <div class="col-12 mb-5 text-center tetxt-md-left">
                        <h4>
                            <strong>AI SOLUTION</strong>
                        </h4>
                    </div>

                    <div class="col-12">
                        <div class="row justify-content-center">
                            <div class="col-8 col-md-3 mb-4 mb-md-3">
                                <div class="square-box-container">
                                    <div class="square-box-content rounded card-gradient py-4 d-flex flex-column align-items-center justify-content-center">
                                        <img style="max-width: 122px;" class="mb-4" src="<?php echo get_template_directory_uri(); ?>/src/images/monitoring.png" />
                                        <h5 class="mb-0">Natural Language<br>Processing</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-8 col-md-3 mb-4 mb-md-3">
                                <div class="square-box-container">
                                    <div class="square-box-content rounded card-gradient py-4 d-flex flex-column align-items-center justify-content-center">
                                        <img style="max-width: 122px;" class="mb-4" src="<?php echo get_template_directory_uri(); ?>/src/images/chat_content_management.png" />
                                        <h5 class="mb-0">Speech<br>Recognition</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-8 col-md-3 mb-4 mb-md-3">
                                <div class="square-box-container">
                                    <div class="square-box-content rounded card-gradient py-4 d-flex flex-column align-items-center justify-content-center">
                                        <img style="max-width: 122px;" class="mb-4" src="<?php echo get_template_directory_uri(); ?>/src/images/margeting_segment.png" />
                                        <h5 class="mb-0">Computer<br>Vision</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-8 col-md-3 mb-4 mb-md-3">
                                <div class="square-box-container">
                                    <div class="square-box-content rounded card-gradient py-4 d-flex flex-column align-items-center justify-content-center">
                                        <img style="max-width: 122px;" class="mb-4" src="<?php echo get_template_directory_uri(); ?>/src/images/leads.png" />
                                        <h5 class="mb-0">Machine<br>Learning</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 mb-5 text-center tetxt-md-left">
                        <h4>
                            <strong>DATA SERVICES</strong>
                        </h4>
                    </div>

                    <div class="col-12">
                        <div class="row justify-content-center">
                            <div class="col-8 col-md-3 mb-4 mb-md-3">
                                <div class="square-box-container">
                                    <div class="square-box-content rounded card-gradient py-4 d-flex flex-column align-items-center justify-content-center">
                                        <img style="max-width: 122px;" class="mb-4" src="<?php echo get_template_directory_uri(); ?>/src/images/live_chat.png" />
                                        <h5 class="mb-0">Data<br>Engineering</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-8 col-md-3 mb-4 mb-md-3">
                                <div class="square-box-container">
                                    <div class="square-box-content rounded card-gradient py-4 d-flex flex-column align-items-center justify-content-center">
                                        <img style="max-width: 122px;" class="mb-4" src="<?php echo get_template_directory_uri(); ?>/src/images/api_integration.png" />
                                        <h5 class="mb-0">Data Science</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-8 col-md-3 mb-4 mb-md-3">
                                <div class="square-box-container">
                                    <div class="square-box-content rounded card-gradient py-4 d-flex flex-column align-items-center justify-content-center">
                                        <img style="max-width: 122px;" class="mb-4" src="<?php echo get_template_directory_uri(); ?>/src/images/report.png" />
                                        <h5 class="mb-0">Data Analytics<br>Consultant</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-8 col-md-3 mb-4 mb-md-3">
                                <div class="square-box-container">
                                    <div class="square-box-content rounded card-gradient py-4 d-flex flex-column align-items-center justify-content-center">
                                        <img style="max-width: 122px;" class="mb-4" src="<?php echo get_template_directory_uri(); ?>/src/images/report.png" />
                                        <h5 class="mb-0">AI & Data Science<br>Training</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- .Service -->

        <!-- Product -->
        <section class="industry_product">

            <?php
                $product = get_field('datasci_product');
                $product_slide = $product['datasci_product_slide'];
            ?>

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-7 text-white text-center mb-5">
                        <h2 class="mb-5">PRODUCT</h2>
                        <p>
                            <?php echo $product['datasci_product_desc'];?>
                        </p>
                    </div>
                    <div class="col-12 text-center">
                        <a class="btn btn-primary text-dark" href="<?php echo $product['datasci_product_button']['link'];?>" role="button"><?php echo $product['datasci_product_button']['title'];?></a>
                    </div>
                </div>
                <div class="row justify-content-center my-5">
                    <div class="col-11 col-md-8 industry_content-container">
                        <div class="owl-carousel img-carousel">
                        <?php 
                        foreach($product_slide as $slide) :
                        ?>
                            <div class="img-carousel-item"><img src="<?php echo $slide['datasci_product_img']['sizes']['post-thumbnail']; ?>" alt=""></div>
                        <?php 
                        endforeach;
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- .Product -->

        


        <script>
        jQuery(document).ready(function(){
            jQuery('.img-carousel').owlCarousel({
                items: 1,
                loop: true,
                autoplay: true,
                dots: true,
                responsive:{
                    0   : { items: 1 },
                    600 : { items: 1 }
                }
            });
        })
        </script>

<?php
get_footer();
