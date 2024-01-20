<?php

namespace App\Controllers;

use App\Models\AnasayfaModel;

class Anasayfa extends BaseController
{
    protected $helpers = ['form','text'];
    public function index()
    {
        $data = [];

        $model = model('AnasayfaModel');
        $kayitlar = $model->kayitlar();

        if(count($kayitlar)>0)
        {
            $data['kayitlar'] = $kayitlar;
        }

        $session =session();

        if($session->has('durum') && $session->get('durum'))
        {
            $data['isim']= $session->get('isim');
            $data['durum']= $session->get('durum');

            return view('tema/ziyaretci/header',$data)
                .view('sayfalar/anasayfa')
                .view('tema/ziyaretci/footer');
        }
        else
        {
            return view('tema/ziyaretci/header',$data)
            .view('sayfalar/anasayfa')
            .view('tema/ziyaretci/footer');
        }
        
    }
    public function kayit()
    {
        $session = session();

        if ($session->has('durum') && $session->get('durum')) {
            return redirect()->to(base_url('panel'));
        } else {
            if (!$this->request->is('post')) {
                return view('tema/ziyaretci/header')
                .view('sayfalar/kayit')
                .view('tema/ziyaretci/footer');
            }

            $rules = [
                'kulad' => 'required|min_length[3]|max_length[20]|alpha_numeric',
                'sifre' => 'required|min_length[3]',
            ];
            

            if (!$this->validate($rules)) {

                 return view('tema/ziyaretci/header')
                 .view('sayfalar/kayit')
                 .view('tema/ziyaretci/footer');
            }

            $data = $this->validator->getValidated();
            $model = model('AnasayfaModel');

            if ($model->yeni_kayit($data)) {
                $kul_bilgi = [
                    'isim' => $data['kulad'],
                    'durum' => true
                ];

                $session->set($kul_bilgi);
                return redirect()->to(base_url('panel'));
            } else 
            {
                return view('tema/ziyaretci/header', ['uyari' => 'Kayıt başarısız!'])
                .view('sayfalar/kayit')
                .view('tema/ziyaretci/footer');
            }
        }
    }

    public function login()
    {
        $session = session();
    
        if ($session->has('durum') && $session->get('durum')) {
            return redirect()->to(base_url('panel'));
        }
    
        if (!$this->request->is('post')) {
            return view('tema/ziyaretci/header') . view('sayfalar/login') . view('tema/ziyaretci/footer');
        }
    
        $rules = [
            'kulad' => 'required',
            'sifre' => 'required',
        ];
    
        if (!$this->validate($rules)) {
            return view('tema/ziyaretci/header') . view('sayfalar/login') . view('tema/ziyaretci/footer');
        }
    
        $model = model('AnasayfaModel');
        $data = $this->validator->getValidated();
    
        $users = $model->where('kulad', $data['kulad'])->findAll();

        if (!empty($users)) {
            foreach ($users as $user) {
                if (password_verify($data['sifre'], $user['sifre'])) {
                    $kul_bilgi = [
                        'isim'  => $user['kulad'], // veya kullanmak istediğiniz başka bir alan
                        'durum' => true
                    ];
                    $session->set($kul_bilgi);
                    return redirect()->to(base_url('panel'));
                }
            }
        }
        
        else 
        {
            return view('tema/ziyaretci/header', ['uyari' => 'Yanlış kullanıcı']) . view('sayfalar/login') . view('tema/ziyaretci/footer');
        }
    }

    public function logout()
    {
        $session = session();
        $session ->destroy();
        return redirect()->to(base_url('login'));
    }

    public function incele($url)
    {
        $data = [];

        $model = model('AnasayfaModel');
        //url normalize etme start
        $normalized_url = url_title(convert_accented_characters($url), 'dash', TRUE);
        $veri = $model->kayit_detay($normalized_url);
        //url normalize etme end

        $veri= $model=$model->kayit_detay($url);
        $data['veri']=$veri[0];
        $session =session();
        if($session->has('durum') && $session->get('durum'))
        {
            $data['isim']= $session->get('isim');
            $data['durum']= $session->get('durum');

        }
        return view('tema/ziyaretci/header',$data).view('sayfalar/incele').view('tema/ziyaretci/footer');
    }
    
}
