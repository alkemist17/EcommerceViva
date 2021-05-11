<x-guest-layout>
    <section class="breadcrumbs-page-wrap">        
        <div class="bg-fixed bg-navy-blue pos-rel breadcrumbs-page">
            <img class="ptt-png" src="{{asset('images/Dot-Shape.png')}}" alt="png">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('index')}}">Inicio</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Registrar</li>
                    </ol>
                </nav>
                <h1>Registro de Usuario</h1>
            </div>
        </div>
    </section>

    <main id="body-content">
        <!-- Billing Details Start -->
        <section class="pb-0 wide-tb-100">
            <div class="container">
                <x-slot name="logo">
                </x-slot>

                <x-jet-validation-errors class="mb-4" />

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="row">
                        <div class="mb-0 col-md-12">
                            <div class="checkout-details">

                                <div class="row">
                                    <div class="mb-0 col-md-12">
                                        <div class="form-group">
                                            <label for="name">Nombre <span class="text-danger">*</span></label>
                                            <input type="text" name="name" id="name" class="form-control" placeholder="Ej. John Wick" value="{{old('name')}}">
                                        </div>
                                    </div>

                                    <div class="mb-0 col-md-12">
                                        <div class="form-group">
                                            <label for="email">Email <span class="text-danger">*</span></label>
                                            <input type="text" name="email" id="email" class="form-control" placeholder="example@example.com" value="{{old('email')}}">
                                        </div>
                                    </div>

                                    <div class="mb-0 col-md-6">
                                        <div class="form-group">
                                            <label for="password">Contraseña <span class="text-danger">*</span></label>
                                            <input type="password" name="password" id="password" class="form-control" required autocomplete="new-password">
                                        </div>
                                    </div>

                                    <div class="mb-0 col-md-6">
                                        <div class="form-group">
                                            <label for="password_confirmation">Confirmar Contraseña <span class="text-danger">*</span></label>
                                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required autocomplete="new-password">
                                        </div>
                                    </div>

                                    <div class="text-right">
                                        <button type="submit" class="mt-3 btn-theme bg-green">Registrar</button>
                                        <a href="{{route('login')}}" class="mt-3 btn-theme bg-blue">Ya estoy registrado</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    {{--

                    <div>
                        <x-jet-label for="name" value="{{ __('Name') }}" />
                        <x-jet-input id="name" class="block w-full mt-1" type="text" name="name" :value="" required autofocus autocomplete="name" />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="email" value="{{ __('Email') }}" />
                        <x-jet-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="password" value="{{ __('Password') }}" />
                        <x-jet-input id="password" class="block w-full mt-1" type="password" name="password" required autocomplete="new-password" />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                        <x-jet-input id="password_confirmation" class="block w-full mt-1" type="password" name="password_confirmation" required autocomplete="new-password" />
                    </div>

                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="mt-4">
                            <x-jet-label for="terms">
                                <div class="flex items-center">
                                    <x-jet-checkbox name="terms" id="terms"/>

                                    <div class="ml-2">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="text-sm text-gray-600 underline hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="text-sm text-gray-600 underline hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                        ]) !!}
                                    </div>
                                </div>
                            </x-jet-label>
                        </div>
                    @endif

                    <div class="flex items-center justify-end mt-4">
                        <a class="text-sm text-gray-600 underline hover:text-gray-900" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>

                        <x-jet-button class="ml-4">
                            {{ __('Register') }}
                        </x-jet-button>
                    </div>
                    --}}
                </form>

            </div>
        </section>
    </main>
</x-guest-layout>
