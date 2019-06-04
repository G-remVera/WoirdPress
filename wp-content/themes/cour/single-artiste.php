<?php get_header(); ?>
Single page artiste
    <div class="row main_content">
        <?php if ( have_posts() ) :while ( have_posts() ) :the_post(); ?>
            <article class="col-lg-12">
             <?php the_field('date');?>
                <h2 class="col-lg-12"><?php the_title();?></h2>
                    <div class="col-lg-12"><?php the_content();?>
                    <div class="col-lg-12"><?php the_field('youtube')?></div>
            </article>
        <?php endwhile; endif;?>
    </div>
<?php get_footer(); ?>