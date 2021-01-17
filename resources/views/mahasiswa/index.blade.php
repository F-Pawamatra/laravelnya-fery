@extends('layout/main')

@section('title', "Daftar Mahasiswa")

@section('container')
  <div class="container">
    <div class="row">
        <div class="col-10">
          <h1 class="mt-3">Daftar Mahasiswa</h1>

          <a href="/mahasiswa/create" class="btn btn-primary my-3">Tambah Data Mahasiswa</a>
          
          @if (session('status'))
          <div class="alert alert-success">
              {{ session('status') }}
          </div>
          @endif

          <table class="table">
              <thead class="table-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Email</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Aksi</th>                    
                  </tr>
              </thead>
              <tbody>
                @foreach ($mahasiswa as $mahasiswa)
                  <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $mahasiswa->nama }}</td>
                    <td>{{ $mahasiswa->nim }}</td>
                    <td>{{ $mahasiswa->email }}</td>
                    <td>{{ $mahasiswa->jurusan }}</td>
                    <td>
                      <a href="/mahasiswa/{{$mahasiswa->id}}" class="badge bg-info">detail</a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection