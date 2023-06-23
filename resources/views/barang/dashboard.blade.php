@extends('layout.template')
@section('title', 'Dashboard')
@section('konten')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary text-bold">Tugas Membuat Aplikasi Sistem Informasi</h6>
        </div>
        <div class="card-body">
            <div class="pb-3">
                <p class="m-0 font-weight-bold text-dark text-bold">Kami kelompok 4 yang terdiri dari
                    5 anggota, diantaranya :</p>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered text-center table-hover " id="dataTable" width="100%" cellspacing="0">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">NO</th>
                            <th scope="col">NAMA</th>
                            <th scope="col">NIM</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Muhammad Fikri Romadhon</td>
                            <td>211011450009</td>

                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Akianus Wenda</td>
                            <td>211011450343</td>

                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Fatimah Azzarro</td>
                            <td>211011450168</td>

                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Yudha Yudistira</td>
                            <td>211011450037</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Nicholas Widjaja</td>
                            <td>211011450037</td>
                        </tr>
                    </tbody>
                </table>
                <div class="py-5 pr-3 text-dark">
                    <ul>
                        <li>Aplikasi ini memiliki fitur C.R.U.D untuk mengelola data barang, serta fitur login, logout,
                            register, dan cetak data.</li>
                        <li>Membuat struktur database untuk menyimpan data barang. Buat tabel "Tbarang" dengan kolom
                            "kode_barang" (unik), "nama_barang", "kategori_barang", "harga", dan "jumlah".
                        </li>
                        <li>Membuat model untuk tabel "barang" dan definisikan fungsi CRUD (Create, Read, Update, Delete)
                            yang sesuai. Pastikan model menghubungkan ke database dan dapat melakukan operasi CRUD.</li>
                        <li>Membuat halaman-halaman yang diperlukan untuk fitur-fitur aplikasi. Membuat halaman login,
                            halaman pendaftaran (register), halaman utama (dashboard), halaman untuk menampilkan daftar
                            barang, halaman tambah barang, halaman edit barang, dan halaman cetak data.</li>
                        <li>Membuat logika untuk mengelola autentikasi pengguna. membuat fungsi untuk mendaftar (register),
                            masuk (login), dan keluar (logout) pengguna.</li>
                        <li>Membuat fungsi-fungsi untuk membuat, membaca, mengubah, dan menghapus data barang</li>
                        <li>Membuat fungsi untuk mengambil data barang dari database dan memformatnya untuk dicetak. Buat
                            halaman cetak data yang menampilkan daftar barang dengan tata letak yang sesuai untuk mencetak.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card-footer">

        </div>
    </div>
@endsection
