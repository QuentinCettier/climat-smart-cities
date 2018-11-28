<?php 

    function get_link_by_slug($slug, $type = 'post'){
        $post = get_page_by_path($slug, OBJECT, $type);
        return get_permalink($post->ID);
    }

   
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />

        <!-- Appel du fichier style.css de notre thème -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.0/TweenMax.min.js"></script>
        <!--
            Tout le contenu de la partie head de mon site
         -->
        <title>Smart Worlds</title>
        <!-- Execution de la fonction wp_head() obligatoire ! -->
        <?php wp_head(); ?>
    </head>

    
    <body <?php body_class(); ?>>
        
        <header id="header">
            <div class="menu__container">
                <ul class="menu__container--list">
                    <li class="menu--item" data-img="Home.png" data-color="99C862">
                        <a href="http://smartcities.qcettier.fr/smartcities/Climat/introduction/">Home</a>

                        <div class="menu-item--image">
                            <img src="<?php echo get_template_directory_uri() . '/assets/Home_img.png'; ?>" alt="" class="menu--image">
                        </div>
                    </li>
                    <li class="menu--item" data-img="Water.png" data-color="627AC8">
                        
                        <a href="<?= get_permalink(87) ?>">Water</a>
                        <div class="menu-item--image">
                            <img src="<?php echo get_template_directory_uri() . '/assets/water.png'; ?>" alt="" class="menu--image">
                        </div>
                    </li>
                    <li class="menu--item" data-img="Self-Sufficient.png" data-color="C88762">
                        <a href="<?= get_permalink(131) ?>">Self-Suffiency</a>
                        <div class="menu-item--image">
                            <img src="<?php echo get_template_directory_uri() . '/assets/self.png'; ?>" alt="" class="menu--image">
                        </div>

                    </li>
                    <li class="menu--item" data-img="Transport.png" data-color="8862C8">
                        <a href="<?= get_permalink(164) ?>">Transports</a>
                        <div class="menu-item--image">
                            <img src="<?php echo get_template_directory_uri() . '/assets/trans.png'; ?>" alt="" class="menu--image">
                        </div>
                    </li>
                    <li class="menu--item" data-img="Pollution.png" data-color="62B1C8">
                        <a href="<?= get_permalink(136) ?>">Pollution</a>
                        <div class="menu-item--image">
                            <img src="<?php echo get_template_directory_uri() . '/assets/pollution.png'; ?>" alt="" class="menu--image">
                        </div>
                    </li>

                </ul>
            </div>
            <div class="CTA_menu">menu.</div>
        </header>
        