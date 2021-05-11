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
            <h1>Categoria</h1>
        </div>
    </div>
</section>

<main id="body-content">
    <section class="pb-0 wide-tb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="product-gallery">
                        <div class="outer">
                            @if(file_exists(public_path()."/images/products/".trim($product->codigo).".jpg"))
                                <div id="big" class="owl-carousel owl-theme">
                                    <div class="item">
                                        <img src="{{asset('images/products/'.trim($product->codigo).'.jpg')}}" alt="{{$product->descripcion.' '.$product->referencia}}">
                                    </div>
                                </div>
                                <div id="thumbs" class="owl-carousel owl-theme">
                                    <div class="item">
                                        <img src="{{asset('images/products/'.trim($product->codigo).'.jpg')}}" alt="{{$product->descripcion.' '.$product->referencia}}">
                                    </div>
                                </div>
                            @else
                                <div id="big" class="owl-carousel owl-theme">
                                    <div class="item">
                                        <img src="{{asset('images/products/no_image.png')}}" alt="{{$product->descripcion.' '.$product->referencia}}">
                                    </div>
                                </div>
                                <div id="thumbs" class="owl-carousel owl-theme">
                                    <div class="item">
                                        <img src="{{asset('images/products/no_image.png')}}" alt="{{$product->descripcion.' '.$product->referencia}}">
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="product-description">
                        <h2 class="title">{{$product->descripcion.' '.$product->referencia}}</h2>
                        <div class="price">
                            ${{number_format($product->precio)}}
                            @if($product->precio_descuento > 0)
                                <span style="text-decoration:line-through; color:gray;">
                                    ${{number_format($product->precio_descuento)}}
                                </span>
                            @endif
                        </div>
                        {{--
                        <p>The Pop Up Bowl was designed for convenience. Made of silicone, its collapsible design allows it to be flattened and extended with ease. This makes it ideal to carry with you on holiday or to the dog park! </p>

                        <div class="collapse" id="collapseExample">
                            <div>
                                <p>Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.</p>
                            </div>
                        </div>
                        <a class="link-oragne" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Read More</a>
                        --}}
                        <div class="product-highlight">

                            <h5><strong>SKU</strong></h5>
                            <p>{{$product->codigo}}</p>

                            <h5><strong>Categorias</strong></h5>
                            <p><a href="#" class="link-oragne">Medicamentos</a>, <a href="#" class="link-oragne">Salud</a>, <a href="#" class="link-oragne">Belleza</a></p>

                        </div>

                        <div class="quantity">
                            <button class="minus-btn" type="button" name="button">
                                <i data-feather="minus"></i>
                            </button>                                        
                            <input type="text" name="name" value="0">
                            <button class="plus-btn" type="button" name="button">
                                <i data-feather="plus"></i>
                            </button>
                        </div>

                        <button class="ml-4 btn-theme bg-green btn-shadow" type="submit">Comprar</button>
                        
                    </div>
                </div>
            </div>
            
            <div class="mt-4 row">
                <div class="mx-auto col-md-12 col-lg-10">
                    <div class="review-tabbing">
                        <ul class="mb-3 nav nav-pills theme-tabbing justify-content-center" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                                    role="tab" aria-controls="pills-home" aria-selected="true">Descripción</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                                    role="tab" aria-controls="pills-profile" aria-selected="false">Información Adicional</a>
                            </li>
                        </ul>
                        <div class="tab-content theme-tabbing" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac elementum elit. Morbi eu arcu ipsum. Aliquam lobortis accumsan quam ac convallis. Fusce elit mauris, aliquet at odio vel, convallis vehicula nisi. Morbi vitae porttitor dolor. Integer eget metus sem. Nam venenatis mauris vel leo pulvinar, id rutrum dui varius. Nunc ac varius quam, non convallis magna. Donec suscipit commodo dapibus.</p>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac elementum elit. Morbi eu arcu ipsum. Aliquam lobortis accumsan quam ac convallis. Fusce elit mauris, aliquet at odio vel, convallis vehicula nisi. Morbi vitae porttitor dolor. Integer eget metus sem. Nam venenatis mauris vel leo pulvinar, id rutrum dui varius. Nunc ac varius quam, non convallis magna. Donec suscipit commodo dapibus.</div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab">
                                <div class="table-responsive">
                                    INFO
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Wide End -->

</main>

