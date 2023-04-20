
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>Login</title>
</head>
<body>

   <div class="bg-blue-800 h-screen flex flex-col justify-center items-center">
    <div class="flex flex-col w-1/2 items-center bg-slate-800 shadow-2lg p-12 rounded-xl">
        <div class="py-4">
            <p class="text-white text-4xl">Authentification</p>
        </div>
        <div class="object-cover  rounded-full border-2 bg-white border-slate-800 w-[120px] h-[120px] pt-10 pl-2 pr-2">
            <img src="../../images/logo.png" class="object-cover" alt="">
        </div>
        <form class="w-1/2" action="{{ route('login') }}" method="post" >
            @csrf
          <div class="mb-6">
            <label for="email" class="block text-white text-xl font-bold mb-2">
              Adresse email
            </label>
            <input 
                id="email" name="email" type="email" 
                class="h-14 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" 
                placeholder="adresse email">
          </div>
          <div class="mb-6">
            <label for="password" class="block text-xl text-white font-bold mb-2">
              Mot de passe
            </label>
            <input id="password" name="password" type="password" 
                class="h-14 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" 
                placeholder="Votre mot de passe">
          </div>
          <div class="flex justify-center">
            <input class="shadow bg-[#F38D4E] hover:bg-[#4848AC] focus:shadow-outline focus:outline-none text-white text-2xl font-bold py-3 px-8 rounded-lg" type="submit" value="Se connecter">
          </div>

          {{-- Mote de passe oublié --}}
          <div class="pt-6">
            @if (Route::has('password.request'))
                <a class="underline  text-red-700 text-lg hover:text-red-600 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    J'ai oublier mon mot de passe
                </a>
            @endif
          </div>
        </form>
      </div>
      
   </div>
      








      
</body>
</html>


{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>


</x-guest-layout> --}}



