<?php
    //aller chercher NOTRE fichier header.php
    get_header(); 
?>

<p>Ceci est ma page single</p>

<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post();?>
        <h1><?php the_title() ?></h1>
        <?php the_content() ?>
    <?php endwhile;
endif;
?>

<?php 
    //aller chercher NOTRE fichier footer.php 
    get_footer(); 
?>