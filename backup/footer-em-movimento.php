	<footer class="py-5 bg-dark bx-footer">
      <div class="container">
		<div class="row row-eq-height">
			<div class="col-12 col-md-5 align-self-center">
				<div class="row">
					<div class="col-12 col-md-3 pr-2">
						<img src="<?php echo get_template_directory_uri(); ?>/em-movimento/images/logo_ltm_bg_dark.svg" class="address-logo">
					</div>
					<div class="col-12 col-md-8 align-self-center infos">
						<p class="text-white txt-center txt-md-left my-0">Alameda Rio Negro, 585, 7º andar</p>
						<p class="text-white txt-center txt-md-left my-0">Alphaville, Barueri, SP. CEP 06454-000</p>
						<p class="text-white txt-center txt-md-left my-0">Telefone: 11 3474.4900</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-2  align-self-center">
				<div class="row">
					<div class="col-12 align-self-center infos mb-2">
						<p class="text-white text-center my-0">Empresa associada a</p>
					</div>
					<div class="col-12  pr-2 text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/em-movimento/images/footer-abemf.png" class="footer-abemf">
					</div>
				</div>
			</div>
			<div class="col-12 col-md-5  align-self-center">
				<div class="row">
					<?php
					$menu = get_field("itens", 771);
					foreach ($menu as $m) {
						$link = $m['url'] != "" ? $m['url'] : get_permalink($m['destino']->ID);
						$target = $m['url'] != "" ? "_blank" : "_self";
						?>
						<div class="col-12 pr-2 text-right infos">
							<a target="<?php echo $target ?>" href="<?php echo $link ?>">
								<?php echo $m['nome'] ?>
							</a>
						</div>
						<?php
					}
					?>
				</div>
			</div>
		</div>
      </div>
    </footer>

    <script src="<?php echo get_template_directory_uri(); ?>/em-movimento/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/em-movimento/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script>
	(function (i, s, o, g, r, a, m) {
	i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
	(i[r].q = i[r].q || []).push(arguments)
	}, i[r].l = 1 * new Date(); a = s.createElement(o),
	m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
	})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

	ga('create', 'UA-50383400-7', 'auto');
	ga('send', 'pageview');
	ga('create', 'UA-53036593-1', 'auto', { 'name': 'ltm' });
	ga('ltm.send', 'pageview');
	</script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-114699544-1"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-114699544-1');
	</script>


</body>
</html>