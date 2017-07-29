<?php get_header(); ?>

<!-- slide -->
<section class="box-content box-slide">
	<div class="slide">
		<div class="carousel slide" data-ride="carousel" data-interval="1000000" id="slide">

			<div class="carousel-inner" role="listbox">

				<?php if( have_rows('slide_home','option') ):
					$slide = 0;
					while ( have_rows('slide_home','option') ) : the_row();

						if(get_sub_field('imagem_slide_home','option')){
							$slide = $slide+1; ?>

							<div class="item <?php if($slide == 1){ echo 'active'; } ?>" style="background-image: url('<?php the_sub_field('imagem_slide_home','option'); ?>');"></div>

						<?php }

					endwhile;
				endif; ?>

			</div>

			<ol class="carousel-indicators">
				
				<?php for($i=0; $i<$slide; $i++){ ?>
					<li data-target="#slide" data-slide-to="<?php echo $i; ?>" class="<?php if($i == 0){ echo 'active'; } ?>"></li>
				<?php } ?>
				
			</ol>

		</div>
	</div>
</section>

<section class="box-content box-qualidade">
	<span id="qualidade" style="position: absolute; top: 700px;"></span>
	<h2 class="azul">QUALIDADE</h2>
	<div class="container">
		<div class="qualidade">
			<img src="<?php the_field('imagem_qualidade',get_page_by_path('empresa')); ?>" alt="" />
			<div class="det-qualidade">
				<span class="title"><?php the_field('titulo_qualidade',get_page_by_path('empresa')); ?></span>
				<p><?php the_field('descricao_qualidade',get_page_by_path('empresa')); ?></p>
			</div>
		</div>
	</div>
</section>

<section class="box-content">
	<h2 class="pink">PRODUTOS</h2>
	<div class="produto">
		<div class="row no-padding">

			<?php
				$args = array(
				    'taxonomy'      => 'categoria_produto',
				    'parent'        => 0,
				    'orderby'       => 'name',
				    'order'         => 'ASC',
				    'hierarchical'  => 1,
				    'pad_counts'    => 0
				);
				$categories = get_categories( $args );
				foreach ( $categories as $category ){ ?>

					<div class="col-6">
						<a href="<?php echo get_term_link($category->term_id); ?>" title="<?php echo $category->name; ?>" style="background-image: url('<?php the_field('imagem_listagem',$category->taxonomy.'_'.$category->term_id); ?>');">
							<span class="hover-prod">
								<img src="<?php the_field('ico_listagem',$category->taxonomy.'_'.$category->term_id); ?>" alt="" />
								<?php echo $category->name; ?>
							</span>
						</a>
					</div>
					
				<?php }
			?>

		</div>
	</div>
</section>

<section class="box-content">
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

<section class="box-content">
	<span id="contato" style="position: absolute; top: 2900px;"></span>
	<h2 class="verde-limao">CONTATO</h2>
	<div class="contato">
		<div class="row no-padding">

			<div class="col-6 form-contato">
				<h3>CENTRAL DE ATENDIMENTO</h3>
				<p>Para outras informações entre em contato através do Serviço de Atendimento ao Cliente.</p>

				<h3><?php the_field('telefone','option'); ?></h3>
				<?php if(get_field('atendimento','option')){ ?>
					<p><?php the_field('atendimento','option'); ?></p>
				<?php } ?>

				<form action="javascript:">
					<input type="text" name="" placeholder="Nome:">
					<input type="text" name="" placeholder="E-mail:">
					<input type="text" name="" placeholder="Telefone:">
					<input type="text" name="" placeholder="Assunto:">
					<textarea></textarea>
					<button>ENVIAR</button>
				</form>
			</div>
			<div class="col-6">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3539.1897111600515!2d-48.82181128493595!3d-27.49447488288055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9520ae1555555555%3A0x96fee02451d76776!2sBolachas+Pauli!5e0!3m2!1spt-BR!2sbr!4v1500093729336" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>

		</div>
	</div>
</section>

<?php get_footer(); ?>

<script type="text/javascript">
	jQuery(document).ready(function(){	    

		// FORM
		/*jQuery(".enviar").click(function(){
			jQuery('.enviar').html('ENVIANDO').prop( "disabled", true );
			jQuery('.msg-form').removeClass('erro ok').html('');
			var nome = jQuery('#nome').val();
			var email = jQuery('#email').val();
			var telefone = jQuery('#telefone').val();
			var mensagem = jQuery('#mensagem').val();
			var para = '<?php the_field('email', 'option'); ?>';
			var nome_site = '<?php bloginfo('name'); ?>';

			if(email!=''){
				jQuery.getJSON("<?php echo get_template_directory_uri(); ?>/mail.php", { nome:nome, email:email, telefone:telefone, mensagem:mensagem, para:para, nome_site:nome_site }, function(result){		
					if(result=='ok'){
						resultado = 'Enviado com sucesso! Obrigado.';
						classe = 'ok';
					}else{
						resultado = result;
						classe = 'erro';
					}
					jQuery('.msg-form').addClass(classe).html(resultado);
					jQuery('.news form').trigger("reset");
					jQuery('.enviar').html('CADASTRAR').prop( "disabled", false );
				});
			}else{
				jQuery('.msg-form').addClass('erro').html('Por favor, digite um e-mail válido.');
				jQuery('.enviar').html('CADASTRAR').prop( "disabled", false );
			}
		});*/

	});
</script>