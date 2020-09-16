<?php 
    /* 
    Template Name: Chatbot Page
    */
    get_header();

    $case_response = file_get_contents('https://api.rss2json.com/v1/api.json?rss_url=https%3A%2F%2Fmedium.com%2Ffeed%2Fbotnoi-classroom&api_key=zu9i6ayibkcmm8xwrclonghbacezgpvzirzv7uso&order_by=pubDate&count=6');
    $case_response = json_decode($case_response, true);
    
?>

    <!-- Hero -->
    <section class="home_hero" id="hero">
            
        <div class="container">

            <div class="row">
                <div class="col-12 home_hero-content">
                    <div class="row">
                        <div class="col-12 col-lg-7 pt-5 mt-5">
                            <?php the_field('hero_content'); ?>
                            <div class="row d-none">
                                <div class="col-12 mt-3 mb-3">
                                    <img style="max-width: 63px;" src="<?php echo get_template_directory_uri(); ?>/src/images/botnoi_social-line.png" /><img class="ml-5 mr-5" style="max-width: 63px;" src="<?php echo get_template_directory_uri(); ?>/src/images/botnoi_social-fb.png" /><img style="max-width: 63px;" src="<?php echo get_template_directory_uri(); ?>/src/images/botnoi_social-web.png" />
                                </div>
                            </div>
                            <a class="btn btn-primary text-dark btn-lg mt-5" href="<?php echo get_field('hero_btn')['hero_btn_link'] ?>" role="button"><?php echo get_field('hero_btn')['hero_btn_title'] ?></a>
                        </div>
                        <div class="col-12 col-lg-5">
                            <img class="home_hero-image d-none d-lg-flex" src="<?php the_field('hero_image'); ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </div>
        
    </section>
        <!-- .Hero -->

        <!-- Detail -->

        <section class="chatbot_detail position-relative">
            <img class="position-absolute fixed-top" style="height: 100%; width: 100%;" src="<?php echo get_template_directory_uri(); ?>/src/images/botnoi_wave.png" />
            <div class="container">
                <div class="row solution_detail-content">
                    <div class="col-12">
                        <div class="row justify-content-center">
                            <div class="col-md-4 col-sm-10 text-white text-center mb-sm-3 mb-md-0">
                                <img class="mb-5" src="<?php echo get_template_directory_uri(); ?>/src/images/user.png" />
                                <h1 class="mb-0">2 millions</h1>
                                <h4>unique users</h4>
                            </div>
                            <div class="col-md-4 col-sm-10 text-white text-center mb-sm-3 mb-md-0">
                                <img class="mb-5" src="<?php echo get_template_directory_uri(); ?>/src/images/bubble.png" />
                                <h1 class="mb-0">300 millions</h1>
                                <h4>monthly messages</h4>
                            </div>
                            <div class="col-md-4 col-sm-10 text-white text-center">
                                <img class="mb-5" style="max-width: 52px;" src="<?php echo get_template_directory_uri(); ?>/src/images/botnoi-logo.png" />
                                <h1 class="mb-0">100,000</h1>
                                <h4>online bots</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- .Detail -->

        <!-- Engine -->

        <section class="chatbot_engine">
            <div class="container">
                <div class="row justify-content-center text-center mb-5">
                    <div class="col-12">
                        <h2 class="mb-5">
                            <?php 
                                $sec_1 = get_field('chat_section1');
                                echo $sec_1['title'];
                            ?>
                        </h2>
                        <p>
                            <?php
                             echo $sec_1['desc'];
                            ?>
                        </p>
                    </div>
                </div>

                <div class="row jutify-content-center align-items-center text-center position-relative">
                    <img class="mx-auto d-block" src="<?php echo get_template_directory_uri(); ?>/src/images/engine_group.png" alt="">
                    <div class="position-absolute col-12" style="transform: translate3d(20px, 30px, 0);">
                        <a class="btn btn-primary text-dark btn-lg" href="<?php echo $sec_1['center_button']['link']; ?>" role="button">
                            <?php
                             echo $sec_1['center_button']['title'];
                            ?>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- .Engine -->

        <!-- Solution -->
        
        <section class="chatbot_solution">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-white text-center">
                        <h2>
                        <?php 
                            $sec_2 = get_field('chat_section2');
                            echo $sec_2['title'];
                        ?>
                        </h2>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-12 col-md-11 col-xl-8">
                        <div class="row text-white">
                            <div class="col-6 col-md-4 mb-3">
                                <div class="square-box-container">
                                    <div class="square-box-content rounded card-gradient py-4 d-flex flex-column align-items-center justify-content-center">
                                        <img style="max-width: 122px;" class="mb-4" src="<?php echo get_template_directory_uri(); ?>/src/images/monitoring.png" />
                                        <h5 class="mb-0">AI Training &<br>Monitoring</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 mb-3">
                                <div class="square-box-container">
                                    <div class="square-box-content rounded card-gradient py-4 d-flex flex-column align-items-center justify-content-center">
                                        <img style="max-width: 122px;" class="mb-4" src="<?php echo get_template_directory_uri(); ?>/src/images/chat_content_management.png" />
                                        <h5 class="mb-0">Chat Content<br>Management</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 mb-3">
                                <div class="square-box-container">
                                    <div class="square-box-content rounded card-gradient py-4 d-flex flex-column align-items-center justify-content-center">
                                        <img style="max-width: 122px;" class="mb-4" src="<?php echo get_template_directory_uri(); ?>/src/images/margeting_segment.png" />
                                        <h5 class="mb-0">Chat Marketing &<br>Segmentation</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 mb-3">
                                <div class="square-box-container">
                                    <div class="square-box-content rounded card-gradient py-4 d-flex flex-column align-items-center justify-content-center">
                                        <img style="max-width: 122px;" class="mb-4" src="<?php echo get_template_directory_uri(); ?>/src/images/character_design.png" />
                                        <h5 class="mb-0">Chatbot<br>Character Design</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 mb-3">
                                <div class="square-box-container">
                                    <div class="square-box-content rounded card-gradient py-4 d-flex flex-column align-items-center justify-content-center">
                                        <img style="max-width: 122px;" class="mb-4" src="<?php echo get_template_directory_uri(); ?>/src/images/leads.png" />
                                        <h5 class="mb-0">Generate<br>Qualified Leads</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 mb-3">
                                <div class="square-box-container">
                                    <div class="square-box-content rounded card-gradient py-4 d-flex flex-column align-items-center justify-content-center">
                                        <img style="max-width: 122px;" class="mb-4" src="<?php echo get_template_directory_uri(); ?>/src/images/feedback_&_survey.png" />
                                        <h5 class="mb-0">Collect Feedback<br>& Survey</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 mb-3">
                                <div class="square-box-container">
                                    <div class="square-box-content rounded card-gradient py-4 d-flex flex-column align-items-center justify-content-center">
                                        <img style="max-width: 122px;" class="mb-4" src="<?php echo get_template_directory_uri(); ?>/src/images/live_chat.png" />
                                        <h5 class="mb-0">Live Chat & Agents<br>Management</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 mb-3">
                                <div class="square-box-container">
                                    <div class="square-box-content rounded card-gradient py-4 d-flex flex-column align-items-center justify-content-center">
                                        <img style="max-width: 122px;" class="mb-4" src="<?php echo get_template_directory_uri(); ?>/src/images/api_integration.png" />
                                        <h5 class="mb-0">External API<br>Integration</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 mb-3">
                                <div class="square-box-container">
                                    <div class="square-box-content rounded card-gradient py-4 d-flex flex-column align-items-center justify-content-center">
                                        <img style="max-width: 122px;" class="mb-4" src="<?php echo get_template_directory_uri(); ?>/src/images/report.png" />
                                        <h5 class="mb-0">Chat Analytics &<br>Reports</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- .Solution -->

        <!-- Console -->

        <section class="chatbot_console">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-white text-center">
                        <h2 class="mb-5">
                        <?php 
                            $sec_3 = get_field('chat_section3');
                            echo $sec_3['title'];
                        ?>
                        </h2>
                        <p>
                            <?php 
                                echo $sec_3['desc'];
                            ?>
                        </p>
                    </div>
                </div>

                <div class="row justify-content-center my-5">
                    <div class="col-10 console_content-container">
                        <div class="owl-carousel img-carousel">
                            <?php 
                            $sliders_3 = $sec_3['slider'];
                            foreach($sliders_3 as $slider) :
                            ?>
                            <div class="img-carousel-item"><img src="<?php echo $slider['image']['url'];?>" alt=""></div>
                            <?php 
                            endforeach;
                            ?>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>

        <!-- .Console -->

        <!-- Management -->

        <section class="chatbot_management">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-white text-center">
                        <h2 class="mb-5">
                        <?php 
                            $sec_4 = get_field('chat_section4');
                            echo $sec_4['title'];
                        ?>
                        </h2>
                        <p>
                            <?php 
                                echo $sec_4['desc'];
                            ?>
                        </p>
                    </div>
                </div>

                <div class="row justify-content-center my-5">
                    <div class="col-10 console_content-container">
                        <div class="owl-carousel img-carousel">
                            <?php 
                            $sliders_4 = $sec_4['slider'];
                            foreach($sliders_4 as $slider) :
                            ?>
                            <div class="img-carousel-item"><img src="<?php echo $slider['image']['url'];?>" alt=""></div>
                            <?php 
                            endforeach;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- .Management -->

        <!-- Showcase -->

        <section class="chatbot_showcase">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-white text-center">
                        <h2>SHOWCASE</h2>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="row text-white">
                            <?php
                            $post = array_slice($case_response['items'], 0, 6);
                            foreach ($post as $key => $value) :
                            ?>  
                            <div class="col-6 col-md-4 mb-3">
                                <a href="<?php echo $value['link'];?>">
                                    <div class="box-4-3-container" style="background-image : url(<?php echo $value['thumbnail']; ?>)">
                                        <p><?php echo $value['title']; ?></p>
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

        <!-- .Showcase -->
        <script>
        jQuery(document).ready(function(){
            jQuery('.img-carousel').owlCarousel({
                items: 1,
                loop: true,
                autoplay: true,
                dots: true,
                nav: true,
                navText: ["<span class='nav-main-slider-btn'><</span>","<span class='nav-main-slider-btn'>></span>"],
                responsive:{
                    0   : { items: 2 },
                    600 : { items: 1 }
                }
            });

            jQuery('.img-carousel2').owlCarousel({
                items: 1,
                loop: true,
                autoplay: true,
                dots: true,
                nav: true,
                navText: ["<span class='nav-main-slider-btn'><</span>","<span class='nav-main-slider-btn'>></span>"],
                responsive:{
                    0   : { items: 2 },
                    600 : { items: 1 }
                }
            });

        })
        </script>

<?php
get_footer();