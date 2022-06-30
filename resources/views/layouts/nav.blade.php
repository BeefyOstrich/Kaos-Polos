<nav class="navbar navbar-expand-md navbar-dark bg-primary">
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('pemesanan') }}">Pesan Kaos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('riwayat_pemesanan') }}">Riwayat Pemesanan</a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li> --}}
        </ul>
    </div>
    <div class="mx-auto order-0">

        <a class="navbar-brand" href="#">
            <img class="rounded" src="{{ asset('assets/brand/nahkoda.jpeg') }}" width="30" height="30" class="d-inline-block align-top" alt="">
            CV. Nahkoda Nusantara
        </a>
        {{-- <a class="navbar-brand mx-auto" href="#">Kaos Polos</a> --}}


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        @if (!Auth::guest())
            {{-- Belum Login --}}
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <form action="{{ url('/logout') }}" method="POST"> @csrf 
                        <button style="color:white;" type="submit"
                        class="btn btn-ghost-dark">Logout</button>
                    </form>
                    {{-- <a class="nav-link" href="{{route('logout')}}">Logout</a> --}}
                </li>
            </ul>
        @else
            {{-- Sudah Login --}}
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}">
                        <button style="color:white;" type="submit"
                        class="btn btn-ghost-dark">Login</button>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('register')}}">
                        <button style="color:white;" type="submit"
                        class="btn btn-ghost-dark">Regiter</button>
                    </a>

                </li>
            </ul>
        @endif
        
    </div>
</nav>