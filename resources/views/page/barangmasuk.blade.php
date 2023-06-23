@extends('layout.template')
@section('title', 'Barang Masuk')
@section('konten')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger text-bold">ATTENTION :</h6>
        </div>
        <div class="card-body">
            <div class="pb-3">
                <div class="table-responsive">
                    <table class="table table-bordered text-center table-striped " id="dataTable" width="100%"
                        cellspacing="0">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Suplier</th>
                                <th scope="col">ID Barang</th>
                                <th scope="col">Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td scope="row">02 Desember 2029</td>
                                <td scope="row">129.000</td>
                                <td scope="row">129.000</td>
                                <td scope="row">129.000</td>
                                <td>
                                    <a href="#"class="btn btn-warning">Edit</a>
                                    <a href="#"class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td scope="row">02 Desember 2029</td>
                                <td scope="row">129.000</td>
                                <td scope="row">129.000</td>
                                <td scope="row">129.000</td>
                                <td>
                                    <a href="#"class="btn btn-warning">Edit</a>
                                    <a href="#"class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td scope="row">02 Desember 2029</td>
                                <td scope="row">129.000</td>
                                <td scope="row">129.000</td>
                                <td scope="row">129.000</td>
                                <td>
                                    <a href="#"class="btn btn-warning">Edit</a>
                                    <a href="#"class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td scope="row">02 Desember 2029</td>
                                <td scope="row">129.000</td>
                                <td scope="row">129.000</td>
                                <td scope="row">129.000</td>
                                <td>
                                    <a href="#"class="btn btn-warning">Edit</a>
                                    <a href="#"class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td scope="row">02 Desember 2029</td>
                                <td scope="row">129.000</td>
                                <td scope="row">129.000</td>
                                <td scope="row">129.000</td>
                                <td>
                                    <a href="#"class="btn btn-warning">Edit</a>
                                    <a href="#"class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
            <div class="text-muted">
                <h5>NOTE :</h5>
                <p class="m-0 font-weight-bold text-dark text-bold">Kami memohon maaf, untuk fitur "Barang
                    Masuk dan Barang Keluar "<br> <i>Masih dalam proses tahap
                        pengembangan dan pembelajaran.</i></p>
                <p class="mt-5 font-weight-bold text-dark text-bold">Terimakasih atas perhatiannya !</p>
            </div>
        </div>

        <div class="card-footer">
        </div>
    </div>
@endsection
