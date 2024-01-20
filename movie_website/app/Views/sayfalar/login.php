<div class="sign section--bg" data-bg="img/section/section.jpg">
		<div class="container">
			<div class="row">
			<div class="col-12">
				<div class="sign__content">
				
						<!-- authorization form -->
						<form action="<?=base_url('login')?>" method="post" class="sign__form">
						
							<?= csrf_field()?>
						
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
								<label for="kulad"></label>
								<input type="text" class="sign__input"  id="kulad"  name="kulad" placeholder="Kullanıcı Adı">
							</div>

							<div class="sign__group">
								<label for="sifre"></label>
								<input type="password" class="sign__input" id="sifre" name="sifre" placeholder="Şifre">
							</div>
							<button class="sign__btn" type="register" name="gonder"> Giriş Yap</button>
							<!-- <button class="sign__btn" type="register">Kayıt Ol</button> -->
							
							<!-- <button class="sign__btn" type="button">Giriş Yap</button> -->

							<span class="sign__text">Hesabın Yok mu? <a href="<?=base_url('kayit')?>">Kayıt Ol!</a></span>

							<!--<span class="sign__text"><a href="#">Forgot password?</a></span>  -->
						</form>
						<!-- end authorization form -->
					</div>
				</div>
			</div>
		</div>
	</div>