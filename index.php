<?php
get_header(); ?>
<?php while (have_posts()) : the_post() ?>
    <section class="main" style="background-image: url('<?php echo get_field('pollution_bg')['url']; ?>')">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 text-center">
                    <h1 class='font'>
                        <?php the_title() ?>
                    </h1>
                    <p><?php the_content() ?></p>

                    <div class="buttonos">
                        <?php
                        $button = get_field('problem_btn');
                        ?>
                        <?php
                        $button2 = get_field('solution_btn');
                        ?>

                        <a class="btn btn-primary different-btn btn-lg" role='button' href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>
                        <a class="btn btn-primary different-btn-2 btn-lg" role='button' href="<?php echo $button2['url']; ?>" target="<?php echo $button2['target']; ?>"><?php echo $button2['title']; ?></a>
                        <button onclick="topFunction()" id="scroll_top_btn" title="Go to top"><i class="fas fa-angle-double-up"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Add WP -->
    <div class="counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Counter -->
                    <div id="counter">
                        <div class="cell">
                            <div class="counter-value number-count" data-count="231"><?php the_field("counter_one") ?></div>
                            <p class="counter-info"><?php the_field("counter_one_title") ?></p>
                        </div>
                        <div class="cell">
                            <div class="counter-value number-count" data-count="385"><?php the_field("counter_two") ?></div>
                            <p class="counter-info"><?php the_field("counter_two_title") ?></p>
                        </div>
                        <div class="cell">
                            <div class="counter-value number-count" data-count="159"><?php the_field("counter_three") ?></div>
                            <p class="counter-info"><?php the_field("counter_three_title") ?></p>
                        </div>
                        <div class="cell">
                            <div class="counter-value number-count" data-count="127"><?php the_field("counter_four") ?></div>
                            <p class="counter-info"><?php the_field("counter_four_title") ?></p>
                        </div>
                        <div class="cell">
                            <div class="counter-value number-count" data-count="211"><?php the_field("counter_five") ?></div>
                            <p class="counter-info"><?php the_field("counter_five_title") ?></p>
                        </div>
                    </div>
                    <!-- end of counter -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of counter -->


    <!-- Done WP what is carbon emission -->

    <div id="details" class="basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 text-center mb-5">
                    <div class="image-container">


                        <img src="<?php the_field("91_graph") ?>" alt="..." width="200" height="200">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-5">
                    <div class="text-container">
                        <h2><?php the_field("carbon_title") ?></h2>
                        <p><?php the_field("carbon_description") ?></p>


                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of details 1 -->



    <!-- Do WP Problem-->


    <div class="container mb-5 mt-5" id="problem">
        <!-- Start Row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="features-text section-header text-center">
                    <div>

                        <h2 class="section-title"><?php the_field("problem_title") ?></h2>
                        <div class="desc-text">
                            <p><?php the_field("problem_description") ?></p>

                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div id="details" class="basic-3">
            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container ">
                            <div>
                                <img class="img-fluid mb-4" src="<?php the_field("problem_graph") ?>" alt="alternative" width="250">
                            </div>

                            <p><?php the_field("problem_graph_description") ?></p>
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-6">
                        <div class="text-container ">
                            <div>

                                <img class="img-fluid mb-4" src="<?php the_field("problem_graph_2") ?>" alt="alternative" width="300">
                            </div>

                            <p><?php the_field("problem_graph_2_description") ?></p>
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of basic-2 -->
        <!-- end of details 1 -->



        <!-- Goals middle -->
        <section id="features" class="section">
            <div class="container mb-5 mt-5">
                <!-- Start Row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="features-text section-header text-center">
                            <div>
                                <h2 class="section-title"><?php the_field("goals_title") ?></h2>
                                <div class="desc-text">
                                    <p><?php the_field("goals_description") ?> </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- End Row -->
                <!-- Start Row  Goal 1 -->
                <div class="row featured-bg">
                    <!-- Start Col -->
                    <div class="col-lg-6 col-md-6 col-xs-12 p-0">
                        <!-- Start Fetatures -->
                        <div class="feature-item featured-border1 background-diff">
                            <div class="feature-icon float-left">
                                <img class="img-fluid" src="<?php the_field("goal_one_bulb") ?>" alt="alternative" width="170">
                            </div>
                            <div class="feature-info float-left">
                                <h4><?php the_field("goal_one_title") ?></h4>
                                <p><?php the_field("goal_one_paragraph") ?> <br> </p>
                            </div>
                        </div>
                        <!-- End Fetatures -->
                    </div>
                    <!-- End Col -->

                    <!-- Start Col -->
                    <div class="col-lg-6 col-md-6 col-xs-12 p-0">
                        <!-- Start Fetatures -->
                        <div class="feature-item featured-border2 ">
                            <div class="feature-icon float-left">
                                <img class="img-fluid" src="<?php the_field("goal_two_acid") ?>" alt="alternative" width="200">
                            </div>
                            <div class="feature-info float-left">
                                <h4><?php the_field("goal_two_title") ?></h4>
                                <p><?php the_field("goal_two_paragraph") ?> <br></p>
                            </div>
                        </div>
                        <!-- End Fetatures -->
                    </div>
                    <!-- End Col -->

                    <!-- Start Col -->
                    <div class="col-lg-6 col-md-6 col-xs-12 p-0">
                        <!-- Start Fetatures -->
                        <div class="feature-item featured-border1 ">
                            <div class="feature-icon float-left">
                                <img class="img-fluid" src="<?php the_field("goal_three_sustain") ?>" alt="alternative" width="100" height="100">
                            </div>
                            <div class="feature-info float-left">
                                <h4><?php the_field("goal_three_title") ?></h4>
                                <p><?php the_field("goal_three_paragraph") ?> <br> </p>
                            </div>
                        </div>
                        <!-- End Fetatures -->
                    </div>
                    <!-- End Col -->

                    <!-- Start Col -->
                    <div class="col-lg-6 col-md-6 col-xs-12 p-0">
                        <!-- Start Fetatures -->
                        <div class="feature-item featured-border2 background-diff">
                            <div class="feature-icon float-left">
                                <img class="img-fluid" src="<?php the_field("goal_four_wind") ?>" alt="alternative" width="200">
                            </div>
                            <div class="feature-info float-left">
                                <h4><?php the_field("goal_four_title") ?></h4>
                                <p><?php the_field("goal_four_paragraph") ?> <br></p>
                            </div>
                        </div>
                        <!-- End Fetatures -->
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>
        </section>
        <!-- Goals Middle 2-->



        <section id="features" class="section">
            <div class="container mt-4">
                <!-- Start Row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="features-text section-header text-center" id="solution">
                            <div>
                                <h2 class="section-title"><?php the_field("solution_title") ?></h2>
                                <div class="desc-text">
                                    <p><?php the_field("solution_descript") ?><br> </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- End Row -->
    </div>
    </section>
    <!-- Cool Fetatures Section End -->

    <!-- Solution Earth-->
    <div id="details" class="basic-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center mb-5">
                    <div class="image-container">
                        <img class="img-fluid" src="<?php the_field("sollution_earth_img") ?>" alt="alternative" width="170">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6 ">
                    <div class="text-container text-end">
                        <h2><?php the_field("sollution_one_title") ?></h2>
                        <p><?php the_field("sollution_one_descript") ?></p>
                        <?php
                        $button3 = get_field('earth_btn');
                        ?>
                        <a class="btn btn-primary different-btn-2 btn-lg" role='button' href="<?php echo $button3['url']; ?>" target="<?php echo $button3['target']; ?>"><?php echo $button3['title']; ?></a>
                    </div> <!-- end of text-container -->





                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- Solution Earth -->

    <!-- Solution 2 Earth-->
    <div id="details" class="basic-3">
        <div class="container">
            <div class="row">

                <div class="col-lg-6">
                    <div class="text-container text-start">
                        <h2><?php the_field("sollution_two_title") ?></h2>
                        <p><?php the_field("sollution_two_descript") ?></p>
                        <?php
                        $button4 = get_field('earth_btn_two');
                        ?>
                        <a class="btn btn-primary different-btn-2 btn-lg" role='button' href="<?php echo $button4['url']; ?>" target="<?php echo $button4['target']; ?>"><?php echo $button4['title']; ?></a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6 text-center">

                    <div class="image-container">
                        <img class="img-fluid" src="<?php the_field("sollution_earth_img_two") ?>" alt="alternative" width="130">
                    </div> <!-- end of image-container -->



                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- Solution 2 Erath End -->

    <div class="conta-1 bg-gray mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading"><?php the_field('section_title'); ?></h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div>


        <!-- Goals Section Start -->
        <section id="goals" class="section">
            <div class="container">

                <div class="row">
                    <!-- Start Col -->
                    <div class="col-lg-4 col-md-6 col-xs-12">
                        <div class="goals-item text-center">
                            <div class="icon">
                                <img src="<?php the_field("to_do_one") ?>" alt="..." width="80">
                            </div>
                            <h4><?php the_field("to_do_one_title") ?></h4>
                           
                        </div>
                    </div>
                    <!-- End Col -->
                    <!-- Start Col -->
                    <div class="col-lg-4 col-md-6 col-xs-12">
                        <div class="goals-item text-center">
                            <div class="icon">
                                <img src="<?php the_field("to_do_two") ?>" alt="..." width="80">
                            </div>
                            <h4><?php the_field("to_do_two_title") ?></h4>
                       
                        </div>
                    </div>
                    <!-- End Col -->
                    <!-- Start Col -->
                    <div class="col-lg-4 col-md-6 col-xs-12">
                        <div class="goals-item text-center">
                            <div class="icon">
                                <img src="<?php the_field("to_do_three") ?>" alt="..." width="80">
                            </div>
                            <h4><?php the_field("to_do_three_title") ?></h4>
                      
                        </div>
                    </div>
                    <!-- End Col -->

                    <!-- Start Col start 2  -->
                    <div class="col-lg-4 col-md-6 col-xs-12 mt-3">
                        <div class="goals-item text-center">
                            <div class="icon">
                                <img src="<?php the_field("to_do_four") ?>" alt="..." width="80">
                            </div>
                            <h4><?php the_field("to_do_four_title") ?></h4>
                   
                        </div>
                    </div>
                    <!-- End Col -->
                    <!-- Start Col -->
                    <div class="col-lg-4 col-md-6 col-xs-12 mt-3">
                        <div class="goals-item text-center">
                            <div class="icon">
                                <img src="<?php the_field("to_do_five") ?>" alt="..." width="80">
                            </div>
                            <h4><?php the_field("to_do_five_title") ?></h4>
                     
                        </div>
                    </div>
                    <!-- End Col -->
                    <!-- Start Col -->
                    <div class="col-lg-4 col-md-6 col-xs-12 mt-3">
                        <div class="goals-item text-center">
                            <div class="icon">
                                <img src="<?php the_field("to_do_six") ?>" alt="..." width="80">
                            </div>
                            <h4><?php the_field("to_do_six_title") ?></h4>
                          
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Goals Section End -->





        <script type="text/javascript" src="<?= get_template_directory_uri(); ?>/my-js.js"></script>

    <?php endwhile; ?>
    <?php get_footer(); ?>