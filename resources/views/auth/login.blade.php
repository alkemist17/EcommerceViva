{{--<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 text-sm font-medium text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block w-full mt-1" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="text-sm text-gray-600 underline hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>--}}
<x-guest-layout>
    <section class="breadcrumbs-page-wrap">        
        <div class="bg-fixed bg-navy-blue pos-rel breadcrumbs-page">
            <img class="ptt-png" src="{{asset('images/Dot-Shape.png')}}" alt="png">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('index')}}">Ingresar</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Usuario</li>
                    </ol>
                </nav>
                <h1>Iniciar Sesión</h1>
            </div>
        </div>
    </section>
    <main id="body-content">
        <section class="pb-0 wide-tb-100">
            <div class="container">
                <x-slot name="logo">
                </x-slot>

                <x-jet-validation-errors class="mb-4" />

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="row">
                        <div class="mb-0 col-md-12">
                            <div class="checkout-details">

                                <div class="row">
                                    <div class="mb-0 col-md-6">
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
                                            <label for="remember_me">
                                                <x-jet-checkbox id="remember_me" name="remember" />
                                                Recordar Sesión
                                            </label>
                                        </div>
                                    </div>

                                    <div class="mb-0 col-md-6">
                                        @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}" class="mt-3">Olvidaste tu contraseña?</a>
                                        @endif
                                    </div>
                                    
                                    <div class="mb-0 text-left col-md-12">
                                        <button type="submit" class="mt-3 btn-theme bg-green">Ingresar</button>
                                        <a href="{{route('register')}}" class="mt-3 btn-theme bg-blue">Registrarse</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    
                </form>

            </div>
        </section>
    </main>
</x-guest-layout>
