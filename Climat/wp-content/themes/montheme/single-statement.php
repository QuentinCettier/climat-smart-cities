<?php get_header(); ?>

<div id="content">

    
    <div class="ajax__container" id="<?php if( get_field('ajax') ): ?><?php the_field('ajax'); ?><?php endif; ?>">
        
        
        
        <div class="center">
            <?php if( get_field('sentence-1') ): ?>
                <div class="sentences conclusion--1"><?php the_field('sentence-1'); ?></div>
            <?php endif; ?>
            <?php if( get_field('sentence-2') ): ?>
                <div class="sentences conclusion--2"><?php the_field('sentence-2'); ?></div>
            <?php endif; ?>
            
        </div>

        <div class="calltoAction_click-container text--black">
            <a href="<?= get_permalink(get_field('link')) ?>">
                click to continue
            </a> 
        </div>
    </div>
        

    
    
</div> 

<?php get_footer(); //appel du template footer.php ?>
