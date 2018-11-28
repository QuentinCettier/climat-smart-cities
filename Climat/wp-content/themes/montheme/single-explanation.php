<?php get_header(); ?>

<div id="content">

    <div class="intro-section__global-container">
        <div class="intro-section__title-container">
            <?php if( get_field('title') ): ?>
                <div class="intro-section__title-container__title">
                    <?php the_field('title'); ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="intro-section__text-container">
            <?php if( get_field('title-sentence') ): ?>
                <div class="intro-section__text-container__text">
                    <?php the_field('title-sentence'); ?>
                </div>
            <?php endif; ?> 
        </div> 
    </div>
        
    <div class="plus-intro-part" data-color="<?php the_field('color'); ?>">
        <div class="plus-intro-part__text-container">
            <?php if( get_field('paragraph-title-1') ): ?>
                <div class="plus-intro-part__text-container__titre-1">
                    <?php the_field('paragraph-title-1'); ?>
                </div>
            <?php endif; ?> 
            <?php if( get_field('paragraph-sentence-1') ): ?>
                <div class="plus-intro-part__text-container__text-1">
                    <?php the_field('paragraph-sentence-1'); ?>
                </div>
            <?php endif; ?> 
            <?php if( get_field('paragraph-title-2') ): ?>
                <div class="plus-intro-part__text-container__titre-2">
                    <?php the_field('paragraph-title-2'); ?>
                </div>
            <?php endif; ?> 
            <?php if( get_field('paragraph-sentence-2') ): ?>
                <div class="plus-intro-part__text-container__text-2">
                    <?php the_field('paragraph-sentence-2'); ?>
                </div>
            <?php endif; ?> 
            <?php if( get_field('paragraph-title-3') ): ?>
                <div class="plus-intro-part__text-container__titre-3">
                    <?php the_field('paragraph-title-3'); ?>
                </div>
            <?php endif; ?> 
            <?php if( get_field('paragraph-sentence-3') ): ?>
                <div class="plus-intro-part__text-container__text-3">
                    <?php the_field('paragraph-sentence-3'); ?>
                </div>
            <?php endif; ?> 
        </div>
    </div>

    <div class="background--image">
        <?php $image = get_field('background'); ?>
        <img src="<?php echo $image['url']; ?>" alt="efef">
    </div>

    <div class="plus-icon">
        <div class="plus-icon__line-1"></div>
        <div class="plus-icon__line-2"></div>
    </div>

     
    <div class="calltoAction_click-container">
        <a href="<?= get_permalink(get_field('link')) ?>">
            click to continue
        </a> 
    </div>
</div> 

<?php get_footer(); //appel du template footer.php ?>
