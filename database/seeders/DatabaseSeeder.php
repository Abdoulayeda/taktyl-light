<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Client;
use App\Models\Abonnement;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::factory(1)->create();

       /*   \App\Models\User::factory()->create([
                 'name' => 'Test User',
                 'email' => 'test@example.com',
             ]); 
        */
 
         \App\Models\User::factory()->create(
            [
             'name' => 'Yacine',
             'nom' => 'Diagne',
             'role' => 'commerciale',
             'password' => Hash::make('yacine@123'),
             'email' => 'yacine@gmail.com',
             
            ],
        ); 

        \App\Models\User::factory()->create(
            [
             'name' => 'Coubera',
             'nom' => 'Seme',
             'role' => 'commerciale',
             'password' => Hash::make('coubera@123'),
             'email' => 'coubera@gmail.com',
            ],
        ); 

        \App\Models\User::factory()->create(
            [
             'name' => 'Assane',
             'nom' => 'Diaw',
             'role' => 'commerciale',
             'password' => Hash::make('assane@123'),
             'email' => 'assane@gmail.com',
            ],
        ); 

        \App\Models\User::factory()->create(
            [
             'name' => 'Souleymane',
             'nom' => 'Diop',
             'role' => 'commerciale',
             'password' => Hash::make('diop@123'),
             'email' => 'souleymane@gmail.com',
            ],
        );   

       /*  Abonnement::factory()
                       ->count(10)
                       ->state( 
                        new Sequence(
                            ['type'=>'Mensuel'],
                            ['type' => 'Annuel']
                        ),['tarif' => '12500'],
                        )
                        ->create(); 
        */ 

     /*    \App\Models\Formule::factory()->create([
            'type_formule' => 'Solo',
            'tarif' => 12500,
            'slug' => 'solo'.rand(398623,29876457),

        ]);         
        \App\Models\Formule::factory()->create([
            'type_formule' => 'Avance',
            'tarif' => 17500,
            'slug' => 'avance'.rand(398623,29876457),

        ]); 
        \App\Models\Formule::factory()->create([
            'type_formule' => 'Premium',
            'tarif' => 22500,
            'slug' => 'premium'.rand(398623,29876457),
        ]);  */


/* 
        \App\Models\Abonnement::factory()->create([
            'type' => 'Mensuel',
            'nombres_mois' => 1,
            
        ]);
        \App\Models\Abonnement::factory()->create([
            'type' => 'Mensuel',
            'nombres_mois' => 2,
            
        ]);
        \App\Models\Abonnement::factory()->create([
            'type' => 'Mensuel',
            'nombres_mois' => 3,
            
        ]);
        \App\Models\Abonnement::factory()->create([
            'type' => 'Mensuel',
            'nombres_mois' => 4,
            
        ]);
        \App\Models\Abonnement::factory()->create([
            'type' => 'Mensuel',
            'nombres_mois' => 5,
            
        ]);
        \App\Models\Abonnement::factory()->create([
            'type' => 'Mensuel',
            'nombres_mois' => 6,
            
        ]);
        \App\Models\Abonnement::factory()->create([
            'type' => 'Mensuel',
            'nombres_mois' => 7,
            
        ]);
        \App\Models\Abonnement::factory()->create([
            'type' => 'Mensuel',
            'nombres_mois' => 8,
            
        ]);
        \App\Models\Abonnement::factory()->create([
            'type' => 'Mensuel',
            'nombres_mois' => 9,
            
        ]);
        \App\Models\Abonnement::factory()->create([
            'type' => 'Mensuel',
            'nombres_mois' => 10,
            
        ]);
        \App\Models\Abonnement::factory()->create([
            'type' => 'Mensuel',
            'nombres_mois' => 11,
            
        ]);

        \App\Models\Abonnement::factory()->create([
            'type' => 'Annuel',
            'nombres_mois' => 12,
            
        ]);  */
        

        //  Client::factory(120)->create();
    }
}
