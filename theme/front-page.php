<?php get_header(); ?>
<main>
    <section class="contenedor">
        <img alt="" class="imagenFluida" src="<?php header_image(); ?>" width="<?php echo absint(get_custom_header()->width); ?>" height="<?php echo absint(get_custom_header()->height); ?>">
    </section>
    <section class="contenedor ultimasEntradas">
        <div class="textoObras">
            <h2>Sus ultimas obras</h2>
            <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum
                ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N.
                del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló
                de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino
                que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente
                igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las
                cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como
                por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</p>
        </div>
        <div class="listaObras">
            <?php
            if (have_posts()) : while (have_posts()) : the_post();
            ?>
                    <div class="tarjeta">
                        <?php the_post_thumbnail('post-thumbnail', ['class' => 'imagenFluida', 'title' => 'Feature image']); ?>
                        <div class="contenidoTarjeta">
                            <?php the_title('<h3>', '</h3>'); ?>
                            <p><?php the_excerpt(); ?></p>
                            <div><a class="boton" href="<?php the_permalink(); ?>">ver mas</a></div>
                        </div>
                    </div>
            <?php endwhile;
            endif; ?>
        </div>
    </section>
    <section class="contenedor contactame">
        <div class="contacto">
            <h2>Contacta mis servicios</h2>
            <div>
                <h3>Quiero ser contactado</h3>
                <p>Si queres conversar conmigo para realizar una exposicion u otros
                    trabajos
                </p>
                <div class="formulario">
                    <input type="text" id="exampleFormControlInput1" placeholder="Nombre y Apellido">
                    <input type="tel" id="exampleFormControlInput2" placeholder="+541133333333">
                    <a href="#">Enviar</a>
                </div>
            </div>
        </div>
        <div class="flechaArriba">
            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 16 16">
                    <path d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z" />
                </svg></a>
        </div>
    </section>
</main>
<?php get_footer(); ?>