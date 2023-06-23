@extends('layout.template')
@section('title', 'Tambah Barang')

@section('konten')
    <form action="{{ route('barang.index') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">
                            Form Tambah Barang</h6>
                    </div>
                    {{-- bagian pengecekan jika form blm di isi --}}
                    @if ($errors->any())
                        <div class="pt-3 ml-2 col-8 ">
                            <div class="alert alert-danger ">
                                <ul>
                                    @foreach ($errors->all() as $item)
                                        <li>{{ $item }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif
                    <div class="card-body">
                        <div class="form-group">
                            <label for="kode_barang">Kode Barang</label>
                            <input type="text" id="kode_barang" class="form-control" name="kode_barang"
                                value="{{ Session::get('kode_barang') }}">
                        </div>
                        <div class="form-group">
                            <label for="nama_barang">Nama Barang</label>
                            <input type="text" id="nama_barang" class="form-control" name="nama_barang"
                                value="{{ Session::get('nama_barang') }}">
                        </div>
                        <div class="form-group">
                            <label for="kategori_barang">Kategori Barang</label>
                            <input type="text" id="kategori_barang" class="form-control" name="kategori_barang"
                                value="{{ Session::get('kategori_barang') }}">
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga Barang</label>
                            <input type="text" id="harga" class="form-control" name="harga"
                                value="{{ Session::get('harga') }}">
                        </div>
                        <div class="form-group">
                            <label for="jumlah">Jumlah Barang</label>
                            <input type="number" id="jumlah" class="form-control" name="jumlah"
                                value="{{ Session::get('jumlah') }}">
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('barang.index') }}" class="btn btn-primary">Kembali</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection
