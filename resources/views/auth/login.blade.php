@extends('layout.app')

@section('title', 'Login')

@section('isi')


<div class="row">
    <div class="col-md-4 mx-auto">
        <div class="card border-0 shadow mx-5 my-3 px-2 py-2" style="border-radius: 20px;">
            <h5 class="card-header text-center border-0 bg-white pt-3 fs-2">Masuk</h5>
            <div class="card-body">

                <form method="POST" action="{{url("login")}}">
                    @csrf

                    @if (session()->has('error_message'))
                    <div class="alert alert-danger">{{session()->get('error_message')}}</div>
                    @endif
                    <div class="mb-3">
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email" aria-describedby="emailHelp">
                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                        @if($errors->has('email'))
                        <span class="text-danger" style="font-size: 12px">{{$errors->first('email')}}</span>
                        @endif
                    </div>
                    <div class="mb-4">
                        <input type="password" class="form-control" placeholder="Sandi" name="password" id="exampleInputPassword1">
                        {{-- @if($errors->has('password'))
                        <span class="text-danger" style="font-size: 12px">{{$errors->first('password')}}</span>
                        @endif --}}
                    </div>
                    {{-- <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div> --}}

                    <div class=" d-grid text-center gap-3">
                        <button type="submit" class="btn btn-primary">Masuk</button>
                        <div class="text-black justify-content-center fs-6">Belum punya akun?</div>
                        <a href="{{ url('register')}}" type="submit" class="btn btn-outline-primary">Daftar</a>                        
                    </div>
                
                    </form>
            </div>
        </div>

    </div>
</div>


@endsection