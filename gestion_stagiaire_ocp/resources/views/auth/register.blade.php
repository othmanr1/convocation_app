
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Name -->
            <div>
                <x-label for="prenom" :value="__('Prenom')" />

                <x-input id="prenom" class="block mt-1 w-full" type="text" name="prenom" :value="old('prenom')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>
            <!-- Departement -->
            <div class="mt-4">
                <x-label for="departement" :value="__('Departement')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="text"
                                name="departement" required />
            </div>
            <!-- Periode -->
            <div class="mt-4">
    <x-label for="periode" :value="__('Periode en Mois')" class="block mb-2 text-gray-700 font-bold" />

    <select id="amount" name="periode" class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-blue-500 focus:ring-blue-500">
    
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
    </select>
</div>
           
            <!-- Ecole -->
            <div class="mt-4">
                <x-label for="ecole" :value="__('Ecole')" />

                <x-input id="ecole" class="block mt-1 w-full"
                                type="text"
                                name="ecole" required />
            </div>

  <!-- Photo
  <div class="mt-4">
                <x-label for="photo" :value="__('Photo')" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input" />

                <x-input name="photo" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file" required />
            </div> -->

          
<input >



            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
        
    </x-auth-card>
</x-guest-layout>
