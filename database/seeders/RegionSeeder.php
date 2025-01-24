<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('regions')->insert([
            ['id'=>1,'name'=>'Arusha'],
            ['id'=>null, 'name'=>'Dar es Salaam'],
            ['id'=>null, 'name'=>'Dodoma'],
            ['id'=>null, 'name'=>'Geita'],
            ['id'=>null, 'name'=>'Iringa'],
            ['id'=>null, 'name'=>'Kagera'],
            ['id'=>null, 'name'=>'Katavi'],
            ['id'=>null, 'name'=>'Kigoma'],
            ['id'=>null, 'name'=>'Kilimanjaro'],
            ['id'=>null, 'name'=>'Lindi'],
            ['id'=>null, 'name'=>'Manyara'],
            ['id'=>null, 'name'=>'Mara'],
            ['id'=>null, 'name'=>'Mbeya'],
            ['id'=>null, 'name'=>'Mjini Magharibi'],
            ['id'=>null, 'name'=>'Morogoro'],
            ['id'=>null, 'name'=>'Mtwara'],
            ['id'=>null, 'name'=>'Mwanza'],
            ['id'=>null, 'name'=>'Njombe'],
            ['id'=>null, 'name'=>'Pemba North'],
            ['id'=>null, 'name'=>'Pemba South'],
            ['id'=>null, 'name'=>'Pwani'],
            ['id'=>null, 'name'=>'Rukwa'],
            ['id'=>null, 'name'=>'Ruvuma'],
            ['id'=>null, 'name'=>'Shinyanga'],
            ['id'=>null, 'name'=>'Simiyu'],
            ['id'=>null, 'name'=>'Singida'],
            ['id'=>null, 'name'=>'Tabora'],
            ['id'=>null, 'name'=>'Tanga'],
            ['id'=>null, 'name'=>'Unguja North'],
            ['id'=>null, 'name'=>'Unguja South']
            ]);
    }
}
