 <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 px-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                <h1 class="fw-bold fs-3 text-primary">Stulist</h1>
            </a>


            <div class="col-md-3 text-end">
                {{-- //kalau udah login dan sudah diberanda, maka button login dan signup hilang --}}
                @guest
                <a href=" {{ route('login')}} " type="button" class="btn btn-outline-primary me-2">Login</a>
                <a href=" {{ route('register')}} "type="button" class="btn btn-primary">Sign-up</a>
                @else()


                <a href="{{ url('logout') }}" class="btn btn-outline-primary">Keluar</a>

                @endguest
            </div>


        </header>
