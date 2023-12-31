<?php

function custom_theme_assets() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );



// Include custom template files

function include_template() {

	include( get_template_directory() . '/templates/about.php' );

	include( get_template_directory() . '/templates/products.php' );

	include( get_template_directory() . '/templates/infograins.php' );

	include( get_template_directory() . '/templates/Investment-opportunities.php' );

	include( get_template_directory() . '/templates/team-augmentation.php' );

	include( get_template_directory() . '/templates/web-development.php' );

	include( get_template_directory() . '/templates/mobile-app-development.php' );

	include( get_template_directory() . '/templates/ecommerce-solutions.php' );

	include( get_template_directory() . '/templates/engagement-models.php' );

	include( get_template_directory() . '/templates/custom-software-development.php' );

	include( get_template_directory() . '/templates/chatbot.php' );

	include( get_template_directory() . '/templates/consultancy.php' );

	include( get_template_directory() . '/templates/wireframing-and-app-prototyping.php' );

	include( get_template_directory() . '/templates/open-source.php' );

	include( get_template_directory() . '/templates/enterprise.php' );

	include( get_template_directory() . '/templates/ruby-on-rails.php' );

	include( get_template_directory() . '/templates/internet-of-things.php' );

	include( get_template_directory() . '/templates/blockchain-development-company.php' );

	include( get_template_directory() . '/templates/wearable-app-development-company.php' );

	include( get_template_directory() . '/templates/iBeacon-app-development.php' );
	
	include( get_template_directory() . '/templates/ar-vr-development-company.php' );

	include( get_template_directory() . '/templates/cloud-computing-development-services.php' );

	include( get_template_directory() . '/templates/start-ups.php' );

	include( get_template_directory() . '/templates/healthcare-it-solutions.php' );

	include( get_template_directory() . '/templates/consumer.php' );

	include( get_template_directory() . '/templates/software-solutions-for-travel-toursim.php' );

	include( get_template_directory() . '/templates/IT-solutions-for-education-sector.php' );

	include( get_template_directory() . '/templates/software-solutions-food-and-restaurants.php' );

	include( get_template_directory() . '/templates/Warehouse-Management-Software-Solutions.php' );

	include( get_template_directory() . '/templates/IT-solutions-for-real-estate.php' );

	include( get_template_directory() . '/templates/banking-finance.php' );

	include( get_template_directory() . '/templates/pharmaceuticals.php' );

	include( get_template_directory() . '/templates/energy-and-utility.php' );

	include( get_template_directory() . '/templates/e-commerce.php' );

	include( get_template_directory() . '/templates/Manufacturing.php' );

	include( get_template_directory() . '/templates/retail-automotive.php' );

	include( get_template_directory() . '/templates/social-networking.php' );

	include( get_template_directory() . '/templates/automative-software-solutions.php' );

	include( get_template_directory() . '/templates/agriculture.php' );

	include( get_template_directory() . '/templates/government.php' );

	include( get_template_directory() . '/templates/logistics-software-development.php' );

	include( get_template_directory() . '/templates/our-work.php' );

	include( get_template_directory() . '/templates/social-events.php' );

	include( get_template_directory() . '/templates/press-releases.php' );

	include( get_template_directory() . '/templates/blog.php' );

	include( get_template_directory() . '/templates/contact.php' );

	include( get_template_directory() . '/templates/career.php' );

	include( get_template_directory() . '/templates/it-events.php' );

	include( get_template_directory() . '/templates/industries-we-serve.php' );

	include( get_template_directory() . '/templates/technologies-we-work-on.php' );

	include( get_template_directory() . '/templates/testimonials.php' );

	include( get_template_directory() . '/templates/case-study.php' );

	include( get_template_directory() . '/templates/business-solution-provider.php' );
	
	include( get_template_directory() . '/templates/php-training.php' );

}	

// Define a function to add to the hook
// function my_action_function() {
    // Code to perform the action
    // echo 'Hello, world!';
// }

// Add the function to the appropriate action hook
add_action( 'wp_footer', 'my_action_function' );


function my_custom_filter( $content ) {
    $content = "<h1 style='color:red;'>" .$content. "</h1>";
    return $content;
}

add_filter( 'the_content', 'my_custom_filter' );


// function my_custom_filter( $text ) {
//     $new_text = str_replace( 'Welcome to WordPress', 'Welcome to Technorizen', $text );
//     return $new_text;
// }

// add_filter( 'the_content', 'my_custom_filter' );



// Define the shortcode function
function follow_us_link() {
    return 'Follow us on <a href="https://www.linkedin.com/company/technorizen-software-solutions-pvt-ltd/">Linkedin</a>';
}

// Register the shortcode
add_shortcode( 'follow_us', 'follow_us_link' );

