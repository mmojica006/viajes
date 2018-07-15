<?php get_header(); ?>

<main role="main">
    <!-- section -->
    <section class="clear">

        <?php if (have_posts()): while (have_posts()) : the_post(); ?>

            <!-- post title -->
            <h1><span><?php the_title(); ?></span></h1>
            <!-- /post title -->

            <!-- article -->
            <article id="post-<?php the_ID(); ?>" <?php post_class('grid2-3'); ?>>
d
                <!-- post thumbnail -->
                <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
                    <?php the_post_thumbnail('proyectosPrincipal'); // Fullsize image for the single post ?>
                <?php endif; ?>
                <!-- /post thumbnail -->

                <div class="clear"></div>
                <div class="informacion-proyecto">
                    <?php
                    $formato = 'd,F,Y';
                    $fecha = strtotime(get_field('fecha_del_proyecto'));
                    $fechaSalida = date_i18n($formato,$fecha);
                    ?>


                        <p class="fecha">Duración: <span><?php echo $fechaSalida; ?></p></span>
                    <p>Nombre del proyecto: <span><?php the_field('fecha_del_proyecto');?> </p></span>
                    <p>descripción: <span><?php the_field('nombre_del_proyecto');?> </p></span>




                </div>


                <h2 class="descripcionLarga">Descripción del proyecto</h2>
                <?php the_field('descripcion') ?>

            </article>
            <!-- /article -->




            <div class="grid1-3">
                <?php the_content(); // Galería ?>
            </div>


            <?php edit_post_link(); // Always handy to have Edit Post Links available ?>

        <?php endwhile; ?>

        <?php else: ?>

            <!-- article -->
            <article>

                <h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

            </article>
            <!-- /article -->

        <?php endif; ?>

    </section>
    <!-- /section -->
</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
