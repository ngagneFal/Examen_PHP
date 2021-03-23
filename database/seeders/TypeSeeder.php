<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = Type::create(array(
            'libelle' => 'Entreprise',
            'Description' => 'Bienvenu',

        )); 
        $type1 = Type::create(array(
            'libelle' => 'Demandeur emploi',
            'Description' => 'Bienvenu',
        )); 
    }
}
