<?php get_header(); ?>
Home page
    <div class="row main_content">
        <?php if ( have_posts() ) :while ( have_posts() ) :the_post(); ?>
            <article class="col-lg-4">
                <div class="card" style="width: 18rem;">
                    <?php the_post_thumbnail('medium');?>
                    <div class="card-body">
                        <h5 class="card-title"><a href="<?php echo get_permalink()?>"><?php the_title();?></a></h5>
                        <p class="card-text"><?php the_excerpt();?></p>
                        <a href="<?php the_category();?>" class="btn btn-primary"><?php the_category();?></a>
                    </div>
                </div>
            </article>
        <?php endwhile; endif;?>
    </div>
<?php get_footer(); ?>