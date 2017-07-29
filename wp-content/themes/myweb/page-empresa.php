<?php get_header(); ?>

<section class="box-content" style="margin-top: 120px;">
	<span id="empresa" style="position: absolute; top: 2000px;"></span>
	<h2 class="marrom">A EMPRESA</h2>
	<div class="container">
		<div class="empresa">
			<div class="row">
				<div class="col-6">
					<h3>VISÃO</h3>
					<p align="center"><?php the_field('visao',get_page_by_path('empresa')); ?></p>

					<h3 class="missao">MISSÃO & VALORES</h3>
					<p class="center"><?php the_field('missao_valores',get_page_by_path('empresa')); ?></p>
				</div>

				<div class="col-6">
					<?php echo get_post_field('post_content', get_page_by_path('empresa')); ?>
				</div>
			</div>
		</div>
	</p>
</section>

<?php get_footer(); ?>
