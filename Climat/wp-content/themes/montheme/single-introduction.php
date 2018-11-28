<?php get_header(); ?>

<div id="content">
    <div class="intro-section__global-container">
        <div class="intro-section__title-container">
            <?php if( get_field('intro-title') ): ?>
                <div class="intro-section__title-container__title">
                    <?php the_field('intro-title'); ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="intro-section__text-container">
            <?php if( get_field('intro-text') ): ?>
                <div class="intro-section__text-container__text">
                    <?php the_field('intro-text'); ?>
                </div>
            <?php endif; ?> 
        </div> 
    </div>
        
    <div class="background--image">
        <?php $image = get_field('background-image'); ?>
        <img src="<?php echo $image['url']; ?>" alt="efef">
    </div>

    <div class="calltoAction_click-container">
        <a href="<?= get_permalink(get_field('link')) ?>">
            click to continue
        </a> 
    </div>

</div> 

<?php get_footer(); //appel du template footer.php ?>
