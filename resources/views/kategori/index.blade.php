@extends('layouts.app')

@section('title', 'Profile Petugas')

@section('contents')
  <div class="card shadow mb-4">
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="btn btn-primary mb-3" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
            <i class="fa fa-user" aria-hidden="true"></i>
              <th>Lala</th>
            </tr>
          </thead>
          <table class="btn btn-primary mb-3" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
              <i class="fa fa-user" aria-hidden="true"></i>
                <th>Suci</th>
              </tr>
            </thead>
          <tbody>
            @php($no = 1)
            @foreach ($kategori as $row)
              <tr>
                <th>{{ $no++ }}</th>
                <td>{{ $row->nama }}</td>
                <td>
                  <a href="{{ route('kategori.edit', $row->id) }}" class="btn btn-warning">Edit</a>
                  <a href="{{ route('kategori.hapus', $row->id) }}" class="btn btn-danger">Hapus</a>
                </td>
              </tr>
            @endforeach
          </tbody>
          </table>
        </table>
      </div>
    </div>
  </div>
@endsection
