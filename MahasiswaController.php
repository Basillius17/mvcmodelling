<?php

require_once "model/Mahasiswa.php";

class MahasiswaController {

    public function index() {
        $model = new Mahasiswa();
        $data = $model->getData();

        require_once "view/mahasiswa_view.php";
    }
}
