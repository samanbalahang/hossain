<footer>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <h2>
                            عنوان
                        </h2>
                        <?php
                            $args = array(
                                'container' => false,
                                'theme_location' => 'footer',
                                'items_wrap' => '<ul>%3$s</ul>',
                            );
                            wp_nav_menu($args);
                        ?>
                    </div>
                    <div class="col-12 col-md-3">
                        <h2>
                            عنوان
                        </h2>
                        <?php
                            $args = array(
                                'container' => false,
                                'theme_location' => 'footerAdA',
                                'items_wrap' => '<ul>%3$s</ul>',
                            );
                            wp_nav_menu($args);
                        ?>
                    </div>
                    <div class="col-12 col-md-3">
                        <h2>
                            عنوان
                        </h2>
                        <?php
                            $args = array(
                                'container' => false,
                                'theme_location' => 'footerAdB',
                                'items_wrap' => '<ul>%3$s</ul>',
                            );
                            wp_nav_menu($args);
                        ?>
                    </div>
                    <div class="col-12 col-md-3">
                        <h2>
                            عنوان
                        </h2>
                        <?php
                        $args = array(
                            'container' => false,
                            'theme_location' => 'license',
                            'items_wrap' => '<ul>%3$s</ul>',
                        );
                        wp_nav_menu($args);
                        ?>
                    </div>
                </div>
            </div>
        </footer>
    </div>





    <script src="<?= get_template_directory_uri()  ?>/assets/js/jquery.min.js"></script>
    <script src="<?= get_template_directory_uri()  ?>/assets/js/particles.min.js"></script>
    <script src="<?= get_template_directory_uri()  ?>/assets/js/app.js"></script>
    <script src="<?= get_template_directory_uri()  ?>/assets/js/aos.js"></script>
    <script src="<?= get_template_directory_uri()  ?>/assets/js/script.js"></script>
    <script>
        AOS.init();
    </script>
    <?php wp_footer(); ?>
</body>

</html>
