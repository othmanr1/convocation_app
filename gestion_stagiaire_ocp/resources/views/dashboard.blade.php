<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-clip text-gray-800 leading-tight">
            {{ __('Bonjour ') }} {{ Auth::user()->prenom }} {{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">

            <h2 class="text-6xl text-gray-900 dark:text-slate-700"> 
                votre demande est  :          @php
                $etat = Auth::user()->etat;
            @endphp

            @if($etat === 0)
                <span>en cours !!</span>
            @elseif($etat === 1)
                <span>accepté vous pouver tirer votre convocation</span>
          
            @else
                <span>désolé(e) Nous avons atteint le nombre maximal de stagiaires.</span>
            @endif
            </h2>

           
        </div>
        </div>
    </div>
</div>
</x-app-layout>
