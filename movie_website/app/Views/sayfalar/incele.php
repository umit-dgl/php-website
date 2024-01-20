<section class="section details">
		<!-- details background -->
		<div class="details__bg" data-bg="<?=base_url('img/home/home__bg.jpg')?>"></div>

		<!-- end details background -->

		<!-- details content -->
		<div class="container">
			<div class="row">
				<!-- title -->
				<div class="col-12">
					<h1 class="details__title"><?=esc($veri['isim'])?></h1>
				</div>
				<!-- end title -->

				<!-- content -->
				<div class="col-10">
					<div class="card card--details card--series">
						<div class="row">
							<!-- card cover -->
							<div class="col-12 col-sm-4 col-md-4 col-lg-3 col-xl-3">
								<div class="card__cover">
									<img src="<?=base_url('uploads/').esc($veri['resim'])?>" alt="">
								</div>
							</div>
							<!-- end card cover -->

							<!-- card content -->
							<div class="col-12 col-sm-8 col-md-8 col-lg-9 col-xl-9">
								<div class="card__content">
									<div class="card__wrap">
										<span class="card__rate"><i class="icon ion-ios-star"></i>8.4</span>

										<ul class="card__list">
											<li>HD</li>
											<li>16+</li>
										</ul>
									</div>

									<ul class="card__meta">
										<li><span>Tür:</span> <a href="#">Aksiyon</a>
										<li><span>Çıkış Yılı:</span> 2017</li>
										<li><span>Süre:</span> 120 min</li>
									</ul>

									<div class="card__description card__description--details">
                                        <p><?=esc($veri['aciklama'])?></p>
									</div>
								</div>
							</div>
							<!-- end card content -->
						</div>
					</div>
				</div>
				<!-- end content -->


			</div>
		</div>
	</section>