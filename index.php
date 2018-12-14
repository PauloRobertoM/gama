<?php include 'components/header.php'; ?>
	
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-sm-7">
				<section class="vitrine">
					<div class="owl-carousel owl-theme" id="owl-vitrine">
						<div class="item">
							<img src="assets/images/vitrine.jpg" alt="">
							<div class="conteudo">
								<h4>Categoria da notícia</h4>
								<p>Is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
							</div><!-- conteudo -->
						</div><!-- item -->
					</div><!-- #owl-vitrine -->
				</section><!-- vitrine -->

				<section class="destaque">
					<img src="assets/images/tag-destaque.png" class="tag-destaque" alt="">
					<img src="assets/images/aposte.jpg" class="img-responsive" alt="">
				</section><!-- destaque -->

				<section class="rodada">
					<h2>Fotos da Rodada</h2>
					<div class="owl-carousel owl-theme owl-geral">
						<div class="item">
							<img src="assets/images/vitrine.jpg" alt="">
							<div class="conteudo">
								<h4>Título do álbum</h4>
								<p>18/11/2018</p>
							</div><!-- conteudo -->
						</div><!-- item -->
					</div><!-- #owl-vitrine -->
				</section><!-- rodada -->

				<section class="tv">
					<h2>TV Gama</h2>
					<div class="owl-carousel owl-theme owl-geral">
						<div class="item">
							<img src="assets/images/vitrine.jpg" alt="">
							<div class="conteudo">
								<img src="assets/images/play.png" alt="" class="icon-play">
							</div><!-- conteudo -->
						</div><!-- item -->
					</div><!-- #owl-vitrine -->
				</section><!-- tv -->
			</div><!-- md-8 -->
			<?php include 'components/sidebar.php'; ?>
		</div><!-- row -->

		<section class="elenco">
			<h2>Elenco</h2>
			<div class="owl-carousel owl-theme" id="owl-elenco">
				<div class="item">
					<img src="assets/images/elenco.jpg" alt="">
					<span>1</span>
					<div class="conteudo">
						<h4>Nome Jogador</h4>
						<p>Função</p>
					</div><!-- conteudo -->
				</div><!-- item -->
			</div><!-- #owl-vitrine -->
		</section><!-- elenco -->
	</div><!-- container -->
	
<?php include 'components/footer.php'; ?>