<section class="breadcrumbs-page-wrap">        
    <div class="bg-fixed bg-navy-blue pos-rel breadcrumbs-page">
        <img class="ptt-png" src="{{asset('images/Dot-Shape.png')}}" alt="png">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('index')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Administrador</li>
                </ol>
            </nav>
            <h1>Bienvenido</h1>
        </div>
    </div>
</section>
<!-- Opciones Generales -->
<section class="wide-tb-70">
    <div class="container">
        <div class="callout-center bg-blue d-flex align-items-center">
            <div class="row align-items-center no-gutters justify-content-between w-100">

                <div class="col">
                    <div class="d-flex align-items-center">
                    </div>
                </div>
                
                <div class="px-5 mt-4 mb-0 col-md-auto text-md-right mt-md-0">
                    <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn-theme bg-orange">Salir</a>
                    <form id="logout-form" method="POST" action="{{route('logout')}}">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Main Body Content Start -->
<main id="body-content">
</main>
