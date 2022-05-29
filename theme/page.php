<?php get_header(); ?>
<main>
    <section class="contenedor banner">
        <h1><?php the_title(); ?></h1>
    </section>
    <section class="contenedor">
        <article class="contenido">
            <?php the_content() ?>
        </article>
    </section>
</main>
<?php get_footer(); ?>