@extends('layouts.app')

@section('title', 'Daftar Warga')

@section('contents')
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      
    </div>
    <div class="card-body">
			@if (auth()->user()->level == 'Admin')
    
			@endif
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Nik</th>
              <th>Alamat</th>
              <th>No HP</th>
							@if (auth()->user()->level == 'Admin')
              
							@endif
            </tr>
          </thead>
          <tbody>
            @php($no = 1)
            @foreach ($data as $row)
              <tr>
                <th>{{ $no++ }}</th>
                <td>{{ $row->kode_barang }}</td>
                <td>{{ $row->nama_barang }}</td>
                <td>{{ $row->kategori->nama }}</td>
                <td>{{ $row->harga }}</td>
                <td>{{ $row->jumlah }}</td>
								@if (auth()->user()->level == 'Admin')
                <td>
                  <a href="{{ route('barang.edit', $row->id) }}" class="btn btn-warning">Edit</a>
                  <a href="{{ route('barang.hapus', $row->id) }}" class="btn btn-danger">Hapus</a>
                </td>
								@endif
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
