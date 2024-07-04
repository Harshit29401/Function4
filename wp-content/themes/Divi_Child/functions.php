<?php

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );}
	

//======================================================================
// CUSTOM DASHBOARD
//======================================================================
// ADMIN FOOTER TEXT
function remove_footer_admin () {
    echo "Divi Child Theme";
} 

add_filter('admin_footer_text', 'remove_footer_admin');


function enqueue_slider_scripts() {
    // Enqueue Slick CSS
    wp_enqueue_style('slick-css', get_stylesheet_directory_uri() . '/slick/slick.css');

    //custom css
    // wp_enqueue_style('custom-css', get_stylesheet_directory_uri() . '/slider/custom-style.css');

    // Enqueue jQuery
    wp_enqueue_script('jquery');

    // Enqueue Slick JS
    wp_enqueue_script('slick-js', get_stylesheet_directory_uri() . '/slick/slick.js', array('jquery'), '', true);
}

add_action('wp_enqueue_scripts', 'enqueue_slider_scripts');

function slider_shortcode() {
    ob_start(); ?>

    <section>
        <div class="testimonials">
            <div class="testimonial_cards">
                <section class="testimonial slider">
                    <div class="sliide">
                        <div class="slide-card">
                            <div class="slide-card-img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?> /slider/Image.png" alt="Insight & Resources" class="slide-img">
                            </div>
                            <div class="slide-card-description">
                                <p class="insight-date">02/04/24</p>
                                <p class="insight-description">Increase Productivity and Collaboration with Unified Communications</p>
                                <p class="insight-link"><a href="#">Read Article &gt;</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="sliide">
                        <div class="slide-card">
                            <div class="slide-card-img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?> /slider/Image1.png" alt="Insight & Resources" class="slide-img">
                            </div>
                            <div class="slide-card-description">
                                <p class="insight-date">02/04/24</p>
                                <p class="insight-description">Function4 Launches New Cybersecurity Insurance Program with techrug to Protect Local Businesses</p>
                                <p class="insight-link"><a href="#">Read Article &gt;</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="sliide">
                        <div class="slide-card">
                            <div class="slide-card-img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?> /slider/Image2.png" alt="Insight & Resources" class="slide-img">
                            </div>
                            <div class="slide-card-description">
                                <p class="insight-date">02/04/24</p>
                                <p class="insight-description">Why Is AP and AR Automation Beneficial for Your Business?</p>
                                <p class="insight-link"><a href="#">Read Article &gt;</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="sliide">
                        <div class="slide-card">
                            <div class="slide-card-img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?> /slider/Image.png" alt="Insight & Resources" class="slide-img">
                            </div>
                            <div class="slide-card-description">
                                <p class="insight-date">02/04/24</p>
                                <p class="insight-description">Increase Productivity and Collaboration with Unified Communications</p>
                                <p class="insight-link"><a href="#">Read Article &gt;</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="sliide">
                        <div class="slide-card">
                            <div class="slide-card-img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?> /slider/Image.png" alt="Insight & Resources" class="slide-img">
                            </div>
                            <div class="slide-card-description">
                                <p class="insight-date">02/04/24</p>
                                <p class="insight-description">Increase Productivity and Collaboration with Unified Communications</p>
                                <p class="insight-link"><a href="#">Read Article &gt;</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- Repeat other slide items here -->
                </section>
            </div>
        </div>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('.testimonial').slick({
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    autoplay: false,
                    arrows: true,
                    dots: true,
                    adaptiveHeight: true,
                    responsive: [{
                            breakpoint: 980,
                            settings: {
                                slidesToShow: 2
                            }
                        },
                        {
                            breakpoint: 576,
                            settings: {
                                slidesToShow: 1
                            }
                        }
                    ]
                });
            });
        </script>
    </section>

    <?php
    return ob_get_clean();
}
add_shortcode('slider', 'slider_shortcode');

