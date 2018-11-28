<?php get_header(); ?>

<div id="content">

    <div class="player">
        <div class="video">
            <?php $file = get_field('video'); ?>
            <video name="media" controls autoplay>
                <source src="<?= $file['url']; ?>" type="video/mp4"> 
            </video>
        </div>
        <div class="description">
            <div class="text">
                <h2 class><?php the_field('video-title'); ?></h2>
                <h3><?php the_field('video-source'); ?></h3>
            </div>
        </div>
    </div>

    <div class="calltoAction_click-container">
    <a href="<?= get_permalink(get_field('link')) ?>">
        click to continue
    </a> 
</div>
</div> 

<?php get_footer(); //appel du template footer.php ?>
