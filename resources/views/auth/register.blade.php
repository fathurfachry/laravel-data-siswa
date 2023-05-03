@extends('layout.app')

@section('title', 'register')

@section('isi')


<div class="row ">
    <div class="col-md-4 mx-auto">

        <div class="card border-0 shadow mx-5 my-3 px-2 py-2" style="border-radius: 20px;">
            <h5 class="card-header border-0 bg-white text-center fs-2">Daftar</h5>
            <div class="card-body">
                
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-3">
                        <input type="text" class="form-control" id="name" placeholder="Nama Lengkap" name="name"   aria-describedby="emailHelp">
                        
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email"  aria-describedby="emailHelp">
                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                        
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" placeholder="Sandi" name="password" id="exampleInputPassword1">
                        
                    </div>
                    <div class="mb-5">
                        <input type="password" class="form-control" placeholder="Konfirmasi Sandi" name="password_confirmation" id="exampleInputPassword1">
                        
                    </div>
                    {{-- <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div> --}}

                    <div class="text-center d-grid mb-2 gap-3">
                        <button type="submit" class="btn btn-primary">Daftarkan</button>
                        <div class="text-black justify-content-center fs-6">Sudah punya akun?</div>
                        <a href="{{ url('login')}}" type="submit" class="btn btn-outline-primary">Masuk</a>     
                    </div>
                
                    </form>
            </div>
            </div>

    </div>
</div>


@endsection