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
            <section class="container">
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
            <section class="container our-product">
                <?php
                echo the_field("OurProduct");
                ?>
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
            <section class="container globe-particles my-5">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <a href="#">
                                <?php
                                $image = get_field('FirstOfFourth');
                                if (!empty($image)) : ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                            </a>
                            <a href="#">
                                <?= the_field("FirstTextOfFourth"); ?>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <a href="#">
                                <?php
                                $image = get_field('SecondOfFourth');
                                if (!empty($image)) : ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                            </a>
                            <a href="#">
                                <?= the_field("SecondTextOfFourth"); ?>

                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <a href="#">
                                <?php
                                $image = get_field('ThirdOfFourth');
                                if (!empty($image)) : ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                            </a>
                            <a href="#">
                                <?= the_field("thirdTextOfFourth"); ?>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <a href="#">
                                <?php
                                $image = get_field('fourOfFourth');
                                if (!empty($image)) : ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>

                            </a>
                            <a href="#">
                                <?= the_field("fourTextOfFourth"); ?>

                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="container our-product my-5">
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
            <section class="container my-5 time-line">
                <h2>
                    <?= the_field("HeadingTimrLine"); ?>
                </h2>
                <div class="row">
                    <div class="col-3">
                        <div class="number text-center">
                            <?= the_field("FirstNumberInTimeLine"); ?>
                        </div>
                        <div class="content">
                            <?= the_field("TextFirstTimeLine"); ?>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="number text-center">
                            <?= the_field("secondNumberInTimeLine"); ?>
                        </div>
                        <div class="content">
                            <?= the_field("TextSecondTimeLine"); ?>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="number text-center">
                            <?= the_field("thirdNumberInTimeLine"); ?>
                        </div>
                        <div class="content">
                            <?= the_field("TextthirdTimeLine"); ?>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="number text-center">
                            <?= the_field("fourthNumberInTimeLine"); ?>
                        </div>
                        <div class="content">
                            <?= the_field("TextfourthTimeLine"); ?>
                        </div>
                    </div>
                </div>
            </section>
            <section class="container-fluid bg-semidark p-5">
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
            <section class="container d-flex align-items-center my-3 contactus">
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

                    </div>
                </div>
            </section>
            <div class="container-fluid bg-semidark">
                <section class="container paymentmethod py-md-5 ">
                    <h2>
                        شیوه های پرداخت مبلغ خرید ارزها
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
                                'terms'         => 'trade-tuts',
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
