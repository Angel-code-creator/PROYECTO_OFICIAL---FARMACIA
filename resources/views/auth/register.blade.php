<!--
<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
-->
        <!-- Name -->
<!--
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
-->
        <!-- Email Address -->
<!--
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
-->
        <!-- Password -->
<!--
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
-->
        <!-- Confirm Password -->
<!--
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
-->

<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Nombre -->
        <div>
            <x-input-label for="Nombre" :value="__('Nombre')" />
            <x-text-input id="Nombre" class="block mt-1 w-full" type="text" name="Nombre" :value="old('Nombre')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('Nombre')" class="mt-2" />
        </div>

        <!-- Apellido -->
        <div class="mt-4">
            <x-input-label for="Apellido" :value="__('Apellido')" />
            <x-text-input id="Apellido" class="block mt-1 w-full" type="text" name="Apellido" :value="old('Apellido')" required autocomplete="family-name" />
            <x-input-error :messages="$errors->get('Apellido')" class="mt-2" />
        </div>

        <!-- Correo -->
        <div class="mt-4">
            <x-input-label for="Correo" :value="__('Correo')" />
            <x-text-input id="Correo" class="block mt-1 w-full" type="email" name="Correo" :value="old('Correo')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('Correo')" class="mt-2" />
        </div>

        <!-- Contraseña -->
        <div class="mt-4">
            <x-input-label for="Contraseña" :value="__('Contraseña')" />
            <x-text-input id="Contraseña" class="block mt-1 w-full"
                            type="password"
                            name="Contraseña"
                            required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('Contraseña')" class="mt-2" />
        </div>

        <!-- Confirmar Contraseña -->
        <div class="mt-4">
            <x-input-label for="Contraseña_confirmation" :value="__('Confirmar Contraseña')" />
            <x-text-input id="Contraseña_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="Contraseña_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('Contraseña_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('¿Ya estás registrado?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Registrarse') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
