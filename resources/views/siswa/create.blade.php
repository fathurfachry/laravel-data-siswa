@extends('layout.app')

@section('isi')

    <div class=" card px-4 py-4 container my-5 shadow-sm border-0">

        <h2 class="text-black fw-semibold">Buat Data Siswa</h2>
        <p class="text-secondary mb-4" style="font-size: 17px">Buat data siswa baru disini</p>
        
        <form  method="POST" class="row d-flex" action="{{url('siswa')}}" >
         @csrf

            <div class="col-3">
                <input type="text" class="form-control p-2" id="name" placeholder="Nama Murid" name="nama" required>
            </div>
            <div class="col-3">
                <input class="form-control p-2" id="grade" rows="3" placeholder="Kelas dan Jurusan" name="info" required></input>
            </div>
            <div class="col-6 mb-5">
                <input class="form-control p-2" id="grade" rows="3" placeholder="Info Lanjutan" name="info_lanjutan" required></input>
            </div>

            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3 px-3">Create</button>
            <a class="btn btn-outline-primary mb-3 " href="{{ url("siswa") }}"> <-Back </a>
            </div>
        </form>


    </div>

@endsection