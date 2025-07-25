<x-guest-layout>


    <div class="min-h-screen flex">
        <!-- Left side - Form -->
        <div class="flex-1 flex flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24 bg-white">
            {{--            <div class="mx-auto w-full max-w-sm lg:w-96">--}}
            <div class="">

                <x-authentication-card>
                    <x-slot name="logo">
                        {{--            <x-authentication-card-logo />--}}
                        <a href="/" class="inline-block">
                            <x-application-logo class="w-12 h-12"/>
                        </a>
                        <h2 class="mt-6 text-3xl font-bold tracking-tight text-gray-900">
                            Iniciar sesión en tu cuenta
                        </h2>
                    </x-slot>

                    <x-validation-errors class="mb-4"/>

                    @session('status')
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ $value }}
                    </div>
                    @endsession
                    <!-- Login Form -->
                    <form method="POST" action="{{ route('login') }}" class="space-y-6">
                        @csrf

                        <!-- Email Address -->
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                                Dirección de correo electrónico
                            </label>
                            <input
                                id="email"
                                name="email"
                                type="email"
                                value="{{ old('email') }}"
                                required
                                autofocus
                                autocomplete="username"
                                class="block w-full rounded-md border-0 py-3 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6 transition-all duration-200"
                                placeholder="Ingresa tu email"
                            />
                            <x-input-error :for="$errors->get('email')" class="mt-2"/>

                        </div>

                        <!-- Password -->
                        <div>
                            <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
                                Contraseña
                            </label>
                            <input
                                id="password"
                                name="password"
                                type="password"
                                required
                                autocomplete="current-password"
                                class="block w-full rounded-md border-0 py-3 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6 transition-all duration-200"
                                placeholder="Ingresa tu contraseña"
                            />
                            <x-input-error :for="$errors->get('password')" class="mt-2"/>
                        </div>

                        <!-- Remember Me and Forgot Password -->
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <input
                                    id="remember_me"
                                    name="remember"
                                    type="checkbox"
                                    class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-600 transition-colors duration-200"
                                />
                                <label for="remember_me" class="ml-2 block text-sm text-gray-700">
                                    Recordarme
                                </label>
                            </div>

                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}"
                                   class="text-sm font-medium text-blue-600 hover:text-blue-500 transition-colors duration-200">
                                    ¿Olvidaste tu contraseña?
                                </a>
                            @endif
                        </div>

                        <!-- Submit Button -->
                        <div>
                            <button
                                type="submit"
                                class="flex w-full justify-center rounded-md bg-blue-600 px-3 py-3 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600 transition-all duration-200 transform hover:scale-[1.02]"
                            >
                                Iniciar Sesión
                            </button>
                        </div>
                    </form>
                </x-authentication-card>

            </div>
        </div>

        <!-- Right side - Image -->
        <div class="hidden lg:block relative flex-1">
            <!-- Background Image -->
            <img src="{{Vite::asset('resources/images/simbaHome.webp')}}"
                 alt="Equipos mineros" class="absolute inset-0 h-full w-full object-cover"/>

            <!-- Dark Overlay -->
            <div class="absolute inset-0 bg-black/50"></div>

            <!-- Gradient overlay -->
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-black/20"></div>

            <!-- Content overlay -->
            <div class="relative flex h-full items-center justify-center p-12">
                <div class="text-center text-white">
                    <div class="mb-8">
                        {{--                    <x-application-logo class="w-16 h-16 mx-auto mb-4"/>--}}
                        <h1 class="text-3xl font-bold drop-shadow-2xl">Sistema <span class="text-yellow-400">SIMBA</span></h1>
                        <p class="text-lg text-gray-200 drop-shadow-xl mt-2">Control de Equipos Mineros</p>
                    </div>

                    <div class="bg-white/10 backdrop-blur-sm rounded-lg p-6 border border-white/20 max-w-md">
                        <h2 class="text-xl font-semibold mb-4 drop-shadow-lg">Gestión Integral</h2>
                        <ul class="text-sm text-gray-200 space-y-2">
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                          d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                          clip-rule="evenodd"/>
                                </svg>
                                Inspecciones de seguridad
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                          d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                          clip-rule="evenodd"/>
                                </svg>
                                Reportes operacionales
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                          d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                          clip-rule="evenodd"/>
                                </svg>
                                Control de flota
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>

</x-guest-layout>
