<?php get_header(); ?>

<div id="content">


    <div class="container-1">
        <div class="background-1">
            <?php $image = get_field('background-1'); ?>
            <img src="<?php echo $image['url']; ?>" alt="efef">
        </div>
        <div class="intro-section__global-container">
            
            <div class="intro-section__title-container">
                <?php if( get_field('intro-title-1') ): ?>
                    <div class="intro-section__title-container__title">
                        <?php the_field('intro-title-1'); ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="intro-section__text-container">
                <?php if( get_field('intro-text-1') ): ?>
                    <div class="intro-section__text-container__text">
                        <?php the_field('intro-text-1'); ?>
                    </div>
                <?php endif; ?> 
            </div> 
        </div>
    </div>
    <div class="container-2">
        <div class="background-2">
            <?php $image = get_field('background-2'); ?>
            <img src="<?php echo $image['url']; ?>" alt="efef">
        </div>
        <div class="intro-section__global-container">
            <div class="intro-section__title-container">
                <?php if( get_field('intro-title-2') ): ?>
                    <div class="intro-section__title-container__title">
                        <?php the_field('intro-title-2'); ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="intro-section__text-container">
                <?php if( get_field('intro-text-2') ): ?>
                    <div class="intro-section__text-container__text">
                        <?php the_field('intro-text-2'); ?>
                    </div>
                <?php endif; ?> 
            </div> 
        </div>
    </div>
    <div class="container-3">
        <div class="background-3">
            <?php $image = get_field('background-3'); ?>
            <img src="<?php echo $image['url']; ?>" alt="efef">
        </div>
        <div class="intro-section__global-container">
            <div class="intro-section__title-container">
                <?php if( get_field('intro-title-3') ): ?>
                    <div class="intro-section__title-container__title">
                        <?php the_field('intro-title-3'); ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="intro-section__text-container">
                <?php if( get_field('intro-text-3') ): ?>
                    <div class="intro-section__text-container__text">
                        <?php the_field('intro-text-3'); ?>
                    </div>
                <?php endif; ?> 
            </div>
        </div>
    </div>


    <div class="intro-slide__controller-container">
        <!-- <div class="current_slide_indicator"></div> -->
        <div class="intro-slide__controller-container__slide_1 intro-slide__slide">1</div>
        <div class="intro-slide__controller-container__slide_2 intro-slide__slide">2</div>
        <div class="intro-slide__controller-container__slide_3 intro-slide__slide">3</div>
    </div>

    <div class="calltoAction_click-container">
        <a href="<?= get_permalink(get_field('link')) ?>">
            click to continue
        </a> 
    </div>
</div> 

<?php get_footer(); //appel du template footer.php ?>
