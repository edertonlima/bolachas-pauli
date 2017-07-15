<?php get_header(); ?>

<!-- slide -->
<section class="box-content box-slide">
	<div class="slide">
		<div class="controle-slide">
			<a class="left" href="#slide" role="button" data-slide="prev"></a>
			<a class="right" href="#slide" role="button" data-slide="next"></a>
		</div>
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
	<h2 class="azul">QUALIDADE</h2>
	<div class="container">
		<div class="qualidade">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/img_qualidade.jpg" alt="" />
			<div class="det-qualidade">
				<span class="title">Prêmio Talentos Empreendedores 2004 e 2005</span>
				<p>Finalista na Categoria Indústria, da Região da Grande Florianópolis no Prêmio Talentos Empreendedores 2004 e 2005 certificada pelo SEBRAE/SC, GRUPO GERDAU e RBS.</p>
			</div>
		</div>
	</div>
</section>

<section class="box-content">
	<h2 class="pink">PRODUTOS</h2>
	<div class="produto">
		<div class="row no-padding">
			<div class="col-6">
				<a href="javascript:" title="" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/produto/produto-1.jpg');">
					<span class="hover-prod">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/produto/ico-produto-1.png" alt="" />
						COM GLÚTEN
					</span>
				</a>
			</div>

			<div class="col-6">
				<a href="javascript:" title="" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/produto/produto-2.jpg');">
					<span class="hover-prod">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/produto/ico-produto-2.png" alt="" />
						SEM GLÚTEN
					</span>
				</a>
			</div>

			<div class="col-6">
				<a href="javascript:" title="" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/produto/produto-3.jpg');">
					<span class="hover-prod">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/produto/ico-produto-3.png" alt="" />
						NATALINAS
					</span>
				</a>
			</div>

			<div class="col-6">
				<a href="javascript:" title="" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/produto/produto-4.jpg');">
					<span class="hover-prod">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/produto/ico-produto-4.png" alt="" />
						NOVIDADES
					</span>
				</a>
			</div>
		</div>
	</div>
</section>

<section class="box-content">
	<h2 class="marrom">A EMPRESA</h2>
	<div class="container">
		<div class="empresa">
			<div class="row">
				<div class="col-6">
					<h3>VISÃO</h3>
					<p align="center">Ser excelência na produção de bolachas e biscoitos.</p>

					<h3 class="missao">MISSÃO & VALORES</h3>
					<p class="center">Produção de alimentos de qualidade, respeitando sempre as normas das boas práticas de fabricação, proporcionando também um ambiente de trabalho harmonioso onde haja respeito e seriedade.</p>
				</div>

				<div class="col-6">
					<p>A empresa se tornou realidade quando sua proprietária no intuito de ajudar no orçamento doméstico decidiu preparar e confeitar bolachas a serem comercializadas em pequenos mercados da cidade de Florianópolis sendo fundada em primeiro de março de 1993.</p>

					<p>A experiência da empresária se deu com a família, que em grande parte atua no comércio; desenvolvendo aptidão no preparo de bolachas com sua mãe, que confeitava bolachas para o Natal, oportunidade em que o produto era fabricado de maneira artesanal.

					<p>Com o sucesso dos produtos nos mini-mercados as vendas passaram a ser feitas também em supermercados do município de Antônio Carlos, sede da Empresa e local em que reside e nasceu a proprietária. Assim, com o passar do tempo e a adesão de mais clientes, surgiu a fábrica de Bolachas Pauli, que passou a ter grandes encomendas e a vender para supermercados da grande Florianópolis e todo o estado de Santa Catarina e capital do Paraná.</p>

					<p>A Empresa hoje possui uma linha de produtos diferenciados, mas sempre mantendo a característica de produtos caseiros e artesanais além de estar sempre buscando a melhoria contínua e a garantia da qualidade dos produtos que fabrica e evidenciando assim a conquista de novos mercados e clientes.</p>

					<p>Hoje a Bolachas Pauli conta com vários colaboradores, bem como profissionais que prestam consultoria em Engenharia de Alimentos e Administração, além dos promotores de venda distribuídos pelo Estado de Santa Catarina e capital do Estado do Paraná.</p>
				</div>
			</div>
		</div>
	</p>
</section>

<section class="box-content">
	<h2 class="verde-limao">CONTATO</h2>
	<div class="contato">
		<div class="row no-padding">

			<div class="col-6 form-contato">
				<h3>CENTRAL DE ATENDIMENTO</h3>
				<p>Para outras informações entre em contato através do Serviço de Atendimento ao Cliente.</p>

				<h3>SAC: (48) 3272.1420</h3>
				<p>Horário de atendimento, Segunda a Sexta: 8h ás 17h.</p>

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