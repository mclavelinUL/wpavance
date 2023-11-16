<?php get_header(); ?>

<?php if (have_posts()):
    while (have_posts()):
        the_post(); ?>
        <?php the_post_thumbnail(); ?>
        <h1>
            <?php the_title(); ?>
        </h1>
        <p>
            <?php the_terms($post->ID, 'genre'); ?>
        </p>
        <p>Sorti le
            <?php the_field('date_de_sortie'); ?>
        </p>
        <?php the_content(); ?>
        <pre>
                        <?php
                        $galerie = get_field('galerie');
                        var_dump($galerie);
                        ?>
                        </pre>
    <?php endwhile; endif; ?>

<?php get_footer(); ?>