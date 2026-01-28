<?php
namespace App\Controllers;

class StudentsController
{

    public function index(): void
    {
         echo '<h1>Daftar siswa</h1>';
        echo '<p>Menampilkan daftar siswa</p>';
    }

    public function create(): void
    {
          echo '<h1>Tambah siswa</h1>';
        echo '<p>Menampilkan form tambah siswa</p>';
    }
}
?>