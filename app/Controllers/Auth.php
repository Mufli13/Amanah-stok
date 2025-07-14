<?php

namespace App\Controllers;

use App\Models\UserModel;   // ⬅️ Tambahkan ini
use CodeIgniter\Controller;

class Auth extends BaseController  // ⬅️ Harus pakai BaseController
{
    public function index()
    {
        return view('login');  // 
    }

    public function login()
    {
        $session = session(); // 
        $model = new UserModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $model->where('username', $username)->first();

        if ($user && md5($password) == $user['password']) {
            $session->set([
                'id_user' => $user['id_user'],
                'username' => $user['username'],
                'nama_lengkap' => $user['nama_lengkap'],
                'role' => $user['role'],
                'logged_in' => true
            ]);
            return redirect()->to('/NoteController');
        } else {
            return redirect()->to('/auth')->with('error', 'Username atau password salah!');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/auth');
    }
}
