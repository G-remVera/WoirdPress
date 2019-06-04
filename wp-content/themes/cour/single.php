<?php get_header(); ?>
Single page
    <div class="row main_content">
        <?php if ( have_posts() ) :while ( have_posts() ) :the_post(); ?>
            <article class="col-lg-8">
             <?php the_post_thumbnail('medium');?>
                <h2 class="col-lg-8"><?php the_title();?></h2>
                    <div class="col-lg-8"><?php the_content();?>
                    <?php the_category();?>
                </div>
            </article>
            <div class="col-lg-4">
                <?php if ( is_active_sidebar( 'custom-side-bar' ) ) : ?>
                    <?php dynamic_sidebar( 'custom-side-bar' ); ?>
                <?php endif; ?>
            </div>
        <?php endwhile; endif;?>
    </div>
<?php get_footer(); ?>