@extends('layout.app')

@section('isi')
    

    <div class="container my-4">

        {{-- Tombol tambah siswa --}}
         <div class="pb-3 mb-2">
                  <a href="{{ url('siswa/buat') }}"  class="btn btn-primary">+ Tambah Siswa</a>
                </div>

            <div class="card px-2 py-2">

                <table class="table table-hover">
                    <thead>
                        <tr class="text-left">
                        <th scope="col">No.</th>
                        <th scope="col">Nama Murid</th>
                        <th scope="col">Kelas dan Jurusan</th>
                        <th scope="col">Info Lanjutan</th>
                        <th class="" scope="col">Aksi</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                        @php($number = 1)
                        @foreach ($siswa as $p)
                        <tr class="text-left">
                            <th scope="row">{{ $number }}</th>
                            <td>{{$p->nama}}</td>
                            <td>{{$p->info}}</td>
                            <td>{{$p->info_lanjutan}}</td>
                            <td class="justify-content-end">
                            

                                {{-- FORM --}}
                                <form method="POST" action="{{ url("siswa/$p->id" ) }}">

                                    <a href="{{ url("siswa/$p->id/edit") }}" class="btn btn-outline-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-outline-danger my-2"2>
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>


                                


                            
                            </td>
                            
                        </tr>
                        @php($number++)
                        @endforeach
                        
                    </tbody>
                    </table>

            </div>


            {{-- footer --}}
            
    </div>
    
    
@endsection
