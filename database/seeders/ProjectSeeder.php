<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    \App\Models\Project::create([
        'title' => 'Progetto 1',
        'description' => 'Descrizione del progetto 1',
        'image' => ''
    ]);
}

}