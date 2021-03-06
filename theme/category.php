<?php get_header(); ?>
<main>
    <section>
        <div class="contenedor">
            <div class="banner">
                <h1><?php single_cat_title(); ?></h1>
            </div>
        </div>
        <div class="contenedor">
            <div class="entradas">
                <?php
                query_posts( 'posts_per_page=10' );
                if (have_posts()) : while (have_posts()) : the_post();
                ?>
                        <article class="entrada">
                            <?php the_post_thumbnail('post-thumbnail', ['class' => 'imagenFluida']); ?>
                            <a href="<?php the_permalink(); ?>"><?php the_title('<h2>', '</h2>'); ?></a>
                            <p><?php the_excerpt(); ?></p>
                            <p><?php the_date(); ?></p>
                        </article>
                <?php endwhile;
                endif; ?>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>