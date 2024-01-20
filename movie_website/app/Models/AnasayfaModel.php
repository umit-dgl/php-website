<?php

namespace App\Models;

use CodeIgniter\Model;

class AnasayfaModel extends Model
{
    protected $table = 'kullanicilar';
    protected $allowedFields = ['kulad', 'sifre'];

    public function kayitlar()
    {
        $this->table = 'film';
        return $this->findAll();
    }
    public function kayit_detay($url)
    {
        $this->table = 'film';
        return $this->where('url',$url)->find();
    }
    public function yeni_kayit($data)
    {
        $kullanici_verisi = [
            
            'kulad' => $data['kulad'],
            'sifre' => password_hash($data['sifre'], PASSWORD_DEFAULT),
        ];
        return $this->insert($kullanici_verisi);
    }
}