<?php
    //aller chercher NOTRE fichier header.php
    get_header(); 
?>

<p>Ceci est ma page archive</p>

<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post();?>
        <h1><a href="<?php echo get_the_permalink()?>"><?php the_title() ?></a></h1>
        <?php the_content() ?>
    <?php endwhile;
endif;
?>

<?php 
    //aller chercher NOTRE fichier footer.php 
    get_footer(); 
?>