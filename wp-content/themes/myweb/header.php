<!DOCTYPE html>
<html lang="pt-br">
<head>

<?php 
	$titulo_princ = get_field('titulo', 'option');
	$descricao_princ = get_field('descricao', 'option');
	$imagem_princ = get_field('imagem_principal', 'option');
	$url = get_home_url();
	$imgPage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '' );

	if(is_tax()){
		$terms = get_queried_object();
		$titulo = $terms->name;
		$descricao = $terms->description;
		$imagem = get_field('imagem_listagem',$terms->taxonomy.'_'.$terms->term_id);
		$url = get_term_link($terms->term_id);
	}

	if(is_archive()){
		$titulo = get_field('titulo_pagina','option');
		$descricao = get_field('descricao_pagina','option');
		$imagem = get_field('imagem_pagina','option');
		$url = $url.'/produtos';
	}

	if(is_single()){
		$titulo = get_the_title();
		$descricao = get_the_excerpt();
		
		if($imgPage[0] != ''){
			$imagem = $imgPage[0];	
		}			
		$url = get_the_permalink();
	}

	if($titulo == ''){
		$titulo = $titulo_princ;
	}else{
		$titulo = $titulo.' - '.$titulo_princ;
	}
	
	if($descricao == ''){
		$descricao = $descricao_princ;
	}

	$autor = 'Di20 Desenvolvimento';
?>

<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="shortcut icon" href="<?php the_field('favicon', 'option'); ?>" type="image/x-icon" />
<link rel="icon" href="<?php the_field('favicon', 'option'); ?>" type="image/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="content-language" content="pt" />
<meta name="rating" content="General" />
<meta name="description" content="<?php echo $descricao; ?>" />
<meta name="keywords" content="" />
<meta name="robots" content="index,follow" />
<meta name="author" content="<?php echo $autor; ?>" />
<meta name="language" content="pt-br" />
<meta name="title" content="<?php echo $titulo; ?>" />

<!-- SOCIAL META -->
<meta itemprop="name" content="<?php echo $titulo; ?>" />
<meta itemprop="description" content="<?php echo $descricao; ?>" />
<meta itemprop="image" content="<?php echo $imagem; ?>" />

<html itemscope itemtype="<?php echo $url; ?>" />
<link rel="image_src" href="<?php echo $imagem; ?>" />
<link rel="canonical" href="<?php echo $url; ?>" />

<meta property="og:type" content="website">
<meta property="og:title" content="<?php echo $titulo; ?>" />
<meta property="og:type" content="article" />
<meta property="og:description" content="<?php echo $descricao; ?>" />
<meta property="og:image" content="<?php echo $imagem; ?>" />
<meta property="og:url" content="<?php echo $url; ?>" />
<meta property="og:site_name" content="<?php echo get_bloginfo('name'); ?>" />
<meta property="fb:admins" content="<?php echo $autor; ?>" />
<meta property="fb:app_id" content="1205127349523474" /> 

<meta name="twitter:card" content="summary" />
<meta name="twitter:url" content="<?php echo $url; ?>" />
<meta name="twitter:title" content="<?php echo $titulo; ?>" />
<meta name="twitter:description" content="<?php echo $descricao; ?>" />
<meta name="twitter:image" content="<?php echo $imagem; ?>" />
<!-- SOCIAL META -->

<title><?php echo $titulo; ?></title>

<!-- CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" media="screen" />

<!-- JQUERY -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>


<script type="text/javascript">
	jQuery.noConflict();

	jQuery(document).ready(function(){

		jQuery('.menu-mobile').click(function(){
			if(jQuery(this).hasClass('active')){
				jQuery('.nav').css('top','-100vh');
				jQuery(this).removeClass('active');
			}else{
				if(jQuery(window).width() <= 400){
					jQuery('.nav').css('top','100px');
				}else{
					jQuery('.nav').css('top','120px');
				}
				jQuery(this).addClass('active');
			}
		});

		if(jQuery('body').height() <= jQuery(window).height()){
			jQuery('.footer').css({position: 'absolute', bottom: '0px'});
		}else{
			jQuery('.footer').css({position: 'relative'});
		}
	});	

	jQuery(window).resize(function(){
		jQuery('.menu-mobile').removeClass('active');
		jQuery('.nav').css('top','-100vh');
		if(jQuery('body').height() <= jQuery(window).height()){
			jQuery('.footer').css({position: 'absolute', bottom: '0px'});
		}else{
			jQuery('.footer').css({position: 'relative'});
		}
	});
</script>

</head>
<body <?php body_class(); ?>>

	<header class="header">

		<div class="top-header">			
			<div class="container">
				<span class="tel"><?php the_field('telefone','option'); ?></span>
			</div>
		</div>

		<div class="top-menu">
			<div class="container">
				<h1>
					<a href="<?php echo get_home_url(); ?>" title="<?php bloginfo('name'); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_bolachas-pauli.png" alt="<?php bloginfo('name'); ?>">
					</a>
				</h1>

				<div class="box-menu">
					<a href="javascript:" class="menu-mobile"><span><em>X</em></span></a>

					<nav class="nav">
						<ul class="menu-principal">
							<li class="">
								<a href="<?php echo get_home_url(); ?>/#qualidade" title="QUALIDADE" class="goTo" rel="#qualidade">QUALIDADE</a>
							</li>

							<li class="menu <?php if((is_post_type_archive('')) or (is_post_type_archive('produtos')) or (is_tax('categoria_produto')) or (is_singular('produto'))){ echo ''; } ?>">
								<a href="<?php echo get_home_url(); ?>/produtos" title="PRODUTOS">PRODUTOS</a>
								<ul class="submenu">

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

											<li>
												<a href="<?php echo get_term_link($category->term_id); ?>" title="<?php echo $category->name; ?>"><?php echo $category->name; ?></a>

												<?php
												$prod_cat = get_posts(
													array(
														'posts_per_page' => -1,
														'post_type' => 'produtos',
														'tax_query' => array(
															array(
																'taxonomy' => 'categoria_produto',
																'field' => 'term_id',
																'terms' => $category->term_id,
															)
														)
													)
												);

												if(count($prod_cat) > 0){ ?>
													<ul class="submenu-sub">

														<?php foreach ( $prod_cat as $produto ) { ?>
															<li><a href="<?php the_permalink($produto->ID); ?>" title="<?php echo $produto->post_title; ?>">
																<?php echo $produto->post_title; ?>
															</a></li>
														<?php } ?>

													</ul>
												<?php } ?>
											</li>
											
										<?php }
									?>

								</ul>
							</li>

							<li class="">
								<a href="<?php echo get_home_url(); ?>/produtos/novidades" title="NOVIDADES" class="">NOVIDADES</a>
							</li>

							<li class="">
								<a href="<?php echo get_home_url(); ?>/#empresa" title="EMPRESA" class="goTo" rel="#empresa">EMPRESA</a>
							</li>

							<li class="">
								<a href="<?php echo get_home_url(); ?>/#contato" title="CONTATO" class="goTo" rel="#contato">CONTATO</a>
							</li>
						</ul>
					</nav>

				</div>
			</div>
		</div>
	</header>