<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use App\Models\User;
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
        Role::factory()->create();
        Role::factory()->create([
            'label'=>'Observateur.trice'
        ]);

        Role::factory()->create([
            'label'=>'Utilisateur'
        ]);
        
        User::factory()->create();
        \App\Models\User::factory()->create([
            'nom'=>'DONGMO',
            'prenom'=>'Théo',
            'role_id'=>1,
            'email'=>'terezdongmo.cb@gmail.com',
			'password'=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
			'telephone'=>'237695457498',
            'pays'=>'Cameroun',
            'ville'=>'Yaoundé',
			'association'=>'RITAC',
        ]);

        \App\Models\User::factory()->create([
            'nom'=>'OUEDRAOGO',
            'prenom'=>'Ousseni',
            'role_id'=>3,
            'email'=>'ousseneoued@gmail.com',
			'password'=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
			'telephone'=>'0022661346554',
            'pays'=>'Cameroun',
            'ville'=>'Yaoundé',
			'association'=>'RITAC',
        ]);
    }
}
