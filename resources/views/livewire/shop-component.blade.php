<section class="breadcrumbs-page-wrap">        
    <div class="bg-fixed bg-navy-blue pos-rel breadcrumbs-page">
        <img class="ptt-png" src="{{asset('images/Dot-Shape.png')}}" alt="png">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('index')}}">Inicio</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Categoria</li>
                </ol>
            </nav>
            <h1>Sub Categoria</h1>
        </div>
    </div>
</section>

<!-- Main Body Content Start -->
<main id="body-content">

    <!-- Shopping Wide Start -->
    <section class="pb-0 wide-tb-100">
        <div class="container">
            <div class="product-count">
                <div class="row align-items-center">
                    <div class="mb-2 col-xl-9 col-lg-8 col-md-6 mb-md-0">
                        <strong>Mostrando {{$info->firstItem()}}-{{$info->lastItem()}} de {{$info->total()}} resultados</strong>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <select name="orderby" class="form-control wide form-light">
                            <option selected="" value="1">-</option>
                            <option value="2">Populares</option>
                            <option value="3">Nuevos</option>
                            <option value="4">Precio: low to high</option>
                            <option value="5">Precio: high to low</option>
                            <option value="6">Alfabetico</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 row-cols-sm-1">
                @foreach ($products as $product)
                    <div class="mb-5 col">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="{{route('product.details', trim($product['slug']))}}" class="image">
                                    @if(file_exists(public_path()."/images/products/".trim($product['codigo']).".jpg"))
                                        <img class="pic-1" src="{{asset('images/products/'.trim($product['codigo']).'.jpg')}}" alt="{{$product['referencia']." ".$product['descripcion']}}">
                                    @else
                                        <img class="pic-1" src="{{asset('images/products/no_image.png')}}" alt="{{$product['referencia']." ".$product['descripcion']}}">
                                    @endif
                                </a>
                                @if ($product['descuento'] > 0)
                                    <span class="product-discount-label">Oferta</span>
                                @endif
                                <a class="add-to-cart btn-theme bg-navy-blue capusle" href="{{route('product.details', trim($product['slug']))}}">
                                    Comprar 
                                    <span class="ml-2"> 
                                        <i data-feather="shopping-bag"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="product-content">
                                <h3 class="title">
                                    <a href="{{route('product.details', trim($product['slug']))}}">
                                        {{$product['referencia']." ".$product['descripcion']}}
                                    </a>
                                </h3>
                                <div class="price">
                                    @if ($product['descuento'] > 0)
                                        <span>${{$product['descuento']}}</span> 
                                        ${{$product['precio']}}
                                    @else
                                        ${{$product['precio']}}
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="my-3">
                <div class="theme-pagination">
                    <nav aria-label="Page navigation example">
                        {{$info->links()}}
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Wide End -->
</main>