<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Technology;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $technologies = [
            'Camera',
            'Editing Software',
            'Sound Design',
            'Lighting',
            'Animation',
            'Special Effects',
            'CGI',
            'Screenwriting',
            'Directing',
            'Film Distribution',
            'Post-Production'
        ];

        foreach ($technologies as $tech) {
            Technology::create(['name' => $tech]);
        }
    }
}