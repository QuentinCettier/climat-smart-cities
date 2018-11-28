<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<div id="content">
    <?php
    // boucle WordPress
    if (have_posts()){
        while (have_posts()){
            the_post();
    ?>
            <p><?php the_content(); ?></p>
    <?php
    }
    }
    else {
    ?>
    Nous n'avons pas trouvé d'article répondant à votre recherche
    <?php
    }
    
    ?>
    <div class="background">
        <img class="background-image" src="<?php echo get_template_directory_uri() . '/assets/Home_img.png'; ?>" />
    </div>
    <div class="home-container__title-container">
        <div class="title-container__title-1">
            <div class="home__title-1">
                SMART
            </div>
        </div>
        <div class="title-container__title-2">
            <div class="home__title-2">
                <img src="<?php echo get_template_directory_uri() . '/assets/worlds.png'; ?>" class="home__world-image"></img>
            </div>
        </div>
    </div>
    

    <div class="calltoAction_click-container">
        <a href="<?= get_permalink(11) ?>">
            click to continue
        </a> 
    </div>
</div> 

<?php get_footer(); //appel du template footer.php ?>
