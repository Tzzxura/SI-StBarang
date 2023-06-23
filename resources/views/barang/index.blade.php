@extends('layout.template')

@section('title', 'Data Barang')
@section('konten')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>
        </div>
        <div class="card-body">
            <div class="pb-3">
            </div>
            <a href="{{ route('barang.create') }}" class="btn btn-primary mb-3">Tambah data</a>
            <div class="pb-3">
                <form class="d-flex" action="{{ route('barang.index') }}" method="get">
                    <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}"
                        placeholder="Masukkan kata kunci" aria-label="Search">
                    <button class="btn btn-secondary" type="submit">Cari</button>
                </form>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Kategori Barang</th>
                            <th>Harga Barang</th>
                            <th>Jumlah Barang</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = $data_barang->firstItem(); ?>
                        @foreach ($data_barang as $row)
                            <tr>
                                <th>{{ $i }}</th>
                                <td>{{ $row['kode_barang'] }}</td>
                                <td>{{ $row['nama_barang'] }}</td>
                                <td>{{ $row['kategori_barang'] }}</td>
                                <td>{{ $row['harga'] }}</td>
                                <td>{{ $row['jumlah'] }}</td>
                                <td>
                                    <a href="{{ route('barang.edit', $row->kode_barang) }}"class="btn btn-warning">Edit</a>
                                    <form onsubmit="return confirm('Apakah Anda Ingin Menghapus Data ?')"class="d-inline"
                                        action="{{ route('barang.destroy', $row->kode_barang) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" name="submit" class="btn btn-danger">Hapus</button>
                                    </form>

                                </td>
                            </tr>
                            <?php $i++; ?>
                        @endforeach

                    </tbody>
                </table>
                {{ $data_barang->links() }}
            </div>
        </div>
    </div>
@endsection
