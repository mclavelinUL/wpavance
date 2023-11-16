<?php get_header(); ?>

<?php if (have_posts()):
    while (have_posts()):
        the_post(); ?>

        <h1>
            <?php the_title(); ?>
        </h1>

        <?php the_content(); ?>

    <?php endwhile; endif; ?>
<?php
$jeux = get_posts([
    'post_type' => 'jeux',
    'numberposts' => 3,
    'orderby' => 'date',
    'order' => 'DESC',

]);
foreach ($jeux as $jeu) {
    echo '<h2>' . $jeu->post_title . '</h2>';
    echo '<p>' . $jeu->post_excerpt . '</p>';
    echo '<a href="' . get_permalink($jeu) . '">Lire la suite</a>';
}
?>
<?php get_footer(); ?>