<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

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

       
        User::create( [
            
            'name'=>'hamidi',
            'prenom'=>'yousra',
            'email'=>'hamidi@gmail.com',
            'email_verified_at'=>NULL,
            'password'=>bcrypt('password'),
            'departement'=>'electricite',
            'periode'=>3,
            'ecole'=>'Ista',
            'etat'=>0,
            'remember_token'=>NULL,
            'created_at'=>'2023-02-18 23:00:00',
            'updated_at'=>'2023-02-19 03:29:34'
            ] );
            
            
                        
            User::create( [
            
            'name'=>'Messaoudi	',
            'prenom'=>'omar',
            'email'=>'messaoudi	@gmail.com',
            'email_verified_at'=>NULL,
            'password'=>bcrypt('password'),
            'departement'=>'reseau',
            'periode'=>1,
            'ecole'=>'Emnig',
            'etat'=>0,
            'remember_token'=>NULL,
            'created_at'=>'2023-01-31 23:00:00',
            'updated_at'=>'2023-02-01 01:55:31'
            ] );
            
            
                        
            User::create( [
            
            'name'=>'rdad',
            'prenom'=>'yousra',
            'email'=>'rdad@gmail.com',
            'email_verified_at'=>NULL,
            'password'=>bcrypt('password'),
            'departement'=>'biologie',
            'periode'=>4,
            'ecole'=>'Ensg',
            'etat'=>0,
            'remember_token'=>NULL,
            'created_at'=>'2023-02-16 23:00:00',
            'updated_at'=>'2023-02-17 04:03:20'
            ] );
            
            
                        
            User::create( [
            
            'name'=>'issawi',
            'prenom'=>'houssam',
            'email'=>'issawi@gmail.com',
            'email_verified_at'=>NULL,
            'password'=>bcrypt('password'),
            'departement'=>'mecanique',
            'periode'=>2,
            'ecole'=>'Ensa',
            'etat'=>0,
            'remember_token'=>NULL,
            'created_at'=>'2023-02-17 23:00:00',
            'updated_at'=>'2023-02-17 23:46:10'
            ] );
            
            
                        
            User::create( [
            
            'name'=>'bl-arbi',
            'prenom'=>'hassna',
            'email'=>'bl-arbi@gmail.com',
            'email_verified_at'=>NULL,
            'password'=>bcrypt('password'),
            'departement'=>'informatique',
            'periode'=>2,
            'ecole'=>'Emnig',
            'etat'=>0,
            'remember_token'=>NULL,
            'created_at'=>'2023-02-23 23:00:00',
            'updated_at'=>'2023-02-24 20:58:25'
            ] );
            
            
                        
            User::create( [
            
            'name'=>'tazi',
            'prenom'=>'oumaima',
            'email'=>'tazi@gmail.com',
            'email_verified_at'=>NULL,
            'password'=>bcrypt('password'),
            'departement'=>'electricite',
            'periode'=>4,
            'ecole'=>'Ista',
            'etat'=>0,
            'remember_token'=>NULL,
            'created_at'=>'2023-03-07 23:00:00',
            'updated_at'=>'2023-03-08 19:36:25'
            ] );
            
            
                        
            User::create( [
            
            'name'=>'arbawi',
            'prenom'=>'ossama',
            'email'=>'arbawi@gmail.com',
            'email_verified_at'=>NULL,
            'password'=>bcrypt('password'),
            'departement'=>'mecanique',
            'periode'=>5,
            'ecole'=>'Ista',
            'etat'=>0,
            'remember_token'=>NULL,
            'created_at'=>'2023-03-08 23:00:00',
            'updated_at'=>'2023-03-09 06:45:45'
            ] );
            
            
                        
            User::create( [
            
            'name'=>'الناصر',
            'prenom'=>'hassna',
            'email'=>'الناصر@gmail.com',
            'email_verified_at'=>NULL,
            'password'=>bcrypt('password'),
            'departement'=>'reseau',
            'periode'=>4,
            'ecole'=>'Ensa',
            'etat'=>0,
            'remember_token'=>NULL,
            'created_at'=>'2023-03-04 23:00:00',
            'updated_at'=>'2023-03-05 08:05:17'
            ] );
            
            
                        
            User::create( [
            
            'name'=>'motawakil',
            'prenom'=>'fatima',
            'email'=>'motawakil@gmail.com',
            'email_verified_at'=>NULL,
            'password'=>bcrypt('password'),
            'departement'=>'reseau',
            'periode'=>3,
            'ecole'=>'Ensa',
            'etat'=>0,
            'remember_token'=>NULL,
            'created_at'=>'2023-03-16 23:00:00',
            'updated_at'=>'2023-03-17 10:53:04'
            ] );
            
            
                        
            User::create( [
            
            'name'=>'el-kilani',
            'prenom'=>'hamza',
            'email'=>'el-kilani@gmail.com',
            'email_verified_at'=>NULL,
            'password'=>bcrypt('password'),
            'departement'=>'electricite',
            'periode'=>4,
            'ecole'=>'Fst',
            'etat'=>0,
            'remember_token'=>NULL,
            'created_at'=>'2023-02-28 23:00:00',
            'updated_at'=>'2023-03-01 22:38:07'
            ] );
            
            
                        
            User::create( [
            
            'name'=>'hamdan',
            'prenom'=>'hamza',
            'email'=>'hamdan@gmail.com',
            'email_verified_at'=>NULL,
            'password'=>bcrypt('password'),
            'departement'=>'informatique',
            'periode'=>3,
            'ecole'=>'Emnig',
            'etat'=>0,
            'remember_token'=>NULL,
            'created_at'=>'2023-04-07 00:00:00',
            'updated_at'=>'2023-04-07 02:38:36'
            ] );
            
            
                        
            User::create( [
            
            'name'=>'es-sarrar',
            'prenom'=>'najwa',
            'email'=>'es-sarrar@gmail.com',
            'email_verified_at'=>NULL,
            'password'=>bcrypt('password'),
            'departement'=>'biologie',
            'periode'=>2,
            'ecole'=>'Ensa',
            'etat'=>0,
            'remember_token'=>NULL,
            'created_at'=>'2023-04-13 00:00:00',
            'updated_at'=>'2023-04-13 06:38:40'
            ] );
            
            
                        
            User::create( [
            
            'name'=>'asimi',
            'prenom'=>'yassin',
            'email'=>'asimi@gmail.com',
            'email_verified_at'=>NULL,
            'password'=>bcrypt('password'),
            'departement'=>'biologie',
            'periode'=>6,
            'ecole'=>'Emnig',
            'etat'=>0,
            'remember_token'=>NULL,
            'created_at'=>'2023-04-16 00:00:00',
            'updated_at'=>'2023-04-16 14:50:33'
            ] );
            
            
                        
            User::create( [
            
            'name'=>'charifi',
            'prenom'=>'ahmed',
            'email'=>'charifi@gmail.com',
            'email_verified_at'=>NULL,
            'password'=>bcrypt('password'),
            'departement'=>'biologie',
            'periode'=>5,
            'ecole'=>'Ista',
            'etat'=>0,
            'remember_token'=>NULL,
            'created_at'=>'2023-04-23 00:00:00',
            'updated_at'=>'2023-04-23 05:28:39'
            ] );
            
            
                        
            User::create( [
            
            'name'=>'Hafid',
            'prenom'=>'salah',
            'email'=>'hafid@gmail.com',
            'email_verified_at'=>NULL,
            'password'=>bcrypt('password'),
            'departement'=>'reseau',
            'periode'=>6,
            'ecole'=>'Isgi',
            'etat'=>0,
            'remember_token'=>NULL,
            'created_at'=>'2023-04-02 00:00:00',
            'updated_at'=>'2023-04-02 02:42:19'
            ] );
            
            
                        
            User::create( [
            
            'name'=>'younsi',
            'prenom'=>'mohamed',
            'email'=>'younsi@gmail.com',
            'email_verified_at'=>NULL,
            'password'=>bcrypt('password'),
            'departement'=>'reseau',
            'periode'=>5,
            'ecole'=>'Isgi',
            'etat'=>0,
            'remember_token'=>NULL,
            'created_at'=>'2023-04-28 23:00:00',
            'updated_at'=>'2023-04-29 19:00:12'
            ] );
            
            
                        
            User::create( [
            
            'name'=>'rais',
            'prenom'=>'yaser',
            'email'=>'rais@gmail.com',
            'email_verified_at'=>NULL,
            'password'=>bcrypt('password'),
            'departement'=>'electricite',
            'periode'=>3,
            'ecole'=>'Ista',
            'etat'=>0,
            'remember_token'=>NULL,
            'created_at'=>'2023-04-12 00:00:00',
            'updated_at'=>'2023-04-12 09:22:06'
            ] );
            
            
                        
            User::create( [
            
            'name'=>'louahi',
            'prenom'=>'jamila',
            'email'=>'louahi@gmail.com',
            'email_verified_at'=>NULL,
            'password'=>bcrypt('password'),
            'departement'=>'reseau',
            'periode'=>6,
            'ecole'=>'Isgi',
            'etat'=>0,
            'remember_token'=>NULL,
            'created_at'=>'2023-04-23 00:00:00',
            'updated_at'=>'2023-04-23 13:27:46'
            ] );
            
            
                        
            User::create( [
            
            'name'=>'talibi',
            'prenom'=>'yassin',
            'email'=>'talibi@gmail.com',
            'email_verified_at'=>NULL,
            'password'=>bcrypt('password'),
            'departement'=>'reseau',
            'periode'=>3,
            'ecole'=>'Emnig',
            'etat'=>0,
            'remember_token'=>NULL,
            'created_at'=>'2023-04-24 23:00:00',
            'updated_at'=>'2023-04-25 13:02:46'
            ] );
            
            
                        
            User::create( [
            
            'name'=>'Rochdi',
            'prenom'=>'ahmed',
            'email'=>'rochdi@gmail.com',
            'email_verified_at'=>NULL,
            'password'=>bcrypt('password'),
            'departement'=>'reseau',
            'periode'=>5,
            'ecole'=>'Emnig',
            'etat'=>0,
            'remember_token'=>NULL,
            'created_at'=>'2023-04-21 00:00:00',
            'updated_at'=>'2023-04-21 13:55:51'
            ] );
            
            
                        
            User::create( [
            
            'name'=>'Abid',
            'prenom'=>'asia ',
            'email'=>'abid@gmail.com',
            'email_verified_at'=>NULL,
            'password'=>bcrypt('password'),
            'departement'=>'informatique',
            'periode'=>2,
            'ecole'=>'Emnig',
            'etat'=>0,
            'remember_token'=>NULL,
            'created_at'=>'2023-04-27 23:00:00',
            'updated_at'=>'2023-04-28 19:38:55'
            ] );
            
            
                        
            User::create( [
            
            'name'=>'hamdi',
            'prenom'=>'othmane',
            'email'=>'hamdi@gmail.com',
            'email_verified_at'=>NULL,
            'password'=>bcrypt('password'),
            'departement'=>'reseau',
            'periode'=>2,
            'ecole'=>'Ensg',
            'etat'=>0,
            'remember_token'=>NULL,
            'created_at'=>'2023-04-20 00:00:00',
            'updated_at'=>'2023-04-20 04:16:51'
            ] );
            
            
                        
            User::create( [
            
            'name'=>'Fikri',
            'prenom'=>'jamila',
            'email'=>'fikri@gmail.com',
            'email_verified_at'=>NULL,
            'password'=>bcrypt('password'),
            'departement'=>'biologie',
            'periode'=>4,
            'ecole'=>'Fst',
            'etat'=>0,
            'remember_token'=>NULL,
            'created_at'=>'2023-04-15 00:00:00',
            'updated_at'=>'2023-04-15 20:53:52'
            ] );
            
            
                        
            User::create( [
            
            'name'=>'maalmi',
            'prenom'=>'taha',
            'email'=>'maalmi@gmail.com',
            'email_verified_at'=>NULL,
            'password'=>bcrypt('password'),
            'departement'=>'biologie',
            'periode'=>4,
            'ecole'=>'Ensg',
            'etat'=>0,
            'remember_token'=>NULL,
            'created_at'=>'2023-04-11 00:00:00',
            'updated_at'=>'2023-04-11 11:05:33'
            ] );
            
            
                        
            User::create( [
            
            'name'=>'khaldi',
            'prenom'=>'youness',
            'email'=>'khaldi@gmail.com',
            'email_verified_at'=>NULL,
            'password'=>bcrypt('password'),
            'departement'=>'electricite',
            'periode'=>1,
            'ecole'=>'Ensg',
            'etat'=>0,
            'remember_token'=>NULL,
            'created_at'=>'2023-04-15 00:00:00',
            'updated_at'=>'2023-04-15 08:13:18'
            ] );
            
            
                        
            User::create( [
            
            'name'=>'bousiyef',
            'prenom'=>'yassin',
            'email'=>'bousiyef@gmail.com',
            'email_verified_at'=>NULL,
            'password'=>bcrypt('password'),
            'departement'=>'mecanique',
            'periode'=>1,
            'ecole'=>'Fst',
            'etat'=>0,
            'remember_token'=>NULL,
            'created_at'=>'2023-04-23 23:00:00',
            'updated_at'=>'2023-04-24 06:12:20'
            ] );
            
            
                        
            User::create( [
            
            'name'=>'yousfi',
            'prenom'=>'najwa',
            'email'=>'yousfi@gmail.com',
            'email_verified_at'=>NULL,
            'password'=>bcrypt('password'),
            'departement'=>'reseau',
            'periode'=>4,
            'ecole'=>'Ensg',
            'etat'=>0,
            'remember_token'=>NULL,
            'created_at'=>'2023-04-20 00:00:00',
            'updated_at'=>'2023-04-20 15:25:42'
            ] );
            
            
                        
            User::create( [
            
            'name'=>'Abdellaoui',
            'prenom'=>'asia ',
            'email'=>'abdellaoui@gmail.com',
            'email_verified_at'=>NULL,
            'password'=>bcrypt('password'),
            'departement'=>'mecanique',
            'periode'=>4,
            'ecole'=>'Ista',
            'etat'=>0,
            'remember_token'=>NULL,
            'created_at'=>'2023-04-19 00:00:00',
            'updated_at'=>'2023-04-19 23:59:43'
            ] );
            
            
                        
            User::create( [
            
            'name'=>'khayat',
            'prenom'=>'nasar',
            'email'=>'khayat@gmail.com',
            'email_verified_at'=>NULL,
            'password'=>bcrypt('password'),
            'departement'=>'biologie',
            'periode'=>6,
            'ecole'=>'Fst',
            'etat'=>0,
            'remember_token'=>NULL,
            'created_at'=>'2023-04-23 23:00:00',
            'updated_at'=>'2023-04-24 12:07:20'
            ] );
            
            
                        
            User::create( [
            
            'name'=>'Ziani',
            'prenom'=>'youness',
            'email'=>'ziani@gmail.com',
            'email_verified_at'=>NULL,
            'password'=>bcrypt('password'),
            'departement'=>'reseau',
            'periode'=>4,
            'ecole'=>'Ensg',
            'etat'=>0,
            'remember_token'=>NULL,
            'created_at'=>'2023-04-04 00:00:00',
            'updated_at'=>'2023-04-04 16:00:36'
            ] );
            
            
                        
            User::create( [
            
            'name'=>'chrifi',
            'prenom'=>'oumaima',
            'email'=>'chrifi@gmail.com',
            'email_verified_at'=>NULL,
            'password'=>bcrypt('password'),
            'departement'=>'biologie',
            'periode'=>1,
            'ecole'=>'Fst',
            'etat'=>0,
            'remember_token'=>NULL,
            'created_at'=>'2023-05-18 23:00:00',
            'updated_at'=>'2023-05-19 19:28:57'
            ] );
            
            
                        
            User::create( [
            
            'name'=>'El Hassani',
            'prenom'=>'houssam',
            'email'=>'el hassani@gmail.com',
            'email_verified_at'=>NULL,
            'password'=>bcrypt('password'),
            'departement'=>'electricite',
            'periode'=>4,
            'ecole'=>'Ista',
            'etat'=>0,
            'remember_token'=>NULL,
            'created_at'=>'2023-05-21 23:00:00',
            'updated_at'=>'2023-05-21 23:07:03'
            ] );
            
            
                        
            User::create( [
            
            'name'=>'motawie',
            'prenom'=>'ayoube',
            'email'=>'motawie@gmail.com',
            'email_verified_at'=>NULL,
            'password'=>bcrypt('password'),
            'departement'=>'mecanique',
            'periode'=>1,
            'ecole'=>'Ensg',
            'etat'=>0,
            'remember_token'=>NULL,
            'created_at'=>'2023-05-30 23:00:00',
            'updated_at'=>'2023-05-31 04:44:16'
            ] );
            
            
                        
            User::create( [
            
            'name'=>'anzi',
            'prenom'=>'jamila',
            'email'=>'anzi@gmail.com',
            'email_verified_at'=>NULL,
            'password'=>bcrypt('password'),
            'departement'=>'biologie',
            'periode'=>1,
            'ecole'=>'Ensa',
            'etat'=>0,
            'remember_token'=>NULL,
            'created_at'=>'2023-05-08 23:00:00',
            'updated_at'=>'2023-05-08 23:33:05'
            ] );
            
            
                        
            User::create( [
            
            'name'=>'raghibi',
            'prenom'=>'youness',
            'email'=>'raghibi@gmail.com',
            'email_verified_at'=>NULL,
            'password'=>bcrypt('password'),
            'departement'=>'biologie',
            'periode'=>3,
            'ecole'=>'Ista',
            'etat'=>0,
            'remember_token'=>NULL,
            'created_at'=>'2023-05-03 23:00:00',
            'updated_at'=>'2023-05-04 01:52:11'
            ] );
            
            
                        
            User::create( [
            
            'name'=>'Saadi',
            'prenom'=>'oumaima',
            'email'=>'saadi@gmail.com',
            'email_verified_at'=>NULL,
            'password'=>bcrypt('password'),
            'departement'=>'mecanique',
            'periode'=>4,
            'ecole'=>'Emnig',
            'etat'=>0,
            'remember_token'=>NULL,
            'created_at'=>'2024-02-12 23:00:00',
            'updated_at'=>'2024-02-13 13:35:18'
            ] );
            
            
                        
            User::create( [
            
            'name'=>'jarachi',
            'prenom'=>'nasar',
            'email'=>'jarachi@gmail.com',
            'email_verified_at'=>NULL,
            'password'=>bcrypt('password'),
            'departement'=>'mecanique',
            'periode'=>4,
            'ecole'=>'Fst',
            'etat'=>0,
            'remember_token'=>NULL,
            'created_at'=>'2024-02-02 23:00:00',
            'updated_at'=>'2024-02-03 03:20:26'
            ] );
            
            
                        
            User::create( [
            
            'name'=>'Choukri',
            'prenom'=>'khalid',
            'email'=>'choukri@gmail.com',
            'email_verified_at'=>NULL,
            'password'=>bcrypt('password'),
            'departement'=>'electricite',
            'periode'=>6,
            'ecole'=>'Fst',
            'etat'=>0,
            'remember_token'=>NULL,
            'created_at'=>'2024-02-24 23:00:00',
            'updated_at'=>'2024-02-25 06:12:34'
            ] );
            
            
                        
            User::create( [
            
            'name'=>'alid',
            'prenom'=>'asia ',
            'email'=>'alid@gmail.com',
            'email_verified_at'=>NULL,
            'password'=>bcrypt('password'),
            'departement'=>'reseau',
            'periode'=>3,
            'ecole'=>'Ensg',
            'etat'=>0,
            'remember_token'=>NULL,
            'created_at'=>'2024-02-14 23:00:00',
            'updated_at'=>'2024-02-15 17:46:50'
            ] );
            
            
                        
            User::create( [
            
            'name'=>'tfayri',
            'prenom'=>'jamila',
            'email'=>'tfayri@gmail.com',
            'email_verified_at'=>NULL,
            'password'=>bcrypt('password'),
            'departement'=>'informatique',
            'periode'=>3,
            'ecole'=>'Fst',
            'etat'=>0,
            'remember_token'=>NULL,
            'created_at'=>'2024-02-13 23:00:00',
            'updated_at'=>'2024-02-14 18:13:28'
            ] );
            
            
                        
            User::create( [
            
            'name'=>'alali',
            'prenom'=>'jamila',
            'email'=>'alali@gmail.com',
            'email_verified_at'=>NULL,
            'password'=>bcrypt('password'),
            'departement'=>'mecanique',
            'periode'=>4,
            'ecole'=>'Ensa',
            'etat'=>0,
            'remember_token'=>NULL,
            'created_at'=>'2024-03-11 23:00:00',
            'updated_at'=>'2024-03-12 08:00:57'
            ] );
            
            
                        
            User::create( [
            
            'name'=>'motawakili',
            'prenom'=>'othmane',
            'email'=>'motawakili@gmail.com',
            'email_verified_at'=>NULL,
            'password'=>bcrypt('password'),
            'departement'=>'reseau',
            'periode'=>5,
            'ecole'=>'Ista',
            'etat'=>0,
            'remember_token'=>NULL,
            'created_at'=>'2024-03-15 23:00:00',
            'updated_at'=>'2024-03-16 00:59:05'
            ] );
            
            
                        
            User::create( [
            
            'name'=>'malki',
            'prenom'=>'ahmed',
            'email'=>'malki@gmail.com',
            'email_verified_at'=>NULL,
            'password'=>bcrypt('password'),
            'departement'=>'reseau',
            'periode'=>6,
            'ecole'=>'Emnig',
            'etat'=>0,
            'remember_token'=>NULL,
            'created_at'=>'2024-03-07 23:00:00',
            'updated_at'=>'2024-03-08 06:44:13'
            ] );
            
            
                        
            User::create( [
            
            'name'=>'Abou',
            'prenom'=>'yousra',
            'email'=>'abou@gmail.com',
            'email_verified_at'=>NULL,
            'password'=>bcrypt('password'),
            'departement'=>'electricite',
            'periode'=>1,
            'ecole'=>'Emnig',
            'etat'=>0,
            'remember_token'=>NULL,
            'created_at'=>'2024-03-25 00:00:00',
            'updated_at'=>'2024-03-25 10:43:14'
            ] );
            
            
                        
            User::create( [
            
            'name'=>'Omari',
            'prenom'=>'yaser',
            'email'=>'omari@gmail.com',
            'email_verified_at'=>NULL,
            'password'=>bcrypt('password'),
            'departement'=>'reseau',
            'periode'=>4,
            'ecole'=>'Ensg',
            'etat'=>0,
            'remember_token'=>NULL,
            'created_at'=>'2024-03-12 23:00:00',
            'updated_at'=>'2024-03-13 16:16:17'
            ] );
            
            
                        
            User::create( [
            
            'name'=>'Touzani',
            'prenom'=>'yassin',
            'email'=>'touzani@gmail.com',
            'email_verified_at'=>NULL,
            'password'=>bcrypt('password'),
            'departement'=>'electricite',
            'periode'=>3,
            'ecole'=>'Ensg',
            'etat'=>0,
            'remember_token'=>NULL,
            'created_at'=>'2024-03-30 00:00:00',
            'updated_at'=>'2024-03-30 22:03:41'
            ] );
            
            
                        
            User::create( [
            
            'name'=>'rzime',
            'prenom'=>'ahmed',
            'email'=>'rzime@gmail.com',
            'email_verified_at'=>NULL,
            'password'=>bcrypt('password'),
            'departement'=>'mecanique',
            'periode'=>1,
            'ecole'=>'Isgi',
            'etat'=>0,
            'remember_token'=>NULL,
            'created_at'=>'2024-03-22 00:00:00',
            'updated_at'=>'2024-03-22 10:54:17'
            ] );
            
            
                        
            User::create( [
            
            'name'=>'alaoui',
            'prenom'=>'youness',
            'email'=>'alaoui@gmail.com',
            'email_verified_at'=>NULL,
            'password'=>bcrypt('password'),
            'departement'=>'electricite',
            'periode'=>6,
            'ecole'=>'Ista',
            'etat'=>0,
            'remember_token'=>NULL,
            'created_at'=>'2024-03-18 00:00:00',
            'updated_at'=>'2024-03-18 14:17:33'
            ] );
            
            
                        
            User::create( [
            
            'name'=>'khayati',
            'prenom'=>'hassna',
            'email'=>'khayati@gmail.com',
            'email_verified_at'=>NULL,
            'password'=>bcrypt('password'),
            'departement'=>'biologie',
            'periode'=>2,
            'ecole'=>'Ensa',
            'etat'=>0,
            'remember_token'=>NULL,
            'created_at'=>'2024-03-14 23:00:00',
            'updated_at'=>'2024-03-15 21:37:58'
            ] );
            
            
                        
            User::create( [
            
            'name'=>'moradi',
            'prenom'=>'ahmed',
            'email'=>'moradi@gmail.com',
            'email_verified_at'=>NULL,
            'password'=>bcrypt('password'),
            'departement'=>'mecanique',
            'periode'=>2,
            'ecole'=>'Ensg',
            'etat'=>0,
            'remember_token'=>NULL,
            'created_at'=>'2024-03-21 00:00:00',
            'updated_at'=>'2024-03-21 09:52:48'
            ] );
    }
}
