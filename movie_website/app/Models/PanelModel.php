<?php
namespace App\Models;

class PanelModel
{
    protected $db;

    public function __construct()
    {
        $this->db = db_connect();
    }
    public function veri_ekle($isim,$url,$aciklama,$resim){
        $builder = $this->db->table('film');

        $data=[
          'isim'=>$isim,
          'url'=>$url,
          'aciklama'=>$aciklama,
          'resim'=>$resim,
        ];

        return $builder->insert($data);
    }
    public function kayit_sil($id)
    {
        $builder = $this->db->table('film');
        $builder->where('id',$id);
        return $builder->delete();
    }
    public function kayit_al($id)
    {
        $builder = $this->db->table('film');
        $builder->where('id',$id);
        $veri= $builder->get()->getResultArray();
        return $veri[0];
    }
    public function veri_duzenle($isim,$url,$aciklama,$id){
        $builder = $this->db->table('film');
        $builder ->where('id',$id);

        $data=[
          'isim'=>$isim,
          'url'=>$url,
          'aciklama'=>$aciklama,
        ];
        return $builder->update($data);
    }
}