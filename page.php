<?php get_header(); ?>
		
		<section class="container">
			<section class="corpo row">
				<div class="articoli col-lg-8">
					<!-- Template articoli -->
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<article>
							<h3><?php the_title(); ?></h3>
							<?php the_content(); ?>
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