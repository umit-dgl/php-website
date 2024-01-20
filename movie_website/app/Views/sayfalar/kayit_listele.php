<style>
    .content-container {
        margin-top: 100px; 
    }
</style>
<div class="container mt-6 content-container">
  <div class="container mt-6">
      <div class="card mb-8">
          <div class="card-body ml-3">
              <h5 class="card-title">Hoşgeldin <?=$isim?></h5>

              <table class="table table-hover table-dark">
                  <thead>
                      <tr>
                          <th scope="col">#</th>
                          <th scope="col">İSİM</th>
                          <th scope="col">URL</th>
                          <th scope="col">İŞLEM</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php
                      if(isset($kayitlar) && count($kayitlar)>0)
                      {
                          foreach ($kayitlar as $item)
                          {
                              echo '<tr>';
                              echo '<th scope="row">'.$item['id'].'</th>';
                              echo '<td>'.$item['isim'].'</td>';
                              echo '<td>'.$item['url'].'</td>';
                              echo '<td>';
                              echo '<a href="'.base_url('kayit_sil/'.$item['id']).'" class="btn btn-danger">SİL</a> ';
                              echo '<a href="'.base_url('kayit_duzenle/'.$item['id']).'" class="btn btn-primary">DÜZENLE</a>';
                              echo '</td>';
                              echo '</tr>';
                          }
                      }
                      else 
                      {
                          echo '<tr><td colspan="4">Kayıt yok</td></tr>';
                      }
                      ?>
                  </tbody>
               </table>
          </div>
      </div>
   </div>
</div>




