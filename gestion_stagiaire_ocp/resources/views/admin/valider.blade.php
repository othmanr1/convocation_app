<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 rounded-md">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 ">
                <tr>
                    <th class="px-4 py-2">ID</th>
                    <th class="px-4 py-2">Nom</th>
                    <th class="px-4 py-2">Prenom</th>
                    <th class="px-4 py-2">Email</th>
                    <th class="px-4 py-2">Departement</th>
                    <th class="px-4 py-2">Periode </th>
                    <th class="px-4 py-2">Ecole</th>
                    <th class="px-4 py-2">action</th>
             
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $stg)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="border px-4 py-2">{{ $stg->id }}</td>
                        <td class="border px-4 py-2">{{ $stg->name }}</td>
                        <td class="border px-4 py-2">{{ $stg->prenom }}</td>
                        <td class="border px-4 py-2">{{ $stg->email }} </td>
                        <td class="border px-4 py-2">{{ $stg->departement }} </td>
                        <td class="border px-4 py-2">{{ $stg->periode }} mois</td>
                        <td class="border px-4 py-2">{{ $stg->ecole }}</td>
                        <td class="border px-4 py-2">

                                    <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
            <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
            <a href="{{ route('generate.pdf', $stg->id) }}"
            >
            <span>Generate PDF</span> 
            </a>   
            
            </button>
        
                    </td>
                       
                     
                       
                    </tr>
                @endforeach
            </tbody>
        </table>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
