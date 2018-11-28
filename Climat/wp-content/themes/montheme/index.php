<?php
/*
Template Name: Home
*/
?>
<?php get_header(); //appel du template header.php  ?>

<div id="content" class="divided">
    <?php
    // boucle WordPress
    if (have_posts()){
        while (have_posts()){
            the_post();
    ?>
             <?php the_content(); ?> 
    <?php
    }
    }
    else {
    ?>
    Nous n'avons pas trouvé d'article répondant à votre recherche
    <?php
    }
    ?>

</div> <!-- /content -->

<?php get_footer(); //appel du template footer.php ?>
