<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // Ganti welcome_message jadi path file kamu
        return view('home_page/index'); 
    }

    public function contact()
    {
        // Tambahkan fungsi ini untuk halaman contact
        return view('home_page/contact');
    }

    public function experience()
    {
        return view('home_page/experience'); 
    }

    public function sendEmail()
    {
        $email = \Config\Services::email();

        // Konfigurasi SMTP Gmail
        $config = [
            'protocol'   => 'smtp',
            'SMTPHost'   => 'smtp.gmail.com',
            'SMTPUser'   => 'alamsyahfahmi99@gmail.com',
            'SMTPPass'   => 'lhzk kpbj kphw ebli', // MASUKKAN 16 DIGIT APP PASSWORD DISINI
            'SMTPPort'   => 465,
            'SMTPCrypto' => 'ssl',
            'mailType'   => 'html',
            'charset'    => 'utf-8',
            'newline'    => "\r\n"
        ];

        $email->initialize($config);

        $name    = $this->request->getPost('name');
        $userEmail = $this->request->getPost('email');
        $message = $this->request->getPost('message');

        $email->setFrom('alamsyahfahmi99@gmail.com', 'Portfolio System');
        $email->setTo('alamsyahfahmi99@gmail.com');
        $email->setReplyTo($userEmail, $name);
        
        $email->setSubject('Pesan Baru dari: ' . $name);
        $email->setMessage("
            <h3>Pesan Baru dari Website Portofolio</h3>
            <p><b>Nama:</b> $name</p>
            <p><b>Email Pengirim:</b> $userEmail</p>
            <p><b>Pesan:</b><br>$message</p>
        ");

        if ($email->send()) {
            return redirect()->to(base_url('contact'))->with('success', 'Email berhasil dikirim! Saya akan segera membalasnya.');
        } else {
            return redirect()->to(base_url('contact'))->with('error', 'Gagal mengirim email. Silakan coba lagi nanti.');
            // Debugging (Gunakan ini jika gagal terus untuk cek errornya):
            // echo $email->printDebugger();
        }
    }
}