<nav class="navbar navbar-expand-md fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">KPM.</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-collapse" aria-controls="nav-collapse"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="nav-collapse">
            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link px-3" href="{{ url('/') }}">Home</a>
                <a class="nav-item nav-link px-3" href="{{ url('/about') }}">About</a>
                <a class="nav-item nav-link px-3" href="{{ url('/product') }}">Products</a>
                <a class="nav-item nav-link px-3" href="{{ url('/infrastructure') }}">Infrastructure</a>
                <a class="nav-item nav-link px-3" href="{{ url('/supplier') }}">Supplier</a>
            </div>
        </div>
    </div>
</nav>
