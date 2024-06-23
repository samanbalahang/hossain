<?php

/**
 * The template for displaying the homepage.
 *
 * Template name: htradeHomepage
 *
 * @package storefront
 */

get_header("custom"); ?>

<body class="home">
    <div class="particle">
        <div id="particles-js"></div>
    </div>
    <div class="orginal">
        <header>
            <nav>
                <ul class="d-block d-md-none">
                    <li>
                        <a href="#" class="bars">
                            <i class="material-icons">menu</i>
                        </a>
                    </li>
                </ul>
                <?php
                $args = array(
                    'container' => false,
                    'theme_location' => 'primary',
                    'items_wrap' => '<ul class="primary">%3$s</ul>',
                );
                wp_nav_menu($args);
                ?>
                <ul>
                    <li>
                        <a class="text-end" href="<?php echo esc_url(home_url('/')); ?>">
                            <img src="<?= get_template_directory_uri()  ?>/assets/images/brand.png" alt="brand">
                        </a>
                    </li>
                </ul>
            </nav>
        </header>
        <main>
            <section class="container"  data-aos="fade-up">
                <div class="row">
                    <div class="col-12 col-md-6 d-flex align-items-center">
                        <?php
                        $image = get_field('staticMobile');
                        if (!empty($image)) : ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>

                    </div>
                    <div class="col-12 col-md-6 pt-0 pt-md-3">
                        <?php
                        echo the_field("HeadingAndParagraph");
                        ?>
                    </div>
                </div>
            </section>
            <section class="container our-product"  data-aos="fade-up">
                <div class="row">
                    <div class="col-6 col-md-2">
                        <a href="<?= get_site_url() ?>/category/trade-tuts/" class="no-border">
                            <span class="custome-card">
                                <span class="d-flex w-100 flex-column justify-content-center align-items-center">
                                    <img src="<?= get_template_directory_uri()  ?>/assets/images/Tuturial.png" alt="آموزش ترید">
                                    <p class="mt-3">
                                        آموزش
                                    </p>
                                </span>
                            </span>
                        </a>
                    </div>
                    <div class="col-6 col-md-2">
                        <a href="<?= get_site_url() ?>/category/trade/" class="no-border">
                            <span class="custome-card">
                                <span class="d-flex w-100 flex-column justify-content-center align-items-center">
                                    <img src="<?= get_template_directory_uri()  ?>/assets/images/trade.png" alt="ترید">
                                    <p class="mt-3">
                                        ترید
                                    </p>
                                </span>
                            </span>
                        </a>
                    </div>
                    <div class="col-6 col-md-2">
                        <a href="<?= get_site_url() ?>/category/wtrader/" class="no-border">
                            <span class="custome-card">
                                <span class="d-flex w-100 flex-column justify-content-center align-items-center">
                                    <img src="<?= get_template_directory_uri()  ?>/assets/images/wtrader.png" alt="wtrader">
                                    <p class="mt-3">
                                        Wtrader
                                    </p>
                                </span>
                            </span>
                        </a>
                    </div>
                    <div class="col-6 col-md-2">
                        <a href="<?= get_site_url() ?>/category/wtrader/challenge" class="no-border">
                            <span class="custome-card">
                                <span class="d-flex w-100 flex-column justify-content-center align-items-center">
                                    <img src="<?= get_template_directory_uri()  ?>/assets/images/challenge.png" alt="challenge">
                                    <p class="mt-3">
                                        چالش ها
                                    </p>
                                </span>
                            </span>
                        </a>
                    </div>
                    <div class="col-6 col-md-2">
                        <a href="<?= get_site_url() ?>/category/wtrader/indicator" class="no-border">
                            <span class="custome-card">
                                <span class="d-flex w-100 flex-column justify-content-center align-items-center">
                                    <img src="<?= get_template_directory_uri()  ?>/assets/images/indicator.png" alt="indicator">
                                    <p class="mt-3">
                                        اندیکاتور
                                    </p>
                                </span>
                            </span>
                        </a>
                    </div>
                    <div class="col-6 col-md-2">
                        <a href="<?= get_site_url() ?>/category/wtrader/oscillator" class="no-border">
                            <span class="custome-card">
                                <span class="d-flex w-100 flex-column justify-content-center align-items-center">
                                    <img src="<?= get_template_directory_uri()  ?>/assets/images/osilator.png" alt="osilator">
                                    <p class="mt-3">
                                    اسیلاتور
                                    </p>
                                </span>
                            </span>
                        </a>
                    </div>

                </div>
            </section>
            <section class="container globe-particles my-5"  data-aos="fade-up">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <span>
                                <?php
                                $image = get_field('FirstOfFourth');
                                if (!empty($image)) : ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                                </span>
                            <span href="#">
                                <?= the_field("FirstTextOfFourth"); ?>
                            </span>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <span>
                                <?php
                                $image = get_field('SecondOfFourth');
                                if (!empty($image)) : ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                            </span>
                            <span>
                                <?= the_field("SecondTextOfFourth"); ?>

                            </span>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <span>
                                <?php
                                $image = get_field('ThirdOfFourth');
                                if (!empty($image)) : ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                            </span>
                            <span>
                                <?= the_field("thirdTextOfFourth"); ?>
                            </span>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <span>
                                <?php
                                $image = get_field('fourOfFourth');
                                if (!empty($image)) : ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>

                            </span>
                            <span>
                                <?= the_field("fourTextOfFourth"); ?>

                            </span>
                        </div>
                    </div>
                </div>
            </section>
            <section class="container our-product my-5"  data-aos="fade-up">
                <div class="row">
                <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 6,
                        'orderby'   => 'id',
                        'order' => 'DESC',
                        'tax_query'     => array(
                            array(
                                'taxonomy'      => 'category',
                                'field'         => 'slug', //This is optional, as it defaults to 
                                'terms'         => 'trade-tuts',
                            ),
                        )
                    );
                    $tradeTutsLoop = new WP_Query($args);             
                    if ($tradeTutsLoop->have_posts()) {
                        $counter = 1;
                        while ($tradeTutsLoop->have_posts()) : $tradeTutsLoop->the_post();
                            echo "                              
                            <div class='col-6 col-md-2'>
                            <a href='" . get_permalink() . "' class='no-border'>
                                <span class='custome-card'>
                                    <span class='d-flex w-100 flex-column justify-content-center align-items-center'>
                                        <img src='". get_the_post_thumbnail_url() ."' alt='Group_6784'>
                                        <p class='mt-3'>
                                        " .
                                        get_the_title()
                                        . "
                                        </p>
                                    </span>
                                </span>
                            </a>
                        </div>
                            ";
                        endwhile;
                    }
                    wp_reset_postdata();
                ?>
                </div>
            </section>
            <section class="container my-5 time-line"  data-aos="fade-up">
                <!-- <h2>
                    <?php // echo the_field("HeadingTimrLine"); ?>
                </h2> -->
                <div class="row">
                    <?php
                        $currentYear = date("Y");                    
                        $currentMonth = date("m");                    
                        $currentDay = date("d");                
                        $url = "https://api.polygon.io/v2/aggs/grouped/locale/us/market/stocks/$currentYear-$currentMonth-$currentDay?adjusted=true&apiKey=5s_aLjLSt7PQG8e5UhmwYn4Kz4tthz3T";
                        $url = "https://api.polygon.io/v2/aggs/grouped/locale/global/market/crypto/$currentYear-$currentMonth-$currentDay?adjusted=true&apiKey=5s_aLjLSt7PQG8e5UhmwYn4Kz4tthz3T";
                        $test = http_response($url);
                        $test  = json_decode($test);
                        if($test->status != "NOT_AUTHORIZED"){
                            print_r($test);
                        }
                        function http_response($url, $status = null, $wait = 3)
                        {
                            $options = array(
                                CURLOPT_RETURNTRANSFER => true,   // return web page
                                CURLOPT_HEADER         => false,  // don't return headers
                                CURLOPT_FOLLOWLOCATION => true,   // follow redirects
                                CURLOPT_MAXREDIRS      => 10,     // stop after 10 redirects
                                CURLOPT_ENCODING       => "",     // handle compressed
                                CURLOPT_USERAGENT      => "test", // name of client
                                CURLOPT_AUTOREFERER    => true,   // set referrer on redirect
                                CURLOPT_CONNECTTIMEOUT => 120,    // time-out on connect
                                CURLOPT_TIMEOUT        => 120,    // time-out on response
                                CURLOPT_HTTPGET        => TRUE,    // GET METHOD
                                CURLOPT_CUSTOMREQUEST  => 'GET'    // GET METHOD
                            ); 
                            $ch = curl_init($url);
                            curl_setopt_array($ch, $options);
                            $content  = curl_exec($ch);
                            curl_close($ch);
                            return $content;
                        }
                ?>
            </section>
            <section class="container-fluid bg-semidark p-5"  data-aos="fade-up">
                <div class="container">
                    <div class="row">
                        <div class="col-2">
                            <?php
                            $image = get_field('AccessebilityImage');
                            if (!empty($image)) : ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>

                        </div>
                        <div class="col-10">
                            <?= the_field("AccessebilityText"); ?>
                        </div>
                    </div>
                </div>
            </section>
            <section class="container d-flex align-items-center my-3 contactus"  data-aos="fade-up">
                <div class="container row">
                    <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
                        <div class="position-relative w-100 h-100  d-flex justify-content-center align-items-center">
                            <?= the_field("TextInCircle"); ?>
                            <div class="nk-circle-animation nk-df-center white small">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <?= the_field("ContactUs"); ?>
                        <div class="container-fluid">
                            <?php $form =get_field("contactform");
                            echo do_shortcode("$form") ?>
                        </div>        
                    </div>
                </div>
            </section>
            <div class="container-fluid bg-semidark">
                <section class="container paymentmethod py-md-5 "  data-aos="fade-up">
                    <h2>
                       <?= the_field("wtraders") ?>
                    </h2>
                    <div class="row">
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 6,
                        'orderby'   => 'id',
                        'order' => 'ASC',
                        'tax_query'     => array(
                            array(
                                'taxonomy'      => 'category',
                                'field'         => 'slug', //This is optional, as it defaults to 
                                'terms'         => 'wtrader',
                            ),
                        )
                    );
                    $tradeTutsLoop = new WP_Query($args);             
                    if ($tradeTutsLoop->have_posts()) {
                        $counter = 1;
                        while ($tradeTutsLoop->have_posts()) : $tradeTutsLoop->the_post();
                            echo "                              
                            <div class='col-6 col-md-4 my-3'>
                            <a href='" . get_permalink() . "' class='no-border'>
                                <span class='custome-card'>
                                    <span class='d-flex w-100 flex-column justify-content-center align-items-center'>
                                        <img src='" . get_the_post_thumbnail_url() . "' alt='Group_6784'>
                                        <p class='mt-3'>
                                        " .
                                        get_the_title()
                                        . "
                                        </p>
                                    </span>
                                </span>
                            </a>
                        </div>
                            ";
                        endwhile;
                    }
                    wp_reset_postdata();
                ?>
                        
                    </div>
                </section>
            </div>

        </main>
        <?php
        get_footer("custom");
