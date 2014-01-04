<?php get_header(); ?>
		
		<section class="container">
			<section class="corpo row">
				<div class="articoli col-lg-8">
					<!-- Template articoli -->
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<article>
							<h3><?php the_title(); ?></h3>
							<p><small>Scritto il <?php the_time('d F Y') ?>, nella categoria <?php the_category(', '); ?>.</small></p>
							<?php the_content(); ?>
							<?php the_tags(); ?>
							<p>Autore: <?php the_author(); ?></p>
							<p><small><?php comments_number(); ?></small></p>
							<?php comments_template(); ?>
						</article>
					<?php endwhile; else: ?>
					<!-- Cosa visualizzare nel caso di mancanza di contenuti -->
						<div class="panel panel-warning">
							<div class="panel-heading">
								<h3 class="panel-title">Attenzione!</h3>
							</div>
							<div class="panel-body">
								<p>Non ci sono contenuti in questa pagina.</p>
							</div>
						</div>
					<?php endif; ?>
				</div>
				<?php get_sidebar(); ?>
			</section>
		</section>

<?php get_footer(); ?>