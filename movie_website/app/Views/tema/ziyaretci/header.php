<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600%7CUbuntu:300,400,500,700" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" href="<?=base_url()?>css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="<?=base_url()?>css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="<?=base_url()?>css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?=base_url()?>css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" href="<?=base_url()?>css/nouislider.min.css">
	<link rel="stylesheet" href="<?=base_url()?>css/ionicons.min.css">
	<link rel="stylesheet" href="<?=base_url()?>css/plyr.css">
	<link rel="stylesheet" href="<?=base_url()?>css/photoswipe.css">
	<link rel="stylesheet" href="<?=base_url()?>css/default-skin.css">
	<link rel="stylesheet" href="<?=base_url()?>css/main.css">
</head>
<body class="body">
	<!-- header -->
	<header class="header">
		<div class="header__wrap">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="header__content">
							<!-- header logo -->
							<a href="<?=base_url('')?>" class="header__logo">
							<img src="<?=base_url('img/logo.svg')?>" alt="">
							</a>
							<!-- end header logo -->

							<!-- header nav -->
							<ul class="header__nav">
								
								<li class="header__nav-item">
									<a class="header__nav-link" href="<?=base_url('/')?>" role="button" >Anasayfa</a>
								</li>
								
								<?php if (isset($durum) && $durum): ?>
								<li class="header__nav-item">
									<?= anchor('panel', 'PANEL', array('class' => 'header__nav-link')) ?>
								</li>
								<?php endif; ?>

							</ul>
							<!-- end header nav -->
							<?php
                if(isset($durum) && $durum)
                {
                ?>
                <div class="header__auth ">
        			<?= anchor('logout', '<i class="icon ion-ios-log-in"></i> Çıkış', array('class' => 'header__sign-in')) ?>
   				 </div>	
                <?php
                }
                else
                {
                ?>
                
				<div class="header__auth">
        			<?= anchor('login', '<i class="icon ion-ios-log-in"></i> Panel Giriş', array('class' => 'header__sign-in')) ?>
    			</div>
                <?php
                }
                ?>	
							<!-- header menu btn -->
							<button class="header__btn" type="button">
								<span></span>
								<span></span>
								<span></span>
							</button>
							<!-- end header menu btn -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>