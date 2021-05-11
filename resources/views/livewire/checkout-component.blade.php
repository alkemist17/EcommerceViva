<section class="breadcrumbs-page-wrap">        
    <div class="bg-fixed bg-navy-blue pos-rel breadcrumbs-page">
        <img class="ptt-png" src="{{asset('images/Dot-Shape.png')}}" alt="png">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('index')}}">Inicio</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Pago</li>
                </ol>
            </nav>
            <h1>Pago</h1>
        </div>
    </div>
</section>

<main id="body-content">
    <!-- Billing Details Start -->
    <section class="pb-0 wide-tb-100">
        <div class="container">
            <!--         
            <div class="mb-5 alert alert-info alert-dismissible show alert-theme" role="alert">
                <strong>-  &nbsp; Have a coupon? </strong> <a href="#" class="link-green dark">Click here to enter your code</a>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"><i data-feather="x-square"></i></span>
                </button>
            </div>
            -->

            <div class="row">
                <div class="mb-0 col-md-7">
                    <div class="checkout-details">
                        <h2 class="fw-7 txt-blue">Detalles de Pago</h2>

                        <div class="row">
                            <div class="mb-0 col-md-6">
                                <div class="form-group">
                                    <label for="name">Nombres <span class="text-danger">*</span></label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Ej. John">
                                </div>
                            </div>

                            <div class="mb-0 col-md-6">
                                <div class="form-group">
                                    <label for="lastname">Apellidos <span class="text-danger">*</span></label>
                                    <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Ej. Wick">
                                </div>
                            </div>

                            <div class="mb-0 col-md-12">
                                <div class="form-group">
                                    <label for="Company_name">Nombre Compañia (optional)</label>
                                    <input type="text" name="Company_name" id="email" class="form-control" placeholder="">
                                </div>
                            </div>

                            <div class="mb-0 col-md-12">
                                <div class="form-group">
                                    <label for="Street_address">Dirección <span class="text-danger">*</span></label>
                                    <input type="text" name="Street_address" id="email" class="mb-3 form-control" placeholder="Calle, Carrera">
                                    <input type="text" name="Street_address" id="email" class="form-control" placeholder="Apartamento, Conjunto, Barrio (opcional)">
                                </div>
                            </div>

                            <div class="mb-0 col-md-12">
                                <div class="form-group">
                                    <label for="Country_Region">Departamento <span class="text-danger">*</span></label>
                                    <select class="form-control wide small-h" name="Country_Region">
                                        <option>Seleccionar Departamento</option>
                                        <option value="Atlántico">Atlántico</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-0 col-md-12">
                                <div class="form-group">
                                    <label for="Town_City">Municipio <span class="text-danger">*</span></label>
                                    <input type="text" name="Town_City" id="lastname" class="form-control" placeholder="Ej. Barranquilla">
                                </div>
                            </div>

                            <div class="mb-0 col-md-12">
                                <div class="form-group">
                                    <label for="Postcode">Codigo Postal <span class="text-danger">*</span></label>
                                    <input type="text" name="Postcode" id="lastname" class="form-control" placeholder="Ex. 30084">
                                </div>
                            </div>

                            <div class="mb-0 col-md-12">
                                <div class="form-group">
                                    <label for="Phone">Telefono <span class="text-danger">*</span></label>
                                    <input type="text" name="Postcode" id="lastname" class="form-control" placeholder="Ex. 706-605-1580">
                                </div>
                            </div>

                            <div class="mb-0 col-md-12">
                                <div class="form-group">
                                    <label for="Email_address">Email <span class="text-danger">*</span></label>
                                    <input type="text" name="Email_address" id="lastname" class="form-control" placeholder="example@example.com">
                                </div>
                            </div>
                            <div class="mb-0 col-md-12">
                                <strong class="txt-orange">Información Adicional</strong>
                            </div>
                            
                            <div class="mb-0 col-md-12">
                                <div class="">
                                    <label for="Order_notes">Notas</label>
                                    <textarea name="Order_notes" id="comment" class="form-control" rows="6" placeholder="Notas sobre tu orden."></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="place-order-wrap">
                        <h2 class="fw-7 txt-blue">Tu Orden</h2>

                        <div class="order-head">
                            <span>Producto</span>
                            <span>Subtotal</span>
                        </div>

                        <div class="order-list">
                            <ul class="list-unstyled">
                                <li>
                                    <span>Nombre Producto</span>
                                    <span class="txt-green">$75.00</span>
                                </li>
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

                        <div class="order-disclaimer">
                            <div class="info">
                                Lamentamos, en este momento no tenemos ningun medio de pago disponibe. Por favor contactanos si tu requieres asistencia en tu compra.
                            </div>
                            <p>Tus Datos personales pueden ser usados para procesar tu compra y otros propositos descritos en nuestra <a href="#" class="link-oragne">politica de privacidad</a>.</p>

                            <div class="text-right">
                                <button type="submit" class="mt-3 btn-theme bg-green">Colocar Orden</button>
                            </div>                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Billing Details End -->

</main>