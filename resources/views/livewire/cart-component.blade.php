<section class="breadcrumbs-page-wrap">        
    <div class="bg-fixed bg-navy-blue pos-rel breadcrumbs-page">
        <img class="ptt-png" src="{{asset('images/Dot-Shape.png')}}" alt="png">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('index')}}">Inicio</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tu Carro</li>
                </ol>
            </nav>
            <h1>Tu Carro</h1>
        </div>
    </div>
</section>

<!-- Main Body Content Start -->
<main id="body-content">

    <!-- Shopping Cart Start -->
    <section class="pb-0 wide-tb-100">
        <div class="container">
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-dark theme-head">
                        <tr>
                            <th scope="col">&nbsp;</th>
                            <th scope="col"><span>Producto</span></th>
                            <th scope="col"><span>Precio</span></th>
                            <th scope="col"><span>Cantidad</span></th>
                            <th scope="col"><span>Total</span></th>                                
                        </tr>
                    </thead>
                    <tbody class="theme-body">
                        <tr>
                            <th scope="row">
                                <a href="#" class="link-oragne"><i data-feather="x-square"></i></a>
                            </th>
                            <td>
                                <div class="item-product">
                                    <span class="img-wrap"><img src="{{asset('images/shop/item-1.jpg')}}" alt=""></span>
                                    <span>Nombre Producto</span>
                                </div>
                            </td>
                            <td><strong class="txt-blue">$75.00</strong></td>
                            <td>
                                <div class="quantity">
                                    <button class="minus-btn" type="button" name="button">
                                        <i data-feather="minus"></i>
                                    </button>                                        
                                    <input type="text" name="name" value="0">
                                    <button class="plus-btn" type="button" name="button">
                                        <i data-feather="plus"></i>
                                    </button>
                                </div>
                            </td>
                            <td><strong class="txt-orange">$75.00</strong></td>
                        </tr>
                        
                        <tr>
                            <th scope="row">
                                <a href="#" class="link-oragne"><i data-feather="x-square"></i></a>
                            </th>
                            <td>
                                <div class="item-product">
                                    <span class="img-wrap"><img src="{{asset('images/shop/item-2.jpg')}}" alt=""></span>
                                    <span>Nombre Producto</span>
                                </div>
                            </td>
                            <td><strong class="txt-blue">$75.00</strong></td>
                            <td>
                                <div class="quantity">
                                    <button class="minus-btn" type="button" name="button">
                                        <i data-feather="minus"></i>
                                    </button>                                        
                                    <input type="text" name="name" value="0">
                                    <button class="plus-btn" type="button" name="button">
                                        <i data-feather="plus"></i>
                                    </button>
                                </div>
                            </td>
                            <td><strong class="txt-orange">$75.00</strong></td>
                        </tr>

                        <tr>
                            <th scope="row">
                                <a href="#" class="link-oragne"><i data-feather="x-square"></i></a>
                            </th>
                            <td>
                                <div class="item-product">
                                    <span class="img-wrap"><img src="{{asset('images/shop/item-3.jpg')}}" alt=""></span>
                                    <span>Nombre Producto</span>
                                </div>
                            </td>
                            <td><strong class="txt-blue">$75.00</strong></td>
                            <td>
                                <div class="quantity">
                                    <button class="minus-btn" type="button" name="button">
                                        <i data-feather="minus"></i>
                                    </button>                                        
                                    <input type="text" name="name" value="0">
                                    <button class="plus-btn" type="button" name="button">
                                        <i data-feather="plus"></i>
                                    </button>
                                </div>
                            </td>
                            <td><strong class="txt-orange">$75.00</strong></td>
                        </tr>

                        <tr>
                            <th scope="row">
                                <a href="#" class="link-oragne"><i data-feather="x-square"></i></a>
                            </th>
                            <td>
                                <div class="item-product">
                                    <span class="img-wrap"><img src="{{asset('images/shop/item-4.jpg')}}" alt=""></span>
                                    <span>Nombre Producto</span>
                                </div>
                            </td>
                            <td><strong class="txt-blue">$75.00</strong></td>
                            <td>
                                <div class="quantity">
                                    <button class="minus-btn" type="button" name="button">
                                        <i data-feather="minus"></i>
                                    </button>                                        
                                    <input type="text" name="name" value="0">
                                    <button class="plus-btn" type="button" name="button">
                                        <i data-feather="plus"></i>
                                    </button>
                                </div>
                            </td>
                            <td><strong class="txt-orange">$75.00</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="mt-4 row">
                <div class="col-md-6">
                    <form novalidate="novalidate" method="post" action="#" id="contact_form" class="row align-items-center no-gutters">
                        <div class="col">
                            <input type="text" class="form-control" name="name" placeholder="Coupon code">
                        </div>
                        <div class="col-auto">
                            <button class="ml-4 btn-theme bg-orange btn-shadow h-100" type="submit">Aplicar Cupon</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="text-md-right">
                        <button class="btn-theme bg-green btn-shadow" type="submit">Actualizar Carro</button>
                    </div>
                </div>
            </div>

            <div class="mt-5 row justify-content-md-end">
                <div class="col-lg-4 col-md-6">
                    <div class="cart-totals">
                        <div class="px-4">
                            <div class="order-head">
                                <span>Total Compra</span>
                            </div>  
                        </div>
                        <div class="order-list">
                            <ul class="list-unstyled">
                                <li>
                                    <span>Subtotal</span>
                                    <span class="txt-green">$75.00</span>
                                </li>
                                <li>
                                    <span>Total</span>
                                    <span class="txt-green">$75.00</span>
                                </li>
                            </ul>
                        </div>
                        <div class="px-4">
                            <button class="btn-theme bg-orange btn-shadow btn-block" type="submit">Proceder Pago</button>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <!-- Shopping Cart End -->

</main>