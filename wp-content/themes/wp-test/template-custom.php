<?php
/*
Template Name: testTempl
*/

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        
    </header>
    <main class="block">
        <section class="main-section">
            <div class="container">
                <div class="position">
                    <div class="main-info">
                        <div class="tagline">
                            TRANSFORMING IDEAS INTO SUCCESS
                        </div>
                        <h1 class="main-heading"><?php echo esc_html(get_field('main_heading')); ?></h1>
                        <div class="img-line" >
                         <img src="<?php echo get_template_directory_uri(); ?>/images/line.svg" alt="line">
                        </div>
                        <p class="sub-heading"><?php echo esc_html(get_field('sub_heading')); ?></p>
                        <a href="#" class="cta-button">Get started a project</a>
                    </div>
                    <div class="main-img">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/main-img.png" alt="Example Image">
                    </div>
                </div>
                <div class="page-content">
                    <?php
                    // Перевіряємо, чи є пости для відображення
                    if ( have_posts() ) :
                        while ( have_posts() ) : the_post();
                            // Виведення контенту сторінки або запису
                            the_content();
                        endwhile;
                    endif;
                    ?>
                </div>
                
            </div>
        </section>
    </main>
    <footer>
       
    </footer>
    <?php wp_footer(); ?>
</body>
</html>


