<nav class="navbar navbar-expand-md fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">KPM.</a>
        <button class="navbar-toggler my-3 my-md-0" type="button" data-toggle="collapse" data-target="#nav-collapse" aria-controls="nav-collapse"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="nav-collapse">
            <div class="navbar-nav text-center ml-auto my-3 my-md-0">
                <a class="nav-item nav-link px-4" href="{{ url('/') }}">Beranda</a>
                <a class="nav-item nav-link px-4" href="{{ url('/tentang-kami') }}">Tentang Kami</a>
                <a class="nav-item nav-link px-4" href="{{ url('/produk') }}">Produk</a>
                <a class="nav-item nav-link px-4" href="{{ url('/infrastruktur') }}">Infrastruktur</a>
                <a class="nav-item nav-link px-4" href="{{ url('/principal') }}">Principal</a>
                <a class="nav-item nav-link px-4" href="{{ url('/kontak') }}">Hubungi Kami</a>
            </div>
        </div>
    </div>
</nav>
