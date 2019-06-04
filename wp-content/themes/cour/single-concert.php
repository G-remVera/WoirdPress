<?php 
$artistes = get_field('artistes');
?> 

<?php get_header(); ?>
Single page concert
    <div class="row main_content">
        <?php if ( have_posts() ) :while ( have_posts() ) :the_post(); ?>
            <div class="col-lg-12">
                <h2 class="col-lg-12"><?php the_title();?></h2>
                    <div class="col-lg-12"><?php the_field('video')?></div>
                    <br>
                    <p><?php the_field('date');?></p>
                    <p><div class="col-lg-12"><?php the_field('contenu');?></p>
            </div>
            <div class="card">
                <div class="card body">
                <?php foreach ($artistes as $artiste): ?>
                <h5 class="card-title"><a href="<?php echo get_permalink()?>"><?=$artiste->post_title?></a></h5>
                <?php endforeach ?>
                </div>
            </div>
        <?php endwhile; endif;?>
    </div>
<?php get_footer(); ?>