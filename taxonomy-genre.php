<?php get_header(); ?>
<!-- <pre>
<?php
$terms = get_queried_object();
var_dump($terms);
?>
</pre> -->
<h1>Mes jeux de genre
    <?= $terms->name; ?>
</h1>

<?php if (have_posts()):
    while (have_posts()):
        the_post(); ?>

        <article class="post">
            <h2>
                <?php the_title(); ?>
            </h2>

            <?php the_post_thumbnail(); ?>

            <p class="post__meta">
                Publié le
                <?php the_time(get_option('date_format')); ?>
                par
                <?php the_author(); ?> •
                <?php comments_number(); ?>
            </p>

            <?php the_excerpt(); ?>

            <p>
                <a href="<?php the_permalink(); ?>" class="post__link">Lire la suite</a>
            </p>
        </article>

    <?php endwhile; endif; ?>

<?php get_footer(); ?>