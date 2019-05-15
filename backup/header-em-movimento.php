<!DOCTYPE HTML>
<!--[if IE 6]>
<html class="oldie ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html class="oldie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="oldie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
    <head>
        <!-- asas -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

        <meta charset="<?php bloginfo('charset'); ?>" />
        <title>
			<?php
				global $paged;
					bloginfo('name');
						echo ' | ';
					post_type_archive_title();
				if ( $paged >= 2 )
					echo ' | ' . sprintf( __( 'Page %s', 'themeton' ), $paged );
			?>
		</title>
		
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-53036593-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-53036593-1');
</script>

<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script', 'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1965042523604937');
fbq('track', 'PageView');
</script>
<script type="text/javascript" async src="https://d335luupugsy2.cloudfront.net/js/loader-scripts/e74a76b6-6138-45d2-b86c-df7cf2700d57-loader.js"></script>
<noscript>

<img height="1" width="1"

src="https://www.facebook.com/tr?id=1965042523604937&ev=PageView

&noscript=1"/>

</noscript>

<!-- End Facebook Pixel Code -->
		<?php
		wp_head();
		?>
		<link rel="sitemap" type="application/xml" title="Sitemap" href="/sitemap.xml" />

		<link href="<?php echo get_template_directory_uri(); ?>/em-movimento/vendor/bootstrap/css/bootstrap.min.css?v=<?php echo date('ymdhis') ?>" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri(); ?>/em-movimento/css/fonts.css?v=<?php echo date('ymdhis') ?>" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri(); ?>/em-movimento/css/em-movimento.css?v=<?php echo date('ymdhis') ?>" rel="stylesheet">
    </head>
    <body <?php body_class($boxed); ?>>
        
	 <nav class="navbar navbar-expand-lg bx-header">
      <div class="container">
        <a class="navbar-brand" href="<?php echo get_post_type_archive_link( 'em-movimento' ); ?>">
			<img src="<?php echo get_template_directory_uri(); ?>/em-movimento/images/logo_ltm_bg_light_2x.png" />
		</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
			  <?php
				$menu = get_field("itens", 721);
			  ?>
			<?php
			foreach ($menu as $m) {
				$link = $m['url'] != "" ? $m['url'] : get_permalink($m['destino']->ID);
				$target = $m['url'] != "" ? "_blank" : "_self";
				$submenu = $m['submenu'];
				if (count($submenu) > 0) {
					?>
					<li class="nav-item dropdown">
					  <a class="nav-link dropdown-toggle" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<?php echo $m['nome'] ?>
					  </a>
					  <div class="dropdown-menu dropdown-menu-center" aria-labelledby="navbarDropdownBlog">
						<div class="row px-3 py-3">
						<?php
							foreach ($submenu as $sm) {
								$link = $sm['url'] != "" ? $sm['url'] : get_permalink($sm['destino']->ID);
								$target = $sm['url'] != "" ? "_blank" : "_self";
						?>
							
								<div class="col-12 col-md-6">
									<a class="dropdown-item subPai" target="<?php echo $target ?>" href="<?php echo $link ?>"><?php echo $sm['titulo'] ?></a>
									<?php
										$ssubmenu = $sm['submenu'];
										foreach ($ssubmenu as $ssm) {
											$link = $ssm['url'] != "" ? $ssm['url'] : get_permalink($ssm['destino']->ID);
											$target = $ssm['url'] != "" ? "_blank" : "_self";
										?>
										<a class="dropdown-item subFilho" target="<?php echo $target ?>" href="<?php echo $link ?>"><?php echo $ssm['titulo'] ?></a>
										<?php
										}
									?>
								</div>
							<?php
							}	
						?>
						</div>
					  </div>
					</li>
					<?php
				} else {
					?>
						<li class="nav-item">
							<a class="nav-link" target="<?php echo $target ?>" href="<?php echo $link ?>"><?php echo $m['nome'] ?></a>
						</li>
					<?php
				}
			 } ?>
            <li class="nav-item nav-social d-none d-md-inline-block">
              <a class="nav-link" href="https://www.facebook.com/ltmfidelidade" target='_blank'>
				<img src='<?php echo get_template_directory_uri(); ?>/em-movimento/images/facebook-header.png' data-gtm-event-category="grupoltm:em-movimento" data-gtm-event-action="topo:rede-social" data-gtm-event-label="icone:facebook" />
			  </a>
            </li>
			<li class="nav-item nav-social d-none d-md-inline-block">
              <a class="nav-link" href="https://www.linkedin.com/company/ltm-fidelidade" target="_blank">
				<img src='<?php echo get_template_directory_uri(); ?>/em-movimento/images/linkedin-header.png' data-gtm-event-category="grupoltm:em-movimento" data-gtm-event-action="topo:rede-social" data-gtm-event-label="icone:linkedin" />
			  </a>
						</li>
						<li class="nav-item nav-social d-none d-md-inline-block">
              <a class="nav-link" href="https://www.instagram.com/ltmfidelidade/" target="_blank">
				<img src='/wp-content/themes/ltm/em-movimento/images/instagram.png' data-gtm-event-category="grupoltm:em-movimento" data-gtm-event-action="topo:rede-social" data-gtm-event-label="icone:instagram" />
			  </a>
						</li>
          </ul>
        </div>
      </div>
    </nav>
	<div class="container-fluid bg-light nav-search-tag bx-filters">
		<div class="container">
			<div class="row row-eq-height">
				<div class="col-12 col-md-9 py-3">
					<div class="row row-eq-height">
						<div class="col-auto pb-2">
							<img src='<?php echo get_template_directory_uri(); ?>/em-movimento/images/journal.png' />
						</div>
						<div class="col justify-content-center align-self-center">
							<a href="/em-movimento">
								ltm em movimento
							</a>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-3 justify-content-center align-self-center nav-filters">
					<div class="row px-3">
						<div class="nav-filter col mr-4 py-3">
							<div class="row px-0">
								<div class="col-auto px-0 pr-2">
									<img src='<?php echo get_template_directory_uri(); ?>/em-movimento/images/flag.png' />
								</div>
								<div class="col-auto px-0">
									<a href="#" onclick="$('.bx-filters-active').show(); $('.bx-filters-active .bx-search').hide(); $('.bx-filters-active .bx-flags').show();">TAGS</a>
								</div>
							</div>
						</div>
						<div class="nav-filter col ml-4 py-3">
							<div class="row px-0">
								<div class="col-auto px-0 pr-2">
									<img src='<?php echo get_template_directory_uri(); ?>/em-movimento/images/search.png' />
								</div>
								<div class="col-auto px-0">
									<a href="#" onclick="$('.bx-filters-active').show(); $('.bx-filters-active .bx-flags').hide(); $('.bx-filters-active .bx-search').show();">BUSCA</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php 

	$categories = get_terms( array(
		'taxonomy' => 'categoria-em-movimento',
		'hide_empty' => false,
	) );


	?>
	<div class="container-fluid bg-light border-top">
		<div class="container">
			<div class="row row-eq-height">
				<div class="col-12 text-right d-block py-4">
					<div class="row justify-content-md-center">		
						<?php 
						foreach ($categories as $c) {
								$term_link = get_term_link( $c );
							?>
								<div class="col-6 col-md-auto mb-3 mb-md-0">
									<a class="btn btn-primary w-100" href="<?php echo esc_url( $term_link ) ?>">
										<?php echo $c->name ?>
									</a>
								</div>
							<?php
							}
						?>
					</div>
				</div>
				<div class="col-12 text-right bx-search py-4">
					<form id="searchform" action="<?php bloginfo('url'); ?>/" method="get">
						<div class="row">
							<div class="col-8 col-md-10 pr-0">
								<input type="text" name='s' class="w-100 rounded h-100 border-0 bg-white">
								<input type="hidden" name="post_type" value="em-movimento" />
							</div>
							<div class="col-4 col-md-2">
								<button class="btn btn-primary w-100" href="#">
									BUSCAR
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
		