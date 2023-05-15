<x-admin-layout>
<x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight text-neutral-800">
         {{ __('Admin') }}   {{ __('Dashboard') }} 
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
                        <th class="px-4 py-2">Periode</th>
                        <th class="px-4 py-2">Ecole</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach ($user as $stg)
                     <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="border px-4 py-2">{{ $stg->id }}</td>
                        <td class="border px-4 py-2">{{ $stg->name }}</td>
                        <td class="border px-4 py-2">{{ $stg->prenom }}</td>
                        <td class="border px-4 py-2">{{ $stg->email }} DH</td>
                        <td class="border px-4 py-2">{{ $stg->departement }} DH</td>
                        <td class="border px-4 py-2">{{ $stg->periode }} mois</td>
                        <td class="border px-4 py-2">{{ $stg->ecole }}</td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
   {{$user->links()}}
</x-admin-layout>