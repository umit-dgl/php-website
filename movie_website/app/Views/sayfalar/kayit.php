<div class="sign section--bg" data-bg="img/section/section.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sign__content">

						<!-- registration form -->
						<form action="<?=base_url('kayit')?>" method="post" class="sign__form">
							<?= csrf_field() ?>
							<a href="<?=base_url('/')?>" class="sign__logo">
								<img src="img/logo.svg" alt="">
							</a>
							<?= validation_list_errors() ?>
							<?php
							if(isset($uyari))
							{
								echo '<div class="loginError">';
								echo $uyari;
								echo '</div>';
							}
							?>

							<div class="sign__group">
								<input type="text" class="sign__input" name="kulad"  placeholder="Kullanıcı Adı">
							</div>

							<div class="sign__group">
								<input type="password" class="sign__input" name="sifre" placeholder="Şifre">
							</div>
							<button class="sign__btn" type="register">Kayıt Ol</button>

							<span class="sign__text">Hesabın Var mı? <a href="<?=base_url('login')?>">Giriş Yap!</a></span>
						</form>
						<!-- registration form -->
					</div>
				</div>
			</div>
		</div>
	</div>