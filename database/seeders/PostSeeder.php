<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    public function run()
    {
        $posts = [
            [
                'title' => 'The Matrix',
                'genre' => 'Azione, Fantascienza',
                'authors' => 'Lana e Lilly Wachowski',
                'type' => 'film',
            ],
            [
                'title' => 'Inception',
                'genre' => 'Fantascienza, Thriller',
                'authors' => 'Christopher Nolan',
                'type' => 'film',
            ],
            [
                'title' => 'The Dark Knight',
                'genre' => 'Azione, Drammatico',
                'authors' => 'Christopher Nolan',
                'type' => 'film',
            ],
            [
                'title' => 'Forrest Gump',
                'genre' => 'Drammatico, Commedia',
                'authors' => 'Robert Zemeckis',
                'type' => 'film',
            ],
            [
                'title' => 'Pulp Fiction',
                'genre' => 'Crimine, Drammatico',
                'authors' => 'Quentin Tarantino',
                'type' => 'film',
            ],
            [
                'title' => 'Fight Club',
                'genre' => 'Drammatico, Psicologico',
                'authors' => 'David Fincher',
                'type' => 'film',
            ],
            [
                'title' => 'The Godfather',
                'genre' => 'Crimine, Drammatico',
                'authors' => 'Francis Ford Coppola',
                'type' => 'film',
            ],
            [
                'title' => 'The Shawshank Redemption',
                'genre' => 'Drammatico',
                'authors' => 'Frank Darabont',
                'type' => 'film',
            ],
            [
                'title' => 'Interstellar',
                'genre' => 'Fantascienza, Avventura',
                'authors' => 'Christopher Nolan',
                'type' => 'film',
            ],
            [
                'title' => 'Gladiator',
                'genre' => 'Azione, Drammatico',
                'authors' => 'Ridley Scott',
                'type' => 'film',
            ]
        ];

        foreach ($posts as $post) {
            Post::create($post);
        }
    }
}
