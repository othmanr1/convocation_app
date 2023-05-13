<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\Admin::create([
            'name'=>'Admin',
            'Email' => 'admin@admin.com',
            'password'=>bcrypt('password')
        ]);

       
        \App\Models\User::create( [
            'name'=>'rais',
            'prenom'=>'othmane',
            'email'=>'othman@gmail.com',
         
            'password'=>bcrypt('password'),
            'departement'=>'mobile',
            'periode'=>4,
            'ecole'=>'fst',
            'etat'=>0
          
            ] );
            \App\Models\User::create( [
                'name'=>'said',
                'prenom'=>'yassin',
                'email'=>'yassin@gmail.com',
                
                'password'=>bcrypt('password'),
                'departement'=>'mobile',
                'periode'=>4,
                'ecole'=>'fst',
                'etat'=>0
                
                ] );
                \App\Models\User::create( [
                    'name'=>'lotfi',
                    'prenom'=>'ayaa',
                    'email'=>'ayaa@gmail.com',
                    
                    'password'=>bcrypt('password'),
                    'departement'=>'mobile',
                    'periode'=>4,
                    'ecole'=>'fst',
                    'etat'=>0
                    
                    ] );    
            

    }
}
