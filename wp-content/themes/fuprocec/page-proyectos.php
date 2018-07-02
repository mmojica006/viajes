
<?php
/*
Template Name: Proyectos
*/


get_header(); ?>


	<main role="main">
		<!-- section -->
		<section class='clear'>

			<h1><span><?php the_title(); ?></span></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<?php
			$args = array(
				'post_type'=>'proyectos',
				'posts_per_page'=>4,
				'order'=>'ASC',
				'orderby'=>'title'

			)
			?>

			<?php $proyectos = new WP_Query($args);?>
			<?php while ($proyectos->have_posts()): $proyectos->the_post(); ?>


			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class('grid2-4'); ?>>

				<div class="imagen-destacada">
					<a class="mas-info" href="<?php the_permalink();?>">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/masinfo.png" alt="">
					</a>
				</div> <!-- imagen destacada -->

			<?php the_post_thumbnail('proyectosDestacados'); ?>

				<a href="<?php the_permalink();?>">
				<h2><?php the_title(); ?></h2>
				</a>

				<?php
				$formato = 'd,F,Y';
				$fecha = strtotime(get_field('fecha_del_proyecto'));
				$fechaSalida = date_i18n($formato,$fecha);
				?>

				<div class="fecha-creacion">
					<p class="fecha"><?php echo $fechaSalida; ?></p>
				</div>




			</article>
			<!-- /article -->

			<?php endwhile; wp_reset_postdata(); ?>

			</div>

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php// get_sidebar(); ?>

<?php get_footer(); ?>
