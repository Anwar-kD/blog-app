<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['categorie' => 'science',
             'description'=>'Les nouvelles études scientifiques concernant la technologie, nature, physique, medecine moderne etc.'],
            ['categorie' => 'histoire',
             'description'=>'Les récits historiques, découverte de monuments, personalité et grands évenemnts.'],
            ['categorie' => 'développement personnel',
             'description'=>'Les techniques pour vivre mieux et gérer son stress, améliorer sa productivité'],
        ]);
    }
}
