<?php

namespace App\Controllers;

use App\Models\ModelMovie;
use CodeIgniter\Controller;

class Main extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function movie()
    {
        $model = model(ModelMovie::class);
        $data['movie_list'] = $model->tampil_data();

        if (empty($data['movie_list'])) {
            log_message('error', 'No data found in movie table.');
        } else {
            log_message('info', 'Data found in movie table.');
        }

        return view('movie_list', $data);
    }

    public function admin()
    {
        $model = new ModelMovie();
        $data['movie_list'] = $model->tampil_data();

        if (empty($data['movie_list'])) {
            log_message('error', 'No data found in movie table.');
        } else {
            log_message('info', 'Data found in movie table.');
        }

        return view('admin', $data);
    }

    public function detail($id)
    {
        $model = new ModelMovie();
        $data['movie'] = $model->tampil_detail(['id' => $id]);

        return view('detail', $data);
    }

    public function tambah()
    {
        $model = new ModelMovie();
        $data = [
            'judul' => $this->request->getPost('tambahjudul'),
            'tahun' => $this->request->getPost('tambahtahun'),
            'genre' => $this->request->getPost('tambahgenre'),
            'sutradara' => $this->request->getPost('tambahsutradara'),
            'deskripsi' => $this->request->getPost('tambahdeskripsi'),
            'poster' => $this->request->getPost('tambahposter'),
            'backdrop' => $this->request->getPost('tambahbackdrop')
        ];

        $model->input_data($data);
        return redirect()->to(base_url() . 'movie');
    }

    public function edit_admin()
    {
        $model = new ModelMovie();
        $data = [
            'judul' => $this->request->getPost('editjudul'),
            'tahun' => $this->request->getPost('edittahun'),
            'genre' => $this->request->getPost('editgenre'),
            'sutradara' => $this->request->getPost('editsutradara'),
            'deskripsi' => $this->request->getPost('editdeskripsi'),
            'poster' => $this->request->getPost('editposter'),
            'backdrop' => $this->request->getPost('editbackdrop')
        ];

        $id = $this->request->getPost('editid');
        $model->edit_data($id, $data);
        return redirect()->to(base_url() . 'admin');
    }

    public function edit_detail()
    {
        $model = new ModelMovie();
        $data = [
            'judul' => $this->request->getPost('editjudul'),
            'tahun' => $this->request->getPost('edittahun'),
            'genre' => $this->request->getPost('editgenre'),
            'sutradara' => $this->request->getPost('editsutradara'),
            'deskripsi' => $this->request->getPost('editdeskripsi'),
            'poster' => $this->request->getPost('editposter'),
            'backdrop' => $this->request->getPost('editbackdrop')
        ];

        $id = $this->request->getPost('editid');
        $model->edit_data($id, $data);
        return redirect()->to(base_url() . 'detail/' . $id);
    }

    public function hapus_detail($id)
    {
        $model = new ModelMovie();
        $model->hapus_data(['id' => $id]);
        return redirect()->to(base_url() . 'movie');
    }

    public function hapus_admin($id)
    {
        $model = new ModelMovie();
        $model->hapus_data(['id' => $id]);
        return redirect()->to(base_url() . 'admin');
    }
}