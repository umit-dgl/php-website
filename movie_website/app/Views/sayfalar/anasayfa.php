<section class="home">
		<!-- home bg -->
		<div class="owl-carousel home__bg">
			<div class="item home__cover" data-bg="img/home/home__bg.jpg"></div>
			<div class="item home__cover" data-bg="img/home/home__bg2.jpg"></div>
			<div class="item home__cover" data-bg="img/home/home__bg3.jpg"></div>
			<div class="item home__cover" data-bg="img/home/home__bg4.jpg"></div>
		</div>
		<!-- end home bg -->
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h1 class="home__title">VİZYONDAKILER</h1>

					<button class="home__nav home__nav--prev" type="button">
						<i class="icon ion-ios-arrow-round-back"></i>
					</button>
					
					<button class="home__nav home__nav--next" type="button">
						<i class="icon ion-ios-arrow-round-forward"></i>
					</button>
				</div>

				<div class="col-12">
					<div class="owl-carousel home__carousel">

						<?php
						if(isset($kayitlar) && count($kayitlar)>0)
						{
							foreach ($kayitlar as $item)
							{
								echo '<div class="item">';
								echo '<div class="card card--big">';
								echo '<div class="card__cover">
								<img src="'.base_url("uploads/").$item['resim'].'" alt="">
								<a href="'.base_url('incele/'.$item['url']).'" class="card__play">
									<i class="icon ion-ios-play"></i>
								</a>';
								echo '</div>';
								echo '</div>';
								echo '<div class="col-12 col-sm-8">';
								echo '<div class="card__content">';
								echo '<h3 class="card__title">' . anchor('incele/'.$item['url'], $item['isim']) . '</h3>';
								echo '<div class="card__description">';
								echo '</div>';
								echo '</div>';
								echo '</div>';
								echo '</div>';
							}
						?>			
						<?php
						}
						else
						{
						?>

						<?php
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end home -->
	<!-- content -->
	<section class="content">
		<div class="content__head">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<!-- content title -->
						<h2 class="content__title">Yeni Eklenenler</h2>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<!-- content tabs -->
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="1-tab">
				  		<div class="row">
							<?php
							if(isset($kayitlar) && count($kayitlar)>0)
							{
								foreach ($kayitlar as $item)
								{
									echo '<div class="col-6 col-sm-12 col-lg-6">';
									echo '<div class="card card--list">';
									echo '<div class="row">';
									echo '<div class="col-12 col-sm-4">';
									echo '<div class="card__cover">
									<img src="'.base_url("uploads/").$item['resim'].'" alt="">
									<a href="'.base_url('incele/'.$item['url']).'" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>';
									echo '</div>';
									echo '</div>';
									echo '<div class="col-12 col-sm-8">';
									echo '<div class="card__content">';
									echo anchor('incele/' . $item['url'], '<h3 class="card__title">' . $item['isim'] . '</h3>');

									echo '<div class="card__description">';
									echo '<p>'.word_limiter($item['aciklama'],20).'</p>';
									echo '</div>';
									echo '</div>';
									echo '</div>';
									echo '</div>';
									echo '</div>';
									echo '</div>';
								}
							?>			
						
							<?php
							}
							else
							{
							?>
							<?php
							}
							?>
				     	</div>
				</div>				
			</div>
		</div>
	</section>
</section>
