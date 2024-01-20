<div id="sidebar-wrapper"  >
  <h5 class="logo-text"></h5>
     <div class="brand-logo">
      <img
        class="logo-icon"
        />
     </div>
   <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header"></li>
      <li>
        <a href="<?=base_url('kayit_ekle')?>">
          <i class="zmdi zmdi-assignment-returned"></i> <span>Kayıt Ekle</span>
        </a>
      </li>
      <li>
        <a href="<?=base_url('kayit_listele')?>">
          <i class="zmdi zmdi-format-list-bulleted"></i> <span>Kayıt Listele</span>
        </a>
      </li>
    </ul>

</div>

<div class="content-wrapper">
    <form action="<?=base_url('kayit_duzenle/'.$veri['id'])?>" method="post" >
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
                        value="<?=esc($veri['isim'])?>"
                      />
                    </div>
                    <div class="form-group">
                      <label for="aciklama">AÇIKLAMA</label>
                      <textarea cols ="10" class=form-control name="aciklama" id="aciklama"><?=esc($veri['aciklama'])?></textarea>
                    </div>

                    <div class="form-group">
                      <input type="submit"  name="gonder"class="btn btn-light px-5"
                      value="Güncelle">    
                    </div>
                  </form>
                </div>
              </div>
            </div>

          </div>
        </div>
    </form>
</div>