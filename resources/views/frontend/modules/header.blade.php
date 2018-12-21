<nav class="navbar navbar-expand-md fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">KPM.</a>
        <button class="navbar-toggler my-3 my-md-0" type="button" data-toggle="collapse" data-target="#nav-collapse" aria-controls="nav-collapse"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="nav-collapse">
            <div class="navbar-nav text-center ml-auto my-3 my-md-0">
                <a class="nav-item nav-link px-4" href="{{ url('/') }}">Home</a>
                <a class="nav-item nav-link px-4" href="{{ url('/about') }}">About</a>
                <a class="nav-item nav-link px-4" href="{{ url('/product') }}">Products</a>
                <a class="nav-item nav-link px-4" href="{{ url('/infrastructure') }}">Infrastructure</a>
                <a class="nav-item nav-link px-4" href="{{ url('/supplier') }}">Supplier</a>
            </div>
        </div>
    </div>
</nav>
