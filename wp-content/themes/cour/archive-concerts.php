<?php get_header(); ?>
Archive page concerts
<div class="row main_content">
        <?php if ( have_posts() ) :while ( have_posts() ) :the_post(); ?>
            <article class="col-lg-12">
                <div class="card">
                    <div class="col-lg-12"><?php the_field('image')?></div>
                    <div class="card-body">
                        <h5 class="card-title"><a href="<?php echo get_permalink()?>"><?php the_title();?></a></h5>
                        <p class="card-text"><?php the_field('description');?></p>
                        <a href="<?php the_category();?>" class="btn btn-primary"><?php the_category();?></a>
                    </div>
                </div>
            </article>
        <?php endwhile; endif;?>
    </div>
<?php get_footer(); ?>