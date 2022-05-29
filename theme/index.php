<?php get_header(); ?>
<main>
    <section>
        <div class="contenedor">
            <div class="entradas">
                <?php
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