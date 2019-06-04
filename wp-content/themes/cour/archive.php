<?php get_header(); ?>
Archive page
    <div class="row main_content">
        <?php if ( have_posts() ) :while ( have_posts() ) :the_post(); ?>
            <article class="col-lg-12">
                <h2 class="col-lg-12"><a href="<?php echo get_permalink()?>"><?php the_title();?></a></h2>
                    <?php the_post_thumbnail('medium');?>
                    <div class="col-lg-12"><?php the_excerpt();?>
                    <?php the_category();?>
                </div>
            </article>
        <?php endwhile; endif;?>
    </div>
<?php get_footer(); ?>

