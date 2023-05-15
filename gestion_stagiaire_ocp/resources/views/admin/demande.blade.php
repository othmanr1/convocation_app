<x-admin-layout>
   <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight text-neutral-800">
         {{ __('Admin') }}   {{ __('Dashboard') }} 
      </h2>
   </x-slot>
   <style>
    .test{
    
        margin-left:20px;
    }
   </style>
   <div class="py-12">
      <div class="max-w-full mx-auto sm:px-6 lg:px-8">
         <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
               <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 rounded-md">
                  <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 ">
                     <tr>
                        <th class="border px-4 py-2">ID</th>
                        <th class="border px-4 py-2">Nom</th>
                        <th class="border px-4 py-2">Prenom</th>
                        <th class="border px-4 py-2">Email</th>
                        <th class="border px-4 py-2">Departement</th>
                        <th class="border px-4 py-2">Periode</th>
                        <th class="border px-4 py-2">Ecole</th>
                        <th class="border px-4 py-2 text-center" colspan="2" width="100px" >Action</th>
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
                        <td class="border px-4 py-2    " width="100px">
                           <form method="POST" action="{{ route('update.etat', $stg->id) }} " >
                              @csrf
                              @method('PUT')
                              <button type="submit"
                                 class="bg-white hover:bg-green-700 text-black  hover:text-white font-bold py-2 px-4 rounded">
                              Valider
                              </button>
                           </form>
                        </td>
                        <td class="border   "width="150px">
                           <form method="POST" action="{{ route('update.another', $stg->id) }}">
                              @csrf
                              @method('PUT')
                              <button type="submit"
                                 class=" test bg-white hover:bg-red-700 text-black  hover:text-white font-bold py-2 px-4 rounded">
                              non-valider
                              </button>
                           </form>
                        </td>
                        <!-- Add the form with the second button -->
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