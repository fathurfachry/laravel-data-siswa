@extends('layout.app')

@section('isi')

     <div class=" card px-4 py-4 container my-5 shadow-sm border-0">

        <h2 class="text-black fw-semibold">Edit Data Siswa</h2>
        <p class="text-secondary mb-4" style="font-size: 17px">Edit data siswa yang sudah pernah dibuat disini</p>
        
        <form  method="POST" class="row d-flex" action="{{url("siswa/$siswa->id")}}" >
        @method('PATCH')
        @csrf

            <div class="col-3">
                <input type="text" class="form-control p-2" id="nama" value="{{$siswa->nama}}"  placeholder="Nama Murid"  name="nama" required>
            </div>
            <div class="col-3">
                <input class="form-control p-2" id="info" value="{{$siswa->info}}" rows="3" placeholder="Kelas dan Jurusan" name="info" required></input>
            </div>
            <div class="col-6 mb-5">
                <input class="form-control p-2" id="info_lanjutan" value="{{$siswa->info_lanjutan}}" rows="3" placeholder="Info Lanjutan" name="info_lanjutan" required></input>
            </div>

            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3 px-4">Edit</button>
                <a class="btn btn-outline-primary mb-3 px-3 " href="{{ url("siswa") }}"> Balik </a>
            </div>
        </form>


    </div>

    

@endsection