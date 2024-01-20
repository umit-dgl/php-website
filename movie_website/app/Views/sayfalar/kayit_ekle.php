

<div class="content-wrapper">
    <form action="<?=base_url('kayit_ekle')?>" method="post" enctype="multipart/form-data">
    <?= csrf_field()?>
        <div class="container-fluid">
          <div class="row mt-3">
            <div class="col-lg-6">
              <div class="card">
                <div class="card-body">
                  <div class="card-title">Hoşgeldin <?=$isim?> </div>
                  <?= validation_list_errors() ?>

                  <hr />
                  <form>
                    <div class="form-group">
                      <label for="isim">İSİM</label>
                      <input
                        type="text"
                        class="form-control"
                        id="isim"
                        name="isim"
                        placeholder="Film İsimini Giriniz!"
                      />
                    </div>
                    <!-- <div class="form-group">
                      <label for="tur">TÜR</label>
                      <input
                        type="text"
                        class="form-control"
                        id="tur"
                        name="tur"
                        placeholder="Film Türünü Giriniz!"
                      />
                    </div> -->
                    <!-- <div class="form-group">
                      <label for="sure">SÜRE</label>
                      <input
                        type="text"
                        class="form-control"
                        id="sure"
                        name="sure"
                        placeholder="Film Süresini Giriniz!"
                      />
                    </div> -->
                    <div class="form-group">
                      <label for="aciklama">AÇIKLAMA</label>
                      <textarea cols ="10" class=form-control name="aciklama" id="aciklama"></textarea>
                    </div>

                    <div class="form-group">
                      <label for="resim">RESİM</label>
                      <input
                        type="file"
                        class="form-control"
                        id="resim"
                        name="resim"
                      />
                    </div>
                    <!-- <div class="form-group">
                      <label for="video">VİDEO</label>
                      <input
                        type="text"
                        class="form-control"
                        id="video"
                        name="video"
                        placeholder="Film Linkini Giriniz!"
                      />
                    </div> -->

                    <div class="form-group">
                      <input type="submit"  name="gonder"class="btn btn-light px-5"
                      value="Kayıt Ekle">    
                    </div>
                  </form>
                </div>
              </div>
            </div>

          </div>
        </div>
    </form>
</div>