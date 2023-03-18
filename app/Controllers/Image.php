<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Image extends Controller
{
    public function index()
    {
        return view('image');
    }

    public function test()
    {
        echo "halo";
    }

    public function upload()
    {

        helper(['form', 'url']);
        $database = \Config\Database::connect();
        $db = $database->table('profiles');

        $validateImg = $this->validate([
            'gambarX' => [
                'uploaded[gambarX]',
                'mime_in[gambarX,image/jpg,image/jpeg,image/png,image/gif]',
                'max_size[gambarX,4096]',
            ]
        ]);

        if (!$validateImg) {
            print_r('Eiter file type or size (Max 4MB) not correct.');
        } else {
            $x_file = $this->request->getFile('gambarX');
            $image = \Config\Services::image()
                ->withFile($x_file)
                ->resize(400, 400, true, 'height')
                ->save(FCPATH . '/images/' . $x_file->getRandomName());

            // $x_file->move(WRITEPATH . 'uploads');
            print_r(WRITEPATH);
            $fileData = [
                'name' =>  $x_file->getName(),
                'type'  => $x_file->getClientMimeType()
            ];

            $store = $db->insert($fileData);
            print_r('Image resized and stored.');
        }
    }
}
