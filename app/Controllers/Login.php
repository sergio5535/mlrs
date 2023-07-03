<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Login extends Controller
{
    public function index()
    {
        $UserModel = new \App\Models\UserModel();
        $login = $this->request->getPost('login');

        if ($login) {
            $user_email = $this->request->getPost('user_email');
            $user_password = $this->request->getPost('user_password');

            if ($user_email == '' or $user_password == '') {
                $err = "Silahkan masukkan email dan password";
            }

            if (empty($err)) {
                $dataUser = $UserModel->where("user_email", $user_email)->first();
                if (!$dataUser) {
                    $err = "Email tidak sesuai";
                } elseif ($dataUser['user_password'] != md5($user_password)) {
                    $err = "Password tidak sesuai";
                }
            }

            if (empty($err)) {
                $dataSesi = [
                    'user_id' => $dataUser['user_id'],
                    'user_email' => $dataUser['user_email'],
                    'user_password' => $dataUser['user_password']
                ];
                session()->set($dataSesi);
                return redirect()->to('admin');
            }

            if ($err) {
                session()->setFlashdata('user_email', $user_email);
                session()->setFlashdata('error', $err);
                return redirect()->to("login");
            }
        }

        // Load view for admin login page
        return view('login_view');
    }
}
